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

          $('#checkDate').change(function() {
              var date = $('#checkDate').val();
              if(date == "specific"){
                $("#startDate").show();
                $("#endDate").show();
              }
            else{
              $("#startDate").hide();
              $("#endDate").hide();
            }
          });
          
          
          
          
          
            $("#searchBtn").click(function(event) { 
                $.getJSON('jslib/book.json', function(rs) {
                    for (var i = 0; i < rs.length; i++) {
                        $('#bookResults').append('<article> <img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=120px; float: left; margin-right: 15px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                        '<table width="600" >'+
                        '<tr><td>Type: Music</td><td>Year: 2018</td><td>ISBN: 21796247</td></tr>'+
                        '<tr><td>Language: English</td><td>Author: Author A</td><td>Publisher: University of California Press</td></tr>'+
                        '</table><br>'+
                        'Description:&emsp;London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants. Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.<br><br><hr>'+
                        '</article>');
                        //$('#bookResults').append('<p>Year : ' + '\t' + rs.birthday[i].year + '</p>');
                        //$('#bookResults').append('<p>Sex: ' + '\t' + rs[i].bookname[i] + '</p><br>');
                    };
                });
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
         if (!isset($_COOKIE['student'])) {
             header("Location: changePassword.php?username=student");
         }
         if (isset($_SERVER["QUERY_STRING"])) {
             extract($_GET);
         }

    ?>


    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>


        <div class="dropdown">
            <button class="dropbtn" onclick="showdropdown('CategoryDropdown')">Category
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="CategoryDropdown">
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



    <div style="background-color: #F5E13C;">
        <div id="resize">
            <a class="increase" style="font-size:20px; opacity: 0.9;">A</a>
            <a class="decrease" style="font-size:12px; opacity: 0.9;">A</a>
            <a class="reset" style="opacity: 0.9;">R</a>
        </div>
        <div>
            <br>
            <center>
                <form class="example" id="simple">
                    <br> <br>
                    <input type="search" placeholder="Search..." />
                    <button id="searchBtn" type="button" style="margin:auto;max-width:50px"><i class="fa fa-search"></i></button>
                    <button id="search" style="color:white; width: 180px; height: 42px; background-color:light-blue;">Advanced
                        Search </button>
                </form>
            </center>
            <form id="advanced" style="display:none;" class="form-container">
                <br>
                Search for: <input type="radio" name="sorting" value="everything" checked> Everything
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
                <input id="first" type="text" name="contains" required>
                &nbsp;
                <span id="language">Language
                    &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; 
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
                <input type="text" name="contains" required>
           
                <span id="date">Publication Date
                    <select id="checkDate">
                        <option value="anyYear">Any year</option>
                        <option value="specific">specific date</option>
                        <option value="last">Last year</option>
                        <option value="last2">Last 2 years</option>
                        <option value="last5">Last 5 years</option>
                        <option value="last10">Last 10 years</option>
                        <option value="last20">Last 20 years</option>
                    </select></span>
                    
                 <div id="startDate">
                 <br><br>
                 <span id="start">
                      Start Date:
                        <select id="day" name="day">
          <option value="day">Day</option>              
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
     </select>
                   
                    <select id="month" name="month">
        <option value="month">Month</option>              
        <option value="January">01</option>
        <option value="February">02</option>
        <option value="March">03</option>
        <option value="April">04</option>
        <option value="May">05</option>
        <option value="June">06</option>
        <option value="July">07</option>
        <option value="August">08</option>
        <option value="September">09</option>
        <option value="October">10</option>
        <option value="November">11</option>
        <option value="December">12</option>
     </select>
                <input type="text" name="year" id="year" placeholder="Year">
        </span>
              </div>   
                
                        <div id="endDate">
                 <br><br>
                 <span id="end">
                      End Date: &nbsp;
                        <select id="day" name="day">
          <option value="day">Day</option>              
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
     </select>
                   
                    <select id="month" name="month">
        <option value="month">Month</option>              
        <option value="January">01</option>
        <option value="February">02</option>
        <option value="March">03</option>
        <option value="April">04</option>
        <option value="May">05</option>
        <option value="June">06</option>
        <option value="July">07</option>
        <option value="August">08</option>
        <option value="September">09</option>
        <option value="October">10</option>
        <option value="November">11</option>
        <option value="December">12</option>
     </select>
                <input type="text" name="year" id="year" placeholder="Year">
        </span>
              </div>    
                    
                      
                        
                            

                <button id="simpleSearch" >Simple Search </button>
            </form>
            <br>
        </div>

    </div>


    <section>
        <nav>
            <ul>
                <li><a href="#">London</a></li>
                <li><a href="#">Paris</a></li>
                <li><a href="#">Tokyo</a></li>
            </ul>
        </nav>

        <div id="bookResults" class="resizable">
            <article>
                <img src="jslib/images/1.jpg" title="Book name" style="width:120px; height=150px; float: left; margin-right: 15px; margin-bottom: 10px;">
                <h3>Book Name</h3>
                <table width="600">
                    <tr>
                        <td>Type: Music</td>
                        <td>Year: 2018</td>
                        <td>ISBN: 21796247</td>
                    </tr>
                    <tr>
                        <td>Language: English</td>
                        <td>Author: Author A</td>
                        <td>Publisher: University of California Press</td>
                    </tr>
                </table><br>
                Description:&emsp;London is the capital city of England. It is the most populous city in the United
                Kingdom, with a metropolitan area of over 13 million inhabitants.
                Standing on the River Thames, London has been a major settlement for two millennia, its history going
                back to its founding by the Romans, who named it Londinium.<br><br>
                <hr>
            </article>

        </div>
    </section>

    <img src="arrow.png" onclick="topFunction()" id="myBtn" title="Go to top" style="width:25px; height=25px">
</body>

</html>