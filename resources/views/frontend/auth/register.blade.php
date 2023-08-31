@extends('frontend.layout.master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>create account</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">create account</li>
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
                    <h3>Create An Account</h3>
                    <div class="theme-card">

                        @if (Session::has('error'))
                            <div class='text-danger'>
                                {{ Session('error') }}
                            </div>
                        @endif

                        <form class="theme-form" action='{{ route('user.register') }}' method='POST'>
                            @csrf
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="name" name='first_name'
                                       placeholder="First Name">
                                @if ($errors->has('first_name'))
                                    <div class="text-danger">
                                        {{ $errors->first('first_name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" id="name" name='last_name'
                                       placeholder="Last Name">
                                @if ($errors->has('last_name'))
                                    <div class="text-danger">
                                        {{ $errors->first('last_name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name='email'
                                       placeholder="Email">
                                @if ($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" name='password' id="review"
                                       placeholder="Enter your password">
                                @if ($errors->has('password'))
                                    <div class="text-danger">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-row row">
                                <div class="col-md-12 text-center">
                                    <button type='submit' class="btn btn-solid">Create Account</button>
                                </div>
                            </div>

                            <div class="footer-social mx-auto gap-5 mt-3 d-flex justify-content-center">


                                {{--@if (isset($settings) && $settings->google == 'Enabled')
                                    <a href="{{ url('auth/google') }}"><i class="fa fa-google-plus"></i></a>
                                @endif

                                @if (isset($settings) && $settings->facebook == 'Enabled')
                                    <a href="{{ url('auth/facebook') }}"><i class="fa fa-facebook-f"></i></a>
                                @endif--}}
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>Already Customer?</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Already Customer?</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start shopping click register.</p><a
                            href="{{ route('user.login.view') }}" class="btn btn-solid">Already an
                            Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section ends-->
    <!--Section ends-->
@endsection
