<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Library System: Student Page</title>
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/discovery.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
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

         $.showMoreThisInfo = function() {
            $('.'+id).toggle(300);
         };

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
    
        var id; // global variable
        function sendData(valueId){
            id = valueId;
            $.showMoreThisInfo();
        }

        function hideThisRequest(requestRs){
            var r = confirm("Are you really want to cancel this request?");
            if (r == true) {
                txt = "This request is cancelled";
                document.getElementById(requestRs).style.display = "none";
            }
        }

        $(document).ready(function() {

        <?php
                if(isset($_COOKIE["stuRequest0"])){     //stuRequest0
                    //echo"stuRequest".$i;    //for test ?>
                    $('#requestForm').append("<div id='requestRs0' style='border:1px #FFAC55 solid; padding:10px 10px;'><table>"
                +"<tr>"
                    +"<td rowspan='5'><input type='checkbox' id='request0' value=''></td>"
                    +"<td width='600' rowspan='5' style='color: #00008B;'>Best romance songs : 49 timeless love classics</td>"
                    +"<td width='400' style='padding: 3px; font-size: 20px; color: #666666;'>Request: In Process...</td>"
                    +"<td width='250' rowspan='5' class='example'><Button id='cancelrequest0' onclick='hideThisRequest(\"requestRs0\")'>Cancel</button></td>"
                    +"<td width='50' rowspan='5'><img src='images/showMoreBtn.png' id='showMoreBtn0' onclick='sendData(\"requestData0\")' alt='Show more information'></td>"
                +"</tr>"
                +"<tr hidden class='requestData0'>"
                    +"<td  width='400' style='padding: 3px; font-size: 20px; color: #666666;'>Pick up from: CCTV(KW)</td>"
                +"</tr>"
                +"<tr hidden class='requestData0'>"
                    +"<td  width='400' style='padding: 3px; font-size: 20px; color: #666666;'>Happy Training Council</td>"
                +"</tr>"
                +"<tr hidden class='requestData0'>"
                    +"<td  width='400' style='padding: 3px; font-size: 20px; color: #666666;'>Request Date: 30/11/2018</td>"
                +"</tr>"             
                +"<tr hidden class='requestData0'>"
                    +"<td  width='400' style='padding: 3px; font-size: 20px; color: #666666;'>Request Id: 2478313660004681</td>"
                +"</tr>"
            +"</table>"
        +"</div>");

                <?php 
                }
        ?>
        });

        
    </script>
</head>

<body>
    <div class="navbar">
        <a href="student.php">Home</a>
        <a href="#news">News</a>
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

    <div id="overview" style=" background-color: lightskyblue; padding: 30px 40px;  font-size: 50px;">
        Requests
    </div>  <!-- end of overview -->
    <div id="" style=" background-color: aliceblue; height: 600px; padding: 30px 40px; font-size: 24px;">
        <div id="requestMenu" class="form-container" style="float:right; font-size: 18px;">
            Sort By &nbsp; &nbsp;
            <select id="sortField">
                <option value="English">Status</option>
                <option value="Chinese">Title</option>
            </select>
        </div>  <!--end of requestMenu-->
        Reserved Books<br><br><br>
        <input type="checkbox" id="allRequests" value=""> <a id="totalRequests">0 request</a><br><br/>

        <div id="requestForm" style="padding:1px 10px;">
        <div id='requestRs2' style="border:1px #FFAC55 solid; padding:10px 10px;">    <!--requestRs2-->
                <table>
                    <tr>
                        <td rowspan="5"><input type="checkbox" id="request2" value=""></td>
                        <td width="600" rowspan="5" style="color: #00008B;">World of History</td>
                        <td width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request: In Process...</td>
                        <td width="250" rowspan="5" class='example'><Button id='cancelrequest4' onclick='hideThisRequest("requestRs2")'>Cancel</button></td>
                        <td width="50" rowspan="5"><img src="images/showMoreBtn.png" id='showMoreBtn' onclick='sendData("requestData2")' alt="Show more information"></td>
                    </tr>
                    <tr hidden class="requestData2">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Pick up from: IVE(HW)</td>
                    </tr>
                    <tr hidden class="requestData2">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Vocational Training Council</td>
                    </tr>
                    <tr hidden class="requestData2">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request Date: 28/11/2018</td>
                    </tr>                
                    <tr hidden class="requestData2">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request Id: 6552389523673</td>
                    </tr>
                </table>
            </div>  <!--end of requestRs2 -->
            <div id='requestRs3' style="border:1px #FFAC55 solid; padding:10px 10px;">    <!--requestRs3-->
                <table>
                    <tr>
                        <td rowspan="5"><input type="checkbox" id="request4" value=""></td>
                        <td width="600" rowspan="5" style="color: #00008B;">21 Lessons for the 21st Century</td>
                        <td width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request: In Process...</td>
                        <td width="250" rowspan="5" class='example'><Button id='cancelrequest3' onclick='hideThisRequest("requestRs3")'>Cancel</button></td>
                        <td width="50" rowspan="5"><img src="images/showMoreBtn.png" id='showMoreBtn' onclick='sendData("requestData3")' alt="Show more information"></td>
                    </tr>
                    <tr hidden class="requestData3">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Pick up from: Thei(ST)</td>
                    </tr>
                    <tr hidden class="requestData3">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Vocational Training Council</td>
                    </tr>
                    <tr hidden class="requestData3">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request Date: 28/11/2018</td>
                    </tr>                
                    <tr hidden class="requestData3">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request Id: 783647867324</td>
                    </tr>
                </table>
            </div>  <!--end of requestRs3 -->
            <div id='requestRs4' style="border:1px #FFAC55 solid; padding:10px 10px;">    <!--requestRs4-->
                <table>
                    <tr>
                        <td rowspan="5"><input type="checkbox" id="request4" value=""></td>
                        <td width="600" rowspan="5" style="color: #00008B;">Computer-Aided Design</td>
                        <td width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request: In Process...</td>
                        <td width="250" rowspan="5" class='example'><Button id='cancelrequest4' onclick='hideThisRequest("requestRs4")'>Cancel</button></td>
                        <td width="50" rowspan="5"><img src="images/showMoreBtn.png" id='showMoreBtn' onclick='sendData("requestData4")' alt="Show more information"></td>
                    </tr>
                    <tr hidden class="requestData4">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Pick up from: ISIS(HK)</td>
                    </tr>
                    <tr hidden class="requestData4">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Hong Kong Computer Union</td>
                    </tr>
                    <tr hidden class="requestData4">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request Date: 29/11/2018</td>
                    </tr>                
                    <tr hidden class="requestData4">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request Id: 3264723652742</td>
                    </tr>
                </table>
            </div>  <!--end of requestRs4 -->
            <div id='requestRs5' style="border:1px #FFAC55 solid; padding:10px 10px;">    <!--requestRs5-->
                <table>
                    <tr>
                        <td rowspan="5"><input type="checkbox" id="request5" value=""></td>
                        <td width="600" rowspan="5" style="color: #00008B;">International Journal of Computer Mathematics</td>
                        <td width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request: In Process...</td>
                        <td width="250" rowspan="5" class='example'><Button id='cancelrequest5' onclick='hideThisRequest("requestRs5")'>Cancel</button></td>
                        <td width="50" rowspan="5"><img src="images/showMoreBtn.png" id='showMoreBtn' onclick='sendData("requestData5")' alt="Show more information"></td>
                    </tr>
                    <tr hidden class="requestData5">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Pick up from: Thei(TY)</td>
                    </tr>
                    <tr hidden class="requestData5">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Vocational Training Council</td>
                    </tr>
                    <tr hidden class="requestData5">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request Date: 29/11/2018</td>
                    </tr>                
                    <tr hidden class="requestData5">
                        <td  width="400" style="padding: 3px; font-size: 20px; color: #666666;">Request Id: 3746254824623</td>
                    </tr>
                </table>
            </div>  <!--end of requestRs5 -->

        </div>

    </div>

    <img src="arrow.png" id="myBtn" title="Go to top" style="width:25px; height=25px ">
</body>

</html>