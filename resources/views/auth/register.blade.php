@extends('layouts.guest')
@section('content')
<div class="auth-box row text-center">
    <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url({{asset('assets/images/big/3.jpg')}});">
    </div>
    <div class="col-lg-5 col-md-7 bg-white">
        <div class="p-3">
            <div class="text-center">
                <img src="{{asset('assets/images/big/icon.png')}}" alt="wrapkit">
            </div>
            <h2 class="mt-3 text-center">Daftar</h2>
            <p class="text-center">Daftar untuk melanjutkan</p>
            <form method="POST" action="{{ route('register') }}" class="mt-4">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" name="text" placeholder="your name">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <input class="form-control" type="email" name="email" placeholder="email address">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <input class="form-control" type="password" name="password" placeholder="password">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn w-100 btn-dark">Daftar</button>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        Sudah punya akun? <a href="{{route('login')}}" class="text-danger">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection