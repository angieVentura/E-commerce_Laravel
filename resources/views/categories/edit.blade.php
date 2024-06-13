@extends('layout.layout')
@section('content')
    @php
        $title = 'Update category';
        $section = 'categories';
        $route = 'update';
        $object = $category;
        $method = 'put';
    @endphp
    @include('includes.form', ['title', 'section', 'route', 'object', 'method'])
@endsection
