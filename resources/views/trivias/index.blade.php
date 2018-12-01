@extends('layouts.app')
@section('content')

<br>
<br>
<br>
    <div class="container-fluid">
        <div class="row">
             <div class="col">
                <div class="page-header">
                    <div class="text-center">
                        <h3>Trivias</h3>
                    </div>
                </div>
                <!--End Col--> 
             </div>
            <!--End Row-->
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="table table-responsive">
                        <table class="table">
                            <thead>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Opciones</th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="/trivia/create" class="btn btn-primary">Agregar</a>
                    </div>
                </div>
                <!--End Row--> 
            </div>
        </div>

        
        <!--End Container--> 
    </div>

@endsection
