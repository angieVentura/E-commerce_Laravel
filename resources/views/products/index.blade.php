@extends('layout.layout')
@section('content')
    @php
        $title = 'Show Products';
        $headers = ['name', 'description','price', 'state'];
        $items = $products;
        $section = 'products'
    @endphp
    @include('includes.list', ['headers', 'items', 'section'])
@endsection
