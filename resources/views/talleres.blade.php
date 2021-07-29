@extends('layouts.plantilla')
@section('title','Talleres - Instaroma')

@section('content')

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Talleres</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">            
            <div class="col-md-3 col-sm-6 col-lg-12">
                <div class="taller">
                    <img src="{{asset('images/taller.png')}}" alt="">
                    <h2>Taller de jabones por SolTv</h2>
                    <p>Todos los viernes a las 2:00 p.m. te invitamos a vernos en Como en Casa donde dictamos 1 hora de clases didácticas por solTV, donde te enseñamos el proceso
                        de creación de los jabones artesanales en base de queratina y colorisantes naturales.</p>
                    <p>¡Te esperamos!</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
