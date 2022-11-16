

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>login Dientes Felices</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="circulo">
        <a href="index.html"> <i class='bx bxs-left-arrow'></i></a>
    </div>

    <div class="login-box">
        <img src="image/icono4.png" class="avatar" alt="Avatar Image">
        <h1>Iniciar sesion</h1>

        <div class="opciones_paciente_doctor">
            <a class="TitutlodelLogin" href="javascript:abrir_paciente()">Paciente</a>
            <a class="TitutlodelLogin" href="javascript:abrir_doctor()">Doctor</a>
        </div>

        <div class="ventana_usario" id="ventana_usario">
            <p class="titulo_login">Paciente</p>
            <form action="validadPaciente.php" method="post">
                <label>DNI</label>
                <input type="text" id="usuario" name="usuario" placeholder="Numero DNI">
                <label>Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña">
                <input type="submit" value="Iniciar sesión">
                <label class="cuentaCrear"> <a class="crearCuentaDe" href="javascript:abrir_registro_Paciente()">Crear
                        cuenta</a></label>
            </form>
        </div>
        <div class="ventana_doctor" id="ventana_doctor">
            <form action="validadDoctor.php" method="post">
                <p class="titulo_login">Doctor</p>
                <label>Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Usuario">
                <label>Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña">
                <input type="submit" value="Iniciar sesión">
                <label class="cuentaCrear"> <a class="crearCuentaDe" href="javascript:abrir_registro_Doctor()">Crear
                        cuenta</a></label>
            </form>
        </div>

    </div>
    <div class="registro_fondo" id="Registro_fondo">
        <div>
            <div class="formulario_registro">
                <div id="DoctorFormulario"> 
                    <div class="ContenidoFormularioRegistro" >
                        <a class="botoncerrar" href="javascript:cerrar_registro_Doctor()"><i
                                class='bx bxs-x-circle'></i></a>
                        <h2 class="tituloregistro">Registrarse Doctor </h2>
                        <p class="subtitulo">Es rapido y facil</p>
                        <hr>
                        <form class="formulario" action="registroDoctor.php" method="post">
                            <p class="subtituloR ">Datos Personales</p>
                            <input class="inputss" type="text" placeholder="Nombre" name="nombre">
                            <input class="inputss" type="text" placeholder="Apellido" name="Apellido">
                            <input class="inputss" type="number" placeholder="DNI" name="Dni">
                            <input class="inputss" type="number" placeholder="Edad" name="Edad">
                            <p class="subtituloR"> Datos de informacion</p>
                            <input class="inputss" type="text" placeholder="Usuario" name="Usuario">
                            <input class="inputss" type="password" placeholder="Contraseña" name="Contraseña">
                            <div>
                             <select class="inputss" name="Especialidad">
                                <option> Seleciona Especialidad</option>
                                <option  value="1">Odontopediatria</option>
                                <option  value="2">Ortodoncia</option>
                                <option  value="3">Implantes Dentales</option>
                                <option  value="4">Diseño de sonrisa</option>
                                <option  value="5">Ortopedia maxilar</option>
                                <option  value="6">Blanqueamiento</option>
                                <option  value="7">Periodoncia</option>
                                <option  value="8">Endodoncia</option>
                                <option  value="9">Cirugia oral</option>
                              </select>                       
                          </div>
                            <input class="inputss" type="text" placeholder="Sede" name="Sede">
                            <input class="inputss" type="email" placeholder="Correo electronico" name="Correoelectronico">
                            <input class="registrar" type="submit" name="acepar" value="Registrarse">
                        </form>
                    </div>
                </div>
               
                <div id="pacienteformulario">
                    <div class="ContenidoFormularioRegistro">
                        <a class="botoncerrar" href="javascript:cerrar_registro_Paciente()"><i
                                class='bx bxs-x-circle'></i></a>
                        <h2 class="tituloregistro">Registrarse Paciente </h2>

                        <p class="subtitulo">Es rapido y facil</p>
                        <hr>
                        <form class="formulario" action="registroPaciente.php" method="post">
                            <p class="subtituloR ">Datos Personales</p>
                            <input class="inputss" type="text" placeholder="Nombre" name="nombre">
                            <input class="inputss" type="text" placeholder="Apellido" name="Apellido">
                            <input class="inputss" type="number" placeholder="DNI" name="Dni">
                            <input class="inputss" type="number" placeholder="Edad" name="Edad">
                            <input class="inputss" type="text" placeholder="Sexo" name="Sexo">
                            <p class="subtituloR"> Datos de informacion</p>
                            <input class="inputss" type="password" placeholder="Contraseña" name="Contraseña">
                            <input class="inputss" type="email" placeholder="Correo electronico" name="Correoelectronico">
                            <input class="registrar" type="submit" name="acepar" value="Registrarse">
                        </form>

                    </div>
                </div>

            </div>


        </div>

    </div>
    <script>
        function abrir_paciente() {
            document.getElementById("ventana_usario").style.display = "block"
            document.getElementById("ventana_doctor").style.display = "none"
        }
        function abrir_doctor() {
            document.getElementById("ventana_doctor").style.display = "block"
            document.getElementById("ventana_usario").style.display = "none"

        }

        function abrir_registro_Paciente() {
            document.getElementById("Registro_fondo").style.display = "block"
            document.getElementById("pacienteformulario").style.display = "block"
            document.getElementById("DoctorFormulario").style.display = "none"


        }
        function cerrar_registro_Paciente() {
            document.getElementById("Registro_fondo").style.display = "none"
        }
        function abrir_registro_Doctor(){
            document.getElementById("Registro_fondo").style.display = "block"
            document.getElementById("DoctorFormulario").style.display = "block"
            document.getElementById("pacienteformulario").style.display = "none"
           
        }
        function cerrar_registro_Doctor(){
            document.getElementById("Registro_fondo").style.display = "none"
        }


        


    </script>
</body>

</html>