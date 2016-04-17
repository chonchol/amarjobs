@extends('layouts.theme')
@section('content')


<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 login-form">
                <div class="panel panel-default">
                    <div class="panel-intro text-center">
                        <h1 class="logo"><i class="fa fa-recycle"></i> AmarJobs</h1>
                    </div>
                    <div class="panel-body">
                        @include('common.errors')
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                         {!! csrf_field() !!}

                            <div class="form-group">
                                <div class="col-sm-12">
                                <input type="email" placeholder="Email Address"  class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                <input type="password" placeholder="Password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                <div class="checkbox">
                                    <label for="terms" class="string optional">
                                        <input type="checkbox" name="remember" id="terms">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                <button type="submit" class="btn btn-block btn-custom"><i class="fa fa-btn fa-user"></i> Login</button>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p class="text-center pull-right"> <a href="{{ url('/password/reset') }}"> Forgot Your Password? </a> </p>
                        <div style=" clear:both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
