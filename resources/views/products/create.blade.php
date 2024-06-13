@extends('layout.layout')
@section('content')
@php
    $title  = 'Create product';
    $section = 'products';
    $route = 'store';
    $object = '';
    $method = 'post'
@endphp
@include('includes.form', ['title', 'section', 'route','object', 'method'])
@endsection