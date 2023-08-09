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

function isBlank($str) {
  return !isset($str) || trim($str) === '';
}

function isInteger($num) {
  return is_numeric($num) && intval($num) == $num;
}

function isText($str) {
  return !preg_match('/<script[^>]*>|<\/script>|<.*?[^>]>/i', $str);
}



##cadastrar
if(isset($_POST['cadastrar'])){
        ##dados recebidos pelo metodo POST
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $cpf = $_POST ["cpf"];
        $datanascimento = $_POST["datanascimento"];
        $endereco = $_POST ["endereco"];
        $estatus = $_POST ["estatus"];

        ##codigo SQL
        if (
          isBlank($nome) ||!isText($nome) ||
          isBlank($idade) ||!isInteger($idade) ||
          isBlank($cpf) ||!isInteger($cpf) ||
          isBlank($datanascimento) ||
          isBlank($endereco) ||!isText($endereco) ||
          isBlank($estatus) ||!isText($estatus)
      ) {
          echo "<script> alert('Por favor, preencha todos os campos corretamente antes de cadastrar.')
          window.location.href = 'cadprofessor.php';
          </script>";
      } else {
          if (strlen($nome) < 2) {
              echo "<script> alert('O nome deve ter pelo menos dois valores.')
              window.location.href = 'cadprofessor.php';
              </script>";
          }  elseif ($idade < 3) {
              echo "<script> alert('O aluno não pode possuir uma idade menor que 3 anos.')
              window.location.href = 'cadprofessor.php';
              </script>";
          }
        
        $sql = "INSERT INTO professor(nome,idade,cpf,datanascimento,endereco,estatus) 
                VALUES('$nome',$idade, '$cpf', '$datanascimento', '$endereco', '$estatus')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> O professor(a)
                $nome foi Incluido(a) com sucesso!!"; 
                echo " <button class='button'><a href='cadprofessor.php'>voltar</a></button>";
            }
        }
      }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cpf= $_POST["cpf"];
    $datanascimento= $_POST["datanascimento"];
    $endereco= $_POST ["endereco"];
    $estatus= $_POST ["estatus"];
    $id= $_POST["id"];
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, idade= :idade, cpf= :cpf, datanascimento= :datanascimento, 
    endereco= :endereco, estatus= :estatus WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O professor(a)
             $nome foi alterado(a) com sucesso!!"; 

            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }

}        

##Excluir
if (isset($_POST['excluir'])) {
  $id = $_POST['id'];

  $sql = "SELECT nome FROM professor WHERE id = :id";
  $stmt = $conexao->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  $result_stmt = $stmt->fetch(PDO::FETCH_ASSOC);

  $nome = $result_stmt['nome'];

echo "<script>
var confirmar = confirm('Tem certeza que deseja excluir o professor $nome?');
if (confirmar) {
    window.location.href = 'excluirprof.php? id=$id'; 
} else {
    window.location.href = 'listaprofessor.php';
}
</script>";
}


        
?>




