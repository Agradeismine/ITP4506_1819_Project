<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Library System: Student Page</title>
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/fontSize.css">
    <link rel="stylesheet" type="text/css" href="css/Search.css">
    <link rel="stylesheet" type="text/css" href="css/advancedForm.css">
    <link rel="stylesheet" type="text/css" href="css/loading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
    <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

    <!--<script src="jslib/jquery-1.11.1.js"></script>-->
    <script>
        /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
        function showdropdown(id) {
            document.getElementById(id).classList.toggle("show");
        }
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 1000);
        }

        function showPage() {
          document.getElementById("loader").style.display = "none";
          document.getElementById("main").style.display = "block";
        }
      
              var myVar2;

        function myFunction2() {
            myVar2 = setTimeout(showPage2, 2000);
        }

        function showPage2() {
          document.getElementById("loader2").style.display = "none";
          document.getElementById("data").style.display = "block";
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

        function loginAlert(msg) {   //login alert
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
  
            var count=0;
            var addcount = 1;   //id AdvKeyword2,3,4,5
            var AndOrNotField = 1;
            var TypeField = 1;

              $("#add").click(function(){
                  $("#clear").show();
                if(count<5){
                    count+=1;   addcount+=1;    AndOrNotField+=1;   TypeField+=1;
                    $( "#addOper" ).append("<select id='AndOrNotField"+AndOrNotField+"'> <option value='and'>AND</option><option value='or'>OR</option><option value='not'>NOT</option></select> <select id='TypeField"+TypeField+"'><option value=' anyfield '>Any field</option><option value='title'>Title</option><option value='author'>Author</option><option value='subject'>Subject</option> <option value='isbn'>ISBN</option></select> contains <input id='AdvKeyword"+addcount+"'type='text' name='contains' required><br>");
                }
                 if(count>3){
                     $(this).hide();
                 }   

              });
    
                  $('#first').keyup(function()
                  {
                         if($('#first').val() != ''){
                            $("#forSearch").fadeIn("slow");
                         }
                      else{
                         $("#forSearch").fadeOut("slow");
                      }
                  });
          
            $("#search").click(function(e) { 
                    //$("#simple").hide();
                    //$("#advanced").show();
//                $( "#simple" ).fadeOut( 500, function() {
//                $( "#advanced" ).fadeIn( 1000 );
//              });
              
              
                   $( "#simple" ).fadeOut( "fast" );
                    $( "#advanced" ).fadeIn( "slow" );
                    e.preventDefault();
            }); 
        
            $("#simpleSearch").click(function(e) {
                $( "#advanced" ).fadeOut( "fast" );
                $( "#simple" ).fadeIn( "slow" );
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
          
          
                $("#clear").click(function(e) { 
                        $("#startDate").hide();
                        $("#endDate").hide();
                        jQuery('#addOper').html('');
                        $("#add").show();
                        $(this).hide();
                    count = 0;
                });  
//          
//          $("input:[checkbox]").click(function(e) { 
//                       
//                });  

            $("#loadMagazine").click(function(e) {
                $('#bookResults').html("");
                $.getJSON('jslib/Magazines.json', function(rs) {
                    for (var i = 0; i < (rs.length); i++) {
                        $('#bookResults').append('<div class="filter'+(i+9)+'"> <img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                        '<table width="600" >'+
                        '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td></tr>'+
                        '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>Author: '+rs[i].Author+'</td><td>Publisher: '+rs[i].Publisher+'</td></tr>'+
                        '</table><br>'+
                        'Description:&emsp;'+rs[i].Description+'<br><br><br><hr>'+
                        '</div>');
                    };
                });
            });  

            
            $("#loadMoreBtn").click(function(e) {
                $(".hiddenRs").show();
            });  

            $(function() {      //2 side range
                $( "#slider-range" ).slider({
                    range: true,
                    min: 2000,
                    max: 2018,
                    values: [ 2000, 2018 ],
                    slide: function( event, ui ) {
                        $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                    }
                });
                $( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
                " - " + $( "#slider-range" ).slider( "values", 1 ) );
            });
 
            $("#searchBtn").click(function(event) {

                var value = $("#keywords").val().toLowerCase();

                for(var i = 0; i<=23; i++){
                    var filterClass = ".filter"+i+" *";
                    var filter = ".filter"+i;
                    //alert(filterClass+", "+filter);
                    $(filterClass).filter(function() {
                        $(filter).toggle($(filterClass).text().toLowerCase().indexOf(value) > -1)
                    });
                }
              
              
            });

            $("#AdvSearchBtn").click(function(event) {
                //alert("Test AdvSearchBtn");     //test
                var firstField = $("#firstField").val();
                var AdvKeyword0 = $("#first").val().toLowerCase();  //must be input
                var LanguageField = $("#LanguageField").val();
                var checkDate = $("#checkDate").val();

                var AndOrNotField1 = $("#AndOrNotField1").val();    //1,2,3,4,5
                var TypeField1 = $("#TypeField1").val();
                var AdvKeyword1 = $("#AdvKeyword1").val().toLowerCase();    //may not be input

                

                // for(var i = 0; i<=23; i++){
                //     var filterClass = ".filter"+i+" *";
                //     var filter = ".filter"+i;
                    // alert(filterClass+", "+filter);
                //     $(filterClass).filter(function() {
                //         $(filter).toggle($(filterClass).text().toLowerCase().indexOf(value) > -1)
                //     });
                // }
            });

            
          
              $(window).scroll(function () {
                    var top =  $("#myBtn");
                        if ( $('body').height() <= (    $(window).height() + $(window).scrollTop() + 200 )) {
                top.animate({"margin-left": "0px"},1500);
                        } else {
                            top.animate({"margin-left": "-100%"},1500);
                        }
                });

                $("#myBtn").on('click', function () {
                    $("html, body").animate({scrollTop: 0}, 400);
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
<body onload="myFunction()" >
    <img src="test.png"  onload="myFunction2()" style="display:none; ">
    <?php
        if (!isset($_COOKIE['student'])) {
             header("Location: changePassword.php?username=student");
        }
        if (isset($_SERVER["QUERY_STRING"])) {
            extract($_GET);
            if(isset($Magazine)){   ?>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#bookResults').html("");
                        $.getJSON('jslib/Magazines.json', function(rs) {
                            for (var i = 0; i < (rs.length); i++) {
                                $('#bookResults').append('<div class="filter'+(i+9)+'"> <img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                '<table width="600" >'+
                                '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td></tr>'+
                                '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>Author: '+rs[i].Author+'</td><td>Publisher: '+rs[i].Publisher+'</td></tr>'+
                                '</table><br>'+
                                'Description:&emsp;'+rs[i].Description+'<br><br><br><hr>'+
                                '</div>');
                            };
                        });
                    });
                </script>
            <?php
            }else if(isset($Software)){ ?>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#bookResults').html("");
                        $.getJSON('jslib/software.json', function(rs) {
                            for (var i = 0; i < (rs.length); i++) {
                                $('#bookResults').append('<div class="filter'+(i+14)+'"><img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                '<table width="300" >'+
                                '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td></tr>'+
                                '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>OS: '+rs[i].OS+'</td></tr>'+
                                '</table><br>'+
                                'Description:&emsp;'+rs[i].Description+'<br><br><br><hr>'+
                                '</div>');
                            };
                        });
                    });
                </script>
            <?php 
            }else if(isset($Book)){ ?>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#bookResults').html("");
                        // $('#bookResults').html("");
                        $.getJSON('jslib/book.json', function(rs) {
                            for (var i = 0; i < rs.length; i++) {
                                $('#bookResults').append('<div class="filter'+i+'"><img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                '<table width="600" >'+
                                '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td><td>ISBN: '+rs[i].ISBN+'</td></tr>'+
                                '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>Author: '+rs[i].Author+'</td><td>Publisher: '+rs[i].Publisher+'</td></tr>'+
                                '</table><br>'+
                                'Description:&emsp;'+rs[i].Description+'<br><br><br><hr>'+
                                '</div>');

                                };
                            });
                        });
                </script>
            <?php 
            }else if(isset($Technology)){
                ?>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#bookResults').html("");
                        $.getJSON('jslib/software.json', function(rs) {
                            for (var i = 0; i < (rs.length); i++) {
                                $('#bookResults').append('<div class="filter'+(i+14)+'"><img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                '<table width="300" >'+
                                '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td></tr>'+
                                '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>OS: '+rs[i].OS+'</td></tr>'+
                                '</table><br>'+
                                'Description:&emsp;'+rs[i].Description+'<br><br><br><hr>'+
                                '</div>');
                            };
                        });
                        $.getJSON('jslib/book.json', function(rs) {
                            for (var i = 8; i < rs.length; i++) {
                                $('#bookResults').append('<div class="filter'+i+'"><img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                '<table width="600" >'+
                                '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td><td>ISBN: '+rs[i].ISBN+'</td></tr>'+
                                '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>Author: '+rs[i].Author+'</td><td>Publisher: '+rs[i].Publisher+'</td></tr>'+
                                '</table><br>'+
                                'Description:&emsp;'+rs[i].Description+'<br><br><br><hr>'+
                                '</div>');

                            };
                        });
                    });
                </script>
                            <?php 
            }else if(isset($History)){ ?>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#bookResults').html("");
                        $.getJSON('jslib/Magazines.json', function(rs) {
                            for (var i = 0; i < 3; i++) {
                                $('#bookResults').append('<div class="filter'+(i+9)+'"> <img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                '<table width="600" >'+
                                '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td></tr>'+
                                '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>Author: '+rs[i].Author+'</td><td>Publisher: '+rs[i].Publisher+'</td></tr>'+
                                '</table><br>'+
                                'Description:&emsp;'+rs[i].Description+'<br><br><br><hr>'+
                                '</div>');
                            };
                        });
                    });
                </script>
            <?php
            } else { ?>
                <script type="text/javascript">
                    $(document).ready(function() {
                        var searchRsCount = 0;
                        //alert("searchRsCount: "+searchRsCount);     //test
                        $('#bookResults').html("");
                        $.getJSON('jslib/book.json', function(rs) {
                            for (var i = 0; i < rs.length; i++) {
                                $('#bookResults').append('<div class="filter'+i+'"><img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                '<table width="600" >'+
                                '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td><td>ISBN: '+rs[i].ISBN+'</td></tr>'+
                                '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>Author: '+rs[i].Author+'</td><td>Publisher: '+rs[i].Publisher+'</td></tr>'+
                                '</table><br>'+
                                'Description:&emsp;'+rs[i].Description+'<br><br><br><hr>'+
                                '</div>');
                                searchRsCount++;
                                
                            };
                        });
                        $.getJSON('jslib/Magazines.json', function(rs) {
                            for (var i = 0; i < (rs.length); i++) {
                                if(searchRsCount<10){
                                    $('#bookResults').append('<div class="filter'+(i+9)+'"> <img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                    '<table width="600" >'+
                                    '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td></tr>'+
                                    '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>Author: '+rs[i].Author+'</td><td>Publisher: '+rs[i].Publisher+'</td></tr>'+
                                    '</table><br>'+
                                    'Description:&emsp;'+rs[i].Description+'<br><br><br><br><hr>'+
                                    '</div>');
                                    searchRsCount++;
                                }
                                else{
                                    $('#bookResults').append('<div style=" display: none;" class="hiddenRs filter'+(i+9)+'"> <img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                    '<table width="600" >'+
                                    '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td></tr>'+
                                    '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>Author: '+rs[i].Author+'</td><td>Publisher: '+rs[i].Publisher+'</td></tr>'+
                                    '</table><br>'+
                                    'Description:&emsp;'+rs[i].Description+'<br><br><br><br><hr>'+
                                    '</div>');
                                }
                            };
                        });
                        $.getJSON('jslib/software.json', function(rs) {
                            for (var i = 0; i < (rs.length); i++) {
                                if(searchRsCount<10){
                                    $('#bookResults').append('<div class="filter'+(i+16)+'"><img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                    '<table width="300" >'+
                                    '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td></tr>'+
                                    '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>OS: '+rs[i].OS+'</td></tr>'+
                                    '</table><br>'+
                                    'Description:&emsp;'+rs[i].Description+'<br><br><br><br><hr>'+
                                    '</div>');
                                    searchRsCount++;
                                }else{
                                    $('#bookResults').append('<div style=" display: none;" class="hiddenRs filter'+(i+16)+'"><img src="'+rs[i].img+'" title="'+rs[i].bookname+'" style="width:100px; height=125px; float: left; margin-left: 10px; margin-right: 30px; margin-bottom: 10px;"> <h3>'+rs[i].bookname+'</h3>'+
                                    '<table width="300" >'+
                                    '<tr class="item"><td>Type: '+rs[i].type+'</td><td>Year: '+rs[i].year+'</td></tr>'+
                                    '<tr class="item"><td>Language: '+rs[i].Language+'</td><td>OS: '+rs[i].OS+'</td></tr>'+
                                    '</table><br>'+
                                    'Description:&emsp;'+rs[i].Description+'<br><br><br><br><hr>'+
                                    '</div>');
                                }
                            };
                        });
                    });     //all rs result
                </script>
            <?php 
            }
        } //(isset($_SERVER["QUERY_STRING"])) end tag ?>    
    <div id="loader"></div>
    <div id="main" style="display:none">
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
                <a href="#">Profile</a>
                <a href="#">Setting</a>
            </div>
        </div>

        <a href="types.php" style="float:right">Log In</a>
    </div>



    <div style="background-color: white;">
        <div id="resize">
            <a id="big" class="increase" style="font-size:20px; opacity: 0.9;">A</a>
            <a id="small" class="decrease" style="font-size:12px; opacity: 0.9;">A</a>
            <a id="average" class="reset" style="opacity: 0.9;">R</a>
        </div>
        <div style="background-image: url('images/bg-01.jpg'); ">
            <br>
            <center>
                <form class="example" id="simple">
                    <br> <br>
                    <input id="keywords" type="search" placeholder="Search..." />
                    <button id="searchBtn" type="button" style="margin:auto;max-width:50px"><i class="fa fa-search"></i></button>
                    <button id="search" style="color:white; width: 180px; height: 42px; background-color:light-blue;">Advanced
                        Search </button>
                </form>
            </center>
            <form id="advanced" style="display:none;" class="form-container">
              <div id="header">
                <br>
                Search for: <input type="radio" name="sorting" value="everything" checked> Everything
                <input type="radio" name="sorting" value="books"> Books
                <input type="radio" name="sorting" value="software"> Software
                <input type="radio" name="sorting" value="Magazines"> Magazines
                <br><br>
                <hr>
                </div>
                <br>
                <select id="firstField">
                    <option value="anyfield">Any field</option>
                    <option value="title">Title</option>
                    <option value="author">Author</option>
                    <option value="subject">Subject</option>
                    <option value="isbn">ISBN</option>
                </select> contains
                <input id="first" type="text" name="contains" >
                &nbsp;
                <span id="language">Language
                    &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; 
                    <select id="LanguageField">
                        <option value="anyLanguage">Any language</option>
                        <option value="English">English</option>
                        <option value="Chinese">Chinese</option>
                    </select></span>

                <br>
                <select id="AndOrNotField1">
                    <option value="and">AND</option>
                    <option value="or">OR</option>
                    <option value="not">NOT</option>
                </select>

                <select id="TypeField1">
                    <option value="anyfield">Any field</option>
                    <option value="title">Title</option>
                    <option value="author">Author</option>
                    <option value="subject">Subject</option>
                    <option value="isbn">ISBN</option>
                </select> contains
                <input id="AdvKeyword1" type="text" name="contains" >
           
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
                    <br>
                
                <div id="addOper">
            
                  
               </div>
                    
                    
                    
                    
            <div id="startDate">
            <br>
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
                 <br>
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
            <div>
            <button id="add" class="filter" >Add a New Line </button>  
                         
            <button id="clear" type="reset" class="clean">Clear </button> 
                <div id="forSearch"> <br><br><hr>    <br>
                <span id="final">
                <button id="AdvSearchBtn" type="button" style="float: left;
                    width: 65px;
                    padding: 10px;
                    position: absolute;
                    right:200px;
                    background: #2196F3;
                    color: white;
                    font-size: 17px;
                    border: 1px solid grey;
                    border-left: none;
                    cursor: pointer;"><i class="fa fa-search"></i>
                </button>        
                </span>
                <br><br><br>
                </div>
            </div>                   
        
                 
                <button id="simpleSearch">Simple Search</button>

            </form>
            <br>
        </div>

    </div>
     <div id="loader2" ></div>
    <div id="data" style="display: none">
    <section>
        <div id="nav">
        <span id="margin">
            <h2>CONTENT TYPE</h2>
            <div id="contentType">
                  <form action="">
                   <input type="checkbox" name="contentType" value="Magazine"> <a href="student.php?Magazine">Magazine Article</a><br>
                   <input type="checkbox" name="contentType" value="Software"><a href="student.php?Software">Software</a><br>
                    <input type="checkbox" name="contentType" value="Book"><a href="student.php?Book">Book / eBook</a><br>
                    </form>
            </div>
            <h2>Discipline</h2>
            <div id="Discipline">
               <form action="">
                <input type="checkbox" name="Discipline" value="Technology"> <a href="student.php?Technology">Technology</a><br>
                <input type="checkbox" name="Discipline" value="History"> <a href="student.php?History">History</a><br>
                <input type="checkbox" name="Discipline" value="Education"> <a href="student.php?Education">Education</a><br>
                <input type="checkbox" name="Discipline" value="Leisure"> <a href="student.php?Leisure">Leisure</a><br>
                <input type="checkbox" name="Discipline" value="Music"> <a href="student.php?Music">Music</a><br>
                <input type="checkbox" name="Discipline" value="Business"> <a href="student.php?Business">Business</a><br>
                <input type="checkbox" name="Discipline" value="Comic"> <a href="student.php?Comic">Comic</a><br>
                </form>
            </div>
            <h2>Language</h2>
            <div id="Language">
                <form action="">
                <input type="checkbox" name="Language" value="Chinese">  <a href="">Chinese</a><br>
                 <input type="checkbox" name="Language" value="English"> <a href="">English</a><br>
                  </form>
            </div>

            <h2>Publication Date</h2>
            <p>
            <label for="amount">Range：</label>
            <input type="text" id="amount" style="font-weight:bold;">
            </p>
          
            <div id="slider-range"></div>
         
          <div id="zone">
             <br>
              <input class="filter" type="submit" value="APPLYFILTERS">
               <input class="clean" type="reset" value="CLEAR">
               </div>
            

        </span>
        </div>
        <div class="resizable">
            <article id="bookResults">
            <!--<div class="filter">
                <img src="jslib/images/1.jpg" title="Book name" style="width:100px; height=125px; float: left; margin-right: 15px; margin-bottom: 10px;">
                <h3>Book Name</h3>
                <table width="600">
                    <tr class="item">
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
            </div>-->
            </article>
            <article>
                <button id="loadMoreBtn" type="button" style="padding: 8px 16px; text-align:center; background-color: #0058b1; color: white; border: 1px;">Load More...</button>
            </article>
            <article><img src="images/notice.png" title="That's all the related data"></article>
            
        </div>
    </section>
    </div>
    
    <img src="arrow.png"  id="myBtn" title="Go to top" style="width:25px; height=25px">
    
    </div>
</body>

</html>