<html>
<head>
<title>Hello World!</title>
</head>
<body>
<?php
$hello = array("Hello" , "Greetings" , "Hey");
$hello2 = array("nice to meet you!" , "how are you?" , "what's up?");
$a = rand(0,2);
$b = rand(0,2);

echo $hello[$a] , ", " , $hello2[$b] , " This is my first project on Github!";
?>
</body>
</html>