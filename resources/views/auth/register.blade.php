@extends('partials.master')

@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3 register">
        <h4 class="text-center">Register Here</h4>
        <form class="form-vertical" role="form" method="post" action="#">
          <div class="form-group {{ $errors->has('username') ? ' has-error' : ''}}">
              <label for="username" class="control-label">Username</label>
              <input type="text" name="username" class="form-control" id="username" value="{{ Request::old('username') ? : '' }}">
              @if ($errors->has('username'))
                  <span class="help-block">{{ $errors->first('username') }}</span>
              @endif
          </div>
          <div class="form-group {{ $errors->has('email') ? ' has-error' : ''}}">
              <label for="email" class="control-label">Email address</label>
              <input type="text" name="email" class="form-control" id="email" value="{{ Request::old('email') ? : '' }}">
              @if ($errors->has('email'))
                  <span class="help-block">{{ $errors->first('email') }}</span>
              @endif
          </div>
          <div class="form-group {{ $errors->has('password') ? ' has-error' : ''}}">
              <label for="password" class="control-label">Password</label>
              <input type="password" name="password" class="form-control" id="password">
              @if ($errors->has('password'))
                  <span class="help-block">{{ $errors->first('password') }}</span>
              @endif
          </div>
          <div class="form-group {{ $errors->has('password') ? ' has-error' : ''}}">
              <label for="password_confirmation" class="control-label">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
              @if ($errors->has('password_confirmation'))
                  <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
              @endif
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-raised register-btn">Register</button>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</div>
@stop
