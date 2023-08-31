@extends('frontend.layout.master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>customer's login</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->
    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Login</h3>
                    <div class="theme-card">
                        @if (Session::has('error'))
                            <div class='text-danger'>
                                {{ Session('error') }}
                            </div>
                        @endif
                        <form class="theme-form" action='{{ route('user.login') }}' method='POST'>
                            <div class="form-group">
                                @csrf
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name='email' placeholder="Email">
                                @if ($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name='password'
                                    placeholder="Enter your password">
                                <div class="text-end">
                                    <a href="#" class="">forget password?</a>
                                </div>
                                @if ($errors->has('password'))
                                    <div class="text-danger">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group row text-center gap-4">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-solid">Login</button>
                                </div>

                            </div>
                        </form>


                        <div class="footer-social mx-auto gap-5 mt-0 d-flex justify-content-center">

                            @if (isset($settings) && $settings->google == 'Enabled')
                                <a href="{{ url('auth/google') }}"><i class="fa fa-google-plus"></i></a>
                            @endif

                            @if (isset($settings) && $settings->facebook == 'Enabled')
                                <a href="{{ url('auth/facebook') }}"><i class="fa fa-facebook-f"></i></a>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>New Customer</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start shopping click register.</p><a
                            href="{{ route('user.create.view') }}" class="btn btn-solid">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section ends-->
@endsection
