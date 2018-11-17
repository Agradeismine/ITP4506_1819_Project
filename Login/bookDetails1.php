<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Details</title>
        <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/fontSize.css">
    <link rel="stylesheet" type="text/css" href="css/Search.css">
    <link rel="stylesheet" type="text/css" href="css/advancedForm.css">
    <link rel="stylesheet" type="text/css" href="css/loading.css">
    <link rel="stylesheet" type="text/css" href="css/moreResultLoading.css">
    <link rel="stylesheet" type="text/css" href="css/details.css">
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
    <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>
   <script>
         function showdropdown(id) {
            document.getElementById(id).classList.toggle("show");
        }
          window.onclick = function(e) {  //drop on off
            if (!e.target.matches('.dropbtn')) {
                var CategoryDropdown = document.getElementById("CategoryDropdown");
                var MenuDropdown = document.getElementById("MenuDropdown");
                var DDDropdown = document.getElementById("DDDropdown");
                

                if (CategoryDropdown.classList.contains('show')) {
                    CategoryDropdown.classList.remove('show');
                }
                if (MenuDropdown.classList.contains('show')) {
                    MenuDropdown.classList.remove('show');
                }
                if (DDDropdown.classList.contains('show')) {
                    DDDropdown.classList.remove('show');
                }
            }
        }
       
       
       
        $(function(){
            
          var elementPosition = $('.button').offset();

        $(window).scroll(function(){
            
                if($(window).scrollTop() > elementPosition.top){
                      $('.button').css('position','fixed').css('top','30px');
//                    $("#goTop").click(function () {
//                       $("html, body").animate({scrollTop: 0}, 1000);
//                    });
                } else {
                    $('.button').css('position','static');
                }    
            
            
        });
            
            
            $("#request").hide();
            $("#Navailable").hide();
            $("#Nsuccess").hide();
                var bool = true;
                var succ = false;
                var count = 0;
            $("#requestBtn").click(function(e) {
                
                if(bool==true && succ==false){
                    $( "#status" ).fadeOut( "fast" );
                     $( "#available" ).fadeOut( "fast" );
                    $( "#request" ).fadeIn( "slow" );
                    $("#br").show();
                       $("#success").hide();
                    $("#Nsuccess").hide();
                    bool = false;
                }
                else if(bool==true && succ==true){
                    $( "#status" ).fadeOut( "fast" );
                     $( "#Navailable" ).fadeOut( "fast" );
                    $( "#request" ).fadeIn( "slow" );
                    $("#br").show();
                       $("#success").hide();
                    $("#Nsuccess").hide();
                    bool = false;
                }
                else if(bool==false && succ==true){
                      $( "#request" ).fadeOut( "fast" );
                    $( "#status" ).fadeIn( "slow" );
                    $( "#Navailable" ).fadeIn( "slow" );
                    $("#br").hide();
                    $("#success").hide();
                    $("#Nsuccess").hide();
                    bool = true;
                }
                else{
                      $( "#request" ).fadeOut( "fast" );
                    $( "#status" ).fadeIn( "slow" );
                    $( "#available" ).fadeIn( "slow" );
                    $("#br").hide();
                    $("#success").hide();
                    $("#Nsuccess").hide();
                    bool = true;
                }
                e.preventDefault();
            });  
            $("#success").hide();
            $("#sendR").click(function() {
                   <?php
                      if (!isset($_COOKIE['stuRequest0'])) {
                            setcookie("stuRequest0", "", time() + (60 * 30), "/");
                      }
                    ?>
                if(count==0){
                    $("#request").hide();
                    $("#success").show();
                }
                else{
                    $("#request").hide();
                    $("#Nsuccess").show();
                }
                succ = true;
                count++;
            });
            
            $("#back").click(function() {
                $("#status").fadeIn( "slow" );
                 $( "#Navailable" ).fadeIn( "slow" );
                $("#success").hide();
                  $("#br").hide();
            });
            $("#back2").click(function() {
                $("#status").fadeIn( "slow" );
                 $( "#Navailable" ).fadeIn( "slow" );
                $("#Nsuccess").hide();
                  $("#br").hide();
            });
                $("#goTop").on('click', function () {
                    $("html, body").animate({scrollTop: 0}, 400);
                });     
                $("#forward").click(function() {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#sendDiv").offset().top
                    }, 400);
                });
                   $("#get").click(function() {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#getDiv").offset().top
                    }, 400);
                });
                $("#detail").click(function() {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#detialDiv").offset().top
                    }, 400);
                });
                    $("#content").click(function() {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#contentDiv").offset().top
                    }, 400);
                });
                               $("#charpter").click(function() {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#charpterDiv").offset().top
                    }, 400);
                });


        
            
    });
  
