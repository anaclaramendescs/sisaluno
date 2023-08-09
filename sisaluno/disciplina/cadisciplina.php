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
    height: 1050px;   
    
 }


.box {
  width: 100px;
  margin: 10px;
  margin: 5px 5px 5px 30px;
 
}


.meio{
  
   background-color: #a6a9ad;
   width: 35%;
   height: 540px;
   margin: 90px 70px 70px 500px;
   border-radius: 10px;
   margin-right: 40px;
 

    
 }

 .id{
    height: 30px;
    width: 400px;
    border-radius: 10px;
    margin: 5px 5px 5px 30px;

   
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
h2{
    font-weight:700px;
    font-size:30px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin: 30px 30px 30px 95px;
}

img{
    margin: 30px 30px 30px 95px;
    border-radius: 20px;
    height: 150px;
    width: 10%;
    
}
.botao{
 
       background-color: rgb(224, 28, 142);
       width: 30%;
       height: 40px;
       border-radius: 4px;
       border: 1px white;
       font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
       font-size: 20px;
       color:white;
       margin: 5px 5px 5px 30px;

}
.t1{
    display: flex;
    align-content: flex-end;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin: 20px 20px 20px 300px;
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

.button{
    background-color: rgb(224, 28, 142);
    height: 40px;
    width: 30%;
    border-radius: 3px;
    border: 1px white;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
    color:white;
    margin: 5px 8px 8px 5px;
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
  
  <form method="POST" action="crudisciplina.php">
    
<div class="meio">
<h2>CADASTRO DISCIPLINA</h2>

    <p class="box"> DISCIPLINA:<br></p>
    <p><input type="text" name= "nomedisciplina" class="id" /></p>

    <p class="box">CARGA HORÁRIA:<br></p>
    <p><input type="text" name= "ch" class="id"/> </p>

    <p class="box">SEMESTRE:<br></p>
    <p><input type="text" name= "semestre" class="id"/> </p>

    <p class="box">ID DO PROFESSOR:<br></p>
    <p><input type="number" name= "idprofessor" class="id"/> </p>

    

    <input type="submit" name="cadastrar" class="botao" value="cadastrar">
</form>

     <button class="button"><a href="../index.php">Voltar</a></button>
     </div>

</div>
</body>
</html>