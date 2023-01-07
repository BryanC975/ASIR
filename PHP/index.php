<!DOCTYPE html>
<html>
<head>
    <title>DADOS</title>
</head>
<style>
  h1{
    color: white;
     -moz-box-shadow: 0px 0px 30px #F3FF00;
      -webkit-box-shadow: 0px 0px 30px #F3FF00;
      box-shadow: 0px 0px 30px #F3FF00;
      
      padding: 10px;
      border: 1px solid #66ff00;
      width: 360px;
      margin: 40px;
  }
    .DadoTemaLanzar{
        border: solid;
        color: white;
        padding: 15px ;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin: 4px;
        cursor: pointer;
        background-color: #044F43;
          -webkit-box-shadow: 0px 0px 4px #4195fc; 
    -moz-box-shadow: 0px 0px 4px #4195fc;
    box-shadow: 0px 0px 10px #4195fc;
        padding: 10px;
      border: 1px solid #fff;
      width: 160px;
      margin: 40px;
    }


</style>
<body style="background-size:1950px 850px; background-image: url(https://w0.peakpx.com/wallpaper/3/1019/HD-wallpaper-black-dice-dots-black-white-dice-light.jpg)">
<!--FORMULARIO ENVIA INFORMACION DE UNA PAGINA A OTRA -->
<center>
    <h1>ELIGE EL DADO Y LAS CARAS</h1>
<form action="dados2.php" method="post">
    <select class="DadoTemaLanzar" name="nDados" >
        <option value="1">1 dado </option>
        <option value="2">2 dados</option>
        <option value="3">3 dados</option>
    </select>
  <br>
    <select class="DadoTemaLanzar" name="vTema">
        <option value="0">4 Caras </option>
        <option value="1">6 Caras</option>
        <option value="2">8 Caras</option>
       <option value="3">10 Caras</option>
       <option value="4">12 Caras</option>
       <option value="5">20 Caras</option>
    </select>
  <br>
  <input type="text" class="DadoTemaLanzar" name="Rival" placeholder="Teclea número Rival">
  <br>
    <input class="DadoTemaLanzar" type="submit" value="Lanzar"/>
</form>
</center>
</body>
</html>
