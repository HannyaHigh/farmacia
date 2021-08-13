@extends('index')

@section('contenido')
<!-- <div class="icons">
    <a href="cart.html" class="icons-btn d-inline-block bag">
        <span class="icon-shopping-bag"></span>
        <span class="number">2</span>
    </a>
    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
</div> -->

<nav class="nav justify-content-end">
    @if(session('carrito'))
    <a href="{{url('carrito')}}" class="nav-link">
        <span class="icon-shopping-bag">            
        </span>
        <span class="number">{{ count(session('carrito'))}} Articulo(s)</span>
    </a>
    @else
    <a href="#" class="nav-link">
        El carrito contenido: 0 Articulos
    </a>
    @endif
</nav>
<br>
<br>

<div class="container">
    @if($message = Session::get('success'))
    <div class="alert alet-success alert-block">
        <strong>{{$message}}</strong>
    </div>
    @endif
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/'.$producto->img)}}" class="card-img-top" alt="..." height="300">
                <div class="card-body">
                    <h5 class="card-title"><b>ID</b>{{$producto->id}} - {{$producto->nombre}}</h5>
                    <p class="card-text">
                        <b>Existencias:</b>{{$producto->cantidad}} <br>
                        <b>Costo(c/u)</b> ${{$producto->precio}}
                    </p>
                    <a href="{{url('agregar/'.$producto->id)}}" class="btn btn-primary" role="buttom">Agregar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<footer class="bd-footer bd-light">
    <div class="container">
        <div class="row">
            <div>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-2">
                        Desarrollo para <a href="http://utvt.edomex.gob.mx">UTVT</a>, Noveno cuatrimestre de IDGS-93, 2021 &#169;
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>



<script src="{{asset('../assets/script.js')}}"></script>
@stop