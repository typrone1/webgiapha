@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach($hosos as $hoso)
            <div class="col-sm-6 mb-4">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">{{ $hoso->ho_ten }}</h3>
                        <p class="card-text">Ngày sinh: {{ $hoso->ngay_sinh }}</p>
                        <a href="{{route('chi-tiet-ho-so',$hoso->id)}}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection