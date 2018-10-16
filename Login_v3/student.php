<!DOCTYPE html>
<html>

<head>
    <title>Library System: Student Page</title>
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/fontSize.css"> 
    <link rel="stylesheet" type="text/css" href="css/Search.css"> 
    <script src="jslib/jquery-1.11.1.js"></script>
    <script>
        /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
        function showdropdown(id) {
            document.getElementById(id).classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var CategoryDropdown = document.getElementById("CategoryDropdown");
                var MenuDropdown = document.getElementById("MenuDropdown");

                if (CategoryDropdown.classList.contains('show')) {
                    CategoryDropdown.classList.remove('show');
                }

                if (MenuDropdown.classList.contains('show')) {
                    MenuDropdown.classList.remove('show');
                }
            }
        }

        function alert(msg) {
            var r = confirm(msg);
			if (r == true) {
				window.location.href = "index.php";
			}
        }

        $(document).ready(function(){
  var resize = new Array('.resizable');
  resize = resize.join(',');
  
  //resets the font size when "reset" is clicked
  var resetFont = $(resize).css('font-size');
    $(".reset").click(function(){
      $(resize).css('font-size', resetFont);
    });
  
  //increases font size when "+" is clicked
  $(".increase").click(function(){
    var originalFontSize = $(resize).css('font-size');
    var originalFontNumber = parseFloat(originalFontSize, 10);
    var newFontSize = originalFontNumber*1.2;
    $(resize).css('font-size', newFontSize);
    return false;
  });
  
  //decrease font size when "-" is clicked
  
  $(".decrease").click(function(){
    var originalFontSize = $(resize).css('font-size');
    var originalFontNumber = parseFloat(originalFontSize, 10);
    var newFontSize = originalFontNumber*0.8;
    $(resize).css('font-size', newFontSize);
    return false;
  });
  
});
        
        
    </script>
</head>

<body>
    <?php
    if(isset($_SERVER["QUERY_STRING"])){
        extract($_GET);
        if(!isset($_COOKIE['student'])) {
            header("Location: changePassword.php?username=student");
        }
    }

    ?>
    
     <div id="resize">
              <a class="increase" style="font-size:20px; opacity: 0.8;">A</a> 
              <a class="decrease" style="font-size:12px; opacity: 0.8;">A</a> 
              <a class="reset" style="opacity: 0.8;">R</a>
            </div>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>

<<<<<<< HEAD
        <div class="dropdown" >
            <button class="dropbtn" onmouseover="showdropdown('myDropdown')" onmouseout="showdropdown('myDropdown')">Dropdown
=======
        <div class="dropdown">
            <button class="dropbtn" onclick="showdropdown('CategoryDropdown')">Category
>>>>>>> deb67393eed3bfe3fa0947350be8f79604a94e2b
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="CategoryDropdown" >
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>

           <form>
      <input type="text" name="search" placeholder="Search..">
    </form>

        <div class="dropdown" style="float:right">
            <button class="dropbtn" onclick="showdropdown('MenuDropdown')">Menu
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="MenuDropdown">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#" onclick="alert('Do you want to logout?');">Logout</a>
            </div>
        </div>

        <a style="float:right">Student Name: Yip Yiu Cheung</a>

    </div>

    <div class="resizable">

    
    </div>
    
</body>

</html>
