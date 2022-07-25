@extends('layouts.master')

@section('title', '首頁')

@section('sidebar')
    @parent

    <p class="text-primary">首頁</p>
@endsection

@section('content')
    <p>首頁內容</p>
@endsection