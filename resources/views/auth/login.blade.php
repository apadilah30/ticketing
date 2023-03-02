@extends('layouts.guest')
@section('content')
<div class="auth-box row">
    <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url({{asset('assets/images/big/3.jpg')}});">
    </div>
    <div class="col-lg-5 col-md-7 bg-white">
        <div class="p-3">
            <div class="text-center">
                <img src="{{asset('assets/images/big/icon.png')}}" alt="wrapkit">
            </div>
            <h2 class="mt-3 text-center">Login</h2>
            <p class="text-center">Login untuk melanjutkan</p>
            <form action="{{route('login')}}" class="mt-4" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label class="form-label text-dark" for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username">
                            @error('email')
                            <p class="bg-primary text-white rounded mt-1 py-1 px-2 small"> {{$message}} </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label class="form-label text-dark" for="passwor">Password</label>
                            <input class="form-control" id="passwor" type="password" name="password" required autocomplete="current-password">
                            @error('password')
                            <p class="bg-primary text-white rounded mt-1 py-1 px-2 small"> {{$message}} </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn w-100 btn-dark">Login</button>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        Belum punya akun? <a href="{{route('register')}}" class="text-danger">Daftar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection