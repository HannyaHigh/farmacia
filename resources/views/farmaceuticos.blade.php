@extends('index')

@section('contenido')

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-5 text-black">Registro de Farmacos</h2>
            </div>
            <div class="col-md-12">

                <form action="{{route('guardarFarmacos')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group">
                            <label for="id">Clave del usuario:
                            </label>
                            <input type="text" name="id" id="id" value="{{$nextid}}" readonly="readonly" class="form-control" placeholder="Clave empleado">
                            @if($errors->first('id'))
                            <p class="text-danger">{{$errors->first('id')}}</p>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="nombre" class="text-black">Nombre del farmaco:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                                @if($errors->first('nombre'))
                                <p class="text-danger">{{$errors->first('nombre')}}</p>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label for="codigo" class="text-black">Codigo:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="codigo" name="codigo">
                                @if($errors->first('codigo'))
                                <p class="text-danger">{{$errors->first('codigo')}}</p>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label for="fecha_llegada" class="text-black">Fecha de llegada: </label>
                                <input type="date" class="form-control" id="fecha_llegada" name="fecha_llegada" required="">
                            </div>
                            <div class="col-md-3">
                                <label for="fecha_caducidad" class="text-black">Fecha de caducidad: </label>
                                <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="cantidad" class="text-black">Cantidad:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="cantidad" name="cantidad">
                                @if($errors->first('cantidad'))
                                <p class="text-danger">{{$errors->first('cantidad')}}</p>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="tipo_producto" class="text-black">Tipo de producto:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="tipo_producto" name="tipo_producto">
                                @if($errors->first('tipo_producto'))
                                <p class="text-danger">{{$errors->first('tipo_producto')}}</p>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="precio" class="text-black">Precio:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="precio" name="precio">
                                @if($errors->first('precio'))
                                <p class="text-danger">{{$errors->first('precio')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="descripcion" class="text-black">Descripción: <span class="text-danger">*</span></label>
                                <textarea id="descripcion" name="descripcion" rows="10" cols="50">Descripcion breve del producto.</textarea>
                                @if($errors->first('descripcion'))
                                <p class="text-danger">{{$errors->first('descripcion')}}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <label for="img">Foto de perfil:
                                        <span class="text-danger">*</span>
                                        <input type="file" name="img" id="img" class="form-control" placeholder="Subir foto">
                                    </label>
                                    @if($errors->first('img'))
                                    <p class="text-danger">{{$errors->first('img')}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar Nuevo Cliente">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-black mb-4">Locales</h2>
            </div>
            <div class="col-lg-4">
                <div class="p-4 bg-white mb-3 rounded">
                    <span class="d-block text-black h6 text-uppercase">Villa Cuahutemoc</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-4 bg-white mb-3 rounded">
                    <span class="d-block text-black h6 text-uppercase">Xonacatlan</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-4 bg-white mb-3 rounded">
                    <span class="d-block text-black h6 text-uppercase">Temoaya</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
            </div>
        </div>
    </div>

</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

                <div class="block-7">
                    <h3 class="footer-heading mb-4">Acerca de: <strong class="text-primary">FarmaciasGi</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                        sed dolorum excepturi iure eaque, aut unde.</p>
                </div>

            </div>
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Navigation</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Supplements</a></li>
                    <li><a href="#">Vitamins</a></li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
                </ul>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">Contact Info</h3>
                    <ul class="list-unstyled">
                        <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                        <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                        <li class="email">emailaddress@domain.com</li>
                    </ul>
                </div>

                @stop