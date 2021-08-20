@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear un nuevo post</div>

                    <div class="card-body">
                        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Imagen</label>
                                <input type="file" class="form-control" name="img" id="" aria-describedby="helpId"
                                    placeholder="">
                                <small id="helpId" class="form-text text-muted">Seleciona la imagen que deseas subir</small>
                            </div>
                            {{-- <div class="form-group">
                              <label for="">Descripción</label>
                              <textarea class="form-control" name="" id="" aria-describedby="helpId" rows="3"></textarea>
                              <small id="helpId" class="form-text text-muted">Escribe una breve descripción del contenido</small>
                            </div> --}}
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Enviar" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
