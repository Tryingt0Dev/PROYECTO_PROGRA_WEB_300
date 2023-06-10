@extends('layout.layout')
 
@section('contenido-principal')
<div class="row mt-2">
    <div class="col-8">
        <h3>Editar propuesta</h3>
    </div>
    <div class="col-4 d-flex align-items-center justify-content-end">
        <a href="{ {route('#')}}" class="btn btn-warning">Cancelar</a>
    </div>
</div>

{{-- formulario --}}
<div class="col">
    <div class="card">
        <div class="card-header bg-dark text-white">Ingrese los datos requeridos</div>
        <div class="card-body">
            <form method="POST" action="{ {route('#')}}">
                @csrf
                {{-- rut --}}
                <div class="mb-3">
                    <label for="rut" class="form-label">RUT</label>
                    <input type="text" id="rut" name="rut" class="form-control">
                </div>
                {{-- nombre --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control">
                </div>
                {{-- apellido --}}
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="form-control">
                </div>
                {{-- email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                {{-- Seleccion de archivo propuesta--}}
                <div class="mb-3">
                    <label for ="Archivo1" class="form-label">Archivo de su propuesta</label>
                    <input class="form-control" type="file" id="ArchivoPropuesta">
                    
                </div>
                {{-- propuesta --}}
                <div class="mb-3">
                    <label class="form-label" for="propuesta">estado</label>
                    <select id="propuestas" name="propuestas" class="form-control">

                        <option value="1">Pendiente</option>
                        <option value="2">En revision</option>
                        <option value="3">Aprobado</option>
                        <option value="4">Rechazado</option>
                        
                    </select>
                </div>
                {{-- botones --}}
                <div class="mb-3  gap-2 d-lg-block">
                    <button class="btn btn-warning" type="reset">Cancelar</button>
                    <button class="btn btn-success" type="submit" >Editar propuesta</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
                       <!-- @ foreach($propuestas as $propuesta)
                        < option value="{ {$propuesta->id} }">{ {$propuesta->nombre} }</ option>
                        @ endforeach-->