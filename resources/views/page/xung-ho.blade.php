@extends('master')
@section('content')

    <div class="container mt-5">
        @if(Session::has('thongbao'))
            <div class="alert alert-success" role="alert">
                <strong>{{Session::get('thongbao')}}</strong>
            </div>
        @endif
        <h1 class="display-4 text-center">Tra cứu cách xưng hô đúng</h1>

        <form class="form-inline" method="get" action="{{route('ket-qua-xung-ho')}}">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <select name="id1" class="form-control">
                    @foreach($data as $item)
                    <option value="{{$item['id']}}">{{$item['ho_ten']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <select name="id2" class="form-control">
                    @foreach($data as $item)
                        <option value="{{$item['id']}}">{{$item['ho_ten']}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>

@endsection