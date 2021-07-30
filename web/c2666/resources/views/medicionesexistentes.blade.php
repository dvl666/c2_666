@extends('layouts.master')

@section('contenido')
    <div class="row">
        <div class="col12 12-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Fecha</td>
                        <td>Hora</td>
                        <td>Medidor</td>
                        <td>Valor</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <thead id="tbody-consola">

                </thead>
                <tbody id="tbody-consola">

                </tbody>
            </table>
        </div>
    </div>   
@endsection