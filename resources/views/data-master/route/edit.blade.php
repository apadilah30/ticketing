@extends('layouts.app')
@section('content')
<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Rute</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('data-master.route.index')}}">Transportation</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('data-master.route.edit', $data->id)}}">Edit</a>
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
                            @dd($errors->all())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('data-master.route.update', $data->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="inputDepartAt">Lokasi Penjemputan</label>
                                <input type="text" class="form-control" name="depart_at" id="inputDepartAt" placeholder="Stasiun BDG" value="{{$data->depart_at}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="inputRouteFrom">Dari</label>
                                <input type="text" class="form-control" name="route_from" id="inputRouteFrom" placeholder="Stasiun JKT" value="{{$data->route_from}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="inputRouteTo">Ke</label>
                                <input type="text" class="form-control" name="route_to" id="inputRouteTo" placeholder="Stasiun BDG" value="{{$data->route_to}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="inputPrice">Harga (Rp)</label>
                                <input type="number" class="form-control" name="price" id="inputPrice" placeholder="100000" value="{{$data->price}}">
                            </div>  
                            <div class="form-group mb-3">
                                <label for="selectTansportation">Transportasi</label>
                                <select name="transportation" id="selectTansportation" class="form-control">
                                    @foreach ($transportation as $item)
                                    <option value="{{$item->id}}" {{($item->id == $data->transportation_id) ? 'selected':false}}>{{$item->code}} - {{$item->description}}</option>
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