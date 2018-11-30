<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Study Room Booking System</title>
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

            $("#BookRoomType").on('change', function(){
                window.location.href = $("#BookRoomType").val();
            });

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
    <a style="float:right; padding:20px 80px; font-size:20px" href="cancel_booking.php">Booking list</a>

    <h1 style='padding: 0px 70px;'><B>Study Room Booking System</B></h1>

    <h2 align="center">Friday 30 November 2018</h2>
    <a style=" padding:10px 80px; font-size:20px" href="selectTime.php">Select Other day</a><br><br>
    <a style=" padding:10px 80px; font-size:20px" href="roomType.html" >Book room type:</a><select name="" id="BookRoomType"><option value="bookClassRoomPage.php">Class room</option><option value="bookMusicRoomPage.php">Music room</option><option value="bookRoomPage.php">Meeting room</option></select><br><br>
    <a style=" padding:10px 80px; font-size:20px" href="bookingGuideline.php">Online Booking Guideline</a><br>
    <b style=" padding:10px 80px; color: green;">Click add button to book room</b>
    <center>
    <table cellspacing="0" border='1' width="90%">
        <tr style='background-color: #999999; color: #fff'>
            <th width="13%">Time:</th>
            <th width="17%"><font size="2px" style="font-family:arial" ;="">Class Room 101<br>Capacity: 30 persons</font></th>
            <th width="17%"><font size="2px" style="font-family:arial" ;="">Class Room 201<br>Capacity: 30 persons</font></th>
            <th width="17%"><font size="2px" style="font-family:arial" ;="">Class Room 301<br>Capacity: 30 persons</font></th>
            <th width="13%">Time:</th>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>09:00AM - 10:00AM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='padding: 10px; background-color: #ffffed;'>09:00AM - 10:00AM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>10:00AM - 11:00AM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='padding: 10px; background-color: #ffffed;'>10:00AM - 11:00AM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>11:00AM - 12:00AM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='padding: 10px; background-color: #ffffed;'>11:00AM - 12:00AM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>12:00AM - 01:00PM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='background-color: #FFFF99; color: #D7D7D7;'>***Booked***</td>
            <td style='background-color: #FFFF99; color: #D7D7D7;'>***Booked***</td>
            <td style='padding: 10px; background-color: #ffffed;'>12:00AM - 01:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>01:00PM - 02:00PM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='padding: 10px; background-color: #ffffed;'>01:00PM - 02:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>02:00PM - 03:00PM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='padding: 10px; background-color: #ffffed;'>02:00PM - 03:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>03:00PM - 04:00PM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='padding: 10px; background-color: #ffffed;'>03:00PM - 04:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>04:00PM - 05:00PM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='padding: 10px; background-color: #ffffed;'>04:00PM - 05:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>05:00PM - 06:00PM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='padding: 10px; background-color: #ffffed;'>05:00PM - 06:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>06:00PM - 07:00PM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='background-color: #FFFF99; color: #D7D7D7;'>***Booked***</td>
            <td style='padding: 10px; background-color: #ffffed;'>06:00PM - 07:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>07:00PM - 08:00PM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='background-color: #FFFF99; color: #D7D7D7;'>***Booked***</td>
            <td style='background-color: #FFFF99; color: #D7D7D7;'>***Booked***</td>
            <td style='padding: 10px; background-color: #ffffed;'>07:00PM - 08:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>08:00PM - 09:00PM</td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td><a href="#"><img width="13" height="13" src="images/add.png" alt=""></a></td>
            <td style='background-color: #C0E0FF; '>***Department use***</td>
            <td style='padding: 10px; background-color: #ffffed;'>08:00PM - 09:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>09:00PM - 10:00PM</td>
            <td bgcolor="#FF6666"><img width="13" height="13" src="images/x.png" alt=""></td>
            <td bgcolor="#FF6666"><img width="13" height="13" src="images/x.png" alt=""></td>
            <td bgcolor="#FF6666"><img width="13" height="13" src="images/x.png" alt=""></td>
            <td style='padding: 10px; background-color: #ffffed;'>09:00PM - 10:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>10:00PM - 11:00PM</td>
            <td bgcolor="#FF6666"><img width="13" height="13" src="images/x.png" alt=""></td>
            <td bgcolor="#FF6666"><img width="13" height="13" src="images/x.png" alt=""></td>
            <td bgcolor="#FF6666"><img width="13" height="13" src="images/x.png" alt=""></td>
            <td style='padding: 10px; background-color: #ffffed;'>10:00PM - 11:00PM</td>
        </tr>
        <tr align="center" >
            <td style='padding: 10px; background-color: #ffffed;'>11:00PM - 12:00PM</td>
            <td bgcolor="#FF6666"><img width="13" height="13" src="images/x.png" alt=""></td>
            <td bgcolor="#FF6666"><img width="13" height="13" src="images/x.png" alt=""></td>
            <td bgcolor="#FF6666"><img width="13" height="13" src="images/x.png" alt=""></td>
            <td style='padding: 10px; background-color: #ffffed;'>11:00PM - 12:00PM</td>
        </tr>
    </table>
    </center>
    <a style='float: right; padding: 0px 80px' href="">View bookings for next day</a>
    <br>
    <table border="0" style='padding: 0px 75px;'>
        <tr>
            <td class="D" bgcolor="#FFFF99">Booked</td>
            <td class="E" bgcolor="#C0E0FF">Department Use</td>
            <td class="F" bgcolor="#FFCC99">Internal Use</td>
            <td class="G" bgcolor="#FF6666">Library Closed</td>
        </tr>
    </table>
    <br>

</body>

</html>