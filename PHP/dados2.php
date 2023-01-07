<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="script.js"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/9148bfcc43.js" crossorigin="anonymous"></script>
    <title>dados</title>
</head>
<style>
input[type=submit] {
        background-color: #000000;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    }
    h1{
      color:black;
    }
  .b1{
        border: none;
        color: white;
        padding: 15px 31px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        background-color: #4CAF50;
    }
    .b2{
        background-color: #4CAF50;
        color: white;
        border: 2px solid  #008CBA;   
    }
        h1{
    color: white;
     -moz-box-shadow: 0px 0px 30px #F3FF00;
      -webkit-box-shadow: 0px 0px 30px #F3FF00;
      box-shadow: 0px 0px 30px #F3FF00;
      
      padding: 10px;
      border: 1px solid #66ff00;
      width: 500px;
      margin: 40px;
  }
  span{
     color: white;
     -moz-box-shadow: 0px 0px 30px #F3FF00;
      -webkit-box-shadow: 0px 0px 30px #F3FF00;
      box-shadow: 0px 0px 30px #F3FF00;
      
      padding: 10px;
      border: 1px solid #66ff00;
      width: 360px;
      margin: 40px;
  }
</style>
  <body style="background-size:1950px 850px; background-image: url(https://www.blogdelfotografo.com/wp-content/uploads/2021/12/Fondo_Negro_9.png)">
<center>
  <h1>RESULTADO</h1>
<?php
//var_export($_POST);
 $suma;
if ($_POST['vTema'] == 0){ 
  $num = 0;
     while($num < $_POST['nDados']){
       $var = rand(1,4);
       echo '<img height="180px" width="165px" src="Dado_4_Caras/'.$var.'.png">';
       $num++;
       $suma = $suma + $var;
     };
      if ($num == $_POST['nDados'])
       {  
         if ($suma == $_POST['Rival'])
         {
           echo '<h1>HA SIDO UN EMPATE</h1>';
          echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else if($suma > $_POST['Rival'])
         {
           echo '<h1>HAS GANADO TÚ</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
             echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else
         {
            echo '<h1>HA GANADO EL RIVAL</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
            echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
       };
  
} elseif ($_POST['vTema'] == 1){
      $num = 0;
     while($num < $_POST['nDados']){
       $var = rand(1,6);
       echo '<img height="180px" width="165px" src="Dado_6_Caras/'.$var.'.png">';
         $num++;
       $suma = $suma + $var;
     };
  if ($num == $_POST['nDados'])
       {  
         if ($suma == $_POST['Rival'])
         {
           echo '<h1>HA SIDO UN EMPATE</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else if($suma > $_POST['Rival'])
         {
           echo '<h1>HAS GANADO TÚ</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else
         {
            echo '<h1>HA GANADO EL RIVAL</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
       };
} elseif  ($_POST['vTema'] == 2){
    $num = 0;
     while($num < $_POST['nDados']){
       $var = rand(1,8);
       echo '<img height="180px" width="165px" src="Dado_8_Caras/'.$var.'.png">';
         $num++;
       $suma = $suma + $var;
     };
    if ($num = $_POST['nDados'])
       {  
         if ($suma == $_POST['Rival'])
         {
           echo '<h1>HA SIDO UN EMPATE</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else if($suma > $_POST['Rival'])
         {
          echo '<h1>HAS GANADO TÚ</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else
         {
            echo '<h1>HA GANADO EL RIVAL</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
       };
  
} elseif  ($_POST['vTema'] == 3){
    $num = 0;
     while($num < $_POST['nDados']){
       $var = rand(1,10);
       echo '<img height="180px" width="165px" src="Dado_10_caras/'.$var.'.png">';
         $num++;
        $suma = $suma + $var;
     };
  if ($num == $_POST['nDados'])
       {
         if ($suma == $_POST['Rival'])
         {
           echo '<h1>HA SIDO UN EMPATE</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else if($suma > $_POST['Rival'])
         {
           echo '<h1>HAS GANADO TÚ</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else
         {
            echo '<h1>HA GANADO EL RIVAL</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
       };
} elseif ($_POST['vTema'] == 4){
  $salto = 0;
    $num = 0;
     while($num < $_POST['nDados']){
       $var = rand(1,12);
       echo '<img height="180px" width="165px" src="Dado_12_Caras/'.$var.'.png">';
       $num++;
        $suma = $suma + $var;
    };
  if ($num == $_POST['nDados'])
       { 
         if ($suma == $_POST['Rival'])
         {
           echo '<h1>HA SIDO UN EMPATE</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else if($suma > $_POST['Rival'])
         {
           echo '<h1>HAS GANADO TÚ</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else
         {
            echo '<h1>HA GANADO EL RIVAL</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
       };
} elseif ($_POST['vTema'] == 5){
    $num = 0;
     while($num < $_POST['nDados']){
       $var = rand(1,20);
       echo '<img height="180px" width="165px" src="Dados_20_Caras/'.$var.'.png">';
         $num++;
        $suma = $suma + $var;
     };
   if ($num == $_POST['nDados'])
       {  
         if ($suma == $_POST['Rival'])
         {
           echo '<h1>HA SIDO UN EMPATE</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else if($suma > $_POST['Rival'])
         {
           echo '<h1>HAS GANADO TÚ</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
         else
         {
            echo '<h1>HA GANADO EL RIVAL</h1>';
           echo '<h1> El reultado de la suma = '.$suma.'</h1>';
           echo '<h1> El número del rival es = '.$_POST['Rival'].'</h1>';
         }
       };
}

?>
  <a href="index.php">
    <button class="b1 b2">Volver</button>
</a>
</center>
</body>
</html>