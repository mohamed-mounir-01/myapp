@extends('base')
@section('title', 'Change your email adress')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h2 class="text-center mb-3 mt-5"> Change your email adress</h2>
                @include('alerts.alert-message')
                <form action="{{route('app_activation_account_change_email',['token' => $token])}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="activation-code" class="form-label"> New email address</label>
                        <input type="email" class="form-control @if(Session::has('danger')) is-invalid @endif" name="new-email" id="new-email" placeholder="enter the new email address" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit" >Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
