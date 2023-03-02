@extends('layouts.app')
@section('content')
<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Transportasi</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('data-master.transportation.index')}}">Transportation</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('data-master.transportation.create')}}">Create</a>
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
                        <form action="{{route('data-master.transportation.store')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="inputCode">Kode Transportasi</label>
                                <input type="text" class="form-control" name="code" id="inputCode" placeholder="BDG1" value="{{old('code')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="inputDescription">Deskripsi</label>
                                <textarea class="form-control" name="description" id="inputDescription" placeholder="Air Asia 3210 2020" rows="3">{{old('description')}}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="inputSeatQty">Jumlah Kursi</label>
                                <input type="number" class="form-control" name="seat_qty" id="inputSeatQty" placeholder="10" value="{{old('seat_qty')}}">
                            </div>  
                            <div class="form-group mb-3">
                                <label for="selectType">Tipe Transportasi</label>
                                <select name="type" id="selectType" class="form-control">
                                    @foreach ($type as $item)
                                    <option value="{{$item->id}}">{{$item->type}}</option>
                                    @endforeach
                                </select>
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