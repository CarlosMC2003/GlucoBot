@extends('layouts.headerAdmin')

@section('title', 'Actualizar Curso')

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

            <div class="formulario-actualizar">
                <form action="{{ route('actualizarCurso.update', $curso->id) }}" method="POST" class="form-actualizar">

                    @csrf
                    @method('put')

                    <div class="form-row">
                        <div class="grupo-input">
                            <label for="nombreCurso">Nombre Paciente</label>
                            <input type="text" id="nombreCurso" name="nombreCurso" required value="{{$curso->nombreCurso}}" class="input-text">
                            @error('nombreCurso')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grupo-input">
                            <label for="descripCurso">Cédula Asociada</label>
                            <input type="text" id="descripCurso" name="descripCurso" required value="{{$curso->descripCurso}}" class="input-text">
                            @error('descripCurso')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grupo-input">
                            <label for="creador">Historia Clínica</label>
                            <input type="text" id="creador" name="creador" placeholder="Ingrese el nombre del creador del curso" required value="{{$curso->creador}}" class="input-text">
                            @error('creador')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grupo-input">
                            <label for="nivelCurso">Especialidad</label>
                            <select name="nivelCurso" id="nivelCurso" class="input-select">
                                <option>Medicina General</option>
                                <option>Pediatría</option>
                                <option>Ginecología y Obstetricia</option>
                                <option>Cardiología</option>
                                <option>Traumatología y Ortopedia</option>
                                <option>Centro Qui.</option>
                            </select>
                            @error('nivelCurso')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Contenedor para el botón -->
                    <div class="form-button">
                        <button type="submit" class="boton-actualizar">Actualizar</button>
                    </div>

                </form>
            </div>

            <div class="contenedor-scroll">
                <div class="scroll-box">
                    <div class="section-box">
                        <p><strong>• ANTECEDENTES PERSONALES</strong></p>
                        <p>NO REFIERE</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• ANTECEDENTES QUIRÚRGICOS</strong></p>
                        <p>NO REFIERE</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• ALERGIAS</strong></p>
                        <p>NO REFIERE</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• HÁBITOS</strong></p>
                        <p>NO REFIERE</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• TRATAMIENTOS ESPECIALES</strong></p>
                        <p>NO REFIERE</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• ANTECEDENTES GINECOLÓGICOS / OBSTÉTRICOS</strong></p>
                        <p>NO REFIERE</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• ANTECEDENTES FAMILIARES</strong></p>
                        <p>NO REFIERE</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• INDICACIONES ADICIONALES</strong></p>
                        <p>NO REFIERE</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• MOTIVO DE CONSULTA</strong></p>
                        <p>DOLOR Y ARDESON A NIVEL DE MIEMBRO INFERIOR IZQUIERDO</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• ENFERMEDAD O PROBLEMA ACTUAL</strong></p>
                        <p>PACIENTE REFIERE PRESENTAR DOLOR Y SENSACIÓN DE QUEMAZÓN A NIVEL DE MIEMBRO INFERIOR IZQUIERDO</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• EXAMEN FÍSICO</strong></p>
                        <p>PULSOS ARTERIALES PRESENTES SE EVIDENCIA PRESENCIA DE TELANEGIECTASIAS EN MODERADA CANTIDAD, NO EDEMA</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• DIAGNÓSTICOS</strong></p>
                        <p>1. DIAGNÓSTICOS PRESUNTIVOS: INSUFICIENCIA VENOSA (CRÓNICA) (PERIFÉRICA) (I87.2)</p>
                        <p>2. DIAGNÓSTICOS DEFINITIVOS: INSUFICIENCIA VENOSA (CRÓNICA) (PERIFÉRICA) (I87.2)</p>
                    </div>
                    <div class="section-box">
                        <p><strong>• PLANES DE TRATAMIENTO</strong></p>
                        <p>DIOSMINA 600MG VO QD X 15 DIAS</p>
                        <p>URE ALA 10%</p>
                        <p>GABAOENTINA 300MG VO QD ANTES DE DORMIR</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
