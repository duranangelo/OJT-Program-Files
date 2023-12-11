<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF=8" />
        <title>Personnel</title>
        <link rel ="stylesheet" href="style.css" />
        <link
        rel="stylesheet"
        href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
    </head>
    <body>
        <div class="sidebar">
            <div class = "logo"></div>
            <ul class="menu">
                <li class="active">
                    <a href ="#">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href ="#">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href ="form.php">
                        <i class="fas fa-envelope-open-text"></i>
                        <span>File a Leave</span>
                    </a>
                </li>
                <li>
                    <a href ="#">
                        <i class="fas fa-question-circle"></i>
                        <span>Feedback</span>
                    </a>
                </li>
                <li class="logout">
                    <a href ="#">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Employee</span>
            <h2>Dashboard</h2>
        </div>
        <ul>
            <a href ="#">
                <i class="fas fa-user-circle"></i>
            </a>
        </ul>
    </div>

    <div class="card--container">
        <h3 class="main--title">User Credentials</h3>
        <div class="card--wrapper">
            <div class="user--credentials">
                <div class="name">
                    <span class="Username">
                        Name: Juan S. Dela Cruz <br>
                    </span>
                    <i class="far
                         fa-address-card"></i>
                         <span
                class="id-details">12-00004</span>
                </div>
                <div class="leaveinformation">
                    <span class="numleave">
                        Remaining Leave Credits: 15.75<br>  
                        Leave Credits used: 10
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

    </body>
</html>