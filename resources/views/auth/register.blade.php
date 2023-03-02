@extends('layouts.guest')
@section('content')
<div class="auth-box row">
    <div class="col-lg-12 col-md-12 bg-white">
        <div class="p-3">
            <div class="text-center">
                <img src="{{asset('assets/images/big/icon.png')}}" alt="wrapkit">
            </div>
            <h2 class="mt-3 text-center">Daftar</h2>
            <p class="text-center">Daftar untuk melanjutkan</p>
            <form method="POST" action="{{ route('register') }}" class="mt-4">
                @csrf
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="inputEmail">Email</label>
                            <input class="form-control" type="email" id="inputEmail" name="email" placeholder="email address" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="inputPassword">Password</label>
                            <input class="form-control" type="password" id="inputPassword" name="password" placeholder="password">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="inputPassword">Konfirmasi Password</label>
                            <input class="form-control" type="password" id="inputPassword" name="password confirmation" placeholder="password_confirmation">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="inputName">Nama</label>
                            <input class="form-control" type="text" id="inputName" name="name" placeholder="your name" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="inputNoHp">Nomor Handphone</label>
                            <input class="form-control" type="text" id="inputNoHp" name="phone" placeholder="your phone number" value="{{old('phone')}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="inputAddress">Alamat</label>
                            <textarea class="form-control" name="address" id="inputAddress" rows="3">{{old('address')}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="selectGener">Jenis Kelamin</label>
                            <select name="gender" class="form-control" id="selectGender" value="{{old('gender')}}">
                                <option value="l">Laki - laki</option>
                                <option value="p">Perempuan</option>
                            </select>
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