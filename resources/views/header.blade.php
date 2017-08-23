<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css') }}">
    <style>
        @media (max-width: 576px) {
            nav .container {
                width: 100%;
            }
        }
        .tree {
            min-width: 2000px;
            max-height: 500px;
            margin: 0 50px;
        }

        .tree ul {
            padding-top: 20px;
            position: relative;

            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        .tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;

            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }
        /*We will use ::before and ::after to draw the connectors*/

        .tree li::before,
        .tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 1px solid #ccc;
            width: 50%;
            height: 20px;
        }

        .tree li::after {
            right: auto;
            left: 50%;
            border-left: 1px solid #ccc;
        }
        /*We need to remove left-right connectors from elements without
any siblings*/

        .tree li:only-child::after,
        .tree li:only-child::before {
            display: none;
        }
        /*Remove space from the top of single children*/

        .tree li:only-child {
            padding-top: 0;
        }
        /*Remove left connector from first child and
right connector from last child*/

        .tree li:first-child::before,
        .tree li:last-child::after {
            border: 0 none;
        }
        /*Adding back the vertical connector to the last nodes*/

        .tree li:last-child::before {
            border-right: 1px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }

        .tree li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }
        /*Time to add downward connectors from parents*/

        .tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }

        .tree li a {
            border: 1px solid #ccc;
            padding: 5px 10px;
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma;
            font-size: 11px;
            display: inline-block;

            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;

            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }
        /*Time for some hover effects*/
        /*We will apply the hover effect the the lineage of the element also*/

        .tree li a:hover,
        .tree li a:hover+ul li a {
            background: #c8e4f8;
            color: #000;
            border: 1px solid #94a0b4;
        }
        /*Connector styles on hover*/

        .tree li a:hover+ul li::after,
        .tree li a:hover+ul li::before,
        .tree li a:hover+ul::before,
        .tree li a:hover+ul ul::before {
            border-color: #94a0b4;
        }


        th {
            height: 30px;
            text-align: center;
            font-weight: 700;
        }

        td {
            height: 50px;
        }

        .today {
            background-color: orange;
        }

        th:nth-of-type(7), td:nth-of-type(7) {
            color: blue;
        }

        th:nth-of-type(1), td:nth-of-type(1) {
            color: red;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{route('trang-chu')}}">Gia Phả</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('so-do-gia-pha')}}">Sơ đồ gia phả<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dang-ky')}}">Thêm thành viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cach-xung-ho')}}">Tra cứu cách xưng hô</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('lich')}}">Lịch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>
</nav>
