<!DOCTYPE html>
<html>

<head>
    <title>Library System: Student Page</title>
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/fontSize.css"> 
    <link rel="stylesheet" type="text/css" href="css/Search.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        
        window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
        
        
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


        <div class="dropdown">
            <button class="dropbtn" onclick="showdropdown('CategoryDropdown')">Category
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="CategoryDropdown" >
                <a href="#">Books</a>
                <a href="#">Software</a>
                <a href="#">Magazines</a>

            </div>
        </div>
 
            

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
        <br>
            <br>    <br>    <br>    <br>   
         <center>  <form class="example">
            <input type="search" placeholder="Search..."/>
             <button type="submit" style="margin:auto;max-width:50px"><i class="fa fa-search"></i></button>
            <a href="url" style="color:white; height: 14px;">Advanced Search </a>
         </form></center>
         <br>   

    
   </div>
    
   <section>
  <nav>
    <ul>
      <li><a href="#">London</a></li>
      <li><a href="#">Paris</a></li>
      <li><a href="#">Tokyo</a></li>
    </ul>
  </nav>
  
  <div class="resizable">
  <article>
    <h1>London</h1><p>
    London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.<br><br></p>
    <hr></article>
  <article>

  </div>    
</section>

    <img src="arrow.png" onclick="topFunction()" id="myBtn" title="Go to top" style="width:25px; height=25px">
</body>

</html>
