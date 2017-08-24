<?php

namespace App\Http\Controllers;

use App\HoSo;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class HoSoController extends Controller
{
    public function postHoSo(Request $request)
    {
        $hoSo = new HoSo();
//        print_r($request->all());
        $hoSo->id_ho_toc = 1;
        $hoSo->ho_ten = $request->ho_ten;
        $hoSo->ma_ho_so_bo_me = $request->ho_so_bo_me;
        $hoSo->ngay_sinh = $request->ngay_sinh;
        $hoSo->gioi_tinh = $request->gioi_tinh == 'nam' ? true : false;
        $hoSo->dia_chi = $request->dia_chi;
        $hoSo->noi_sinh = $request->noi_sinh;
        $hoSo->ngay_mat_al = $request->ngay_mat;
        $hoSo->save();
        return redirect()->route('trang-chu');
    }

    public function getChiTietHoSo($id)
    {
        $hoSo = HoSo::find($id);
        return view('page.chi-tiet-ho-so', compact('hoSo'));
    }

    public static function getGiaPha()
    {
        $data = HoSo::select('id', 'ho_ten', 'ma_ho_so_bo_me')->get()->toArray();
        return view('page.so-do-gia-pha', compact('data'));
    }

    public function getXungHo()
    {
        $data = HoSo::select('id', 'ho_ten')->get()->toArray();
        return view('page.xung-ho', compact('data'));
    }

    public function getKQXungHo(Request $request)
    {
        $ketqua = $this->timXungHo($request->id1, $request->id2);
        return redirect()->back()->with('thongbao', $ketqua);
    }

    protected function deQuyTimDoi($data, $id, $soDoi = 1)
    {
        if ($id==1){
            $GLOBALS['soDoi'] = $soDoi;
        }
        foreach ($data as $val) {
            if ($val['id'] == $id) {
                $this->deQuyTimDoi($data,$val['ma_ho_so_bo_me'], $soDoi + 1);
            }
        }
    }

    protected function timXungHo($nguoi1 =26, $nguoi2 = 3)
    {
        $data = HoSo::select('id', 'ho_ten', 'ma_ho_so_bo_me')->get()->toArray();
        $this->deQuyTimDoi($data, $nguoi1);
        $soDoiNguoi1= isset($GLOBALS['soDoi'])?$GLOBALS['soDoi']:null;
        $this->deQuyTimDoi($data, $nguoi2);
        $soDoiNguoi2= isset($GLOBALS['soDoi'])?$GLOBALS['soDoi']:null;

        if ($soDoiNguoi1 > $soDoiNguoi2){
            $temp = $soDoiNguoi1 - $soDoiNguoi2;
            if ($temp == 1){
                return 'A gọi B là Bố';
            }
            if ($temp == 2){
                return 'A gọi B là Ông';
            }
            if ($temp == 3){
                return 'A gọi B là Cố';
            }
        }
        else if ($soDoiNguoi1 < $soDoiNguoi2){
            $temp = $soDoiNguoi2 - $soDoiNguoi1;
            if ($temp == 1){
                return 'A gọi B là con2';
            }
            if ($temp == 2){
                return 'A gọi B là cháu2';
            }
            if ($temp == 3){
                return 'A gọi B là chắt2';
            }
        }
        else {
            return "A và B là Anh Em";
        }
        return "Tôi không biết !";
    }


    protected function getThemHoSoCon($hoSoBoMe)
    {
        return view('page.dang-ky', compact('hoSoBoMe'));
    }


    public function capNhatHoSo(Request $request, $id){
        $hoSo = HoSo::find($id);
        $hoSo->ho_ten = $request->ho_ten;
        $hoSo->save();
        $data = HoSo::select('id', 'ho_ten', 'ma_ho_so_bo_me')->get()->toArray();
        return redirect()->back()->with('data',$data);
    }
}
