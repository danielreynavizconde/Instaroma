@extends('layouts.plantilla')
@section('title','Productos - Instaroma')

@section('content')

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Productos</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">            
            @foreach ($productos as $producto)
                <div class="single-product col-md-3 col-sm-6" style="float:left; margin-bottom: 50px;">
                    <div class="product-f-image">
                        <img src="{{$producto->imagen}}" alt="">
                        <div class="product-hover">
                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Añadir</a>
                            <a href="{{route('productos.show', $producto->id)}}" class="view-details-link"><i class="fa fa-link"></i> Ver detalles</a>
                        </div>
                    </div>
                    <h2><a href="{{route('productos.show', $producto->id)}}">{{$producto->nombre}}</a></h2>
                    <div class="product-carousel-price">
                        <ins>S/.{{$producto->precio_actual}}</ins> <del>S/.{{$producto->precio_anterior}}</del>
                    </div>
                </div>
            @endforeach
        </div>
        {{$productos->links()}}        
    </div>
</div>
@endsection