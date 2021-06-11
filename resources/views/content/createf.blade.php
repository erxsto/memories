<!DOCTYPE HTML>
<html>

<head>
    <title>MEMORIES</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="{{ asset('/favicon.ico') }}">
    <link href="assets/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
</head>
<style>
    .amarillo {
        filter: hue-rotate(60deg) brightness(100%);
    }

    .ok {
        filter: hue-rotate(900deg) saturate(30%);
    }
</style>

<body class="left-sidebar is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <section id="header" class="wrapper">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="./index">MEMORIES</a></h1>
                <p>Los recuerdos lo son todo</p>
            </div>

            <!-- Nav -->
            @include('layouts.menu')

        </section>

        <!-- Main -->

        <!-- Highlights -->

        <!-- Footer -->
        <section id="main" class="wrapper style2">
            <div class="title">Carga de recuerdos</div>
            <div class="container">
                <header class="style1">
                    <h2>Aquí puedes subir tus recuerdos!</h2>
                    <p>
                    <div class="container">
                        <div class="col">
                            <h1>Subir recuerdo</h1>
                            <!--<div class="card">
                                    <div class="card-body">
                                        <form action="{{route('storef')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="file" name="file" id="" accept=".doc,.docx,.pdf,.txt">
                                                @error('file')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">Cargar</button>
                                        </form>
                                    </div>
                                </div>-->
                            <form action="{{route('storef')}}" method="POST" class="dropzone" id="my-awesome-dropzone">
                            </form>
                        </div>
                    </div>
                    </p>
                </header>
            </div>
        </section>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        Dropzone.options.myAwesomeDropzone = {
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            dictDefaultMessage: "Arrastre o toque para subir su archivo",
            //          Imagenes
            acceptedFiles: "image/*",
            //          Archivos
            //acceptedFiles: ".doc,.docx,.pdf,.txt",
            //maxFilesize: 500,
            maxFiles: 5,
        };
    </script>
</body>

</html>