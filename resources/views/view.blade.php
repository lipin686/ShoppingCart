@extends('layouts.master')

@section('title', '首頁')

@section('sidebar')
@parent

<p class="text-primary">首頁</p>
@endsection

@section('content')
<div class="container pt-5 bg-white">
    <div class="row">
        <div class='col-6'>
            <div class="d-inline-block">
                <img src="/storage/{{$item['pic']}}">
            </div>
        </div>
        <div class='col-6' stlye='position: relative;'>
            <div class='pb-4 pt-2 h4'>{{$item['title']}}</div>
            <div class='text-danger h4'>${{$item['price']}}</div>
            <a href="/add_to_cart/{{$item['id']}}" class='btn btn-tinted btn--l' style='position:absolute;bottom:10;'>
                <i class="fa fa-shopping-cart" style="font-size:24px"></i>加入購物車</a>
            <div style='position:absolute;right:10;bottom:10;' class=' h4'>剩餘數量:{{$item['totle']}}</div>
        </div>
    </div>
</div>

@endsection