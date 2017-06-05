@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="css/stylemapa.css">

            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                <h1>
                  Agregar Imagen
                  <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">Dashboard</li>
                </ol>
              </section>
                                <!-- Main content -->
              <section class="content">
                <div class="box box-primary"style="width: 100%">
                              <div class="box-header with-border">
                                <h3 class="box-title">Formulario para publicar Imagen</h3>
                              </div><!-- /.box-header -->
                              <!-- form start -->
                              <form role="form">
                                <div class="box-body">
                                  <div class="form-group">
                                    <label>Nombre de la Especie</label>
                                    <input type="text" class="form-control" placeholder="Nombre" >
                                  </div>
                                  <div class="form-group">
                                    <label>Nombre Cientifico</label>
                                    <input type="text" class="form-control" placeholder="Nombre">
                                  </div>
                                        <div class="form-group">
                                          <label>Area de Adscripción</label>
                                          <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Default</option>
                                            <option>Area 1</option>
                                            <option>Area 2</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label>Lugar</label>
                                          <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Default</option>
                                            <option>Lugar 1</option>
                                            <option>Lugar 2</option>
                                          </select>
                                        </div>

                                        <div class="form-group">
                                          <label>Ubicación</label>
                                          <input type="text" name="ubicacion" id="coords" class="form-control" placeholder="coordenadas"readonly/>

                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="initMap()">Mapa</button>
                                        </div>


                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">

                                                <h4 class="modal-title">Ubicación</h4>
                                              </div>
                                              <div id="map" class="panel body">

                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                              </div>
                                            </div>

                                          </div>
                                        </div>


                                        <div class="form-group">
                                          <label>Fecha</label>
                                          <div class="input-group">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>

                                            <input type="date" class="form-control" placeholder="DD/MM/YYYY" type="text">
                                          </div><!-- /.input group -->
                                        </div>
                                            <div class="form-group">
                                              <label>Descripción</label>
                                              <textarea class="form-control" rows="3" placeholder="Descripción"></textarea>
                                            </div>
                                        <div class="form-group">
                                          <label>Categoría</label>
                                          <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Default</option>
                                            <option>Categoria 1</option>
                                            <option>Categoría 2</option>
                                          </select>
                                        </div>

                                  <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Example block-level help text here.</p>
                                  </div>

                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                  <button type="submit" class="btn btn-primary">Publicar Imagen</button>
                                </div>
                              </form>
                            </div>


              </section><!-- /.content -->

            </div><!-- /.content-wrapper -->
@stop

@section('finalbody')
<script src="js/localiza2.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVZqDBRMRB0pIc6ygIY-a5-vwB1MoEu7A"></script>

@stop
