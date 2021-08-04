@extends('layouts.plantilla')
@section('title','Instaroma')

@section('content')

    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                @foreach ($sliders as $slider)
                    <li>
                        <img src="{{$slider->url}}" alt="Slide 1">
                        <!--
                        <div class="caption-group">
                            <h2 class="caption title">
                                Molde de Jabón <span class="primary"><strong>de Silicona</strong></span>
                            </h2>
                            <h4 class="caption subtitle">con aroma a menta</h4>
                            <a class="caption button-radius" href="{{route('productos.index')}}"><span class="icon"></span>Comprar ahora!</a>
                        </div>-->
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- ./Slider -->
</div> <!-- End slider area -->


<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title"><b style="color: red">Últimas tendencias</b></h2>
                    <div class="product-carousel" class="display-flex">
                        @foreach ($productosTendencias as $producto)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{$producto->imagen}}" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Añadir</a>
                                        <a href="{{route('productos.show', $producto->id)}}" class="view-details-link">Ver detalles</a>
                                    </div>
                                </div>
                                <h2><a href="{{route('productos.show', $producto->id)}}">{{$producto->nombre}}</a></h2>
                                <div class="product-carousel-price">
                                    <ins>S/.{{$producto->precio_actual}}</ins> <del>S/.{{$producto->precio_anterior}}</del>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title"><b style="color: red">Productos destacados</b></h2>
                    <div class="product-carousel">
                        @foreach ($productosDestacados as $producto)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{$producto->imagen}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Añadir</a>
                                    <a href="{{route('productos.show', $producto->id)}}" class="view-details-link">Ver detalles</a>
                                </div>
                            </div>

                            <h2><a href="{{route('productos.show', $producto->id)}}">{{$producto->nombre}}</a></h2>

                            <div class="product-carousel-price">
                                <ins>S/.{{$producto->precio_actual}}</ins> <del>S/.{{$producto->precio_anterior}}</del>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->
<div>
    <img style="width: 100%;" src="{{asset('images/horario.png')}}" alt="">
</div>
@endsection
