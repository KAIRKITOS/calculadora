<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>ALTAS</title>

<style>
    /* ESTILOS, UN MODAL DISTINTO PARA LA CALCULADORA */
    .modalUser {
        display: none; /* Oculto al iniciar */
        position: fixed;
        left: 0; top: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.6);
        z-index: 9999;
    }

    /* CUADRO BLANCO DEL MODAL */
    .modal-user-content {
        background: white;
        width: 320px;
        margin: 12% auto;
        padding: 20px;
        border-radius: 10px;
    }

    /* Inputs */
    input { 
    width: 100%; 
    padding: 8px; 
    margin: 6px 0; }

    /* Botones de q tamaño seran*/
    button { 
    margin-top: 8px; 
    padding: 8px 20px; }
</style>
</head>

<body>

<!--   BOTONES QUE ABREN MODALES -->
<button onclick="abrirLoginUser()">Iniciar Sesión</button>
<button onclick="abrirRegisterUser()">Registrarse</button>


<!--   MODAL LOGIN -->
<div id="modalLoginUser" class="modalUser">

    <div class="modal-user-content">
        <h3>Iniciar sesión</h3>

        <form action="acciones/login.php" method="post">

            <label>Correo:</label>
            <input type="email" name="correo" required>

            <label>Contraseña:</label>
            <input type="password" name="password" required>

            <button type="submit">Entrar</button>

            <!-- BOTÓN QUE CIERRA EL MODAL -->
            <button type="button" onclick="cerrarModalesUser()">Cancelar</button>
        </form>

        <a href="#" onclick="cambiarARegistroUser()">¿No tienes cuenta? Regístrate</a>
    </div>
</div>


<div id="modalRegisterUser" class="modalUser">

    <div class="modal-user-content">
        <h3>Registro</h3>

        <form action="acciones/registro.php" method="post">

            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Cuenta bancaria:</label>
            <input type="text" name="cuenta_bancaria" required>

            <label>Correo:</label>
            <input type="email" name="correo" required>

            <label>Contraseña:</label>
            <input type="password" name="password" required>

            <button type="submit">Registrar</button>

            <!-- BOTÓN QUE CIERRA EL MODAL -->
            <button type="button" onclick="cerrarModalesUser()">Cancelar</button>
        </form>

        <a href="#" onclick="cambiarALoginUser()">¿Ya tienes cuenta? Inicia sesión</a>
    </div>
</div>


<!-- BOTON DEL MODAL -->
<script>

    // Abre modal LOGIN
    function abrirLoginUser(){
        document.getElementById("modalLoginUser").style.display = "block";
    }

    // Abre modal REGISTRO
    function abrirRegisterUser(){
        document.getElementById("modalRegisterUser").style.display = "block";
    }

    // Cierra ambos modales
    function cerrarModalesUser(){
        document.getElementById("modalLoginUser").style.display = "none";
        document.getElementById("modalRegisterUser").style.display = "none";
    }

    // Cambiar de login → registro
    function cambiarARegistroUser(){
        cerrarModalesUser();
        abrirRegisterUser();
    }

    // Cambiar de registro → login
    function cambiarALoginUser(){
        cerrarModalesUser();
        abrirLoginUser();
    }

</script>

</body>
</html>