//          window.onscroll = function() {scrollFunction()};
       
   </script>
<body>
     <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <div class="dropdown">
            <button class="dropbtn" onclick="showdropdown('DDDropdown')">Learning Resources 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="DDDropdown">
                <a href="#">Exam Past Paper</a>
                <a href="#">Programme Materials</a>

            </div>
        </div>

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
                <a href="#" onclick="logoutAlert('Do you want to logout?');">Logout</a>
            </div>
        </div>
        <a style="float:right">Student Name: Yip Yiu Cheung</a>
        <img src="images/studentIcon.png" style="float:right; width:45px; height:45px;">

    </div>
    
    
    <div id="details">
     
      <span id="image">
       <img class="thumbnail"  src="1.jpg" height="150px" width="165px"> 
       <div class="button">
          
           <input type="button" value="Top"  id="goTop" class="all"><br>
            <input id="forward" type="button" value="Send To" class="all"><br>
            <input id="get" type="button" value="Get It" class="all"><br>
            <input id="detail" type="button" value="Details" class="all"><br>
             <input id="content" type="button" value="View content page " class="all"><br>
              <input id="charpter" type="button" value="View the first charpter" class="all"><br>
           
       </div>
       </span>
       <div id="title">Best romance songs : 49 timeless love classics</div>
       Withers, Laurence K.<br>
       2016<br>
       ISBN: 9781470632366
       
       <div class="send" id="sendDiv">
           Send To &nbsp;&nbsp;<hr style='display:inline-block; width:650px; opacity:0.5;' />
           
       </div>
       
       <div class="send" id="getDiv">
           Get It &nbsp;&nbsp;<hr style='display:inline-block; width:650px; opacity:0.5;' />
           <p>
               <b style="color:black; "> REQUEST: </b> &nbsp;&nbsp;<input type="button" value="Request" id="requestBtn">
           </p>
           <p style="color:darkgreen;" id="available">
            Available   <br>
            (2 copies, 2 available, 0 requests)
            <br>
           </p>
                <p style="color:darkgreen;" id="Navailable">
            Available   <br>
            (2 copies, 1 available, 1 requests)
            <br>
           </p>
            <center><div id="status">
                <br>
                <b>Status: Available</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Copy no.: 1 <br>
                Policy: 4 Week Loan<br>
                Material Type: Book &nbsp;&nbsp;&nbsp;&nbsp; Barcode: 31111040873521<br>
                <br>
            </div></center>
            
            <div id="request">
                Material Type:<br><u>Book</u>
                <br>
                   <div><br>
                   You have to ‘pick up’ the items within 3 working days.
                   <br><br>
                    <b style="font-size:9;color:red">*Select the day:</b><input type="date" value="<?php echo date('Y-m-d'); ?>" />
                    </div>
                    <br>
                    
                    <input type="submit" id="sendR" value="Send Request" class="all" style="float:right; margin-right:5px;">
              
            <br><br>
            </div>
            <div id="success" style="text-align:center; color:black; background-color:lightgreen;float: left; width:65%; height:150px;">
                 <br> <br><b>Your request was successfully placed</b>
                 <div>
                    <br>
                    <br>
                    <br>
                     <input type="button" id="back" value="Back" class="all" style="float:right; margin-right:5px; background-color:f1f1f1">
                 </div>
                 
            </div>
               <div id="Nsuccess" style="text-align:center; color:black; background-color:red;float: left; width:65%; height:150px;">
                 <br> <br><b>Failed! You have already sent a request!</b>
                 <div>
                    <br>
                    <br>
                    <br>
                     <input type="button" id="back2" value="Back" class="all" style="float:right; margin-right:5px; background-color:f1f1f1">
                 </div>
                 
            </div>
            
            
           <br>
            </div>
            <div class="send" id="detialDiv">
           
            
            <div id="br" style="display:none"><br><br><br><br><br><br><br><br></div>Details &nbsp;&nbsp;<hr style='display:inline-block; width:650px; opacity:0.5;' />
           <p style="color:black;">
               <b>Title</b>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Best romance songs : 49 timeless love classics <br>
               <b>Author</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Withers, Laurence K.<br>
               
               <b>Language</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English<br>
               <b>Publisher</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University of California Press<br>
               <br>
                <b>Description</b> <br> Piano, vocal, guitar. Includes notation, tablature, chord symbols, chord diagrams, and lyrics. If you're in the mood for romance and your boyfriend / girlfriend / Tinder / chocolate isn't doing it for you, please enjoy this handy list of loved-up songs that will make you turn into a literal puddle. And we're not talking basics.
              </div>
              <div class="send" id="contentDiv">
              <br>
                   View content page &nbsp;&nbsp;<hr style='display:inline-block; width:650px; opacity:0.5;' />
                    <br>
                    <p>
                    Against all odds (take a look at me now) / Phil Collins -- Anything for you / Gloria Estefan and Miami Sound Machine -- At last / Etta James -- Because you loved me (theme from Up close and personal / Celine Dion -- Blue velvet / Bobby Vinton -- Bridge over troubled water / Simon & Garfunkel -- A case of you / Joni Mitchell -- Colour my world /Chicago -- Cupid / Sam Cooke -- Do you want to know a secret / The Beatles -- Evergreen (love theme from A star is born / Barbra Streisand -- Faithfully / Journey -- Falling slowly (from Once) / Glen Hansard and Markéta Irglová) -- Feelings (Dime) / Morris Albert -- Glory of love (theme from The karate kid Part II) / Peter Cetera -- The greatest love of all / Whitney Houston -- Hold me, thrill me, kiss me / Mel Carter -- How do I live / LeAnn Rimes -- How do you keep the music playing? (from Best friends) / James Ingram -- I believe in love (from A star Is born) / Kenny Loggins -- (Everything I do) I do it for you / Bryan Adams -- Theme from Ice Castles (Through the eyes of love) / Melissa Manchester -- If you leave me now / Chicago -- I'll stand by you / The Pretenders -- Just the way you are (amazing) / Bruno Mars -- Laura /Standard -- Look what you've done to me / Boz Scaggs -- Love is a many splendored thing / Standard -- A love song / Anne Murray -- Marry me / Train -- Moonlight / Sting -- Nobody does it better (from The spy who loved me) / Carly Simon -- Open arms / Journey -- Roses are red (my love) / Bobby Vinton) -- The shadow of your smile (from The sandpiper) / Standard -- She / Elvis Costello -- She loves you / The Beatles -- Somewhere my love (Lara's theme) (from Doctor Zhivago) -- A summer song / Chad & Jeremy -- The summer knows (theme from Summer of '42) / Barbra Streisand -- Superstar / The Carpenters -- That's the way I feel about 'cha / Bobby Womack -- To make you feel my love / Adele -- What are you doing the rest of your life? / Standard -- Wild horses / The Rolling Stones -- (What a) wonderful world / Sam Cooke -- Words get in the way / Gloria Estefan and Miami Sound Machine -- You don't have to say you love me / Dusty Springfield -- You send me / Sam Cooke.
                    </p>
