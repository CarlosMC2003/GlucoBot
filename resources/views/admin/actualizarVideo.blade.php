@extends('layouts.headerAdmin')

@section('title', 'Actualizar Video')

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

            <section>
                <form action="{{ route('actualizarVideo.update', $video->id) }}" method="POST">

                    @csrf
                    @method('put')

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
                        <input type="date" id="url" name="url" required value="{{$video->urlVideo}}">
                        @error('descripCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="duracion">Cedula Asociada</label>
                        <input type="text" id="duracion" name="duracion" required value="{{$video->duracionMin}}">
                        @error('descripCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <button type="submit">Actualizar</button>
                    </div>
                </form>

            </section>

        </div>
    </div>
@endsection
