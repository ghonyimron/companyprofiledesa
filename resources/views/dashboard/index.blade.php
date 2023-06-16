@extends('layouts.app')

@section('title','Dashboard')

@section('content')
    <h2>Halo, Selamat Datang </h2>
    <h4>{{ Auth::user()->name }}</h4>
    
@endsection

