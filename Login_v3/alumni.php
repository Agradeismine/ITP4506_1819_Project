<!DOCTYPE html>
<html>
<head>
      <title>Library System: Alumni Page</title>
   	<link rel="stylesheet" type="text/css" href="css/mainpage.css">

    <script>
        /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
        function showdropdown(id) {
            document.getElementById(id).classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                var MenuDropdown = document.getElementById("MenuDropdown");

                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }

                if (MenuDropdown.classList.contains('show')) {
                    MenuDropdown.classList.remove('show');
                }
            }
        }
    </script>
</head>

<body>

    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>

        <div class="dropdown">
            <button class="dropbtn" onclick="showdropdown('myDropdown')">Dropdown
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>


        <div class="dropdown" style="float:right">
            <button class="dropbtn" onclick="showdropdown('MenuDropdown')">Menu
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="MenuDropdown">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        
        <a style="float:right">Alumni Name: Cindy Hung</a>

    </div>


</body>
</html>
