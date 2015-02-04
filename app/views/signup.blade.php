@extends('layouts.master')
@section('title')
@parent - Sign Up
@stop
@section('content')
@include('components.navbar')
<div class="login-banner">
	<section class="container">
		<div class="row">
			<div class="col-xs-12 col-md-7 text-left">
				<a href="/law-browser">{{ HTML::image('images/law-browser-colour.png', 'Law Browser') }}</a>
				<div class="slogan">Sign up and start using Law Browser for free*</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<a class="btn btn-primary signup" href="#">Login</a>
				<div class="member">Already a member?</div>
			</div>
		</div>
	</section>
</div>
<section class="container text-left">
	<div class="row">
		<div class="col-xs-12 col-md-5 col-md-push-7">
			<div class="trial-info">
				<h2>How the free trial works.</h2>
				<p>
					<span class="highlight">Trial length:</span><br>
					*After a 14 day trial period, your account will be disabled and you will be sent an email with a link to confirm your subscription.
				</p>
				<p>
					<span class="highlight">Billing and Credit Card information:</span><br>
					You will be asked to enter your credit card details when creating your account. No funds will be deducted from your credit card until you have confirmed your subscription.
				</p>
			</div>
			<div class="hidden-xs hidden-sm text-center">
				{{ HTML::image('images/under-the-surface.jpg', 'Find what\'s under the surface') }}
			</div>
		</div>
		<div class="col-xs-12 col-md-7 col-md-pull-5">
			<h2>Sign up</h2>
			<form>
				<fieldset>
					<h4 class="highlight">1. Account Information</h4>
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="firstname">First Name</label>
								<input type="text" class="form-control" id="firstname" name="firstname">
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="lastname">Last Name</label>
								<input type="text" class="form-control" id="lastname" name="lastname">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="business">Business</label>
						<input type="text" class="form-control" id="business" name="business">
					</div>
					<div class="form-group">
						<label for="city">City</label>
						<input type="text" class="form-control" id="city" name="city">
					</div>
					<div class="form-group">
						<label for="state">State / Province / Region (if applicable)</label>
						<input type="text" class="form-control" id="state" name="state">
					</div>
					<div class="form-group">
						<label for="country">Country</label>
						<select class="form-control" id="country" name="country">
							{{-- TODO: Populate from db or module --}}
							<option value="nz">New Zealand</option>
						</select>
					</div>
				</fieldset>
				<fieldset>
					<h4 class="highlight">2. Billing Cycle</h4>
					<p><strong>Please choose your billing frequency upon confirmation of subscription.<br>No funds will be deducted during your free trial period.</strong></p>
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" id="billing-monthly" name="billing" value="monthly" checked> <strong>Monthly ($14.99) per user.</strong>
								</label>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" id="billing-annual" name="billing" value="annual" checked> <strong>Annual ($179) per user.</strong>
								</label>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<h4 class="highlight">3. Login Information</h4>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="text" class="form-control" id="email" name="email">
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password">
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="password_confirm">Confirm</label>
								<input type="password" class="form-control" id="password_confirm" name="password_confirm">
							</div>
						</div>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" id="accept_terms" name="accept_terms"> I accept the <a href="#">Customer Agreement</a> and <a href="#">Law Browser Terms of Use</a>
						</label>
					</div>
					<button type="submit" class="btn btn-primary signup">Sign Up</button>
					<div class="signup-with-message">or sign up with</div>
					<div class="signup-with-icons">
						{{-- TODO: Split these out when implementing social login --}}
						{{ HTML::image('images/social-icons.png', 'Login icons') }}
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</section>
@stop
