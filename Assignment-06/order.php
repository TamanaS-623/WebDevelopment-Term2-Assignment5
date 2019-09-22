<!--
Name - Tamana Seddiqi
ID  - 991528861
Date - 2019-03-28
-->

<html>
<head>
  <link href="css.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <img id = "title" src= "images/title.jpg"/>
      <h1 id = "tim-hortons">Tim Hortons</h1>
  <h1 id = "thank-you">Thank You for Choosing Tim Hortons! Please Visit Again!</h1>

  <div class="orderClass">

  <?php
    $_coffee = $_REQUEST['coffee'];
    $_size = $_REQUEST['size'];
    $_cream = $_REQUEST['cream'];
    $_sugar = $_REQUEST['sugar'];

    Size($_coffee, $_size);
    Cream($_cream,$_coffee);
    Sugar($_sugar,$_coffee);
    calculate($_coffee,$_size);

    function Size($_coffee, $_size){
      for($_i=1; $_i<=$_coffee; $_i++){
        if($_size=="Small"){
          echo "<img src='images/coffee.png' width='50' height='80' />";
        }

        if($_size=="Mediam"){
          echo "<img src='images/coffee.png' width='90' height='140' />";
        }

        if($_size=="Large"){
          echo "<img src='images/coffee.png' width='130' height='180' />";
        }

        if($_size=="Extra-large"){
          echo "<img src='images/coffee.png' width='170' height='220' />";
        }
      }
    }

    function Cream($_cream,$_coffee){
      for($_i=1; $_i<=($_cream*$_coffee); $_i++){
        echo "<img src='images/cream.jpg' width='50' height='100' />";
      }
    }

    function Sugar($_sugar,$_coffee){
      for($_i=1; $_i<=($_sugar*$_coffee); $_i++){
        echo "<img src='images/sugar.JPG' width='50' height='100' />";
      }
    }

    function Price($_size){
      if($_size=="Small")
        return $_price = 1.50;

      if($_size=="Mediam")
        return $_price = 1.90;

      if($_size=="Large")
        return $_price = 2.20;

      if($_size=="Extra-large")
        return $_price = 2.50;
    }

    function calculate($_coffee,$_size){
      $_count = ((Price($_size) * $_coffee) + (13/100.0));
      echo"<div><h1>The Price of $_size Coffee is $".Price($_size). "<br /> The Total amount is $$_count </h1></div>";
    }

  ?>
  </div>
</body>
</html>
