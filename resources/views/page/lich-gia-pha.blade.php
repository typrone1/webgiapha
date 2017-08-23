<?php
date_default_timezone_get('Asia/Tokyo');

if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    $ym = date('Y-m');
}
$timestamp = strtotime($ym, "-01");
if ($timestamp == false) {
    $timestamp = time();
}

$today = date('Y-m-d', time());
$html_title = 'Tháng '.date('m', $timestamp) .' năm '. date('Y', $timestamp);


$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp) - 1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp) + 1, 1, date('Y', $timestamp)));

$day_count = date('t', $timestamp);
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));


$weeks = array();
$week = '';

$week .= str_repeat('<td></td>', $str);
for ($day = 1; $day <= $day_count; $day++, $str++) {
    $date = $ym . '-' . $day;
    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
    if ($str % 7 == 6 || $day == $day_count) {
        if ($day == $day_count) {
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
        $weeks[] = '<tr>' . $week . '</tr>';
        $week = '';
    }
}
?>

@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="push-3 col-9">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <a href="?ym=<?php echo $prev ?>">
                                <</a> <?php echo $html_title ?> <a href="?ym=<?php echo $next ?>">></a></h3>
                    </div>
                    <div class="card-block">
                        <table class="table table-bordered">
                            <tr>
                                <th>CN</th>
                                <th>T2</th>
                                <th>T3</th>
                                <th>T4</th>
                                <th>T5</th>
                                <th>T6</th>
                                <th>T7</th>
                            </tr>
                            <?php
                            foreach ($weeks as $week) {
                                echo $week;
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <br>

            </div>
        </div>
    </div>
@endsection