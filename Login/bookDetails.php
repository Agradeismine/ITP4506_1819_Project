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
       <img src="1.jpg" height="150px"> 
       
       <div id="button">
          
           <input type="button" value="Top" ><br>
            <input type="button" value="Send To" ><br>
            <input type="button" value="Get It" ><br>
            <input type="button" value="Details" ><br>
             <input type="button" value="View content page " ><br>
              <input type="button" value="View the first charpter" ><br>
           
       </div>
       </span>
       <div id="title">Best romance songs : 49 timeless love classics</div>
       Withers, Laurence K.<br>
       2016<br>
       ISBN: 9781470632366
       
       <div id="send">
           Send To &nbsp;&nbsp;<hr style='display:inline-block; width:650px; opacity:0.5;' />
           
       </div>
       
       <div id="send">
           Get It &nbsp;&nbsp;<hr style='display:inline-block; width:650px; opacity:0.5;' />
           <p>
           No requests
           </p>
           <p style="color:green;">
            Available   <br>
            (2 copies, 2 available, 0 requests)
           </p>
           <br><br><br>
           Details &nbsp;&nbsp;<hr style='display:inline-block; width:650px; opacity:0.5;' />
           <p style="color:black;">
               <b>Title</b>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Best romance songs : 49 timeless love classics <br>
               <b>Author</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Withers, Laurence K.<br>
               
               <b>Language</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English<br>
               <b>Publisher</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University of California Press<br>
               <br>
                <b>Description</b> <br> Piano, vocal, guitar. Includes notation, tablature, chord symbols, chord diagrams, and lyrics. If you're in the mood for romance and your boyfriend / girlfriend / Tinder / chocolate isn't doing it for you, please enjoy this handy list of loved-up songs that will make you turn into a literal puddle. And we're not talking basics.
              </div>
              <div id="send">
              <br>
                   View content page &nbsp;&nbsp;<hr style='display:inline-block; width:650px; opacity:0.5;' />
                    <br>
                    <ol style="padding-left:35px;">
                        <li>Against all odds (take a look at me now) / Phil Collins</li>
                        <li>Anything for you / Gloria Estefan and Miami Sound Machine</li>
                        <li>At last / Etta James -- Because you loved me (theme from Up close and personal / Celine Dion</li>
                        <li>Blue velvet / Bobby Vinton -- Bridge over troubled water / Simon & Garfunkel -- A case of you / Joni Mitchell</li>
                        <li>Colour my world /Chicago</li>
                        <li>Cupid / Sam Cooke</li>
                        <li>Do you want to know a secret / The Beatles</li>
                        <li>Evergreen (love theme from A star is born / Barbra Streisand</li>
                        <li>Faithfully / Journey -- Falling slowly (from Once) / Glen Hansard and Markéta Irglová)</li>
                        <li>Feelings (Dime) / Morris Albert</li>
                        <li>Glory of love (theme from The karate kid Part II) / Peter Cetera</li>
                        <li>The greatest love of all / Whitney Houston </li>
                        <li>Hold me, thrill me, kiss me / Mel Carter</li>
                        <li> How do I live / LeAnn Rimes</li>
                        <li>How do you keep the music playing? (from Best friends) / James Ingram</li>
                        <li>I believe in love (from A star Is born) / Kenny Loggins</li>
                        <li>Everything I do) I do it for you / Bryan Adams</li>
                        <li>Theme from Ice Castles (Through the eyes of love) / Melissa Manchester </li>
                        <li>If you leave me now / Chicago</li>
                        <li> I'll stand by you / The Pretenders</li>
                        <li>Just the way you are (amazing) / Bruno Mars</li>
                        <li>Laura /Standard</li>
                        <li>Look what you've done to me / Boz Scaggs</li>
                        <li> Love is a many splendored thing / Standard</li>
                        <li>love song / Anne Murray</li>
                        <li>Marry me / Train</li>
                        <li>Moonlight / Sting</li>
                        <li>Nobody does it better (from The spy who loved me) / Carly Simon</li>
                        <li>Open arms / Journey</li>
                        <li>Roses are red (my love) / Bobby Vinton)</li>
                        <li>The shadow of your smile (from The sandpiper) / Standard</li>
                        <li>She / Elvis Costello</li>
                        <li>She loves you / The Beatles -- Somewhere my love (Lara's theme) (from Doctor Zhivago) </li>
                        <li>A summer song / Chad & Jeremy </li>
                        <li>The summer knows (theme from Summer of '42) / Barbra Streisand</li>
                        <li>Superstar / The Carpenters</li>
                        <li>That's the way I feel about 'cha / Bobby Womack</li>
                        <li>To make you feel my love / Adele</li>
                        <li>What are you doing the rest of your life? / Standard</li>
                        <li>Wild horses / The Rolling Stones</li>
                        <li>(What a) wonderful world / Sam Cooke</li>
                        <li> Words get in the way / Gloria Estefan and Miami Sound Machine</li>
                        <li>You don't have to say you love me / Dusty Springfield</li>
                        <li>You send me / Sam Cooke</li>
                    </ol> 
                     
              
              
               </div>
       
       
    </div>
    
    
</body>
</html>