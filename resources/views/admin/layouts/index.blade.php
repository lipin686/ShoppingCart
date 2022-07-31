@extends('admin.layouts.master')

@section('title', 'admin首頁')

@section('sidebar')
    @parent

    <p class="text-primary">admin頁面</p>
@endsection

@section('content')
    <p>admin首頁內容</p>
@endsection