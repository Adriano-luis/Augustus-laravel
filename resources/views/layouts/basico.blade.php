<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <title>Augustus</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Noto + Sans & display = swap" rel = "folha de estilo">
    <link href = "https://fonts.googleapis.com/css2? family = Noto + Sans: ital @ 1 & display = swap "rel =" stylesheet ">
    <link href = "https://fonts.googleapis.com/css2? family = Noto + Sans: wght @ 700 & display = swap "rel =" stylesheet ">
    <link href = "https://fonts.googleapis.com/css2? family = Noto + Sans + JP: wght @ 500 & display = swap "rel =" stylesheet ">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/template.css')}}"/>
</head>
<body>
    @include('layouts.partials.header')
        <main>
            @yield('conteudo')
        </main>
    @include('layouts.partials.footer')
</body>
</html>