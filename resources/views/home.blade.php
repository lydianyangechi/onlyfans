@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mb-5">
                    <div class="card-header">
                        Suscripción por un mes
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido al contenido privado de Paulina Camero</h5>
                        <p class="card-text">Para poder accesar al contenido déberas de realizar un pago de $220 MXN con
                            tarjeta de crédito o débito a tráves de la pasarela de pago Stripe</p>
                        {{-- <p class="text-success">Suscripción activa</p> --}}

                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="priceId" value="price_1JQvefLU2PCFol22ryMfAPki" />
                            <button class="btn btn-primary" type="submit">Suscribirme</button>
                        </form>

                    </div>
                </div>

                {{-- {{ route('success') }} --}}

                {{-- {{ Auth::user()->status }} --}}

                @if (Auth::user()->status == 'activo')
                    <div class="card">
                        <div class="card-header">Feed de fotos</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>

                        <div class="d-flex justify-content-center align-items-center my-3"
                            style="height: 500px; background-color: rgba(255,0,0,0.1);">
                            <div class="h-85 d-inline-block" style="width: 300px; background-color: rgba(0,0,255,.1)">
                                <img class="img-fluid" src="{{ asset('img/1629503170.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center align-items-center my-3"
                            style="height: 500px; background-color: rgba(255,0,0,0.1);">
                            <div class="h-85 d-inline-block" style="width: 300px; background-color: rgba(0,0,255,.1)">
                                <img class="img-fluid" src="{{ asset('img/1629496876.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center align-items-center my-3"
                            style="height: 500px; background-color: rgba(255,0,0,0.1);">
                            <div class="h-85 d-inline-block" style="width: 300px; background-color: rgba(0,0,255,.1)">
                                <img class="img-fluid" src="{{ asset('img/1629502908.jpg') }}" alt="">
                            </div>
                        </div>

                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
