@extends('admin::layouts.app')

@section('htmlheader_title')
    Kawal Covid 19 | Admin
@endsection
@section('main-content')
<h4>Kawal Covid 19 Tahun @php echo date('Y'); @endphp</h4>
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="hpanel widget-int-shape responsive-mg-b-30">
            <div class="panel-body">
                <div class="stats-title pull-left">
                    <h4>Positif</h4>
                </div>

                <div class="m-t-xl widget-cl-1">
                    <h3 class="text-success">{{$total ?? '0'}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="hpanel widget-int-shape responsive-mg-b-30">
            <div class="panel-body">
                <div class="stats-title pull-left">
                    <h4>Sembuh</h4>
                </div>
    
                <div class="m-t-xl widget-cl-1">
                    <h3 class="text-success">{{$sembuh ?? '0'}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="hpanel widget-int-shape responsive-mg-b-30">
            <div class="panel-body">
                <div class="stats-title pull-left">
                    <h4>Meninggal</h4>
                </div>
                
                <div class="m-t-xl widget-cl-1">
                    <h3 class="text-success">{{$meninggal ?? '0'}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

