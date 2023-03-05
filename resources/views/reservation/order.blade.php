@extends('reservation.layouts.app')
@section('content')
<div class="container">
    @if (session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body text-start p-5">
            <button class="btn btn-outline-secondary btn-lg btn-rounded mb-3" disabled>
                Kategori: {{$data_type->type}}
            </button>   
            <form action="{{route('storeOrder')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="selectRoute">Pilih Rute & Transportasi</label>
                            <select class="form-select" name="route" id="selectRoute">
                                @foreach ($data as $item)
                                <option value="{{$item->id}}">
                                    {{$item->route_from}} - {{$item->route_to}} | {{$item->transportation->code}} - {{$item->transportation->description}} | Kursi : {{$item->transportation->seat_qty}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="inputTanggal">Tanggal Keberangkatan</label>
                            <input type="date" class="form-control" name="reservation_date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="selectClass">Kelas</label>
                            <select class="form-select" name="route" id="selectClass">
                                <option value="ekonomi">Ekonomi</option>
                                <option value="bisnis">Bisnis</option>
                                <option value="vip">VIP</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="inputQty">Jumlah Tiket</label>
                            <input type="number" class="form-control" name="qty">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-rounded" type="submit">Pesan Sekarang</button>
            </form>
        </div>
    </div>
</div>
@endsection
