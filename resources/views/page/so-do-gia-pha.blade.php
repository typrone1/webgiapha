@extends('master')
@section('content')
    <div class="container-fluid" style="overflow: auto">
        <div class="tree">
            {{inGiaPha($data,$maHoSoBoMe)}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="tieude" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tieude">Chi tiết hồ sơ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="form-modal" method="post">
                            <div class="modal-body">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group row">
                                    <label for="ho-so-bo-me" class="col-3 col-form-label">Hồ sơ bố mẹ</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="ho_so_bo_me" id="ho-so-bo-me" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ho-ten" class="col-3 col-form-label">Họ và tên</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="ho_ten" value="" id="ho-ten" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ngay-sinh" class="col-3 col-form-label">Ngày sinh</label>
                                    <div class="col-9">
                                        <input class="form-control" type="date" name="ngay_sinh" value="2011-08-19" id="ngay-sinh" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gioi-tinh" class="col-3 col-form-label">Giới tính</label>
                                    <div class="col-9">
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
                                    <label for="noi-sinh" class="col-3 col-form-label">Nơi sinh</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="noi_sinh" id="noi-sinh">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dia-chi" class="col-3 col-form-label">Địa chỉ</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="dia_chi" id="dia-chi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ngay-mat" class="col-3 col-form-label">Ngày mất</label>
                                    <div class="col-9">
                                        <input class="form-control" type="date" name="ngay_mat" id="ngay-mat">
                                    </div>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Cập nhật">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection