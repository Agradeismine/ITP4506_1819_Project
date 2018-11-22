<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Equipment Booking</title>
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/advancedForm.css">
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

    <form id="advanced" class="form-container">
        <div class="">
                <div class="">
                    <label style='width:200px'>Appointment Student:</label>&emsp;<input type="text" id="txt_name" value='Yip Yiu Cheung' disabled/><br>
                    <label style='width:200px'>Student ID:</label>&emsp;<input type="text" id="txt_id" value='170138992' disabled /><br>
                    <label style='width:200px'>Device type:</label>&emsp; 
                        <select style="width: 170px;" name="deviceType" id="deviceType">
                            <option label='Musical instruments' value="Musical instruments"></option>
                            <option label='Electronic devices' value="Electronic devices"></option>
                            <option label='Gadget' value="Gadget"></option>
                        </select><br>
                    <label style='width:200px'>Reservation device:</label>&emsp;
                        <select style="width: 170px;" name="devices" id="devices">
                            <option label='Triangle' value="Triangle"></option>
                            <option label='Oboe' value="Oboe"></option>
                            <option label='Violin' value="Violin"></option>
                            <option label='Cello' value="Cello"></option>
                            <option label='Guitar' value="Guitar"></option>
                            <option label='Acoustic Guitar' value="Acoustic Guitar"></option>
                            <option label='Electric bass' value="Electric bass"></option>
                            <option label='Electric piano' value="Electric piano"></option>
                        </select>&emsp;<label style='width:100px'>Quantity:</label>&emsp; <input type="number"><br>

                        Are you sure you wouldn't crash the devices?
                </div>
        </div>
    </form>



</body>

</html>