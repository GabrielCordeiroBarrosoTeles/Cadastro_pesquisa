<html>
    <head>
        <title>Recebe</title>
   
    <script>
        
         function ok(){
             setTimeout("window.location.href='agenda.php'",2000);
         }
        
        
        </script>
    
    
    </head>
    <body>
        
        
        

<?php
 include './conexao.php';
   $nome         = $_POST['nome'];
   $sobrenome    = $_POST['sobrenome'];
   $cpf       = $_POST['cpf'];
   $data_consulta = $_POST['data_consulta'];
   $horario_consulta = $_POST['horario_consulta'];
          
$inserir = $con -> query
("INSERT INTO paciente VALUES(0,'$nome', 
'$sobrenome','$cpf','$data_consulta','$horario_consulta')");
   
if($inserir){
    echo "Cadastro realizado com sucesso";
    echo "<script>ok() </script>";
}else{
        echo "Cadastro não realizado";
       echo "<script>ok() </script>";

}

?>
        
        
        
    </body>
</html>


