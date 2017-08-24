<?php


function inGiaPha($data, $ma_ho_so_bo_me = 0)
{
    $flag = false;
    foreach ($data as $val) {
        if ($val['ma_ho_so_bo_me'] == $ma_ho_so_bo_me) {
            $flag = true;
            break;
        }
    }
    if ($flag) {
        echo "<ul>";
    }
    foreach ($data as $val) {
        $parent = $val['ma_ho_so_bo_me'];
        if ($parent == $ma_ho_so_bo_me) {
            echo '<li><div class="box-item"><a href="#">' . $val['id'] . '–' . $val['ho_ten'] . '
            </a><br><a class="btn btn-info nut-nho" data-toggle="modal" data-target="#exampleModal" data-hoten="' . $val['ho_ten'] . '" data-id="' . $val['id'] . '" href="chi-tiet-ho-so/' . $val['id'] . '" ><i class="fa fa-info"></i></a>
            <a class="btn btn-danger nut-nho" href="chi-tiet-ho-so/' . $val['id'] . '/them-con"><i class="fa fa-plus"></i></a></div>';
            $id = $val['id'];
            inGiaPha($data, $id);
        }
    }
    if ($flag) {
        echo "</li></ul>";
    }
}
