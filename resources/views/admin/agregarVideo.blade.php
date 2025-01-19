@extends('layouts.headerAdmin')

@section('title', 'Agregar Material Lectura')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">

        <div class="contenedor">

            <div class="paginas">
                <h3>Citas Medicas</h3>
            </div>
            <hr class="linea-horizontal">

            <br>
            <section>
                <form action="{{ route('agregarVideo.store') }}" method="POST">
                    @csrf
                    <div class="grupoInput">
                        <label for="nombre">Especialidad</label>
                        <select id="nombre" name="nombre">
                            <option>Medicina General</option>
                            <option>Pediatria</option>
                            <option>Ginecologia y Obstetricia</option>
                            <option>Cardiologia</option>
                            <option>Traumatología y Ortopedia</option>
                            <option>Centro Qui.</option>
                        </select>
                    </div>
                    <div class="grupoInput">
                        <label for="url">Fecha de Agendación</label>
                        <input type="date" id="url" name="url" placeholder="Seleccione la fecha a agendar">
                        @error('url')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="duracion">Cedula Asociada</label>
                        <input type="text" id="duracion" name="duracion" placeholder="Ingrese la cedula asociada">
                        @error('duracion')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="idCurso">Paciente Asociado</label>
                        <select name="idCurso" id="idCurso">
                            @foreach ($cursos as $curso)
                            <option value="{{$curso->id}}">{{$curso->nombreCurso}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grupoInput">
                        <button type="submit">Agregar</button>
                    </div>
                </form>

            </section>

        </div>
    </div>
@endsection
