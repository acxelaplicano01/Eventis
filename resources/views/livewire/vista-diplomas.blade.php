<div>
    <x-layouts.reportes>
        <header>
            <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Open Sans', sans-serif;
                    background-color: #f4f4f4;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;

                }

                .certificado {
                    background-color: white;
                    width: 1200px;
                    height: 700px;
                    border-radius: 10px;
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, .1);
                    padding: 20px;
                    position: relative;
                    justify-content: center;
                    align-items: center;
                }

                .gold-swirls {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                }

                .gold-swirls .fondo {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-radius: 10px;
                }

                .certificado-header,
                .certificado-body,
                .firmas,
                .sello,
                .codigo {
                    margin-top: 20px;
                    position: relative;
                    text-align: center;
                    z-index: 2;
                    color: black;
                }

                .certificado-title {
                    font-size: 3.6em;
                    color: black;
                    font-weight: 800;
                    padding: 0;
                }

                .certificado-title2 {
                    font-size: 2em;
                    color: black;
                    font-weight: 600;
                    margin: 1px;
                    padding: 0;
                }

                .certificado-title3 {
                    font-size: 1em;
                    margin: 5px 0;
                    padding: 0;

                }

                .recipient-name {
                    text-align: center;
                    font-size: 3.2em;
                    font-weight: 400;
                    letter-spacing: 3px;
                    font-family: 'Great Vibes', cursive;
                    margin: 20px 0;
                }

                .certificado-body {
                    text-align: center;
                    font-size: 12px;
                    padding: 0 7%;
                    color: black;
                    margin-bottom: 60px;
                }

                .sello {
                    text-align: center;
                    margin-top: -25px;
                    margin-right: 20px;
                }

                .sello .fondo {
                    height: 64px;
                    width: 64px;
                    margin-top: -68px;
                    margin-left: 88px;
                }

                .firmass {
                    display: flex;
                    justify-content: space-between;
                    margin-top: 1px;
                    font-size: 10px;
                    margin-left: 190px;
                    margin-right: 190px;
                    font-weight: bold;

                }

                .firmas {
                    text-align: center;
                    margin: 0 30px;

                }

                .firma {
                    margin-top: -30px;
                    margin-left: 25px;
                    align-items: center;
                }

                .firma .fondo {
                    height: 84px;
                    width: 84px;
                    margin-bottom: -17px;

                }

                .qr-code {
                    height: 80px;
                    width: 80px;
                    margin-top: 20px;
                    margin-left: 455px;
                    z-index: 2;
                }

                .codigo {
                    font-size: 12px;
                    margin-top: 45px;
                    text-align: center;
                    left: 120px;
                    position: absolute;
                    margin-right: 410px;
                }
            </style>

        </header>

        <body>
            <div class="p-4 sm:mx-64 mt-20 certificado">
                <div class="gold-swirls">
                    <img class="fondo" src="{{ asset(str_replace('public', 'storage', $diploma->Plantilla)) }}" />
                </div>
                <div class="certificado-header" style="">
                    <div class="certificado-title">CERTIFICADO</div>
                    <div class="certificado-title2">DE RECONOCIMIENTO</div>
                    <div class="certificado-title3">OTORGADO A:</div>
                    <div class="recipient-name">{{ $persona->nombre }} {{$persona->apellido}}</div>
                </div>
                <div class="certificado-body">
                    Por su destacada asistencia y participación en la conferencia "{{$conferencia->nombre}}", presentada
                    por el distinguido {{$conferencia->conferencista->titulo}}
                    {{$conferencia->conferencista->persona->nombre}} {{$conferencia->conferencista->persona->apellido}},
                    celebrada el {{ \Carbon\Carbon::parse($conferencia->fecha)->format('d \d\e F \d\e Y') }} en el marco
                    del evento "{{$evento->nombreevento}}".
                    <div>
                        <img class="qr-code" src="data:image/png;base64,{{ $qrcode }}" alt="Código QR">
                    </div>
                </div>

                <div class="firmass">
                    <div class="firmas">
                        <div class="firma">
                            <img class="fondo" src="{{ asset(str_replace('public', 'storage', $diploma->Firma1)) }}" />
                        </div>
                        <ul>
                            <li>
                                <ul
                                    class="pt-2 mt-2 space-y-2 font-medium w-40 border-t border-gray-900 dark:border-gray-900">
                            </li>
                        </ul>
                        <div class="sello">
                            <img class="fondo" src="{{ asset(str_replace('public', 'storage', $diploma->Sello1)) }}" />
                        </div>
                        <div>{{$diploma->NombreFirma1}}</div>
                        <div>{{$diploma->Titulo1}}</div>
                    </div>
                    <div class="firmas">
                        <div class="firma">
                            <img class="fondo" src="{{ asset(str_replace('public', 'storage', $diploma->Firma2)) }}" />
                        </div>
                        <ul>
                            <li>
                                <ul
                                    class="pt-2 mt-2 space-y-2 w-40 font-medium border-t border-gray-900 dark:border-gray-900">
                            </li>
                        </ul>
                        <div class="sello">
                            <img class="fondo" src="{{ asset(str_replace('public', 'storage', $diploma->Sello2)) }}" />
                        </div>
                        <div>{{$diploma->NombreFirma2}}</div>
                        <div>{{$diploma->Titulo2}}</div>
                    </div>

                    <div class="firmas">
                        <div class="firma">
                            <img class="fondo" src="{{ asset(str_replace('public', 'storage', $diploma->Firma3)) }}" />
                        </div>
                        <ul>
                            <li>
                                <ul
                                    class="pt-2 mt-2 space-y-2 w-40 font-medium border-t border-gray-900 dark:border-gray-900">
                            </li>
                        </ul>
                        <div class="sello">
                            <img class="fondo" src="{{ asset(str_replace('public', 'storage', $diploma->Sello3)) }}" />
                        </div>
                        <div>{{$diploma->NombreFirma3}}</div>
                        <div>{{$diploma->Titulo3}}</div>
                    </div>
                </div>
                <p class="codigo">Código: {{$diploma->Codigo}}</p>
            </div>
        </body>
    </x-layouts.reportes>

</div>