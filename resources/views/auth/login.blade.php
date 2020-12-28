<html>
<head>
    <link href="{{asset('css/login.css')}}" rel="stylesheet" />
</head>
    <body>
        <div class="login">
            <h1>Login Kawal Covid 19</h1>
            <form method="post" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required="required" />
                <input type="password" name="password" placeholder="Password" required="required" autocomplete="current-password" />
                <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
            </form>
        </div>    
    </body>
</html>

