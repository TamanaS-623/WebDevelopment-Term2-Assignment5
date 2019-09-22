<!--
Name - Tamana Seddiqi
ID  - 991528861
Date - 2019-03-28
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>a6-Tamana-Seddiqi</title>
    <link href="css.css" type="text/css" rel="stylesheet" />

  </head>
  <body>
<img id = "title" src= "images/title.jpg"/>
    <h1 id = "tim-hortons">Tim Hortons</h1>



    <form action="order.php" method="post">
        <div class="box">
      <div class="coffee">
       <img src= "images/coffee.png" height="100" width="100"/><br />
      Coffee: <input type="number" value="coffee" name="coffee" min="1" />
      </div>

      <div class="size">
      <img src= "images/size.jpg" height="100" width="100"/><br />
      Size:  <select id = "select" name="size">
            <option value="Small"> Small  </option>
            <option value="Mediam"> Mediam </option>
            <option value="Large"> Large </option>
            <option value="Extra-large"> Extra-Large </option>
            </select>
      </div>

      <div class="cream">
      <img src= "images/cream.jpg" height="100" width="100"/><br />
      Cream: <input type="number" value="cream" name="cream" min="0" />
      </div>

      <div class="sugar">
      <img src= "images/sugar.JPG" height="100" width="100"/><br />
      Sugar: <input type="number" value="sugar" name="sugar" min="0"/>
      </div>

      <div class = "button" >
      <input id = "order" type="submit" value="Order"/>
      </div>

      </div>
    </form>

  </body>
</html>
