@extends('layouts.master')


@section('content')

<h1>Login</h1>

<form method="post" action="{{ route('login') }}">



    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @csrf
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="name" class="form-control p_input" >
  </div>
  <div class="form-group">
    <label>Password *</label>
    <input type="password" name="password" class="form-control p_input">
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
  </div>

  <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
</form>

@stop
