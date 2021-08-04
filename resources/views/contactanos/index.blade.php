@extends('layouts.plantilla')
@section('title','Contacto - Instaroma')

@section('content')

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Contacto</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="datos-contacto">
                    <h2><i class="fa fa-map-marker"></i>Local Trujillo</h2>
                    <p>Zela 311, 2do nivel. Trujillo</p>
                    <h2><i class="fa fa-phone "></i>Telefono</h2>
                    <p>(51) 945 160 000</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="formulario-contacto">
                    <h2>Envíanos tu Mensaje</h2>
                    <form action="" style="display: grid">
                        <input class="col-md-6" type="text" placeholder="Escribe tu nombre" style="background: none;border: 2px solid #2b2b2b;
                        color: #474747;">
                        <input class="col-md-6" type="text" placeholder="Escribe tu email" style="background: none;border: 2px solid #2b2b2b;
                        color: #474747;">
                        <input class="col-md-6" type="text" placeholder="Escribe tu telefono" style="background: none;border: 2px solid #2b2b2b;
                        color: #474747;">
                        <textarea name="" id="" cols="30" rows="10" style="background: none;border: 2px solid #2b2b2b;
                        color: #474747;">¿Quieres dejar un mensaje?</textarea>
                        <button>Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.888996887316!2d-79.02348468464655!3d-8.112783883422564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d80f0cdaec7%3A0x662048bf0d4b749f!2sFrancisco%20de%20Zela%20311%2C%20Trujillo%2013001!5e0!3m2!1ses-419!2spe!4v1626465384176!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
