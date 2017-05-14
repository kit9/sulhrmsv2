<?php
$pageinfo=array("HRMS Login","Employee Login","Please Provide Your Credential","SUL");
?>
@extends('login_layout.master')
@section('content')

<div class="cat__pages__login__block cat__pages__login__block--extended">
    <div class="row pt-5 pb-5">
        <div class="col-xl-12">
            <div class="cat__pages__login__block__inner mt-5 mb-5">
                <div class="cat__pages__login__block__form">
                    <img src="{{url('modules/images/SUL_LOGO_Black_Update.png')}}" class="img-responsive" style="width: 180px; height: 53px; margin-left: 22%;"/>
                    <hr/>
                    <h4 class="text-uppercase mt-4">
                        <strong>{{$pageinfo[1]}}</strong>
                    </h4>
                    <br />
                    <form id="form-validation" action="{{ url('/login') }}" name="form-validation" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input id="validation-email"
                            class="form-control"
                            placeholder="Email or Username"
                            name="email"
                            type="text"
                            data-validation="[EMAIL]">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input id="validation-password"
                            class="form-control password"
                            name="password"
                            type="password" data-validation="[L>=6]"
                            data-validation-message="$ must be at least 6 characters"
                            placeholder="Password">
                        </div>
                        <div class="form-group">
                            <a href="javascript: void(0);" class="pull-right cat__core__link--blue cat__core__link--underlined">Forgot Password?</a>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="example6" checked>
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary mr-3">Sign In</button>
                        </div>
                    </form>
                </div>
                <div class="cat__pages__login__block__sidebar">
                    <h4 class="cat__pages__login__block__sidebar__title">
                        <strong>How To Log In?</strong>
                    </h4>
                    <div class="cat__pages__login__block__sidebar__item text-justify">
                        If you are already registered in this system by administrator, please type your employee code and password in the respective fields to log in 
                    </div>
                    <div class="cat__pages__login__block__sidebar__item text-justify">
                        Or, contact with system administrator for user registration.
                    </div>
                    <div class="cat__pages__login__block__sidebar__place">
                        <i class="icmn-location mr-3"><!-- --></i>
                        New York, USA
                        <br/>
                        <i class="icmn-calendar mr-3"><!-- --></i>
                        22th April, 2017
                        <br/>
                        <i class="icmn-clock mr-3"><!-- --></i>
                        12:06 PM
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection