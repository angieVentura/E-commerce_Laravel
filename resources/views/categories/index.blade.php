@extends('layout.layout')
@section('content')
    @php
        $title = 'Show Categories';
        $headers = ['parent_id','name'];
        $items = $categories;
        $section = 'categories'
    @endphp
    @include('includes.list', ['headers', 'items', 'section'])
@endsection
