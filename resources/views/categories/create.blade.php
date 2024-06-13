@extends('layout.layout')
@section('content')
@php
    $title  = 'Create categories';
    $section = 'categories';
    $route = 'store';
    $object = '';
    $method = 'post'
@endphp
@include('includes.form', ['title', 'section', 'route','object', 'method'])
@endsection