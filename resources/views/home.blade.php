@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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

                    <div class="container">

                        <img class="img-fluid my-3" src="{{ asset('img/1629496876.jpg') }}" alt="">
                        <img class="img-fluid my-3" src="{{ asset('img/1629498386.jpg') }}" alt="">
                        <img class="img-fluid my-3" src="{{ asset('img/1629502908.jpg') }}" alt="">
                        <img class="img-fluid my-3" src="{{ asset('img/1629503170.jpg') }}" alt="">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
