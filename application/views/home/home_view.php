<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">   
        <title><?= @$titulo ?></title>
        <link rel="stylesheet" href="<?= CSS . 'home.css' ?>"/>
        <link rel="stylesheet" href="<?= CSS . 'styles.css' ?>">
        <link rel="stylesheet" href="<?= CSS . 'cssDoctor.css' ?>">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
        <script>
                !window.jQuery && document.write("<script  src='js/jquery.min.js'> <\/script>");
        </script>
        <script type="text/javascript" src="<?= JS . 'viewLogen.js' ?>"></script>
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
                    <li class="itemPaciente"><a href="">Paciente <span>3</span></a>
                        <ul>
                            <li class="subitem1"><a class="cambio" href="<?= base_url() . 'home/agregar_paciente' ?>">Agregar nuevo Paciente </a></li>
                            <li class="subitem2"><a href="">Listar  Paciente </a></li>
                            <li class="subitem3"><a href="">Exportar Paciente</a></li>
                        </ul>
                    </li>
                    <li class="itemDoctor"><a href="">Doctor <span>3</span></a>
                        <ul>
                            <li class="subitem1"><a class="cambio"href="">Agregar nuevo Doctor </a></li>
                            <li class="subitem2"><a href="">Listar  Doctores </a></li>
                            <li class="subitem3"><a href="">Exportar Paciente</a></li>
                        </ul>
                    </li>
                    <li class="itemSecretaria"><a href="">Secretaria <span>3</span></a>
                        <ul>
                            <li class="subitem1"><a class="cambio"href="">Agregar nueva Secretaria </a></li>
                            <li class="subitem2"><a href="">Listar  Secretaria </a></li>
                            <li class="subitem3"><a href="">Exportar Paciente</a></li>
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
                    <li class="itemReportes"><a href="">Reportes <span>3</span></a>
                        <ul>
                            <li class="subitem1"><a href="">Consultas del Mes</a></li>
                            <li class="subitem2"><a href="">Estadisticas Generales</a></li>
                            <li class="subitem3"><a href="">Ganancias Por Fecha</a></li>
                        </ul>
                    </li>
                    <li class="itemHerramientas"><a href="">Herramientas <span>2</span></a>
                        <ul>
                            <li class="subitem1"><a href="">Calcular IMC </a></li>
                            <li class="subitem2"><a href="">Enviar a Correo</a></li>
                        </ul>
                    </li>
                        
                    <li class="itemSistema"><a href="">Sistema <span>2</span></a>
                        <ul>
                            <li class="subitem1" ><a href="">Administrar Usuarios </a></li>
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
