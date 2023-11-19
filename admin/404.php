<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 100%;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  top: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
</style>
</head>
<body>



<div class="container w3-display-container">
  <img src="app3.jpg" alt="coffee" style="width:100%;">
  <div class="w3-display-middle w3-large">
    <a class="w3-button w3-green w3-hover-blue" href="index.php">Back...</a>
  </div>
  <div class="content">
    <h1>GATEWAY 404</h1>
    <p><b>Look's like you have encounter a problem sending data to the database...!!!!</b></p>
   
  </div>
</div>

</body>


</html>
