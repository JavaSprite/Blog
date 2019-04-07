@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="row">
  <div class="col-md-offset-4 col-md-4">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4>登录</h4>
    </div>
    <div class="panel-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">密码（<a href="{{ route('password.request') }}">忘记密码</a>）：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">记住我</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">登录</button>
      </form>

      <hr>

      <p>还没账号？<a href="{{ route('signup') }}">现在注册！</a></p>
    </div>
  </div>
</div>
</div>
@stop