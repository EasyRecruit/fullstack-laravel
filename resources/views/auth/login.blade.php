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
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4>Sign in to account</h4>
                            <p>Enter your email & password to login</p>
                            <div>
                                <x-form-error value="email"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input name="email" value="{{ old('email')}} " class="form-control" type="email" required="" placeholder="Test@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                                    <div class="show-hide"><span class="show"></span></div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" name="remember" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Remember me</label>
                                </div><a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                </div>
                            </div>
                            <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                            <div class="social mt-4">
                                <div class="btn-showcase">
                                    <a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank">
                                        <i class="txt-google" data-feather="google"></i> GMail
                                    </a>
                                </div>
                            </div>
                            <p class="mt-4 mb-0 text-center">
                                Don't have account?
                                <a class="ms-2" href="{{ route('register') }}">
                                    Create Account
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

