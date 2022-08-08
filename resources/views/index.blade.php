@extends('layouts.master')

@section('title', '首頁')

@section('sidebar')
@parent

<p class="text-primary">首頁</p>
@endsection

@section('content')
<div class="container">
    <div class="row row-cols-3 ">
        @foreach ($items as $item)
        
        <div class="pb-5 p-2">
            <div class='bg-light'>
                <img src="/images/{{$item->pic}}" class="img-responsive center-block">
                <div class='pb-4 pt-2 h4'>{{$item->title}}</div>
                <div class='text-danger h4'>${{$item->price}}</div>
            </div>
        </div>
        @endforeach



    </div>
</div>

@endsection