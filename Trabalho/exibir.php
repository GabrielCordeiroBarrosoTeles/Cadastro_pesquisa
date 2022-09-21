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
        
        <h3>Clientes cadastrados</h3>
         
      <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>NOME</th>
              <th>SOBRENOME</th>
              <th>CPF</th>
              <th>DATA CONSULTA</th>
              <th>HORÁRIO CONSULTA</th>
          </tr>
        </thead>

<?php
 include './conexao.php';
 $sql = "SELECT * FROM paciente";
 $resultado = mysqli_query($con, $sql);
 
while($dados = mysqli_fetch_array($resultado)){
?>    
        <tbody>
          <tr>
            <td><?php echo $dados['id'] ?></td>
            <td><?php echo $dados['nome'] ?></td>
            <td><?php echo $dados['sobrenome'] ?></td>
            <td><?php echo $dados['cpf'] ?></td>
            <td><?php echo $dados['data_consulta'] ?></td>
            <td><?php echo $dados['horario_consulta'] ?></td>
            </tr>
          </tr>
          <?php } ?>
        </tbody>
      </table>
        
        
        
      <?php include './footer.php' ;  ?> 
     
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
          $('.carousel.carousel-slider').carousel({fullWidth: true});
      </script>
    </body>
  </html>