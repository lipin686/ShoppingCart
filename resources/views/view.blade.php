@extends('layouts.master')

@section('title', '首頁')

@section('sidebar')
@parent

<p class="text-primary">首頁</p>
@endsection

@section('content')
<div class="container bg-white">
    <div class="row">
        <div class='col-6'>
            <div class="d-inline-block pl-5" >
                <img class="pl-5" src="/storage/{{$item['pic']}}">
            </div>
        </div>
        <div class='col-6'>
            <div class='pb-4 pt-2 h4'>{{$item['title']}}</div>
            <div class='text-danger h4'>${{$item['price']}}</div>
            
            <div style='position:absolute;bottom:20;'>
                <button id='decreaseitembyone' class="" style='height:30px;width:30px;'> 
                    <b>-<b>
                </button>
                <input class="" id="itemcount" style='width:55px;' type="text" role="spinbutton" aria-valuenow="1" value="1">
                <button id='increaseitembyone'  class="" style='height:30px;width:30px;'>
                    <b>+<b>
                </button>
            </div>

            <button onclick="addcart(this)" data-itemid="{{$item['id']}}" class='btn btn-tinted btn--l' style='position:absolute;right:40%;bottom:10;'>
                <i class="fa fa-shopping-cart" style="font-size:24px"></i>加入購物車</button>
            <div style='position:absolute;right:20;bottom:20;' class=''>剩餘數量:{{$item['totle']}}</div>
        </div>
    </div>
</div>

@endsection