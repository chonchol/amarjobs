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
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                         {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="col-sm-12">
                                <input type="text" placeholder="Username" class="form-control" name="userName" value="{{ old('userName') }}">

                                @if ($errors->has('userName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
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
                                <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                <div class="checkbox">
                                    <label for="terms" class="string optional">
                                        <input type="checkbox" style="" id="terms">
                                        I Agree with Term and Conditions
                                    </label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                <button type="submit" class="btn btn-block btn-custom"><i class="fa fa-btn fa-user"></i> Sign Up</button>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p class="text-center pull-right"> <a href="login.php"> Have an account? </a> </p>
                        <div style=" clear:both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
