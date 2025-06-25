@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="text-2xl font-bold">Dashboard Guru</h1>
        <p>Selamat datang, {{ auth()->user()->name }}! Anda login sebagai <strong>Guru</strong>.</p>
    </div>
@endsection
