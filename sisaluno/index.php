<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    margin: auto;
    padding: 0;
 }

.container{
   background-color: #d8dce0;
   width: 100%;
   height: 650px;
 
 }

 .conteudo {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  display: flex;
  justify-content: center; 
  align-items: center;
}

 
.topo{
     background-color: rgb(174, 30, 116);
     width: 100%;
     height: 160px;
     display: flex;
     justify-content: space-between;
     align-items: center;
     position: sticky;
     top: 0;
 }

 .t1{
    display: flex;
    align-content: flex-end;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin: 20px 20px 20px 300px;
}


.rodape {

    width: 100%;
    height: 95px;
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
}

img{
    margin: 30px 30px 30px 95px;
    border-radius: 20px;
    height: 150px;
    width: 10%;
    
}
.button{

    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color:  rgb(174, 30, 116);
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;

    

}

a:link, a:visited{
    color: rgb(255, 255, 255);
    text-align: center;
    display: inline-block;
    padding: 5px 20px;
    text-decoration: none;
    border: 2px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 15px;

}

a:hover {
    color: rgba(242, 117, 192, 0.705) ;
    text-decoration: none; 
    }



h3{
    font-weight:990px;
    font-size:45px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin: 8px 8px 8px 1px;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
<body>

<div class="container">
<div class="topo">
<img src= "logo-cadastro.png" alt=""> 

<div class= "t1"> 
<a href="https://www.ifbaiano.edu.br/unidades/guanambi/"> <b>IF BAIANO<b></a>
<a href="https://www.youtube.com/"> YOUTUBE</a>
<a href="https://www.google.com/maps/place/Guanambi+-+State+of+Bahia/@-14.1888985,-42.9898746,11z/data=!3m1!4b1!4m6!3m5!1s0x75ac2d5ea46c245:0xdbbd134623c62738!8m2!3d-14.2193421!4d-42.7796873!16s%2Fm%2F04lghl4?entry=ttu"> LOCALIZAÇÃO</a>
</div>
</div>

<h3>CADASTRO</h3>

<div class="conteudo">


    <button class="button"><a href="aluno/cadaluno.php">Cadastrar aluno</a></button>
    <button class="button"><a href="aluno/listaaluno.php">Lista de alunos</a></button>
    <button class="button"><a href="professor/cadprofessor.php">Cadastrar professor</a></button>
    <button class="button"><a href="professor/listaprofessor.php">Lista de professor</a></button>
    <button class="button"><a href="disciplina/cadisciplina.php">Cadastro de Disciplina</a></button>
    <button class="button"><a href="disciplina/listadisciplina.php">Lista de Disciplina</a></button>

</div>
</div>
<div class="rodape"> </div>
</body>
</html>
    
  

</body>
</html>