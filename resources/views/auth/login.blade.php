

<x-base-layout>
    <!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="login-form form-item form-stl">
                                <x-jet-validation-errors class="mb-4" />
								<form name="frm-login" method="POST" action="{{ route('login') }}">
                                    @csrf
									<fieldset class="wrap-title">
										<h3 class="form-title">Log in to your account</h3>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-uname">Email Address:</label>
										<input type="email" id="frm-login-uname" name="email" placeholder="Type your email address" :value="old('email')" required autofocus>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Password:</label>
										<input type="password" id="frm-login-pass" class="" name="password" placeholder="************" required autocomplete="current-password">
									</fieldset>

									<fieldset class="wrap-input">
										<label class="remember-field">
											<input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
										</label>
										<a class="link-function left-position underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" title="Forgotten password?" style="">Forgotten password?</a>
									</fieldset>

									<fieldset class="wrap-input mt-4">
                                        {!! NoCaptcha::renderJs('en') !!}
                                        {!! NoCaptcha::display() !!}
									</fieldset>


									<div class="wrap-input">
                                        <input type="submit" class="btn btn-submit" value="Sign In" name="submit">
									    <a class="link-function left-position underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}" title="Don't have any account? Sign Up" style="margin-top: 35px">Don't have any account? Sign Up</a>
                                    </div>
								</form>
							</div>
						</div>
					</div><!--end main products area-->
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
</x-base-layout>
<script>
    $("#frm-login-pass").keypress(function(e) { 
        var s = String.fromCharCode( e.which );
        if ( s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey ) {
            alert('Make sure your capslock is off');
        }
    });
</script>
