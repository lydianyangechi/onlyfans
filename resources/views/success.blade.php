@php
use Illuminate\Support\Facades\DB;

$status = $_GET['status'];
$user = Auth::user()->id;

DB::table('users')
    ->where('id', $user)
    ->update(['status' => $status]);

@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gracias, Morro! Besos, chau!</h1>
        {{ $status }}
        {{ $user }}
    </div>
@endsection
