@extends('layouts.headerAdmin')

@section('title', 'Administrador')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <hr class="linea-horizontal">
    @if ($error)
        <div class="alert alert-success" style="color: black">
            <h5>{{ $error }}</h5>
        </div>
    @endif
    <br>
    <div class="contenido-pagina">
        <section class="estadistica cuadro-solid">
            <div>
                <p class="texto">Pacientes Totales</p>
                <p class="ganancias">
                    {{ $usuariosCount }}
                </p>
            </div>
            <div><iconify-icon icon="solar:user-bold" width="30" height="30"></iconify-icon></div>
        </section>
        <section class="estadistica cuadro-solid">
            <div>
                <p class="texto">Historias Clínicas Totales</p>
                <p class="ganancias">
                    {{ $cursosCount }}
                </p>
            </div>
            <div><iconify-icon icon="solar:book-bold" width="30" height="30"></iconify-icon></div>
        </section>
    </div>


    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
        <div class="estadistica3">
            <div id="barchart" style="width: 500px; height: 300px;"></div>
        </div>    
        <div class="estadistica3">
            <div id="piechart" style="width: 500px; height: 300px;"></div>
        </div>
        <div class="estadistica3">
            <div id="linechart" style="width: 900px; height: 300px;"></div>
        </div>
        <div style="margin-top: 40px;">
            <h3>Citas Medicas</h3>
            <div style="background-color: #ffff; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <div style="background-color: #d7f9f6; border-radius: 50%; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; margin-right: 15px;">
                        <img src="{{ asset('../storage/app/public/img/apple-icon.png') }}" alt="icon" style="width: 20px; height: 20px;">
                    </div>
                    <div>
                        <p style="margin: 0; font-weight: bold;">José Ramirez</p>
                        <p style="margin: 0; color: gray;">5h ago</p>
                    </div>
                    <div style="margin-left: auto; color: gray;">12/04/2025</div>
                </div>
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <div style="background-color: #fef7e0; border-radius: 50%; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; margin-right: 15px;">
                        <img src="{{ asset('../storage/app/public/img/person-icon.png') }}" alt="icon" style="width: 20px; height: 20px;">
                    </div>
                    <div>
                        <p style="margin: 0; font-weight: bold;">Pablo Reyes</p>
                        <p style="margin: 0; color: gray;">2 days ago</p>
                    </div>
                    <div style="margin-left: auto; color: gray;">25/05/2025</div>
                </div>
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <div style="background-color: #ffff; border-radius: 50%; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; margin-right: 15px;">
                        <img src="{{ asset('../storage/app/public/img/music-icon.png') }}" alt="icon" style="width: 20px; height: 20px;">
                    </div>
                    <div>
                        <p style="margin: 0; font-weight: bold;">Leonardo Chuquimarca</p>
                        <p style="margin: 0; color: gray;">5 days ago</p>
                    </div>
                    <div style="margin-left: auto; color: gray;">03/06/2025</div>
                </div>
                <div style="display: flex; align-items: center;">
                    <div style="background-color: #fbe4e8; border-radius: 50%; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; margin-right: 15px;">
                        <img src="{{ asset('../storage/app/public/img/person-icon2.png') }}" alt="icon" style="width: 20px; height: 20px;">
                    </div>
                    <div>
                        <p style="margin: 0; font-weight: bold;">William Jaramillo</p>
                        <p style="margin: 0; color: gray;">10 days ago</p>
                    </div>
                    <div style="margin-left: auto; color: gray;">11/09/2025</div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
