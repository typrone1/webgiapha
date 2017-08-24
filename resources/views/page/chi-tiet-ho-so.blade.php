@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="display-4 text-center">Chi Tiết Hồ Sơ</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="{{asset('image/avatar.png')}}" class="img-thumbnail">
            </div>
            <div class="col-6">
                <form action="#" class="form-group" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}" />
                    <div class="form-group row">
                        <label for="ho-so-bo-me" class="col-2 col-form-label">Hồ sơ bố mẹ</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{ $hoSo->ma_ho_so_bo_me }}" name="ho_so_bo_me" id="ho-so-bo-me">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ho-ten" class="col-2 col-form-label">Họ và tên</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="ho_ten" value="{{ $hoSo->ho_ten }}" id="ho-ten">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ngay-sinh" class="col-2 col-form-label">Ngày sinh</label>
                        <div class="col-10">
                            <input class="form-control" type="date" name="ngay_sinh" value="{{ $hoSo->ngay_sinh }}" id="ngay-sinh">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gioi-tinh" class="col-2 col-form-label">Giới tính</label>
                        <div class="col-10">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gioi_tinh" id="gioi-tinh"
                                           value="nam" checked> Nam
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gioi_tinh" id="gioi-tinh"
                                           value="nu"> Nữ
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noi-sinh" class="col-2 col-form-label">Nơi sinh</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{ $hoSo->noi_sinh }}"  name="noi_sinh" id="noi-sinh">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dia-chi" class="col-2 col-form-label">Địa chỉ</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{ $hoSo->dia_chi }}" name="dia_chi" id="dia-chi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ngay-mat" class="col-2 col-form-label">Ngày mất</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="{{$hoSo->ngay_mat_al}}" name="ngay_mat" id="ngay-mat">
                        </div>
                    </div>
                    <input onclick="event.preventDefault()" class="btn btn-block btn-primary" type="submit" value="Cập nhật">
                </form>

            </div>
            <div class="col-3">
                <a class="btn btn-outline-danger" href="{{ route('them-con', $hoSo->id) }}"><i class="fa fa-plus mr-2"></i>Thêm con</a>
            </div>
        </div>
    </div>
@endsection