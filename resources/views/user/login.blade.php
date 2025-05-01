@extends('layouts.frontend')
@section('title', 'Vigilium - Login')

@section('content')
		<!-- Main Wrapper -->
		<div class="main-wrapper login-body">
			<div class="login-wrapper">
				<div class="container">
				
					<a href="{{ route('index') }}">
                        <img class="img-fluid logo-dark mb-2" src="{{ asset('img/vigi.png') }}" alt="Logo">
                    </a>                    
					<div class="loginbox">
						
						<div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Email Address</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Password</label>
                                        <div class="pass-group">
                                            <input type="password" class="form-control pass-input" name="password" required>
                                            <span class="fas fa-eye toggle-password"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb1" name="remember">
                                                    <label class="custom-control-label" for="cb1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-6 text-right">
                                                <a class="forgot-link" href="#">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-block btn-primary" type="submit">Login</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">or</span>
                                    </div>
                                    <div class="social-login mb-3">
                                        <span>Login with</span>
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="google"><i class="fab fa-google"></i></a>
                                    </div>
                                    <div class="text-center dont-have">
                                        Don't have an account yet? <a href="{{ route('user.register') }}">Register</a>
                                    </div>
                                </form>                                
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Wrapper -->		
@endsection