@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear un nuevo post</div>

                    <div class="card-body">
                        <form action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Imagen</label>
                                <input type="file" class="form-control" name="" id="" aria-describedby="helpId"
                                    placeholder="">
                                <small id="helpId" class="form-text text-muted">Seleciona la imagen que deseas subir</small>
                            </div>
                            <div class="form-group">
                              <label for="">Descripción</label>
                              <textarea class="form-control" name="" id="" aria-describedby="helpId" rows="3"></textarea>
                              <small id="helpId" class="form-text text-muted">Escribe una breve descripción del contenido</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
