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
            echo '<li><a href="chi-tiet-ho-so/'.$val['id'].'">' . $val['id'] . '–' . $val['ho_ten'] . '</a>';
            $id = $val['id'];
            inGiaPha($data, $id);
        }
    }
    if ($flag) {
        echo "</li></ul>";
    }
}
