<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<<<<<<< HEAD:Login_v3/nonTeaching.php
<?php
    if(isset($_SERVER["QUERY_STRING"])){
        extract($_GET);

        if($password=="nonTeaching"){
            header("Location: changePassword.php?username=nonTeaching");
        }
    }

    ?>

    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>

        <div class="dropdown">
            <button class="dropbtn" onclick="showdropdown('myDropdown')">Dropdown
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>


        <div class="dropdown" style="float:right">
            <button class="dropbtn" onclick="showdropdown('MenuDropdown')">Menu
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="MenuDropdown">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        
        <a style="float:right">Staff Name: Leung Gor</a>

    </div>


=======
  Non teaching main page
>>>>>>> parent of 079d3ec... .:Login_v3/nonTeaching.html
</body>
</html>