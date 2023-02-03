<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body onload="startTime()" class="button-builder">

<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card">
                <div>
                    <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h4>Register for an account</h4>
                            <div class="form-group">
                                <label class="col-form-label">First Name</label>
                                <input name="first_name" value="{{ old('first_name')}}" class="form-control" required="">
                                <x-form-error value="first_name"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Last Name</label>
                                <input name="last_name" value="{{ old('last_name')}} " class="form-control" required="">
                                <x-form-error value="last_name"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Other Names</label>
                                <input name="other_names" value="{{ old('other_names')}}" class="form-control">
                                <x-form-error value="other_names"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input name="email" value="{{ old('email')}}" class="form-control" type="email" required="">
                                <x-form-error value="email"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Mobile Number</label>
                                <input name="mobile_number" value="{{ old('mobile_number')}}" class="form-control" type="mobile_number" required="">
                                <x-form-error value="mobile_number"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                                    <x-form-error value="password"/>
{{--                                    <div class="show-hide"><span class="show"></span></div>--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password Confirmation</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password_confirmation" required="" placeholder="*********">
{{--                                    <div class="show-hide"><span class="show"></span></div>--}}
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Register</button>
                                </div>
                            </div>
                            <p class="mt-4 mb-0 text-center">
                                Already have an account?
                                <a class="ms-2" href="{{ route('login') }}">
                                    Login
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@livewireScripts
<!-- latest jquery-->
@include('layouts.script')
<!-- Plugin used-->

{{-- <script type="text/javascript">
  if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
        $(".according-menu.other" ).css( "display", "none" );
        $(".sidebar-submenu" ).css( "display", "block" );
  }
</script> --}}
</body>
</html>

