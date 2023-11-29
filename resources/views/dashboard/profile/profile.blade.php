@extends('dashboard.layouts.master')

@section('title')
Admin Dashboard
@endsection


@section('css')

@endsection






@section('content')

                {{-------------------- Profile Information ---------------------}}

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">


								<!-- section container start -->
								<div class="section-container">

									<div class="section-wrapper white left">

										<!--*************************
										*************************
										*************************
										Contact Form Start
										*************************
										*************************
										*************************-->



										<!-- Row start -->

                                        <!-- Row start -->
                                        <div class="row justify-content-md-center gutters">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                                    @csrf
                                                </form>
                                                <form method="post" action="{{ route('profile.update') }}">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="form-block">
                                                        <div class="form-block-header">
                                                            <h5>Profile Information</h5>
                                                            <h6>Update your account's profile information and email address.</h6>
                                                        </div>
                                                        <div class="form-block-body">
                                                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="{{$user->name}}" id="name" name="name" :value="old('name', $user->name)" required autofocus autocomplete="name">
                                                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email" class="col-sm-3 col-form-label">Your E-mail</label>
                                                                <input class="form-control" placeholder="{{$user->email}}" id="email" name="email" :value="old('email', $user->email)" required autocomplete="username">
                                                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                                    <div>
                                                                        <p class="text-sm mt-2 text-gray-800">
                                                                            {{ __('Your email address is unverified.') }}

                                                                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                                {{ __('Click here to re-send the verification email.') }}
                                                                            </button>
                                                                        </p>

                                                                        @if (session('status') === 'verification-link-sent')
                                                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                                                {{ __('A new verification link has been sent to your email address.') }}
                                                                            </p>
                                                                        @endif
                                                                    </div>
                                                                @endif
                                                            </div>

                                                            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">{{__('Save')}}</button>

                                                            @if (session('status') === 'profile-updated')
                                                                <p
                                                                    x-data="{ show: true }"
                                                                    x-show="show"
                                                                    x-transition
                                                                    x-init="setTimeout(() => show = false, 2000)"
                                                                    class="text-sm text-gray-600"
                                                                >{{ __('Saved.') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Row end -->

										<!-- Row end -->



										<!--*************************
										*************************
										*************************
										Contact Form End
										*************************
										*************************
										*************************-->

									</div>

								</div>

							</div>
						</div>
						<!-- Row end -->




                {{-------------------- Update Password ---------------------}}

                        <!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">


								<!-- section container start -->
								<div class="section-container">

									<div class="section-wrapper white left">

										<!--*************************
										*************************
										*************************
										 Contact Form Start
										*************************
										*************************
										*************************-->



										<!-- Row start -->
                                        <!-- Row start -->
<div class="row justify-content-md-center gutters">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')
            <div class="form-block">
                <div class="form-block-header">
                    <h5>Change your Password</h5>
                    <h6>Your Current Password and New Password</h6>
                </div>
                <div class="form-block-body">

                    <div class="form-group">
                        <label for="current_password" class="col-sm-3 col-form-label">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password" autocomplete="current-password">
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-3 col-form-label">New Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="New Password" autocomplete="new-password">
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="col-sm-3 col-form-label">Password Confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" autocomplete="new-password">
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">{{__('Save')}}</button>
                    @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('Saved.') }}</p>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Row end -->

										<!-- Row end -->



										<!--*************************
										*************************
										*************************
										Contact Form End
										*************************
										*************************
										*************************-->

									</div>

								</div>

							</div>
						</div>
						<!-- Row end -->


                {{-------------------- Delete Account --------------------}}


                        <!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">


								<!-- section container start -->
								<div class="section-container">

									<div class="section-wrapper white left">

										<!--*************************
										*************************
										*************************
										 Contact Form Start
										*************************
										*************************
										*************************-->



										<!-- Row start -->
                                        <div class="row justify-content-md-center gutters">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <form>
                                                    <div class="form-block">
                                                        <div class="form-block-header">
                                                            <h5>Delete Account</h5>
                                                            <h6>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</h6>
                                                        </div>
                                                        <div class="form-block-body">
                                                            <button type="button" id="submit" name="submit" class="btn btn-danger pull-right" onclick="showConfirmationModal()">Delete</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <!-- Delete Account Modal Section -->
                                        <div id="deleteAccountModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post" action="{{ route('profile.destroy') }}">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteAccountModalLabel">Are you sure you want to delete your account?</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.</p>
                                                            <div class="form-group">
                                                                <label for="password" class="sr-only">Password</label>
                                                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-danger">Delete Account</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            function showConfirmationModal() {
                                                $('#deleteAccountModal').modal('show');
                                            }
                                        </script>



										<!--*************************
										*************************
										*************************
										 Contact Form End
										*************************
										*************************
										*************************-->

									</div>

								</div>

							</div>
						</div>
						<!-- Row end -->









@endsection








@section('scripts')

@endsection
