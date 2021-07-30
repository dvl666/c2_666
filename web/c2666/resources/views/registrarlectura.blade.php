@extends('layouts.master')

@section('contenido')
            <div class="row mt-5">
                <div class="col-12 col-md-8 col-lg-5 mx-auto">
                    <div class="card">
                            <div class="card-header bg-warning">
                                <span>Agregar Consola</span>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="fecha-txt" class="form-label">Fecha</label>
                                    <input type="date" id="fecha-txt" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="hora-txt" class="form-label">Hora</label>
                                    <input type="text" id="hora-txt" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="med-select" class="form-label">Medidor</label>
                                    <select id="med-select" class="form-select">
                                        
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="dir-txt" class="form-label">Direccion</label>
                                    <input type="text" id="dir-txt" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="valor-int" class="form-label">Valor</label>
                                    <input type="number" id="fecha-txt" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="tmed-select" class="form-label">Tipo de Medida</label>
                                    <select id="tmed-select" class="form-select">
                                        
                                    </select>
                                </div>
                        
                            </div>
                            <div class="card-footer d-grid gap-1">
                                <button id="registrar-btn" type="button" class="btn btn-primary">Registrar</button>
                            </div>
                    </div>
                </div>
            </div>       








@endsection
@section('javascript')
    <script src="{{asset('js/registrarlectura.js')}}"></script>
    
@endsection