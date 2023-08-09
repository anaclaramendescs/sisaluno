<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
  color: #333;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.button {
  display: block;
  width: 150px;
  margin: 10px auto;
  padding: 10px 20px;
  background-color: rgb(224, 28, 142);
  color: white;
  border: none;
  border-radius: 4px;
  text-decoration: none;
}

.button:hover {
  background-color: #0b7dda;
}


</style>
<body>

<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');





##cadastrar
if(isset($_POST['cadastrar'])){
        ##dados recebidos pelo metodo POST
        $nomedisciplina = $_POST["nomedisciplina"];
        $ch= $_POST["ch"];
        $semestre=$_POST["semestre"];
        $idprofessor=$_POST["idprofessor"];

        ##codigo SQL
        
          $sql = "INSERT INTO disciplina (nomedisciplina, ch, semestre, idprofessor) 
          VALUES('$nomedisciplina','$ch','$semestre', '$idprofessor')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> A disciplina
                $nomedisciplina foi Incluido(a) com sucesso!!"; 
                echo " <button class='button'><a href='cadisciplina.php'>voltar</a></button>";
            }
        }
      
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $id= $_POST["id"];
    $nomedisciplina= $_POST["nomedisciplina"];
    $ch= $_POST["ch"];
    $semestre= $_POST["semestre"];
    $idprofessor= $_POST["idprofessor"];

      ##codigo sql
    $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, ch= :ch, semestre=:semestre, idprofessor=:idprofessor WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
    $stmt->bindParam(':ch',$ch, PDO::PARAM_STR);
    $stmt->bindParam(':semestre',$semestre, PDO::PARAM_STR);
    $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_INT);


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> A disciplina 
             $nomedisciplina foi alterado(a) com sucesso!!"; 

            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }

}        


##Excluir
if (isset($_POST['excluir'])) {
  $id = $_POST['id'];

  $sql = "SELECT nomedisciplina FROM disciplina WHERE id = :id";
  $stmt = $conexao->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  $result_stmt = $stmt->fetch(PDO::FETCH_ASSOC);

  $nomedisciplina = $result_stmt['nomedisciplina'];


echo "<script>
var confirmar = confirm('Tem certeza que deseja excluir a disciplina $nomedisciplina?');
if (confirmar) {
    window.location.href = 'excluirdisciplina.php? id=$id'; 
} else {
    window.location.href = 'listadisciplina.php';
}
</script>";
}


        
?>




