<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(242, 117, 192, 0.705);
           
        }


        form input[type="text"],
        form input[type="submit"] {
            display: block;
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
           
        }
        
      

        form input[type="submit"] {
            
            width: 30%;
            background-color: rgb(224, 28, 142);
            color: white;
            cursor: pointer;
        }
        h3{
        font-weight:900px;
        font-size:35px;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin: 8px 8px 8px 1px;
        display: flex;
        align-items: center;
        justify-content: center;
}
    </style>
</style>
<body>

<?php
    require_once('../conexao.php');

   $id= $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $endereco = $array_retorno['endereco'];
   $estatus= $array_retorno['estatus'];

?>
<header>
    <h3>ALTERAÇÃO DE DADOS DOS ALUNOS</h3> </header>


  <form method="POST" action="crudaluno.php">
        <input type="text" name="nome" id="" value=<?php echo $nome?> >
                                                
        <input type="text" name="idade" id="" value=<?php echo $idade ?> >
      
        <input type="text" name="datanascimento" id="" value=<?php echo $datanascimento ?> >

        <input type="text" name="endereco" id="" value=<?php echo $endereco ?> >

        <input type="text" name="estatus" id="" value=<?php echo $estatus ?> >

        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
    

        
        <input type="submit" name="update" value="Alterar">
        

      
  </form>


</body>

</body>
</html>