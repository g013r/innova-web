<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Innova consultores del Peru</title>
    <meta name="description" content="Empresa de consultoría especializada en implementación de normas agrícolas, sociales y manufactura.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 0; padding: 0; font-family: Lato, sans-serif; background: #e9e9e9">
    <x-navbar></x-navbar>
    <x-imagePresent></x-imagePresent>
    <article>
        <br><br>
        {{-- Informacion empresa --}}
        <h1 id="nosotros" class="fs-1 fs-1 text-center text-decoration-underline" style="font-weight:800; color:#20800a">¿QUIÉNES SOMOS?</h1>
        <x-infoPrincipal></x-infoPrincipal>
        <x-llamadoAccion></x-llamadoAccion>
        <br>
        {{-- Servicios ofrecidos --}}
        <h1 id="servicios" class="fs-1 text-center text-decoration-underline" style="font-weight:800; color: #20800a">NUESTROS SERVICIOS</h1>
        <div class="container text-center mt-5">
            <div class="row">
                <x-services title="Evaluación y diagnóstico" message="Realizar evaluaciones exhaustivas de las operaciones agrícolas, sociales y de manufactura para identificar áreas de mejora y garantizar el cumplimiento de las normas establecidas."/>
                <x-services title="Desarrollo de políticas y procedimientos" message="Ayudar a las empresas a desarrollar políticas y procedimientos robustos que cumplan con las normas y regulaciones en áreas como seguridad laboral, prácticas agrícolas sostenibles, gestión de la cadena de suministro, entre otros."/>
                <x-services title="Capacitación y formación" message="Impartir programas de capacitación personalizados para empleados y gerentes sobre temas como seguridad en el trabajo, derechos laborales, buenas prácticas agrícolas y técnicas de manufactura."/>
            </div>
            <br>
            <div class="row">
                <x-services title="Auditorías y certificaciones" message="Realizar auditorías internas y externas para evaluar el cumplimiento de las normas y preparar a las empresas para la certificación por parte de organismos acreditados."/>
                <x-services title="Asesoramiento en sostenibilidad" message="Proporcionar asesoramiento sobre prácticas agrícolas sostenibles, gestión de recursos naturales, reducción de residuos y huella de carbono para ayudar a las empresas a operar de manera más ecoamigable."/>
                <x-services title="Gestión de riesgos y cumplimiento normativo" message="Ayudar a las empresas a identificar y mitigar riesgos relacionados con el cumplimiento normativo, como infracciones laborales, problemas de calidad del producto o incumplimiento de regulaciones ambientales."/>
            </div>
            <br>
            <div class="row">
                <x-services title="Evaluación y diagnóstico" message="Realizar evaluaciones exhaustivas de las operaciones agrícolas, sociales y de manufactura para identificar áreas de mejora y garantizar el cumplimiento de las normas establecidas."/>
            </div>
        </div>
        <br><br>
        {{-- Noticias --}}
        <h1 id="noticias" class="fs-1 text-center text-decoration-underline" style="font-weight:800; color: #20800a">NOTICIAS</h1>
        <div class="container text-center mt-5">
            <div class="row">
                <x-news title="#CertificaciónInternacional" content="Seguimos trabajando en Asesoría e implementación de la norma GLOBALG.A.P , en el cultivo de palto para la empresa Agricola HMPM..." image="{{ asset('images/news/imagen-new1.png') }}" />
                <x-news title="#Certificación" content="Gracias Asociación de Frutos Orgánicos de la Selva Central - ASFRUSEL, por confiar en nosotros..." image="{{ asset('images/news/imagen-new2.png') }}" />
                <x-news title="Capacitando al personal de la empresa Festival Fruits" content="Para Festival Fruits, una empresa dedicada a la producción de frutas deshidratadas, obtener la certificación GLOBALG.A.P y Orgánico para sus cultivos..." image="{{ asset('images/news/imagen-new3.png') }}" />        
            </div>
        </div>
        <br>
        {{-- div clientes --}}
        <div style="background: #20800a">
            <br><br>
            <h1 id="clientes" class="fs-1 text-center text-decoration-underline" style="font-weight:800; color:#fff">NUESTROS CLIENTES</h1>
            <br>
            <div class="container text-center mt-5">
                <div class="row">
                    <x-clients client="{{asset('images/clients/alfi.png')}}"></x-clients>
                    <x-clients client="{{asset('images/clients/anita.png')}}"></x-clients>
                    <x-clients client="{{asset('images/clients/marlen.png')}}"></x-clients>    
                </div>
            </div>
            <br><br>
        </div>  
    </article>
    <br><br>
    <h1 id="contacto" class="fs-1 text-center text-decoration-underline" style="font-weight:800; color: #20800a">CONTACTANOS</h1>
    <br><br>
    <div>
        <x-formu></x-formu>
    </div>
    <br><br>
    <footer style="width:100%; padding-bottom: 20px; background: #20800a; text-align:center">
        <h2 style="color: #fff; padding-top:40px">© 2024 - Todos los derechos reservados INNOVA CONSULTORES DEL PERU E.I.R.L.</h2>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>