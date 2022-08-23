@extends('admin.layouts.master')

@section('content')
<div class="container pt-5">
    <table class="table" id='usertable'>
        <thead>
            <tr>
                <th scope="col">使用者名稱</th>
                <th scope="col">Email</th>
                <th scope="col">Created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td >{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                    <button class="btn" data-userid='{{$user->id}}' onclick='edit(this)'><i class="fa fa-pencil-square-o " aria-hidden="true"></i></button>
                    <button class="btn" data-userid='{{$user->id}}' onclick='remove(this)'><i class="fa fa-times text-danger" aria-hidden="true"></i></button>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
    
</div>
@endsection