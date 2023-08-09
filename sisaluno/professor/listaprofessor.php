<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Alunos</title>
</head>
<style>
   
body {
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  margin: 0;
  padding: 0;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th, td {
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color:rgba(240, 96, 180, 0.578);
}

.button {
  padding: 10px 20px;
  background-color:  rgb(224, 28, 142);
  border: none;
  border-radius: 4px;
  text-decoration: none;
  margin-top: 10px;
}

.button:hover {
  background-color: grey;
}

.button3 {
  display: block; 
  margin: 0 auto; 
  margin-top: 20px;
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
<body>


<?php 

  require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM professor');
  $retorno->execute();

?>       
<H3>LISTA DOS PROFESSORES</H3>
        <table> 
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>IDADE</th>
                    <th>CPF</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>ENDEREÇO</th>
                    <th>ESTATUS</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['nome'] ?>  </td> 
                            <td> <?php echo $value['idade']?>  </td> 
                            <td> <?php echo $value['cpf']?>  </td> 
                            <td> <?php echo $value['datanascimento']?>    </td> 
                            <td> <?php echo $value['endereco']?>    </td>
                            <td> <?php echo $value['estatus']?>    </td> 
                           
                            


                            <td>
                               <form method="POST" action="altprofessor.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="POST" action="crudprofessor.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>

                             </td> 

                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
<?php         
   echo "<button class='button button3'><a href='../index.php'>voltar</a></button>";