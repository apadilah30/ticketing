@extends('layouts.app')
@section('content')
<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Rute</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('data-master.route.index')}}">Route</a>
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
                    <a href="{{route('data-master.route.create')}}" class="btn btn-outline-success btn-sm btn-rounded mb-2">
                        <i class="fas fa-plus-circle me-1"></i> Tambah Data
                    </a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lokasi Penjemputan</th>
                                    <th>Dari</th>
                                    <th>Ke</th>
                                    <th>Harga</th>
                                    <th>Tipe Transportasi</th>
                                    <th>Transportasi</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->depart_at}}</td>
                                    <td>{{$item->route_from}}</td>
                                    <td>{{$item->route_to}}</td>
                                    <td>
                                        Ekonomi : {{$item->price_economy}} <br>
                                        Bisnis : {{$item->price_business}} <br>
                                        VIP : {{$item->price_vip}}
                                    </td>
                                    <td>{{$item->transportation->type->type}}</td>
                                    <td>{{$item->transportation->code}} - {{$item->transportation->description}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('data-master.route.edit', $item->id)}}" 
                                                class="btn btn-sm btn-primary">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <form action="{{route('data-master.route.destroy', $item->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script src="{{asset('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js/pages/datatable/datatable-basic.init.js')}}"></script>
@endpush