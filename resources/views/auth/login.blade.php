@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">



                    <div class="modal-content">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                @if(Session::has('flash_message'))
                                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                                @endif
                                    @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                    @endif
                                <form action="{{url('login')}}" method="POST" id="loginForm" novalidate>
                                    <div class="form-group" id="email-div">
                                        {{ csrf_field() }}
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" type="email" placeholder="example@gmail.com" title="Please enter you email" required value="" name="email" class="form-control">
                                        {{-- <div id="form-errors-email" class="has-error"></div> --}}
                                        <span class="help-block">
                                <strong id="form-errors-email"></strong>
                            </span>
                                        <span class="help-block small">Your email</span>
                                    </div>
                                    <div class="form-group" id="password-div">
                                        <label class="control-label" for="password">Password</label>
                                        <input type="password" title="Please enter your password" placeholder="******" required value="" name="password" id="password" class="form-control">
                                        <span class="help-block">
                                <strong id="form-errors-password"></strong>
                            </span>
                                        <span class="help-block small">Your strong password</span>
                                    </div>
                                    <div class="form-group" id="login-errors">
                                        <span class="help-block">
                                            <strong id="form-login-errors"></strong>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>

                                    <div>
                                        <button class="btn btn-login right">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
