@extends('layouts.master')

@section('title', 'Post Page')

@section('sidebar')
    @parent

    <p class="text-primary">This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection