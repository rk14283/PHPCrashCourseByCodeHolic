<!doctype html>

//Next time when starting Xammp
1> Give permission, first navigat to documents folder: sudo chmod 777 -R htdocs
2> start xamp:  sudo /opt/lampp/lampp start


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php 
echo "Hello World"; 
echo " and PHP"; 
?>
<?php
//we can output HTML tags 
echo '<br>'; 
echo '<button>Click me</button>'; 
echo " Hello from another tag"; 
?>
<!--Echo HTML tags-->
</body>
</html>
<!--PHP is embedded in HTML-->