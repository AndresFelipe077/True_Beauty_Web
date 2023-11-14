@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar categoría</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('admin.options.update', $option->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $option->name }}"
                        placeholder="Nombre del producto">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Tipo</label>
                    <input type="text" class="form-control" name="type" id="type" value="{{ $option->type }}"
                        placeholder="Nombre del producto">

                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">Actualizar producto</button>
            </form>


        </div>

    </div>

@stop
