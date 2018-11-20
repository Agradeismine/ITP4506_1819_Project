<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Booking List</title>
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

    <script>
        /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
        function showdropdown(id) {
            document.getElementById(id).classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (e) { //drop on off
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

        function logoutAlert(msg) { //logout alert
            var r = confirm(msg);
            if (r == true) {
                window.location.href = "main.php";
            }
        }

        $(document).ready(function () {
            $(window).scroll(function () {
                var top = $("#myBtn");
                if ($('body').height() <= ($(window).height() + $(window).scrollTop() + 200)) {
                    top.animate({
                        "margin-left": "0px"
                    }, 1500);
                } else {
                    top.animate({
                        "margin-left": "-100%"
                    }, 1500);
                }
            });

            $("#myBtn").on('click', function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 400);
            });
            
            var bookCount = 0;
            var bookMax = 2;
            $("td a").click(function(){
                if($(this).text()=="***Booked***"){
                    var r = confirm("Do you want to cancel the booking?");
                    if(r==true){
                        bookCount-=1;
                        $(this).html("<img width='13' height='13' src='images/add.png' alt=''>");
                        $(this).parent().css("background-color", "");
                    }
                }else{
                    if(bookCount<bookMax){  //can book
                        var r = confirm("Do you want to book this room?");
                        if(r==true){
                            bookCount+=1;
                            $(this).html("***Booked***");
                            $(this).parent().css("background-color", "#FFFF99");
                        }
                    }else{      //can't book
                        alert("You can maximum book 2 hours.");
                    }
                }
                
            });
        });

        window.onscroll = function () {
            scrollFunction()
        };

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

<body style="background-color: #AEF2FB;">
    <div class="navbar">
        <a href="student.php">Home</a>
        <a href="#news">News</a>
        <a href="bookRoomPage.php">Study Room Booking</a>
        <div class="dropdown">
            <button class="dropbtn" onclick="showdropdown('DDDropdown')" style="width:200px;">Learning Resources
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="DDDropdown" style="width:200px;">
                <a href="#">Exam Past Paper</a>
                <a href="#">Programme Materials</a>

            </div>
        </div>
        <!--end of dropdown class-->

        <div class="dropdown">
            <button class="dropbtn" onclick="showdropdown('CategoryDropdown')" style="width:120px;">Category
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="CategoryDropdown" style="width:120px;">
                <a href="#">Books</a>
                <a href="#">Software</a>
                <a href="#">Magazines</a>

            </div>
        </div>

        <div class="dropdown" style="float:right">
            <button class="dropbtn" onclick="showdropdown('MenuDropdown')" style="width:115px;">Menu
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="MenuDropdown" style="width:115px;">
                <a href="#"><img src="images/profile.png" style="float:left; width:20px; height=20px; ">Profile</a>
                <a href="studentDiscovery.php"><img src="images/requests.png" style="float:left; width:20px; height=20px; ">Requests</a>
                <a href="#"><img src="images/setting.png" style="float:left; width:20px; height=20px; ">Setting</a>
                <a href="#" onclick="logoutAlert('Do you want to logout?');"><img src="images/logout.png" style="float:left; width:20px; height=20px; ">Logout</a>
            </div>
        </div>
        <a style="float:right">Student Name: Yip Yiu Cheung</a>
        <img src="images/studentIcon.png" style="float:right; width:45px; height:45px;">
    </div> <!-- end of navbar -->
    <img src="arrow.png" id="myBtn" title="Go to top" style="width:25px; height=25px ">
        
    <center>
    <h1 class="style1">Library System<br>Group Study Room Online Booking System - User Guide</h1>
    </center>
 
       <pre style="font-size: 16px">
       <div style="border:1px #FFAC55 solid; width: 1100px; padding-left:10px;">

        General Information 注意事項 :
        
        1.

        All valid users may book ONE of the 3 Group Study Rooms for up to 7 days in advance from the date of booking.
        所有有效之讀者可選擇預約三間研習室的其中一間，預約期為一星期內。


        2.

        Users may only book twice per day and each booking is only up to 2 hour (each booking slot lasts 1 hour).
        讀者每天只能預約兩次，最多可預約兩小時 (每一小時為一個時段)。
        

        3.

        We accepts no liability for the loss of personal belongings left in Group Study Rooms.
        讀者必須小心保管個人財物，我們對遺失之物件一概不負責。


        4.

        We reserves the right to cancel any bookings if there is any improper use of these Rooms.
        我們保留取消不正當使用研習室之讀者的使用權利。


        5.

        	
        Users are responsible for the loss and damage of equipment used inside the Rooms.
        研習室內所有傢具及裝置如有損毀，讀者需負上所有賠償責任。

</div>
</pre> 

</body>

</html>