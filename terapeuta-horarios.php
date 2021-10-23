<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
    <script src="https://kit.fontawesome.com/50ca7f45e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/terapeuta-horarios.css">
    <title>Terapeuta-Citas</title>
</head>

<body>
    <!-- CREAMOS EL NAVBAR DEL APARTADO DE CITAS DEL TERAPEUTA-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="index.php">Psitas</a></label>
        <ul>
            <li><a href="terapeuta-citas.php">CITAS</a></li>
            <li><a class="active" href="terapeuta-horarios.php">HORARIOS</a></li>
            <li><a href="terapeuta-perfil.php">MI PERFIL</a></li>
            <li><a href="php/salir.php">SALIR</a></li>
        </ul>
    </nav>


    <!-- CREAMOS LOS HORARIOS DE ATENCIÓN DISPONIBLES EN EL SISTEMA -->


    <!-- PRIMERO +++++++++++++++ -->
    <div class="contenedor">

        <div class="contenedor-horarios">

            <div class="fecha-estatica">
                    <span>04 de Noviembre de 2021</span>
            </div>    
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h1" name="id1">
                            <input type="hidden" value="2021-11-04" name="fecha1">    
                            <input class="hora" type="text" disabled value="07:00" name="hora1">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h2" name="id2">
                            <input type="hidden" value="2021-11-04" name="fecha2">    
                            <input class="hora" type="text" disabled value="08:30" name="hora2">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>

                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h3" name="id3">
                            <input type="hidden" value="2021-11-04" name="fecha">    
                            <input class="hora" type="text" disabled value="10:00" name="hora3">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h4" name="id4">
                            <input type="hidden" value="2021-11-04" name="fecha">    
                            <input class="hora" type="text" disabled value="11:30" name="hora4">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h5" name="id5">
                            <input type="hidden" value="2021-11-04" name="fecha">    
                            <input class="hora" type="text" disabled value="13:00" name="hora5">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h6" name="id6">
                            <input type="hidden" value="2021-11-04" name="fecha">    
                            <input class="hora" type="text" disabled value="14:30" name="hora6">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h7" name="id7">
                            <input type="hidden" value="2021-11-04" name="fecha">    
                            <input class="hora" type="text" disabled value="16:00" name="hora7">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h8" name="id8">
                            <input type="hidden" value="2021-11-04" name="fecha">    
                            <input class="hora" type="text" disabled value="17:30" name="hora8">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
<br><br>
      <!-- +++++++++++++++  SEGUNDO DÍA +++++++++++ -->

      <div class="fecha-estatica">
                    <span>05 de Noviembre de 2021</span>
            </div>    
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h9" name="id9">
                            <input type="hidden" value="2021-11-05" name="fecha">    
                            <input class="hora" type="text" disabled value="07:00" name="hora9">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h10" name="id10">
                            <input type="hidden" value="2021-11-05" name="fecha">    
                            <input class="hora" type="text" disabled value="08:30" name="hora10">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>

                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h11" name="id11">
                            <input type="hidden" value="2021-11-05" name="fecha">    
                            <input class="hora" type="text" disabled value="10:00" name="hora11">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h12" name="id12">
                            <input type="hidden" value="2021-11-05" name="fecha">    
                            <input class="hora" type="text" disabled value="11:30" name="hora12">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h13" name="id13">
                            <input type="hidden" value="2021-11-05" name="fecha">    
                            <input class="hora" type="text" disabled value="13:00" name="hora13">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h14" name="id14">
                            <input type="hidden" value="2021-11-05" name="fecha">    
                            <input class="hora" type="text" disabled value="14:30" name="hora14">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h15" name="id15">
                            <input type="hidden" value="2021-11-05" name="fecha">    
                            <input class="hora" type="text" disabled value="16:00" name="hora15">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h16" name="id16">
                            <input type="hidden" value="2021-11-05" name="fecha">    
                            <input class="hora" type="text" disabled value="17:30" name="hora16">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>

<br><br>


           <!-- ++++++++ TERCER DÍA DE LOS DISPONIBLES +++++++ -->

           <div class="fecha-estatica">
                    <span>06 de Noviembre de 2021</span>
            </div>    
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h17" name="id17">
                            <input type="hidden" value="2021-11-06" name="fecha">    
                            <input class="hora" type="text" disabled value="07:00" name="hora17">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h18" name="id18">
                            <input type="hidden" value="2021-11-06" name="fecha">    
                            <input class="hora" type="text" disabled value="08:30" name="hora18">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>

                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h19" name="id19">
                            <input type="hidden" value="2021-11-06" name="fecha">    
                            <input class="hora" type="text" disabled value="10:00" name="hora19">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h20" name="id20">
                            <input type="hidden" value="2021-11-06" name="fecha">    
                            <input class="hora" type="text" disabled value="11:30" name="hora20">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h21" name="id21">
                            <input type="hidden" value="2021-11-06" name="fecha">    
                            <input class="hora" type="text" disabled value="13:00" name="hora21">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h22" name="id22">
                            <input type="hidden" value="2021-11-06" name="fecha">    
                            <input class="hora" type="text" disabled value="14:30" name="hora22">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h23" name="id23">
                            <input type="hidden" value="2021-11-06" name="fecha">    
                            <input class="hora" type="text" disabled value="16:00" name="hora23">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>
                
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                        <div class="div-hora">
                            <input type="hidden" value="h24" name="id24">
                            <input type="hidden" value="2021-11-06" name="fecha">    
                            <input class="hora" type="text" disabled value="17:30" name="hora24">
                            <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                            
                            <input type="submit" value="Activar" hidden id="btn-activar" >
                        </div>
                    
                </form>

        <br><br>


        </div>










    <!-- +++++++++++ DIV DE LOS HORARIOS DISPONIBLES O SELECCIONADOS +++++++++++++ -->


        <div class="contenedor-horarios-disponibles">
            <div class="fechas-horarios-disponibles">
                    <span>HORARIOS SELECCIONADOS</span>
            </div>    
    
            <div class="horarios-disponible">
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                    
                    <div class="div-hora-disponible">
                        <input type="hidden" value="h1" name="id">
                        <input type="hidden" value="2021-11-04" name="fecha">    
                        <input class="hora-disponible" type="text" disabled value="7:00">
                        <input type="text"  class="nombre_terapeuta" disabled value="Andres Polo">
                        <label  class="label-activar" for="btn-activar"><b class="b_desactivar">Desactivar</b><i class="fas fa-trash-alt" style="color:#f72e2e;"></i></label>
                        
                        <input type="submit" value="Activar" hidden id="btn-activar" >
                    </div>
                
                </form>
            </div>

            
            

            

        </div>

    </div>





</body>

</html>