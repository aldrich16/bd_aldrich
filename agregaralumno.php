<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
    <style>
        .container {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #1cbd0d;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            background-color: #2ea316;
        }

        form {
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 7px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .titulo {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px;
        }

        .btn-danger {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #55ff4f;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #55ff4f;
        }

        footer {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            background-color: #333;
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }
    </style>
</head>

<body>
    <div>
        
        <nav class="bg-black">
            <br>
            <!-- area de contenido -->
            <div class="container">
                <h1 class="titulo"><i>Agregar Alumno</i></h1>

                <div class="row">
                    <form class="col s12" method="POST" action="http://localhost//bd/agregaralumno.php"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">Nombre:</i>
                                <input class="form-control" REQUIRED name="nombre" type="text" class="validate"
                                    id="nombre">
                            </div>
                            <br>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">Apellido:</i>
                                <input class="form-control" REQUIRED name="apellido" type="text" class="validate"
                                    id="apellido">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">Direccion:</i>
                                <input class="form-control" REQUIRED name="direccion" type="text" class="validate"
                                    id="direccion">
                            </div>
                        </div>
                        <br>
                        <input class="btn btn-danger" type="submit" value="Guardar">
                    </form>
                </div>
            </div>
            
            <br> <br> <br>

            <footer class="bg-black">
                <font>UTVT</font>
            </footer>
            <!--JavaScript at end of body for optimized loading-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                crossorigin="anonymous"></script>
</body>

</html>
