<?php
include("db.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
         function ajax() {
             var req = new XMLHttpRequest();
             req.onreadystatechange = function () {
                 if(req.readyState == 4 && req.status == 200){
                     document.getElementById('chat').innerHTML = req.responseText;
                 }
             }
             req.open("GET","chat.php",true);
             req.send();
         }
         setInterval(function () {
             ajax();}, 1000);
    </script>
    <link rel="stylesheet" href="style.css">
    <title>Chat Room in php</title>
</head>
<body onload="ajax();">
<div id="container">
 <div id="chat_box">
     <div id="chat"></div>
 </div>
 <form action="index.php" method="post">
 <textarea name="name" id=""  placeholder="Enter in " ></textarea>
 <textarea name="msg" id=""  placeholder="Enter message " ></textarea>
 <input type="submit" value="send it" name="submit">
 </form>
 <?php
  if (isset($_POST["submit"])) {
     $name = $_POST["name"];
     $text = $_POST["msg"]; 

    $query = "INSERT INTO chat (name,message) values('$name','$text')";
    $run = $coaction->query($query);
    
    // if($run){
    //     echo "< embed loop='false' src='chat' hidden='true' autoplay='true' />";
    // }

  }
 ?>
</div>
</body>
</html>
