@extends('admin.layouts.layout_admin')

@section('content')

<!--/login-->
<div class="error_page">
    <!--/login-top-->                                    
    <div class="error-top">
    <h2 class="inner-tittle page">Augment</h2>
        <div class="login">
        <h3 class="inner-tittle t-inner">Login</h3>
            <div class="buttons login">
                <ul>
                    <li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
                    <li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" class="text form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" id="name" required placeholder="E-mail address" value="{{ old('email') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >

                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" id="password" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                <div class="submit"><input type="submit" onclick="myFunction()" value="Login" ></div>
                <div class="clearfix"></div>                                                     
                <div class="new">
                    <p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i><a href="{{ route('password.request') }}">Forgot Password ?</a></label></p>
                    <p class="sign">Do not have an account ? <a href="sign.html">Sign Up</a></p>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>                                              
    </div>
</div>

    <!--//login-->
        <!--footer section start-->
        <div class="footer">
            <div class="error-btn">
                <a class="read fourth" href="index.html">Return to Home</a>
            </div>
            <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
        </div>
    <!--footer section end-->
    <!--/404-->

{{--    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  --}}
@endsection
