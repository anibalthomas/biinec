@extends('layouts.app')
@section('header')
  <h1>
    Perfil de Usuario
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> home</a></li>

  </ol>
@endsection
@section('content')

    <div class="container">
          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">{{ Auth::user()->name }}</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{ Storage::url(Auth::user()->avatar)}}" class="img-circle img-responsive"> </div>

                    <div class=" col-md-9 col-lg-9 ">
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Department:</td>
                            <td>Programming</td>
                          </tr>
                          <tr>
                            <td>Hire date:</td>
                            <td>06/23/2013</td>
                          </tr>
                          <tr>
                            <td>Date of Birth</td>
                            <td>01/24/1988</td>
                          </tr>

                             <tr>
                                 <tr>
                            <td>Gender</td>
                            <td>Female</td>
                          </tr>
                            <tr>
                            <td>Home Address</td>
                            <td>Kathmandu,Nepal</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></td>
                          </tr>
                            <td>Phone Number</td>
                            <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                            </td>

                          </tr>

                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
                     <div class="panel-footer">
                            <a href="/usuarios/{{ auth()->id()}}/edit" data-original-title="Editar" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        </div>
              </div>
            </div>
          </div>
        </div>
@endsection
