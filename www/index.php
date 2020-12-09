<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto de Vida</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        th {
            text-align: center;
        }
    </style>

    <script>
        function getComboA(selectObject) {
            document.getElementById("div-hidden").style.display = 'none';
            var c = selectObject.value;
            let value = "";
            
            if(c == "Alguien más") {
                value = document.getElementById('proyecto-otro').value;
                document.getElementById("div-hidden").style.display = 'block';
            } else if(c != "") {
                value = c;
            }

            document.getElementById('proyecto-personal').value = value;
        }

        function radioFunc(selectObject) {
            document.getElementById("descripcion").style.display = 'none';
            var select = document.querySelector('input[name="decidir"]:checked').value;

            if(selectObject.value == "Si") {
                document.getElementById("descripcion").style.display = 'block';
            }
        }

        function typing() {
            var x = document.getElementById("proyecto-otro").value;
            document.getElementById("proyecto-personal").value = x
        }
    </script>
</head>

<body class="bg-gradient-primary">
    <nav class="navbar navbar-white bg-white justify-content-between">
      <div class="navbar-brand">
        <img src="/img/upslp-whitelogo.jpg" width="100px;" />
      </div>
      <div style="font-size: 25px; color: #ed7f00;">
          Sistema de tutorías
      </div>
      <div class="form-inline">
        <a class="btn btn-primary my-2 my-sm-0" href="dashboard.php" role="button" style="margin-top: 8px;">Login</a>
      </div>
    </nav>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="text-gray-900 mb-4">Proyecto de Vida</h1>
                            </div>
                            <div class="text-justify">
                                <p>
                                    Estimado Profesor: Mediante este instrumento, se espera que en interacción con el
                                    Estudiante Tutelado, se recuperen algunos elementos que le ayuden a identificar metas
                                    y planes de acción que le aporten al estudiante líneas para construir su futuro a
                                    partir de lo que ha hecho hasta ahora. Para obtener el máximo aprovechamiento de este
                                    ejercicio es necesario tomar una actitud positiva y objetiva. Tal vez cierta dosis de
                                    autocrítica y realimentación del Tutor es recomendable. A continuación encontrará una
                                    serie de preguntas, que se le  pide vaya planteando al alumno, guiando y realimentando
                                    en sus respuestas. Le pedimos al alumno que procure meditar un poco antes de contestar
                                    cada pregunta y que sea lo más objetivo posible.
                                </p>
                            </div>

                            <form class="user" action="insert.php" method="post">
                                <h2>Datos Generales</h2>
                                <div class="form-group row">
                                    <div class="col-sm-10 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nombre" name="nombre"
                                            placeholder="Nombre del Estudiante">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-user" id="edad" name="edad"
                                            placeholder="Edad">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="carrera" name="carrera"
                                            placeholder="Carrera">
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="matricula" name="matricula"
                                            placeholder="Matrícula">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-user" id="grupo" name="grupo"
                                            placeholder="Grupo">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-user" id="semestre" name="semestre"
                                            placeholder="Semestre">
                                    </div>
                                </div>

                                <h3>1. Desarrollo Personal</h3>
                                <p>Mis proyecto personales han sido definidos hasta ahora por:</p>
                                <select class="form-control form-control-lg" id="proyecto-p" onchange="getComboA(this)">
                                    <option selected="selected"> </option>
                                    <option>Mi familia</option>
                                    <option>Iniciativa propia</option>
                                    <option>Mis maestros</option>
                                    <option>Alguien más</option>
                                </select>
                                <div id="div-hidden" style="display: none;">
                                    <br />¿Quién? <input type="text" name="proyecto-otro" id="proyecto-otro" oninput="typing()">
                                </div>
                                <input type="hidden" name="proyecto-personal" id="proyecto-personal">
                                <br />

                                <p>Menciona 3 fortalezas y 3 debilidades que tienes identificadas en ti como persona:</p>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Fortalezas</th>
                                            <th scope="col">Debilidades</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" id="fort1" name="fort1"></td>
                                            <td><input type="text" id="debi1" name="debi1"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" id="fort2" name="fort2"></td>
                                            <td><input type="text" id="debi2" name="debi2"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" id="fort3" name="fort3"></td>
                                            <td><input type="text" id="debi3" name="debi3"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="form-group">
                                    ¿Has tomado en cuenta los aspectos anteriores para
                                        decidir sobre tus proyectos?
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radio1" name="decidir" class="custom-control-input"
                                            onchange="radioFunc(this)" value="Si">
                                        <label class="custom-control-label" for="radio1">Si</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radio2" name="decidir" class="custom-control-input"
                                            onchange="radioFunc(this)" value="No">
                                        <label class="custom-control-label" for="radio2">No</label>
                                    </div>
                                </div>
                                <div class="form-group" id="descripcion">
                                    Describe de qué manera:
                                    <input type="text" class="form-control form-control-user" placeholder="Descripción"
                                        name="descripcion">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block">Registrar Datos</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>

<?php
    if(isset($_GET['msg'])) {
        echo "<script>alert('".$_GET['msg']."');</script>";
    }
?>
