@extends('master')
@section('content')
    <div class="container-fluid" style="overflow: auto">
        <div class="tree">
            {{inGiaPha($data)}}
        </div>
    </div>
@endsection