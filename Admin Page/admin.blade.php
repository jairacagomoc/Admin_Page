
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/topside.css">
	
    <title>admin</title>

</head> 
<body> 

<!-------TOPBAR------->
   <div class = "topbar">
    <div class="logo-container">
        <img src="https://www.pngkey.com/png/detail/52-528919_the-pup-logo-polytechnic-university-of-the-philippines.png" alt="">
        <h1>PUP<br> JobFair Portal</h1>
        <div class = "topright">
        <ul>
            <li><button>Announcements</button></li>
            <li><i class = 'bx bx-bell icon'></i></li>
            <li><i class = 'bx bx-power-off icon'></i></li>
        </ul>
        </div>
    </div>


<!------SIDEBAR------>
<nav class="sidebar close">
    <header>
        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                </li>

            <div class="pic">
                <img src = "img/pic.jpg">
            </div>

            <ul class="menu-links">
                <li class="nav-link">
                    <a href="dshbrd_A.html">
                        <i class='bx bx-bar-chart-alt-2 icon' ></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="announce.html">
                        <i class='bx bx-message-alt-edit icon' ></i>
                        <span class="text nav-text">Announcement</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="event.html">
                        <i class='bx bx-network-chart icon' ></i>
                        <span class="text nav-text">Events</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="notif.html">
                        <i class='bx bx-bell icon'></i>
                        <span class="text nav-text">Notifications</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="ad-stud.html">
                        <i class='bx bx-user-circle icon' ></i>
                        <span class="text nav-text">Student Profile</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="ad-com.html">
                        <i class='bx bx-briefcase icon' ></i>
                        <span class="text nav-text">Company Profile</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="security.html">
                        <i class='bx bx-key icon'></i>
                        <span class="text nav-text">Password & Security</span>
                    </a>
                </li>


            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="settings.html">
                    <i class='bx bx-cog icon' ></i>
                    <span class="text nav-text">Settings</span>
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
            
        </div>
    </div>

</nav>
</div>
</nav>


<!-----content----->
<main>
    @yield('main')
</main>
<!-----content(END)----->

</div>
</body>
</html>
