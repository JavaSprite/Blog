@extends('layouts.default')
@section('title', '重置密码')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading"><h5>重置密码</h5></div>

    <div class="panel-body">
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif

      <form class="" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="form-control-label">邮箱地址：</label>

          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

          @if ($errors->has('email'))
            <span class="form-text">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">
            发送密码重置邮件
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection