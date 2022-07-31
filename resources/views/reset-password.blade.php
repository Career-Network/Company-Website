@extends('layouts.navbar_footer',['title'=>'Reset Password'])
@section('content')
<main>
    
    <div class="heading position-relative" style="margin-top: 170px">
        <p>New Password</p>
        @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('status') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>    
        @endif
        <form action="{{ route('password_update') }}" method="post">
            @csrf
            <input type="email" name="email" class="@error('email') is-invalid @enderror">
            <input type="password" name="password" class="@error('password') is-invalid @enderror">
            <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror">
            <input type="hidden" name="token" value="{{ $token }}">
            @error('password')
              <div class="form-control invalid-tooltip">
                {{ $message }}
              </div>
            @enderror
            <button type="submit">Reset Password</button>
        </form>
    </div>
</main>
@endsection