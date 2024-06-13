@extends('layout.layout')
@section('content')
    @php
        $title = 'Show Brands';
        $headers = ['name'];
        $items = $brands;
        $section = 'brands'
    @endphp
    @include('includes.list', ['headers', 'items', 'section'])
@endsection
