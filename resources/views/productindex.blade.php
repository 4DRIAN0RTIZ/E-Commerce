@extends('master')


@section('content')

@isset($mensaje)
<br><br>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{$mensaje}}
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>    
@endisset

@include('productdata');

@endsection
