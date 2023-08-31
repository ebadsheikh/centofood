@extends('layout.master')
@section('layout.left_side_nav')
    @include('layout.left_side_nav')
@endsection
@section('content')
    @include('layout.header')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            {{ __('settings') }}</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard') }}"
                                   class="text-muted text-hover-primary">{{ __('dashboard') }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">{{ __('mail') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="kt_app_content" class="app-content mb-15 flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="d-flex flex-column gap-7 col-3 gap-lg-10 mb-7 me-lg-10">
                            @include('layout.settings_sidebar')
                        </div>
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin::Card-->
                            <form action="{{ route('mail.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10">
                                    <!--begin::Card body-->
                                    @if (session('success'))
                                        <div class="alert alert-success my-2">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger my-2">
                                            {{ Session('error') }}
                                        </div>
                                    @endif
                                    <div class="card-body pb-0">
                                        <!--begin::Navs-->
                                        <h2>{{ __('production_mail_setting_management') }}</h2>
                                        <div class="row">
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('mail_mailer') }}</label>
                                                <!--begin::Input-->
                                                <input type="text" name="mail_mailer"
                                                       value="{{ isset($mail['app_mail_mailer']) ? $mail['app_mail_mailer'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('mail_mailer') }}"/>
                                                <small>{{ __('insert_the_mail_mailer_address') }}</small>
                                                @if ($errors->has('mail_mailer'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('mail_mailer') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('mail_host') }}</label>
                                                <!--begin::Input-->
                                                <input type="text" name="mail_host"
                                                       value="{{ isset($mail['app_mail_host']) ? $mail['app_mail_host'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('mail_host') }}"/>
                                                <small>{{ __('insert_the_mail_host_address') }}</small>
                                                @if ($errors->has('mail_host'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('mail_host') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('user_name') }}</label>
                                                <!--begin::Input-->
                                                <input type="text" name="mail_username"
                                                       value="{{ isset($mail['app_mail_username']) ? $mail['app_mail_username'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('user_name') }}"/>
                                                <small>{{ __('insert_the_mail_username_most_of_services_use_email_as_username') }}</small>
                                                @if ($errors->has('mail_username'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('mail_username') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('mail_port') }}</label>
                                                <!--begin::Input-->
                                                <input type="number" name="mail_port"
                                                       value="{{ isset($mail['app_mail_port']) ? $mail['app_mail_port'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('mail_port') }}"/>
                                                <small>{{ __('insert_the_mail_port') }}</small>
                                                @if ($errors->has('mail_port'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('mail_port') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('mail_password') }}</label>
                                                <!--begin::Input-->
                                                <input type="password" name="mail_password"
                                                       value="{{ isset($mail['app_mail_password']) ? $mail['app_mail_password'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('mail_password') }}"/>
                                                <small>{{ __('insert_the_mail_password') }}</small>
                                                @if ($errors->has('mail_password'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('mail_password') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('mail_encryption') }}</label>
                                                <select class="form-select" data-control="select2"
                                                        data-placeholder="select_mail_encryption"
                                                        name="mail_encryption">
                                                    <option value="TLS"
                                                        {{ isset($mail['app_mail_encryption']) && $mail['app_mail_encryption'] == 'TLS' ? 'selected' : '' }}>
                                                        TLS
                                                    </option>
                                                    <option value="SSL"
                                                        {{ isset($mail['app_mail_encryption']) && $mail['app_mail_encryption'] == 'SSL' ? 'selected' : '' }}>
                                                        SSL
                                                    </option>
                                                </select>
                                                <small>{{ __('select_the_mail_encryption_tls_/_ssl') }}</small>
                                                @if ($errors->has('mail_encryption'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('mail_encryption') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('mail_from_address') }}</label>
                                                <!--begin::Input-->
                                                <input type="email" name="mail_from_address"
                                                       value="{{ isset($mail['app_mail_from_address']) ? $mail['app_mail_from_address'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('mail_from_address') }}"/>
                                                <small>{{ __('insert_the_mail_from_address_address') }}</small>
                                                @if ($errors->has('mail_from_address'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('mail_from_address') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('mail_from_name') }}</label>
                                                <!--begin::Input-->
                                                <input type="text" name="mail_from_name"
                                                       value="{{ isset($mail['app_mail_from_name']) ? $mail['app_mail_from_name'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('mail_from_name') }}"/>
                                                <small>{{ __('insert_the_mail_from_name') }}</small>
                                                @if ($errors->has('mail_from_name'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('mail_from_name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="separator my-7"></div>
                                        <!--begin::Navs-->
                                        <h2>{{ __('development_mail_setting_management') }}</h2>
                                        <div class="row">
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('development_mail_mailer') }}</label>
                                                <!--begin::Input-->
                                                <input type="text" name="development_mail_mailer"
                                                       value="{{ isset($mail['app_development_mail_mailer']) ? $mail['app_development_mail_mailer'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('development_mail_mailer') }}"/>
                                                <small>{{ __('insert_the_mail_mailer_address') }}</small>
                                                @if ($errors->has('development_mail_mailer'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('development_mail_mailer') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('development_mail_host') }}</label>
                                                <!--begin::Input-->
                                                <input type="text" name="development_mail_host"
                                                       value="{{ isset($mail['app_development_mail_host']) ? $mail['app_development_mail_host'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('development_mail_host') }}"/>
                                                <small>{{ __('insert_the_mail_host_address') }}</small>
                                                @if ($errors->has('development_mail_host'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('development_mail_host') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('development_user_name') }}</label>
                                                <!--begin::Input-->
                                                <input type="text" name="development_mail_username"
                                                       value="{{ isset($mail['app_development_mail_username']) ? $mail['app_development_mail_username'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('development_user_name') }}"/>
                                                <small>{{ __('insert_the_mail_username_most_of_services_use_email_as_username') }}</small>
                                                @if ($errors->has('development_mail_username'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('development_mail_username') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-6 col-form-label fw-bold fs-6">{{ __('development_mail_port') }}</label>
                                                <!--begin::Input-->
                                                <input type="number" name="development_mail_port"
                                                       value="{{ isset($mail['app_development_mail_port']) ? $mail['app_development_mail_port'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('development_mail_port') }}"/>
                                                <small>{{ __('insert_the_mail_port') }}</small>
                                                @if ($errors->has('development_mail_port'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('development_mail_port') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-12 col-form-label fw-bold fs-6">{{ __('development_mail_password') }}</label>
                                                <!--begin::Input-->
                                                <input type="password" name="development_mail_password"
                                                       value="{{ isset($mail['app_development_mail_password']) ? $mail['app_development_mail_password'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('development_mail_password') }}"/>
                                                <small>{{ __('insert_the_mail_password') }}</small>
                                                @if ($errors->has('development_mail_password'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('development_mail_password') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-12 col-form-label fw-bold fs-6">{{ __('development_mail_encryption') }}</label>
                                                <select class="form-select" data-control="select2"
                                                        data-placeholder="select_mail_encryption"
                                                        name="development_mail_encryption">
                                                    <option value="TLS"
                                                        {{ isset($mail['app_development_mail_encryption']) && $mail['app_development_mail_encryption'] == 'TLS' ? 'selected' : '' }}>
                                                        TLS
                                                    </option>
                                                    <option value="SSL"
                                                        {{ isset($mail['app_development_mail_encryption']) && $mail['app_development_mail_encryption'] == 'SSL' ? 'selected' : '' }}>
                                                        SSL
                                                    </option>
                                                </select>
                                                <small>{{ __('select_the_mail_encryption_tls_/_ssl') }}</small>
                                                @if ($errors->has('development_mail_encryption'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('development_mail_encryption') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-12 col-form-label fw-bold fs-6">{{ __('development_mail_from_address') }}</label>
                                                <!--begin::Input-->
                                                <input type="email" name="development_mail_from_address"
                                                       value="{{ isset($mail['app_development_mail_from_address']) ? $mail['app_development_mail_from_address'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('development_mail_from_address') }}"/>
                                                <small>{{ __('insert_the_mail_from_address_address') }}</small>
                                                @if ($errors->has('development_mail_from_address'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('development_mail_from_address') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-12 col-form-label fw-bold fs-6">{{ __('development_mail_from_name') }}</label>
                                                <!--begin::Input-->
                                                <input type="text" name="development_mail_from_name"
                                                       value="{{ isset($mail['app_development_mail_from_name']) ? $mail['app_development_mail_from_name'] : '' }}"
                                                       class="form-control"
                                                       placeholder="{{ __('development_mail_from_name') }}"/>
                                                <small>{{ __('insert_the_mail_from_name') }}</small>
                                                @if ($errors->has('development_mail_from_name'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('development_mail_from_name') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 mb-3 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="col-lg-12 col-form-label fw-bold fs-6">{{ __('setting_type') }}</label>
                                                <!--begin::Input-->
                                                <select class="form-select" data-control="select2"
                                                        data-placeholder="select_setting_type"
                                                        name="setting_type_id">
                                                    @foreach($settingTypes as $settingType)
                                                        <option value="{{$settingType->id}}"
                                                            {{ isset($mail['setting_type_id'])  == $settingType['id'] ? 'selected' : '' }}>
                                                            {{$settingType->slug}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('setting_type_id'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('setting_type_id') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end my-5">
                                    <!--begin::Button-->
                                    <a href="{{ url()->previous() }}"
                                       class="btn btn-light me-5">{{ __('cancel') }}</a>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">{{ __('save') }}</span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::General options-->
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
    </div>
    @include('layout.footer')
@endsection
@section('scripts')
    @include('admin.scripts.editor')
@endsection
