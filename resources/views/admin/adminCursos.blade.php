    @extends('layouts.headerAdmin')

    @section('title', 'Administrador Cursos')

    @section('usuario')
        {{ $nombreUsuario }}
    @endsection

    @section('content')
        <div class="paginas">
            <h3>Historias Clinicas</h3>
            <a href="{{ route('agregarCurso.index', ['nombreUsuario' => $nombreUsuario]) }}" 
                class="btn-agregar-usuario">
                Agregar Historia Cli.
            </a>
        </div>
        <hr class="linea-horizontal">
        <div class="contenedor-principal2">

                <div class="table table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>NOMBRE DEL PACIENTE</th>
                                <th>CEDULA ASOCIADA</th>
                                <th>N° HISTORIA CLINICA</th>
                                <th>ESPECIALIDAD</th>
                                <th>REVISAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $cursos)
                                <tr>
                                    <td>{{ $cursos->nombreCurso }}</td>
                                    <td>{{ $cursos->descripCurso }}</td>
                                    <td>{{ $cursos->creador }}</td>
                                    <td>{{ $cursos->nivelCurso }}</td>
                                    <td>
                                        <form action="{{ route('actualizarCurso.index', $cursos->id) }}">
                                            <div class="botonEditar">
                                                <button>
                                                    <iconify-icon icon="tabler:eye-up"></iconify-icon>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('adminCurso.destroy', $cursos->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="botonEliminar" type="submit">
                                                <span class="fas fa-trash"></span>
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
