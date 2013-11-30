<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>SeguridadDoctorWeb</title>
        <link href="<?= CSS.'seguridad-sesion.css'?>" rel="stylesheet" />
        <script src="<?=JS.'jquery-1.10.2.min.js'?>"></script>
        <script src="<?= JS.'viewLogen.js'?>"></script>
    </head>
    <body>
        <section id="contenido">
            <div class="user-icon"></div>
            <div class="pass-icon"></div>
                
            <form name="frm-IniciarSesion" action="<?=base_url().'login/login/log_in'?>" method="POST">
                <header><h1></h1>
                    <p>Mas Rápido Significa Pacientes Satisfechos Programa Medico e Historial Clínico Electrónico </p>
                </header>
                <div class="content">
                    <input name="usuario_txt" type="text"  title="Username" class="input username"  placeholder="Username"   required/>
                    <input name="password_txt" type="password" title="Password" class="input password" placeholder="Password"  required/>
                </div>
                <div class="footer">
                    <a class="olvideContraseña" href="olvidoContraseña.php">¿Recupera Tu Contraseña?</a>
                    <input type="submit" id="activator" name="enviar" value="Login" class="submit-login"/>     
                </div>      
            </form>
            <br/>
            <span class='mensajes'>
            	<div class='img'><?php if($this->session->flashdata('mensaje')){echo '<img src="'.IMG.'warning.png"'.'width="35" height="35"/>';}?></div>
            	<div class='mensaje'><?php $mensaje=$this->session->flashdata('mensaje');if($mensaje){echo $mensaje;}?></div>
            </span>
            <br/>
        </section>
    </body>
</html>
