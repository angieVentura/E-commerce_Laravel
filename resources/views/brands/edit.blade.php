@extends('layout.layout')
@section('content')
@php
    $title  = 'Update brand';
    $section = 'brands';
    $route = 'update';
    $object = $brand;
    $method = 'put'
@endphp
@include('includes.form', ['title', 'section', 'route','object', 'method'])
@endsection