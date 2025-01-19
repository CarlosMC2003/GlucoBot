<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/estilosFinal.css') }}">
</head>

<body>
    <div class="contenidoBanner">
        <nav class="iconos">
            <a href=""><iconify-icon icon="bi:facebook" style="color: #ffff;"></iconify-icon></a>
            <a href=""><iconify-icon icon="mdi:instagram" style="color: #ffff;"></iconify-icon></a>
            <a href=""><iconify-icon icon="bi:youtube" style="color: #ffff;"></iconify-icon></a>
        </nav>
    </div>
    <div class="menu">
        <header class="cabeceraPrincipal">
            <img src="../storage/app/public/img/logo medihelp.png">
            <a href="{{route('iniciarSesion')}}" class="comienzo">COMENZAR</a>
        </header>
    </div>
    <div class="carrusel">
        <img src="../storage/app/public/img/bannerPortal.png">
    </div>
    <div class="noticias">
        <div class="textoNoticias">
            <p><b>Características Principales</b></p>
            <div class="info"><p>Conoce las características de nuestro portal web</p></div>
        </div>
        <div class="columna">
            <nav class="noticia">
                <a><img src="../storage/app/public/img/Rectangle 10.png"></a>
                <p><b>Organiza y administra los datos de tus pacientes fácilmente</b></p>
                <p>Gestión de Pacientes</p>
                <button>Leer más <iconify-icon icon="maki:arrow" style="color: white;"></iconify-icon></button>
            </nav>
            <nav class="noticia">
                <a><img src="../storage/app/public/img/Rectangle 11.png"></a>
                <p><b>Accede y edita las historias clínicas de manera segura</b></p>
                <p>Historias Clínicas</p>
                <button>Leer más <iconify-icon icon="maki:arrow" style="color: white;"></iconify-icon></button>
            </nav>
            <nav class="noticia">
                <a><img src="../storage/app/public/img/Rectangle 12.png"></a>
                <p><b>Programa citas y lleva un control preciso de tu agenda.</b></p>
                <p>Gestión de Citas</p>
                <button>Leer más <iconify-icon icon="maki:arrow" style="color: white;"></iconify-icon></button>
            </nav>
        </div>
    </div>
    <div class="conveniosContainer">
        <p><b>CONVENIOS</b></p>
        <div class="convenios">
            <img src="../storage/app/public/img/Rectangle 3868.png"> 
            <nav class="conveniosImg">
                <a href="https://www.clinicasanjose.cl/"><img src="../storage/app/public/img/San josé.png"></a>
                <a href="https://www.funerariajaramillo.com.ec/"><img src="../storage/app/public/img/funeraria.png"></a>
                <a href="https://edes.utpl.edu.ec/"><img src="../storage/app/public/img/edes.png"></a>
                <a href="https://fte.edu.ec/"><img src="../storage/app/public/img/Group 9.png"></a>
                <a href="https://itec.edu.ec/"><img src="../storage/app/public/img/itec.png"></a>
            </nav>
        </div>
    </div>
    <section class="misionVision">
        <article class="mision">
            <Section class="iconoSection">
                <iconify-icon class="iconoMision" icon="carbon:industry" style="color: #008894" width="57"
                    height="57"></iconify-icon>
                <p><b>MISIÓN</b></p>
            </Section>
            <p>Somos una institución comprometida con el bienestar y salud de la comunidad, 
                que presta servicios de alta complejidad con calidad, de forma integral, 
                más humana, segura e innovadora.</p>
        </article>
        <article class="vision">
            <Section class="iconoSection">
                <iconify-icon class="iconoVision" icon="clarity:compass-line" style="color: white;" width="57"
                    height="57"></iconify-icon>
                <p><b>VISIÓN</b></p>
            </Section>
            <p>Para el 2026 la Clínica MEDIHELP será reconocida por su modelo de atención enfocado 
                hacia el desarrollo de centros de excelencia, consolidándose como una institución 
                con estándares superiores de calidad, innovación y desarrollo tecnológico generadores 
                de experiencias memorables para el paciente, su componente familiar, los colaboradores 
                y nuestro entorno.</p>
        </article>

    </section>

    <footer class="pie-de-pagina2">
        <hr>
        <h4>Copyright &copy; 2025 Medihelp</h4>
    </footer>

</body>

</html>