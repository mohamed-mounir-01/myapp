@extends('base')
@section('title', 'change password')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h1 class="text-center mb-3 mt-5">Change password</h1>
                <p class="text-center text-muted mb-5">Please enter your new password</p>
                <form action="{{route('app_change_password', ['token' => $activation_token])}}" method="POST">
                    @csrf
                    @include('alerts.alert-message')
                    <label for="new-password" class="form-label">New password</label>
                    <input type="password" class="form-control mb-3 @error('password-error') is-invalid @enderror @error('password-success') is-valid @enderror" name="new-password" id="new-password" placeholder="Please enter the new password" value="@if(Session::has('old-new-password')){{Session::get('old-new-password')}}@endif" required>

                    <label for="new-password-confirm" class="form-label">New password confirmation</label>
                    <input type="password" class="form-control mb-3 @error('new-password-confirm') is-invalid @enderror" name="new-password-confirm" id="new-password-confirm" placeholder="Confirm your new password" value="@if(Session::has('old-new-password-confirm')){{Session::get('old-new-password-confirm')}}@endif" required>

                    <div class="d-grid gap-2 mt-4 mb-5">
                        <button class="btn btn-primary " type="submit"> New password</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