<!--
                    <ol style="margin-left:25px;">
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Against all odds (take a look at me now) / Phil Collins</li>
                        &nbsp;&nbsp;&nbsp;&nbsp;<li>Anything for you / Gloria Estefan and Miami Sound Machine</li>
                        &nbsp;&nbsp;&nbsp;&nbsp;<li>At last / Etta James -- Because you loved me (theme from Up close and personal / Celine Dion</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Blue velvet / Bobby Vinton -- Bridge over troubled water / Simon & Garfunkel -- A case of you / Joni Mitchell</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Colour my world /Chicago</li>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <li>Cupid / Sam Cooke</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Do you want to know a secret / The Beatles</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Evergreen (love theme from A star is born / Barbra Streisand</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Faithfully / Journey -- Falling slowly (from Once) / Glen Hansard and Markéta Irglová)</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Feelings (Dime) / Morris Albert</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Glory of love (theme from The karate kid Part II) / Peter Cetera</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>The greatest love of all / Whitney Houston </li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Hold me, thrill me, kiss me / Mel Carter</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li> How do I live / LeAnn Rimes</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>How do you keep the music playing? (from Best friends) / James Ingram</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>I believe in love (from A star Is born) / Kenny Loggins</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Everything I do) I do it for you / Bryan Adams</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Theme from Ice Castles (Through the eyes of love) / Melissa Manchester </li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>If you leave me now / Chicago</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li> I'll stand by you / The Pretenders</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Just the way you are (amazing) / Bruno Mars</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Laura /Standard</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Look what you've done to me / Boz Scaggs</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li> Love is a many splendored thing / Standard</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>love song / Anne Murray</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Marry me / Train</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Moonlight / Sting</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Nobody does it better (from The spy who loved me) / Carly Simon</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Open arms / Journey</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Roses are red (my love) / Bobby Vinton)</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>The shadow of your smile (from The sandpiper) / Standard</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>She / Elvis Costello</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>She loves you / The Beatles -- Somewhere my love (Lara's theme) (from Doctor Zhivago) </li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>A summer song / Chad & Jeremy </li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>The summer knows (theme from Summer of '42) / Barbra Streisand</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Superstar / The Carpenters</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>That's the way I feel about 'cha / Bobby Womack</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>To make you feel my love / Adele</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>What are you doing the rest of your life? / Standard</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>Wild horses / The Rolling Stones</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>(What a) wonderful world / Sam Cooke</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li> Words get in the way / Gloria Estefan and Miami Sound Machine</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>You don't have to say you love me / Dusty Springfield</li>
                       &nbsp;&nbsp;&nbsp;&nbsp; <li>You send me / Sam Cooke</li>
                    </ol> 
