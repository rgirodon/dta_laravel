@extends('layout')

@section('title', 'Hello')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{ $msg }} {{ $name }} !
        </div>
    </div>
</div>
@endsection
