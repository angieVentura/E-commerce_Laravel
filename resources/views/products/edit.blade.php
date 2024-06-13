@extends('layout.layout')
@section('content')
@php
    $title  = 'Update product';
    $section = 'products';
    $route = 'update';
    $object = $product;
    $method = 'put'
@endphp
@include('includes.form', ['title', 'section', 'route','object', 'method'])
@endsection