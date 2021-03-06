@extends('admin.template')
@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                PRODUCTOS <small>[Agregar producto]</small>
            </h1>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="page">
                    @include('admin.partials.errors')
                    {!! Form::open(['route' => ['admin.products.update', $product->id], 'method' => 'PUT', 'files' => 'true']) !!}
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            {!! Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre...']) !!}
                        </div>
                        <div class="form-group">
                            <label for="name">Precio:</label>
                            {!! Form::number('price', $product->price, ['class' => 'form-control', 'placeholder' => 'Ingresa el precio.']) !!}
                        </div>
                        <div class="form-group">
                            <label for="description">Descripcion:</label>
                            {!! Form::textarea('description', $product->description, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="extract">Pequeña Desc:</label>
                            {!! Form::text('extract', $product->extract, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="name">Categoría: </label>
                            {!! Form::select('category_id', $categories, $product->category->id ,['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="image">Imagen:</label>
                            {!! Form::file('image', ['class' => 'form-control']) !!}

                        </div>
                        

                            <div class="form-group">
                            <label for="visible">Visible: </label>
                            <select name="$product->visible">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                            {!! Form::select('visible',['class' => 'form-control']) !!}
                          </select>
                          </div>

                        <div class="form-group">
                            <label for="name">Cantidad disponible:</label>
                            {!! Form::number('quantity', $product->quantity, ['class' => 'form-control', 'placeholder' => 'Ingresa la cantidad.']) !!}
                        </div>

                        

                        <div class="form-group">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-warning">Regresar</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop