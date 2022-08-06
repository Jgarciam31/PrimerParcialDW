<?php
@extends('plantilla')

@section('content')
    <div class="m-5">
        <h3 class="text-center">Formulario de Libro</h3>
        <form class="mx-5" method="POST" action="{{ route('guardar') }}">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="description">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="name">
            </div>
            <div class="form-group">
                <label for="description">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="year">
            </div>
            <div class="form-group">
                <label for="description">Edad</label>
                <input type="text" class="form-control" id="edad" name="ISBN">
            </div>
            <div class="form-group">
                <label for="description">Año Estudiantil</label>
                <input type="text" class="form-control" id="año" name="author">
            </div>
            <div class="form-group">
                <label for="description">Carnet</label>
                <input type="text" class="form-control" id="carnet" name="version">
            </div>
            <div class="form-group my-3">
                <label for="category_id">Categoria</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option selected disabled>Elija un Opcion</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">
                            {{ $categoria->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="p-3 text-center">
                <input type="submit" class="btn btn-primary" placeholder="Guardar"></input>
                <a href="{{ route('estudiantes') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
