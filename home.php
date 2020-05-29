<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>The New Blackboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        @import url("Assets/styles/content-styles.css");

    </style>
    <link href="Assets/styles/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="Assets/styles/bellStyleSheet.css" rel="stylesheet" type="text/css">1
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="app.js"></script>
    <script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body id="body">
    <div id="mainWrapper">
        <div id="headerLinks">
            <!-- WEBSIDE LOGO-->
            <img src="Assets/images/SDU_WHITE_RGB-png.png" alt="" width="310" height="183" id="SDU" />
                <!--THE TO NOTIFICATIONS "HELP & DARKMODE"-->
                <div class="box2">
                    <!-- HELP NOTIFICATION-->
                    <div class="notifications" id="help">
                        <i class="fas fa-question-circle"></i>
                        <ul class="not-ul">
                            <li>
                                <span class="icon"><i class="fas fa-user"></i></span>
                                <span class="text">FAQ</span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-user"></i></span>
                                <span class="text">Support</span>
                            </li>
                    </div>
                </div>
                <div class="box2">
                    <!-- DARKMODE NOTIFICATION-->
                    <div class="notifications" id="darkmode">
                        <i class="fas fa-adjust"></i>
                        <ul class="not-ul">
                            <li>
                                <span class="icon"><i class="fas fa-user"></i></span>
                                <span class="text">Dark-theme</span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-user"></i></span>
                                <span class="text">Light-theme</span>
                            </li>
                    </div>
                </div>
        </div>
        <header>
            <section id="offer">
                <!--THE PROFILE PIC WITH NOTIFICATIONS-->
                <div class="box1">
                    <div class="notifications" id="profileNot">
                        <a href="Profile.html" title="Profile"><img src="Assets/images/man-profile-cartoon_18591-58483.jpg" alt="Profile Picture" width="130" height="130" id="profilePic" </a>
                            <span class="num">4</span>
                            <ul class="not-ul">
                                <li>
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="text">Course Announcement → Videregående udvikling af 3D applikationer, (F20)</span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="text">Course Announcement → Distribueret programmering, (F20)</span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="text">Course Announcement → Udvikling af interaktive, digitale systemer til mennesker, forår 20.</span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="text">Content Pensum til skriftlig eksamen Available</span>
                                </li>
                            </ul>
                    </div>
                </div>
                <!--PROFILE DATA-->
                <ul>
                    <li><a>Name: John Doe</a></li>
                    <li><a>Ex-nr: 000000</a></li>
                    <li><a>Mail: jodoe20@student.sdu.dk</a></li>
                </ul>
            </section>
        </header>
        <div id="content">
            <section class="sidebar">
                <!-- THE SIDEBAR-->
                <div id="menubar">
                    <nav class="menu theNAV">
                        <!-- TITLE OF SIDEBAR-->
                        <h2>myTEK </h2>
                        <input type="text" id="search" value="search">
                        <hr>
                        <ul class="menuButtons">
                            <!-- THE LINKS IN THE SIDE BAR -->
                            <li><a href="home.php">Home&nbsp;</a></li>
                            <li><a href="Profile.html">Profile&nbsp;</a></li>
                            <li><a href="Courses.html">Courses&nbsp;</a></li>
                            <li><a href="Timetable.html" title="Link">Timetable&nbsp;</a></li>
                            <li><a href="Mail.html" title="Link">Mail&nbsp;</a></li>
                            <li><a href="#" title="Link">Organisation&nbsp;</a></li>
                            <li><a href="SelfService.html" title="Link">SelfService&nbsp;</a></li>
                            <li><a href="LessonTask.html" title="Link">Lesson Task&nbsp;</a></li>
                            <li><a href="booking/student.php" title="Link">Booking&nbsp;</a></li>
                            <li><a href="Library.html" title="Link">Libary&nbsp;</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
            <section class="mainContent">
                <div class="flex-container">
                    <!-- The content.html get loaded here-->
                </div>
        </div>
</body>

</html>
