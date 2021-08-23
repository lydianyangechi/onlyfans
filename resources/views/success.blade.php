@php
use Illuminate\Support\Facades\DB;

$status = $_GET['status'];
$session = $_GET['session_id'];
$user = Auth::user()->id;

DB::table('users')
    ->where('id', $user)
    ->update(['status' => $status]);

@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="my-3 text-center">¡Gracias, {{ Auth::user()->name }}!, tu suscripción se activo correctamente.
                </h1>
                <h4>{{ $session }}</h3>
            </div>
        </div>
    </div>
@endsection
