<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">   
        <title><?= @$titulo ?></title>
        <link rel="stylesheet" href="<?= CSS . 'home.css' ?>"/>
        <link rel="stylesheet" href="<?= CSS . 'styles.css' ?>">
        <link rel="stylesheet" href="<?= CSS . 'cssDoctor.css' ?>">
        <link rel="stylesheet" href="<?= CSS . 'table.css' ?>">
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
        <script>
                !window.jQuery && document.write("<script src='"+<?=JS.'jquery.min.js'?>+"'>"+"<\/script>");
        </script>-->
        <script type="text/javascript" src="<?=JS.'jquery.min.js'?>"></script>
        <script type="text/javascript" src="<?= JS . 'viewLogen.js' ?>"></script>
        <script type="text/javascript" src="<?= JS . 'tab.js' ?>"></script>
    </head>
    <body>
        <header id="encabesado">
            <div id="logo">
                <a href="<?= base_url() . 'home' ?>"><img src="<?= IMG . 'logo.png' ?>" alt="Logo" title="Inicio" /></a>        	            			
            </div>	
            <div id="account_info">
                <span style="padding-left: 50px; color:black; font-size:14px;"></span>
            </div>    
        </header>
        <div class="contenedor">
            <nav>
                <ul class="menu">
                    <li class="itemPaciente"><a href="">Paciente <span>2</span></a>
                        <ul>
                            <li class="subitem1"><a class="cambio" href="<?= base_url() . 'home/agregar_paciente' ?>">Agregar nuevo Paciente </a></li>
                            <li class="subitem2"><a href="<?=base_url().'home/listar_paciente'?>">Lista de Paciente </a></li>
                        </ul>
                    </li>
                    <li class="itemDoctor"><a href="">Doctor <span>2</span></a>
                        <ul>
                            <li class="subitem1"><a class="cambio"href="<?=base_url().'home/agregar_doctor'?>">Agregar nuevo Doctor </a></li>
                            <li class="subitem2"><a href="<?=base_url().'home/listado_doctor'?>">Lista de Doctores </a></li>
                        </ul>
                    </li>
                    <li class="itemSecretaria"><a href="">Secretaria <span>2</span></a>
                        <ul>
                            <li class="subitem1"><a class="cambio"href="<?=base_url().'home/agregar_secretaria'?>">Agregar nueva Secretaria </a></li>
                            <li class="subitem2"><a href="<?=base_url().'home/listado_secretaria'?>">Lista de Secretarias </a></li>
                        </ul>
                    </li>
                    <li class="itemCita"><a href="">Citas <span>4</span></a>
                        <ul>
                            <li class="subitem1"><a href="">Agregar Nueva Cita </a></li>
                            <li class="subitem2"><a href="">Ver Citas Del Dia </a></li>
                            <li class="subitem3"><a href="">Imprimir Citas </a></li>
                            <li class="subitem4"><a href="">Citas Pendientes</a></li>
                        </ul>
                    </li>
                        
                    <li class="itemSistema"><a href="">Sistema <span>3</span></a>
                        <ul>
                            <li class="subitem1" ><a href="<?=base_url().'home/agregar_usuario'?>">Agregar nuevo Usuario </a></li>
                            <li class="subitem1" ><a href="<?=base_url().'home/listado_usuario'?>">Lista de Usuarios </a></li>
                            <li class="subitem3"><a href="<?= base_url() . 'login/login/log_out' ?>">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                </ul>  
            </nav>
                
            <section id="principal">
                <?= @$contenido ?>
            </section>  
        </div>
    </body>
</html>