-->
                     
              
              
               </div>
        <div class="send" id="charpterDiv">
              <br>
                   View Charpter 1 &nbsp;&nbsp;<hr style='display:inline-block; width:650px; opacity:0.5;' />
                   
                   <p><b style="color:black">Against all odds (take a look at me now) / Phil Collins</b><br><br>
                   How can I just let you walk away ? 我怎能讓你離開?<br>
Just let you leave without a trace. 讓你消失得無影無蹤<br>
When I stand here taking every breath with you,ooh! 當我站在這兒和你一起呼吸的時候。<br>
you're the only one.你是唯一一個。<br>
Who really knew me at all. 真正瞭解我的人！<br>
How can you just walk away from me ? 你怎能就這樣離開我?<br>
When all I can do is watch you leave. 我只能無奈的看著你走。<br>
'Cos we've shared the laughter and the pain. 因為我們曾一起同甘共苦。<br>
And even shared the tears. 甚至那淚水也一起分享。<br>
you're the only one who really knew me at all. 你是唯一真正懂我的人！<br>
So take a look at me now ! 所以現在再看我一眼吧 !<br>
'Cos there's just an empty space. 這兒只剩下空洞的一片<br>
And there's nothing left here to remind me. 現在再也沒什麼值得我回憶。<br>
Just the memory of your face. 除了你的面容！<br>
Take a look at me now. 現在看我一眼吧 !<br>
'Cos there's just an empty space. 這兒只剩下空洞的一片<br>
And you coming back to me. 你會回到我身邊吧？<br>
Is against all odds and that's what I've got to face. 儘管我必須要面對重重困難。<br>
I wish I could just make you turn around. 我希望我能使你轉過身來<br>
Turn around and see me cry. 轉過身來看到我在哭泣。<br>
There's so much I need to say to you. 我有太多的話要對你說。<br>
So many reasons why. 太多的理由。<br>
you're the only one who really knew me at all. 你是唯一真正懂我的人！<br>
So take a look at me now ! 所以現在再看我一眼吧 !<br>
'Cos there's just an empty space. 這兒只剩下空洞的一片<br>
And there's nothing left here to remind me. 現在再也沒什麼值得我回憶。<br>
Just the memory of your face. 除了你的面容！<br>
So take a look at me now ! 所以現在再看我一眼吧 !<br>
'Cos there's just an empty space. 這兒只剩下空洞的一片<br>
But to wait for U. 我在等你回來。<br>
Well that's all I can do and that's what I've got to face. 這我所能做的和必須面對的。<br>
Take a look at me now. 現在看我一眼吧 !<br>
'Cos I'll still be standing here. 因為我還站在這裡等你。<br>
And you coming back to me is against all odds. 儘管困難重重，你會回到我身邊。<br>
That's the chance I've got to take,oh ! 這是個機會我必須抓住。<br>
take a look at me now. 哦，就再看我一眼吧！
                    
                     
                       </p>
                   
                   
        </div>
    </div>
    
    
</body>
</html>