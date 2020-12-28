@extends('admin::layouts.app')

@section('htmlheader_title')
Kawal Covid 19 | Admin
@endsection
@section('main-content')
<!--- Alert Modal -->
@if ($errors->any())      
<div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header" style="background-color: #f65656;">
			<font class="modal-title" id="exampleModalLongTitle" style="color: #ffffff; font-size: 30px; font-family: Arial Black;">Oops, Error Register</font>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<center>
				<img src="{{asset('img/icon/danger-alert.svg')}}" width="200" height="200">
			</center>
				<ul>
				@foreach ($errors->all() as $error)
					<li><font style="font-size: 18px;font-family: Comic Sans MS;">{{ $error }}</font></li>
				@endforeach
				</ul>
			</div>
			</div>
		</div>
</div>		
@endif
<!--- End Alert Modal -->
<h4>Mapping Covid 19</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="sparkline13-graph">
	        <div class="datatable-dashv1-list custom-datatable-overright">
	            <div id="toolbar">
                    <button type="button" class="btn btn-custon-four btn-primary" data-toggle="modal" data-target="#PrimaryModalalert">
						<i class="fa fa-plus-circle"></i> Input Data
					</button>
					<div id="PrimaryModalalert" class="modal modal-xl  fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            	<form action="{{url('admin/store-mapping')}}" method="post" enctype="multipart/form-data">
                                @csrf
								<div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="modal-body">
                                	<table width="100%">
                                		<tr>
                                			<td>Tanggal</td>
                                		</tr>
                                		<tr>
                                			<td><input type="date" name="tgl" class="form-control" required></td>
                                		</tr>
										<tr>
                                			<td>Upload Foto</td>
                                		</tr>
                                		<tr>
                                			<td>
                                				<div class="file-upload-inner ts-forms">
                                                    <div class="input prepend-small-btn">
                                                        <div class="file-button">
                                                            Browse
                                                            <input type="file" name="map" required onchange="document.getElementById('prepend-small-btn3').value = this.value;">
                                                        </div>
                                                        <input type="text" name="file" id="prepend-small-btn3" placeholder="no file selected" required>
                                                    </div>
                                                </div>
					                        </td>
                                		</tr>
                                	</table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                                    <button type="submit" name="simpan" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-save"></i> Save</button>
                                </div>
                            	</form>
                            </div>
                        </div>
                    </div>
                </div>
                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
	                <thead>
	                    <tr>
	                        <th data-field="id">No.</th>
	                        <th data-field="tgl">Tanggal</th>
	                        <th data-field="action">Aksi</th>
	                    </tr>
	                </thead>
	                <tbody>
					@php
						$no = 1;
					@endphp
						@forelse($mappingcovid as $data)
	                    <tr>
							<td>{{$no++}}</td>
	                    	<td>{{$data->tgl}}</td>
	                    	<td>
	                    				<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
	                    				<div id="PrimaryModalalert{{$data->id}}" class="modal modal-xl  fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
				                                    <form action="{{url('admin/update-mapping/'.$data->id)}}"  method="post" enctype="multipart/form-data">
			                                    		<input type="hidden" name="_method" value="PUT">
														@csrf
													<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                    	<table>
                                                            <tr>
                                                                <td>Tanggal</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="date" name="tgl" value="{{$data->tgl}}" class="form-control" required></td>
                                                            </tr>
                                                            <tr>
																<td>Upload Foto</td>
															</tr>
															<tr>
																<td>
																	<div class="file-upload-inner ts-forms">
																		<div class="input prepend-small-btn">
																			<div class="file-button">
																				Browse
																				<input type="file" name="map"  onchange="document.getElementById('prepend-small-btn5').value = this.value;">
																			</div>
																			<input type="text" name="file" id="prepend-small-btn5" value="{{$data->map}}" placeholder="no file selected" >
																		</div>
																	</div>
																</td>
															</tr>
				                                    	</table>
				                                    </div>
				                                    <div class="modal-footer">
				                                        <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                                    					<button type="submit" name="edit" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-pencil"></i> Edit</button>
				                                    </div>
				                                	</form>
				                                </div>
				                            </div>
				                        </div>

	                    				<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
	                    				<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
				                                	<form action="{{url('admin/delete-mapping/'.$data->id)}}" method="post">
														<input type="hidden" name="_method" value="DELETE">
				                                    	@csrf
													<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                        <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
				                                        <p>Yakin akan menghapus mapping?</p>
				                                    </div>
				                                    <div class="modal-footer danger-md">
				                                        <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                                    					<button type="submit" name="del" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
				                                    </div>
				                                	</form>
				                                </div>
				                            </div>
				                        </div>

										<button type="button" class="btn btn-custon-four btn-warning btn-xs" data-toggle="modal" data-target="#ViewModalalert{{$data->id}}"><i class="fa fa-eye"></i></button>
	                    				<div id="ViewModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
													<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                        <img src="{{asset('storage/map/'.$data->map)}}" alt="">
				                                    </div>
				                                    <div class="modal-footer danger-md">
				                                    </div>
				                                	</form>
				                                </div>
				                            </div>
				                        </div>
	                    	</td>		
	                    </tr>
	                    @empty
						<tr><td colspan="3"><center>Data Tidak Ada</center></td></tr>
						@endforelse
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
</div>
@endsection
