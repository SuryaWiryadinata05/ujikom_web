@extends('layouts.withoutnav')

@section('content')
    <form method="POST" action="login">
        <div class="limiter">
            <div class="container-login100 shadow">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54 border border-dark"
                    style="box-shadow: 7px 7px 5px 3px rgb(97, 97, 97);"">
                    <div class="panel panel-default">
                        <form action="" class="login100-form validate-form"></form>
                        <span class="login100-form-title p-b-49">
                            Login
                        </span>


                        {{ csrf_field() }}

                        <div class="wrap-input100 validate-input m-b-23 {{ $errors->has('username') ? ' has-error' : '' }}">
                            <span class="label-input100">Username</span>
                            <input id="username" type="username" class="input100" name="username"
                                value="{{ old('username') }}" placeholder="Email Or Username">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="wrap-input100 validate-input m-b-23 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="label-input100">Password</span>
                            <input id="password" type="password" class="input100" name="password" required placeholder="Password">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="" style="background: linear-gradient(#50575E, #7283D8);">
                                    <button type="submit" class="login100-form-btn">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="pt-5"></div>


                        <div class="container">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Ingatkan Saya
                                    </label>
                                </div>
                            </div>
                        </div>
                        
    </form>
    </form>
@endsection
