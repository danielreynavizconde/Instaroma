@extends('layouts.plantilla')
@section('title', $producto->nombre . ' - Instaroma')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Detalle</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <!--
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Search Products</h2>
                    <form action="">
                        <input type="text" placeholder="Search products...">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Products</h2>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>
                    </div>
                </div>
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Recent Posts</h2>
                    <ul>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                    </ul>
                </div>
            </div>-->
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="{{route('home')}}">Inicio</a>
                        <a href="{{route('productos.index')}}">Productos</a>
                        <a href="">{{$producto->nombre}}</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="{{$producto->imagen}}" alt="">
                                </div>

                                <div class="product-gallery">
                                    <img src="{{$producto->imagen}}" alt="">
                                    <img src="{{$producto->imagen}}" alt="">
                                    <img src="{{$producto->imagen}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <form action="{{route('cart.store')}}" method="POST">
                                @csrf
                                <div class="product-inner">
                                    <input type="text" name="id" style="display: none" value="{{$producto->id}}">
                                    <h2 name="nombre" class="product-name">{{$producto->nombre}}</h2>
                                    <!--<div class="product-inner-category">
                                        <p>Categoria: <a href="">{{$producto->id_categoria}}</a></p>
                                    </div>-->
                                    <div class="product-inner-price">
                                        <ins>S/.<span name="precio">{{$producto->precio_actual}}</span></ins> <del>S/.{{$producto->precio_anterior}}</del>
                                    </div>
                                    <div class="quantity">
                                        <div class="handle-counter col col-sm-5" id="handleCounter">
                                            <span class="counter-minus btn btn-primary">-</span>
                                            <input class="cantidad" name="cantidad" type="text" value="3">
                                            <span class="counter-plus btn btn-primary">+</span>
                                        </div>
                                        <div class="col col-sm-7 p-0">
                                            <input type="submit" class="add_to_cart_button" value="Añadir al carrito">
                                        </div>                                        
                                    </div>
                                    <div class="descripcion">
                                        <h2>Descripción del Producto</h2>
                                        <p>{{$producto->descripcion}}</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
