<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Pesquisa</title>
    </head>
    <body>
        <?php include './menu.php'; ?>
        <form action="pesquisar_nome.php" method="post">    
            <div class="container">
                <h4>Pesquisa de Agendamento por Nome:</h4>      
                <div class="row">
                    <div class="col s3">
                            <span>Nome do Paciente</span>
                        <input type="text" name="nome">
                    </div>          
                    <button class="btn blue waves-effect waves-light" type="submit" name="action">Pesquisar
                        <i class="material-icons right">send</i>
                    </button>
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PACIENTES</th>
                            <th>CPF</th>
                            <th>DATA CONSULTA</th>
                            <th>HORARIO CONSULTA</th>
                        </tr>
                    </thead>
                    <?php 
                        include'./conexao.php';
                        $nome_pesquisa= $_POST['nome'];
                       $sql= "SELECT*FROM paciente WHERE nome='$nome_pesquisa'";
                        $consulta= mysqli_query($con,$sql);
                        while($dados = mysqli_fetch_array($consulta)){
                    ?>
                    <tboby>
                        <tr>
                            <th><?php echo $dados['id']?></th>
                            <th><?php echo $dados['nome']?></th>
                            <th><?php echo $dados['cpf']?></th>
                            <th><?php echo $dados['data_consulta']?></th>   
                            <th><?php echo $dados['horario_consulta']?></th>   
                        </tr>  
                    </tboby>
                <?php }?> 
            </table>
            <br>
            <br>
            <br>
            <br> 
            </div>    
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