@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="display-4 text-center">Tạo Hồ Sơ</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="image/avatar.png" class="img-thumbnail">
            </div>
            <div class="col-9">
                <form action="{{ route('tao-ho-so') }}" class="form-group" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                    <div class="form-group row">
                        <label for="ho-so-bo-me" class="col-2 col-form-label">Hồ sơ bố mẹ</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="ho_so_bo_me" id="ho-so-bo-me">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ho-ten" class="col-2 col-form-label">Họ và tên</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="ho_ten" value="Artisanal kale" id="ho-ten">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ngay-sinh" class="col-2 col-form-label">Ngày sinh</label>
                        <div class="col-10">
                            <input class="form-control" type="date" name="ngay_sinh" value="2011-08-19" id="ngay-sinh">
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
                            <input class="form-control" type="text" name="noi_sinh" id="noi-sinh">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dia-chi" class="col-2 col-form-label">Địa chỉ</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="dia_chi" id="dia-chi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ngay-mat" class="col-2 col-form-label">Ngày mất</label>
                        <div class="col-10">
                            <input class="form-control" type="date" name="ngay_mat" id="ngay-mat">
                        </div>
                    </div>
                    <input class="btn btn-block btn-primary" type="submit" value="Khởi tạo">
                </form>
            </div>
        </div>
    </div>
@endsection