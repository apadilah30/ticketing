@extends('reservation.layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body text-center p-5">
            <h3 class="mb-4">
                <i class="fas fa-search me-2"></i>Cari Harga tiket pesawat dan kereta api termurah se-Indonesia
            </h3>

            <div class="d-flex justify-content-center">
                @foreach ($transportation_types as $item)
                <a href="{{route('order', $item->id)}}" class="btn btn-outline-primary btn-rounded me-2">
                    Cari Tiket {{$item->type}}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
