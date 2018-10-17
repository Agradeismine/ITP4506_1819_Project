<!DOCTYPE html>
<html>

<head>
    <title>Library System: Student Page</title>
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/fontSize.css"> 
    <link rel="stylesheet" type="text/css" href="css/Search.css"> 
        <link rel="stylesheet" type="text/css" href="css/advancedForm.css"> 
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

        function alert(msg) {   //logout alert
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
  
          
  $("#search").click(function(e) { 
        $("#simple").hide();
        $("#advanced").show();
        e.preventDefault();
    }); 
          
       $("#simpleSearch").click(function(e) { 
        $("#advanced").hide();
        $("#simple").show();
        e.preventDefault();
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
    if (isset($_SERVER["QUERY_STRING"])) {
        extract($_GET);
        if (!isset($_COOKIE['student'])) {
            header("Location: changePassword.php?username=student");
        }
    }

    ?>
    

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
   </div>
    
        
  
           <div  style="background-color: #F5E13C;">
         <div id="resize">
              <a class="increase" style="font-size:20px; opacity: 0.9;">A</a> 
              <a class="decrease" style="font-size:12px; opacity: 0.9;">A</a> 
              <a class="reset" style="opacity: 0.9;">R</a>
            </div>
     <div>
        <br> 
         <center>  <form class="example" id="simple">
                       <br>    <br>    
            <input type="search" placeholder="Search..."/>
             <button type="submit" style="margin:auto;max-width:50px"><i class="fa fa-search"></i></button>
            <button id="search" style="color:white; width: 180px; height: 42px; background-color:light-blue;">Advanced Search </button> 
         </form></center>
                   <form  id="advanced" style="display:none;" class="form-container">  
                       <br>
         Search for:   <input type="radio" name="sorting" value="everything" checked> Everything
                       <input type="radio" name="sorting" value="books"> Books
                       <input type="radio" name="sorting" value="software"> Software
                       <input type="radio" name="sorting" value="Magazines"> Magazines
                       <br><br>
                       <hr>
                       <br>
                       <select>
                        <option value="anyfield">Any field</option>
                        <option value="title">Title</option>
                        <option value="author">Author</option>
                        <option value="subject">Subject</option>
                        <option value="isbn">ISBN</option>
                      </select> contains 
                       <input type="text"  name="contains" id="first" required >
                       &nbsp;
                       <span id="language">Language 
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         <select>
                        <option value="anyLanguage">Any language</option>
                        <option value="english">English</option>
                        <option value="chinese">Chinese</option>
                        <option value="french">French</option>
                        <option value="german">German</option>
                      </select></span>
                       
                       <br>
                         <select id="operator">
                        <option value="and">AND</option>
                        <option value="or">OR</option>
                        <option value="not">NOT</option>
                      </select> 
                       
                        <select>
                        <option value="anyfield">Any field</option>
                        <option value="title">Title</option>
                        <option value="author">Author</option>
                        <option value="subject">Subject</option>
                        <option value="isbn">ISBN</option>
                      </select> contains
                       <input type="text"  name="contains" required>
                        &nbsp;&nbsp;
                              <span id="date">Publication Date 
                         <select>
                        <option value="anyYear">Any year</option>
                        <option value="specific">specific date</option>
                        <option value="last">Last year</option>
                        <option value="last2">Last 2 years</option>
                        <option value="last5">Last 5 years</option>
                       <option value="last10">Last 10 years</option>
                         <option value="last20">Last 20 years</option>     
                      </select></span>
                       
                       
                       
                       
                       
                      <button id="simpleSearch">Simple Search </button> 
         </form>
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
    <img src="jslib/images/1.jpg" title="Book name" style="width:75px; height=100px">
    <h1>London</h1>

    London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.<br><br>
    <hr>
  </article>

  </div>    
</section>

    <img src="arrow.png" onclick="topFunction()" id="myBtn" title="Go to top" style="width:25px; height=25px">
</body>

</html>
