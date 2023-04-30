@extends('base')
@section('title', 'forgot password')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h1 class="text-center mb-3 mt-5">Forgot password</h1>
                <p class="text-center text-muted mb-5">Please enter your email address. We'll send you a link to reset your password.</p>
                <form action="{{route('app_forgot_password')}}" method="POST">
                    @csrf
                    @include('alerts.alert-message')
                    <label for="email-send" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email-success') is-valid @enderror @error('email-error') is-invalid @enderror" name="email-send" id="email-send" placeholder="Please enter your email address" value="@if(Session::has('old_email')){{Session::get('old_email')}}@endif" required>
                    <div class="d-grid gap-2 mt-4 mb-5">
                        <button class="btn btn-primary " type="submit"> Reset password</button>
                    </div>
                    <p class="text-center text-muted"> Back to <a href="{{route('login')}}">login</a> </p>
                </form>
            </div>
        </div>
    </div>
@endsection
