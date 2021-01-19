@extends('admin-lte::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
@include('admin-lte::layouts.content-wrapper.breadcrumbs', [
'breadcrumbs' => [
(object) [ 'title' => 'Home', 'url' => route('home') ]
]
])
@endsection
@section('sidebar-menu')
@include('admin-lte::layouts.main-sidebar.main')
@endsection