@extends('layouts.app')
@section('content')
<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Tipe Transportasi</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('data-master.transportation-type.index')}}">Transportation Type</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('data-master.transportation-type.create')}}">Create</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-5 align-self-center">
        <div class="customize-input float-end">
            <div class="btn btn-rounded btn-primary disabled">
                <i class="far fa-calendar-alt me-2"></i>{{now()->format('d F Y')}}
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-6">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('data-master.transportation-type.store')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="inputType">Tipe Kendaraan</label>
                                <input type="text" class="form-control" name="type" id="inputType" placeholder="Pesawat" value="{{old('type')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="inputDescription">Deskripsi</label>
                                <textarea class="form-control" name="description" id="inputDescription" rows="3">{{old('description')}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection