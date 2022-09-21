<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
   
       <?php include './menu.php'; ?>

        <form action="recebe.php" method="post">
        
        <div class="container">
            <h3>Agendamento de Pacientes:</h3>
            
         <div class="row">
                <div class="col s6">
                    <span>Nome do Paciente</span>
                    <input type="text" name="nome">
                </div>  
                 <div class="col s6">
                    <span>Sobrenome do Paciente</span>
                    <input type="text" name="sobrenome">
                </div>
                 <div class="col s3">
                    <span>CPF Paciente</span>
                    <input type="text" name="cpf">
                </div>
                 <div class="col s3">
                    <span>Data da consulta</span>
                    <input type="date" name="data_consulta">
                </div>
                 <div class="col s3">
                    <span>Horário</span>
                    <input type="time" name="horario_consulta">
                </div>
             
               <button class="btn waves-effect waves-light" 
                       type="submit" name="action">Submit
             <i class="material-icons right">send</i>
             </button>
             </form>
             
              <!--fechando a div row -->  
            </div>    
         <!-- Fechando a div container -->
        </div>
       
        
        
        
        
        
        
        
        
        
<?php include './footer.php'; ?>
        
        
        
        
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
          $('.carousel.carousel-slider').carousel({fullWidth: true});
       </script>
    </body>
  </html>