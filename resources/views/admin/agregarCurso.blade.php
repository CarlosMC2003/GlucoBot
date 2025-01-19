@extends('layouts.headerAdmin')

@section('title', 'Agregar Curso')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <div class="contenedor-principal">

        <div class="contenedor">

            <div class="paginas">
                <h3>Historias Clinicas</h3>
            </div>
            <hr class="linea-horizontal">

            <section>
                <form action="{{ route('agregarCurso.store') }}" method="POST">
                    @csrf
                    <div class="grupoInput">
                        <label for="nombreCurso">Nombre del Paciente</label>
                        <input type="text" id="nombreCurso" name="nombreCurso" placeholder="Ingrese el nombre del paciente">
                        @error('nombreCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="descripCurso">Cedula Asociada</label>
                        <input type="text" id="descripCurso" name="descripCurso" placeholder="Ingrese la cedula del paciente">
                        @error('descripCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="creador">N° Historia Clinica</label>
                        <input type="text" name="creador" id="creador" placeholder="Ingrese la numero de historia clinica">
                        @error('creador')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grupoInput">
                        <label for="nivelCurso">Especialidad</label>
                        <select name="nivelCurso" id="nivelCurso">
                            <option>Medicina General</option>
                            <option>Pediatria</option>
                            <option>Ginecologia y Obstetricia</option>
                            <option>Cardiologia</option>
                            <option>Traumatología y Ortopedia</option>
                            <option>Centro Qui.</option>
                        </select>
                        @error('nivelCurso')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <h5>Cargar documento PDF</h5>
                            <div class="file-upload-container" id="uploadContainer">
                                <div class="upload-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 16v-9"></path>
                                        <polyline points="9 7 12 4 15 7"></polyline>
                                        <path d="M21 16v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="17 16 12 11 7 16"></polyline>
                                    </svg>
                                </div>
                                <p>Elija un archivo PDF para cargar</p>
                            </div>
                            <input type="file" id="archivo" name="archivo" accept="application/pdf">
                        </div>

                    <div class="grupoInput">
                        <button type="submit">Guardar</button>
                    </div>
                </form>

            </section>

        </div>
        <script>
            // Asegúrate de que el DOM esté cargado antes de ejecutar el código
document.addEventListener('DOMContentLoaded', function () {
    const uploadContainer = document.getElementById('uploadContainer');
    const fileInput = document.getElementById('archivo');

    // Maneja el clic en el contenedor
    uploadContainer.addEventListener('click', function () {
        fileInput.click(); // Simula un clic en el input

        // Acción adicional después de hacer clic en el contenedor
        console.log('El contenedor fue clickeado y se intentó cargar un archivo.');
        
        // Ejemplo: Cambiar el texto o estilo del contenedor después del clic
        const uploadMessage = uploadContainer.querySelector('p');
        uploadMessage.textContent = 'Archivo seleccionado. Por favor, continúe.';
        uploadContainer.style.borderColor = 'green';
    });

    // Maneja el cambio en el input de archivo (archivo seleccionado)
    fileInput.addEventListener('change', function () {
        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            console.log('Archivo seleccionado:', fileName);

            // Actualiza el texto del contenedor con el nombre del archivo
            const uploadMessage = uploadContainer.querySelector('p');
            uploadMessage.textContent = `Archivo: ${fileName}`;
        }
    });
});

        </script>

    @endsection
