@extends('frontend.layout.master')
@section('content')
    <!--section start-->
    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-7 map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1605.811957341231!2d25.45976406005396!3d36.3940974010114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1550912388321"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-5">
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon"><i class="fa fa-solid fa-phone"></i>
                                    <h6>{{ __('contact_us') }}</h6>
                                </div>
                                <div class="media-body">
                                    <p>+91 123 - 456 - 7890</p>
                                    <p>+86 163 - 451 - 7894</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h6>{{ __('address') }}</h6>
                                </div>
                                <div class="media-body">
                                    <p>ABC Complex,Near xyz, New York</p>
                                    <p>USA 123456</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-solid fa-envelope"></i>
                                    <h6>{{ __('email') }}</h6>
                                </div>
                                <div class="media-body">
                                    <p>Support@Shopcart.com</p>
                                    <p>info@shopcart.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-fax" aria-hidden="true"></i>
                                    <h6>{{ __('fax') }}</h6>
                                </div>
                                <div class="media-body">
                                    <p>Support@Shopcart.com</p>
                                    <p>info@shopcart.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('layout.alert')
                <div class="col-sm-12">
                    <form class="theme-form" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-row row">
                            <div class="col-md-6">
                                <label for="name">{{ __('full_name') }}</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your name">
                            </div>
                            <div class="col-md-6">
                                <label for="review">{{ __('phone_number') }}</label>
                                <input type="text" class="form-control" id="review" placeholder="Enter your number">
                            </div>
                            <div class="col-md-12">
                                <label for="email">{{ __('email') }}</label>
                                <input type="text" class="form-control" id="email" placeholder="Email"
                                    required="">
                            </div>
                            <div class="col-md-12">
                                <label for="review">{{ 'write_your_message' }}</label>
                                <textarea class="form-control" placeholder="{{ 'write_your_message' }}" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">{{ __('send_your_message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
@endsection
