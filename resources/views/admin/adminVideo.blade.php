@extends('layouts.headerAdmin')

@section('title', 'Administrador Video')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="paginas">
        <h3>Citas Medicas</h3>
        <a href="{{ route('agregarVideo.index', ['nombreUsuario' => $nombreUsuario]) }}"
            class="btn-agregar-usuario">
            Agregar Citas Medica
        </a>
    </div>
    <hr class="linea-horizontal">
    <div class="contenedor-principal">
        <div class="contenedor">

            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>ESPECIALIDAD</th>
                            <th>FECHA DE AGENDACIÓN</th>
                            <th>CEDULA ASOCIADA</th>
                            <th>NOMBRE DEL PACIENTE</th>
                            <th>GESTIONAR</th>
                            <th>SOLICITUD</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $video)
                            <tr>
                                <td>{{ $video->nombre }}</td>
                                <td>{{ $video->urlVideo }}</td>
                                <td>{{ $video->duracionMin }}</td>
                                <td>{{ $video->nombreCurso }}</td>
                                <td>
                                    <form action="{{ route('actualizarVideo.index', $video->id) }}" method="GET">
                                        @csrf
                                        <input type="hidden" name="idMaterialLectura"
                                            value="{{ $video->idVideo }}">
                                        <input type="hidden" name="recursos_idCursos"
                                            value="{{ $video->recursos_idCursos }}">
                                        <div class="botonEditar">
                                            <button type="submit">
                                                <span class="fas fa-check"></span>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('adminVideo.destroy', $video->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="idVideo"
                                            value="{{ $video->idVideo }}">
                                        <input type="hidden" name="recursos_idCursos"
                                            value="{{ $video->recursos_idCursos }}">
                                        <button class="botonEliminar" type="submit">
                                            <span class="fas fa-times"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-body">
                {{$datos->links()}}
            </div>
        </div>
    @endsection
