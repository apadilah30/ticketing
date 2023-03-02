@extends('layouts.app')
@section('content')
<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Transportasi</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('data-master.transportation.index')}}">Transportation</a>
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
                    <a href="{{route('data-master.transportation.create')}}" class="btn btn-outline-success btn-sm btn-rounded mb-2">
                        <i class="fas fa-plus-circle me-1"></i> Tambah Data
                    </a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah Kursi</th>
                                    <th>Tipe</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->seat_qty}}</td>
                                    <td>{{$item->type->type}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('data-master.transportation.edit', $item->id)}}" 
                                            class="btn btn-sm btn-primary">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <form action="{{route('data-master.transportation.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
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