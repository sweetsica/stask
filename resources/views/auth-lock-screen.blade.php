@extends('layouts.master-without_nav')

{{--  @section('title') Login @endsection  --}}

@section('content')

    <body class="account-body accountbg">

        <!-- Lock screen page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index" class="logo logo-admin">
                                            <img src="{{ URL::asset('assets/images/logo-sm-dark.png') }}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Enter Password And Use Dastone</h4>
                                        <p class="text-muted  mb-0">Hello Mark, enter your password to unlock the screen !</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal auth-form" action="index">

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Password</label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control"  id="password" placeholder="Enter password">
                                            </div>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="button">Unlock <i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    <p class="text-muted mb-0 mt-3">Not you ? return  <a href="auth-register" class="text-primary ms-2">Sign In</a></p>
                                </div>
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Mannatthemes © <script>
                                        document.write(new Date().getFullYear())
                                    </script></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
