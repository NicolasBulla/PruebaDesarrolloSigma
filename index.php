
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba Maquetacion y Desarrollo Sigma</title>
        <link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
        <!--Implementacion de 'ALERTAS' Sweet Alert-->
        <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " ></script>
        
        <!--IMPLEMENTANDO BOOTSTRAP - Ajax -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

        <!--Tipografias Sigma -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&family=Roboto:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <br>
        <br>
        <!-- Inicio o presentacion de la Pagina, Logo de la empresa y pequeña descripcion -->
        <div class="col col-sm-12" id="logo">
            <center> 
                <img class="img-fluid" id="imagenPrincipal" src="imagenes/Logo-Empresa.png"> 
                <br>
                <strong><h2 id="titulo">Prueba De Desarrollo Sigma</h2></strong>
                <br>

                <p class="col justify-col-sm-1" style="color: gray; font-family: 'Roboto Slab', sans-serif; width: 60%;" id="textoParrafo">Lorem Ipsum is simply is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknow printer look a galley took a gallery of type and scrambled it to make a type speciem book</p>
            </center>
            <br>
            <br>
        </div>
        <!-- Contenido Principal de la pagina, Imagen y formulario -->
        <div id="contenido">

            <div class="col col-sm-6">
                <img class="img-fluid" id="imagen" src="imagenes/imagenPublicidad.png">
            </div>

            <form id="" onsubmit="doneTyping();">
                <div class="form-row col-sm-4" id="formulario">
                    <div class="form-group ">
                        <strong><label>Departamento*</label></strong>
                        <br>
                        <br>
                        <select id="departamento" type="text" class="form-control" name="departamento" onchange="ShowSelected();">
                            <option  value="Atlántico" >Atlántico</option>
                            <option  value="Amazonas">Amazonas</option>
                            <option  value="Caquetá">Caquetá</option>
                            <option  value="Cesar">Cesar</option>
                            <option  value="Chocó">Chocó</option>
                            <option  value="Córdoba">Córdoba</option>
                            <option  value="Guainía">Guainía</option>
                            <option  value="Guaviare">Guaviare</option>
                            <option  value="Huila">Huila</option>
                            <option  value="La Guajira">La Guajira</option>
                            <option  value="Putumayo">Putumayo</option>
                            <option  value="Quindío">Quindío</option>
                            <option  value="San Andrés y Providencia">San Andrés y Providencia</option>
                            <option  value="Sucre">Sucre</option>
                            <option  value="Tolima">Tolima</option>
                            <option  value="Vaupés">Vaupés</option>
                            <option  value="Vichada">Vichada</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <strong><label>Ciudad*</label></strong>
                        <br>
                        <br>
                        <select type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Antioquia">
                            <option id=""></option>
                        </select>
                    </div>


                    <div class="form-group ">
                        <strong><label>Nombre*</label></strong>
                        <br>
                        <br>
                        <input type="text" class="form-control" id="nombre" placeholder="Pepito de Jesus">
                    </div>
                    <div class="form-group ">
                        <strong><label>Correo*</label></strong>
                        <br>
                        <br>
                        <input type="email" class="form-control" id="correo" placeholder="pepitodejesus@gmail.com"  onKeyUp="javascript:validateMail('correo')" required pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/" >
                    </div>
                    <br>
                    <div class="form-group">
                        <center>
                            <strong><input id="btnEnviar" type="submit" class="btn btn-danger" value="Enviar"></strong>
                        </center>
                    </div>
                </div>
            </form>

        </div>

    </body>
    <script type="text/javascript">
        //Codigo que valida si la direccion de correo que se ingreso es valida         
        var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/; // Patron para validar el Email
        var typingTimer;         // Identificador de tiempo       
        var doneTypingInterval = 1500;  //Tiempo en MiliSegundos, 0.5 segundos
        var $input = $('#correo');  // Variable que toma el id del INPUT que voy a validar

        //Cuando el usuario deje de escribir, empiece a contar        
        $input.on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });
        // Al pulsar una tecla, borre la cuenta regresiva e iniciela en cero
        $input.on('keydown', function () {
            clearTimeout(typingTimer);
        });
        // Cuando el usuario "Termine de escribir" Valida el correo, en caso de ser correcto queda pintado de verde, en caso de no serlo queda pintado de rojo
        function doneTyping() {
            object = document.getElementById("correo");
            valueForm = object.value;
            if (valueForm.length > 4) {
                if (valueForm.search(patron) === 0)
                {
                    //Mail correcto
                    object.style.color = "#1bb116";
                    swal({
                        title: 'Perfecto!',
                        text: "Su CORREO es valido!!!",
                        type: 'success',
                        icon: 'success'
                    });
                    return;
                }
                //Mail incorrecto
                object.style.color = "#f00";
                swal({
                    title: 'Uyyy!',
                    text: "Su CORREO no es valido!!!",
                    type: 'error',
                    icon: 'error'
                });
                return false;
            }
        }
        //Funcion que valida que todos los campos esten llenos 
        $(document).ready(function () {
            $('#btnEnviar').click(function () {

                if ($('#departamento').val() === "") {
                    swal({
                        title: 'Uyyy!',
                        text: "Debes llenar el campo DEPARTAMENTO para hacer el registro!!!",
                        type: 'error',
                        icon: 'error'
                    });
                    return false;
                } else if ($('#ciudad').val() === '') {
                    swal({
                        title: 'Uyyy!',
                        text: "Debes llenar el campo CIUDAD para hacer el registro!!!",
                        type: 'error',
                        icon: 'error'
                    });
                    return false;
                } else if ($('#correo').val() === '') {
                    swal({
                        title: 'Uyyy!',
                        text: "Debes llenar el campo CORREO para hacer el registro!!!",
                        type: 'error',
                        icon: 'error'
                    });
                    return false;
                } else if ($('#nombre').val() === '') {
                    swal({
                        title: 'Uyyy!',
                        text: "Debes llenar el campo NOMBRE para hacer el registro!!!",
                        type: 'error',
                        icon: 'error'
                    });
                    return false;
                }
//Creacion de la cadena de los valores obtenidos en los INPUT
                cadena = "departamento=" + $('#departamento').val() +
                        "&ciudad=" + $('#ciudad').val() +
                        "&correo=" + $('#correo').val() +
                        "&nombre=" + $('#nombre').val();

//Funcion Ajax que llama al archivo PHP que registra los datos en la base de datos
                $.ajax({
                    type: "POST",
                    url: "./conexion/registrar.php",
                    data: cadena,
                    success: function (r) {
                        if (r === 1) {
                            swal({
                                title: 'Uyyy!',
                                text: "El Registro NO se pudo completar!!!",
                                type: 'error',
                                icon: 'warning'
                            });
                        } else {
                            swal({
                                title: 'Listo!',
                                text: "Tu información ha sido recibida satisfactoriamente!!!",
                                type: 'success',
                                icon: 'success'
                            }).then(function () {
                                document.getElementById("departamento").value = '';
                                document.getElementById("ciudad").value = '';
                                document.getElementById("correo").value = '';
                                document.getElementById("nombre").value = '';
                            });
                        }
                    }
                });

            });
        });

//Funcion que cambia el ID del INPUT departamento al seleccionar alguna opcion definida
        $("#departamento").change(function () {
            console.log($("#departamento").val());
            return sele = $("#departamento").val();
        });
//Dependiendo del ID del INPUT (departamento) en el INPUT (ciudad) apareceran las ciudades respectivas a ese departamento consumidas por el objeto ajax
        function ShowSelected() {
            
            var $select = $('#ciudad');
            //Funcion GETJSON que consume los datos de la URL de la prueba SIGMA 
            $.getJSON('https://cors-anywhere.herokuapp.com/https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json', function (data) {
                $select.html("");
                console.log(data);
                console.log(sele);

                for (var i = 0; i < data[sele].length; i++) {

                    $select.append('<option id="' + data[sele][i] + '">' + JSON.stringify(data[sele][i]) + '</option>');
                }
                ;
            });

        }
    </script>
</html>
