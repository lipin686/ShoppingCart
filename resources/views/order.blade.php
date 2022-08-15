@extends('layouts/master')

@section('content')
<section class="">
    <h1 class="">訂單頁面</h1>
    <h3 class="">訂單資訊</h3>
    <table class="">
        <thead>
            <th class="">項目</th>
            <th class="">價錢</th>
            <th class="">數量</th>
            <th class="">價錢</th>
        </thead>
        <tbody class="">
            @foreach ($items as $item)
            <tr>
                <td class="">{{$item['item']['title']}}</td>
                <td class="">{{$item['item']['price']}}$</td>
                <td class="">{{$item['qty']}}</td>
                <td class="">{{$item['qty'] * $item['item']['price']}}$</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <h3 class="">使用者資訊</h3>

    <form method="POST" action="/orders" class="">
        @csrf
        <div class="">
            <label class="" for="name">
                名稱:
            </label>
            <input class="" name="name" id="name" type="text" placeholder="name">
        </div>
        <div class="">
            <label class="" for="phone">
                電話:
            </label>
            <input class="" name="phone" id="phone" type="phone" placeholder="phone">
        </div>
        <div class="">
            <label class="" for="address">
                地址:
            </label>
            <input class="" name="address" id="address" type="address" placeholder="address">
        </div>
        <div class="">
            <button class="" type="submit">
                送出訂單
            </button>
        </div>
        @include('layouts.error')
    </form>
</section>
@endsection