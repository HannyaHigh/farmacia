@extends('index')

@section('contenido')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-5 text-black">Nuevo Trabajador</h2>
            </div>
            <div class="col-md-12">

                <form action="{{route('guardarVendedor')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group">
                            <label for="idvendedor">Clave del usuario:
                            </label>
                            <input type="text" name="idvendedor" id="idvendedor" value="{{$nextid}}" readonly="readonly" class="form-control" placeholder="Clave empleado">
                            @if($errors->first('idvendedor'))
                            <p class="text-danger">{{$errors->first('idvendedor')}}</p>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="nombre" class="text-black">Nombre:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                                @if($errors->first('nombre'))
                                <p class="text-danger">{{$errors->first('nombre')}}</p>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="app" class="text-black">Apellido Paterno:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="app" name="app">
                                @if($errors->first('app'))
                                <p class="text-danger">{{$errors->first('app')}}</p>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="apm" class="text-black">Apellido Mateno:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="apm" name="apm">
                                @if($errors->first('apm'))
                                <p class="text-danger">{{$errors->first('apm')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="fechanac" class="text-black">Fecha de nacimiento: </label>
                                <input type="date" class="form-control" id="fechanac" name="fechanac">
                            </div>
                            <div class="col-md-4">
                                <label for="dni">Sexo:</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="sexo1" name="sexo" value="M" class="custom-control-input" checked="checked">
                                    <label class="custom-control-label" for="sexo1">Masculino</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="sexo2" name="sexo" value="F" class="custom-control-input">
                                    <label class="custom-control-label" for="sexo2">Femenino</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="idcargo" class="control-label">Tipo de Usuario:</label>
                                <select name="idcargo" class="form-control" id="idcargo">
                                    @foreach($cargos as $tipo)
                                    <option value="{{$tipo->idcargo}}">{{$tipo->cargo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="">
                                @if($errors->first('email'))
                                <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="contra" class="text-black">Contraseña: </label>
                                <input type="password" class="form-control" id="contra" name="contra">
                                @if($errors->first('contra'))
                                <p class="text-danger">{{$errors->first('contra')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar Vendedor">
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