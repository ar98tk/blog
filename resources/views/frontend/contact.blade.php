@extends('layouts.app')
@section('content')

                <div class="col-lg-8 col-12">
                    <div class="contact-form-wrap">
                        <h2 class="contact__title">Get in touch</h2>
                        {!! Form::open(['route'=>'frontend.do_contact', 'method' => 'post']) !!}

                        <div class="single-contact-form">
                            {!! Form::text('name',old('name'),['placeholder'=>'Full Name *']) !!}
                            @error('name')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="single-contact-form space-between">
                            {!! Form::text('email',old('email'),['placeholder'=>'Email *']) !!}
                            {!! Form::text('mobile',old('mobile'),['placeholder'=>'Mobile']) !!}
                        </div>
                        <div class="single-contact-form space-between">
                            @error('email')<span class="text-danger">{{$message}}</span>@enderror
                            @error('mobile')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="single-contact-form">
                            {!! Form::text('title',old('title'),['placeholder'=>'Title*']) !!}
                            @error('title')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="single-contact-form message">
                            {!! Form::textarea('message',old('message'),['placeholder'=>'Type your message here ......']) !!}
                            @error('message')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="contact-btn">
                            {!! Form::button('Send message', ['type' => 'submit']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
                <div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
                    <div class="wn__address">
                        <h2 class="contact__title">Get office info.</h2>
                        <p>{!! getSettingsOf('site_description') !!} </p>
                        <div class="wn__addres__wreapper">

                            <div class="single__address">
                                <i class="icon-location-pin icons"></i>
                                <div class="content">
                                    <span>address:</span>
                                    <p>{!! getSettingsOf('address') !!}</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="icon-phone icons"></i>
                                <div class="content">
                                    <span>Phone Number:</span>
                                    <p>{!! getSettingsOf('phone_number') !!}</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="icon-envelope icons"></i>
                                <div class="content">
                                    <span>Email address:</span>
                                    <p>{!! getSettingsOf('site_email') !!}</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="icon-globe icons"></i>
                                <div class="content">
                                    <span>Site title:</span>
                                    <p>{!! getSettingsOf('site_title') !!}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

    </section>
@endsection
