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
                    <a href ="index.php">
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
                <li class="active">
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
        <h3 class="main--title">File a Leave</h3>
        <div>
        <main>
        <form action="pformhandler.php" method="post">


            <label for="office">Office/Department: </label>
            <input required id="office" type="text" name="office" placeholder="Office / Department">

            <label for="email">Email: </label>
            <input required id="email" type="text" name="email" placeholder="sample@email.com">

            <label for="lastname"><br>Lastname: </label>
            <input required id="lastname" type="text" name="lastname" placeholder="Last Name">

            <label for="firstname">Firstname: </label>
            <input required id="firstname" type="text" name="firstname" placeholder="First Name">

            <label for="middlename">Middlename: </label>
            <input required id="middlename" type="text" name="middlename" placeholder="Middle Name">

            <label for="datefiling"><br>Date of Filing: </label>
            <input id="datefiling" type="date" name="datefiling">

            <label for="position"> Position: </label>
            <input id="position" type="text" name="position" placeholder="Position">

            <label for="salary"> Salary: </label>
            <input id="salary" type="number" name="salary" placeholder="Enter Salary" min="0" max="100000000">

            <h4><br>Details of Application</h4>

            <h4><br>A. Type of Leave To Be Availed Of</h4>
            <label for="leave">Type of Leave: </label>
            <select id="leave" name="leave">
                <option value="select">Select Leave Type:</option>
                <option value="vacationL">Vacation Leave</option>
                <option value="mandatoryFL">Mandatory/Forced Leave</option>
                <option value="sickL">Sick Leave</option>
                <option value="MatL">Maternity Leave</option>
                <option value="PatL">Paternity Leave</option>
                <option value="SpecialL">Special Privilege Leave</option>
                <option value="SoloPL">Solo Parent Leave</option>
                <option value="StudyL">Study Leave</option>
                <option value="10DL">10-Day VAWC Leave</option>
                <option value="RehabL">Rehabilitation Leave</option>
                <option value="SpecialBWL">Special Leave Benefits for Women</option>
                <option value="SpecialCL">Special Emergency Calamity Leave</option>
                <option value="AdoptL">Adoption Leave</option>
            </select>

            <label for="others">Others: </label>
            <input id="others" type="text" name="others" placeholder="Others">

            <h4><br>B. Details Of Leave</h4>
            <h5>In Case of Vacation/Privilege Leave:</h5>

            <label for="incaseofVS"></label>
            <select id="incaseofVS" name="incaseofVS">
                <option value="select1">Select Vacation: </option>
                <option value="withinPh">Within the Philippines</option>
                <option value="abroad">Abroad</option>
            </select>
            <label for="specify">Specify: </label>
            <input id="specify" type="text" name="specify" placeholder="">

            <h4><br>Incase of Sick Leave: </h4>
            <label for="incaseofSL"> </label>
            <select id="incaseofSL" name="incaseofSL">
                <option value="select2">Select Type of Sick Leave: </option>
                <option value="inhospital">In Hospital</option>
                <option value="outP">Out Patient</option>
            </select>
            <label for="specifyill">Specify Illness: </label>
            <input id="specifyill" type="text" name="specifyill" placeholder="Specify Illness">

            <h4><br>Incase of Special Leave Benefits for Women: </h4>
            <label for="specifyillBFW">Specify Illness: </label>
            <input id="specifyillBFW" type="text" name="specifyillBFW" placeholder="Specify Illness">
            
            <h4><br>Incase of Study Leave: </h4>
            <select id="incaseofStudy" name="incaseofStudy">
                <option value="select3">Select Type of Study Leave:  </option>
                <option value="completion">Completion of Master's Degree</option>
                <option value="bar">Bar/Board Examination Review</option>
            </select>

            <h4><br>Other Purpose: </h4>
            <select id="otherP" name="otherP">
                <option value="select4">Select for Other Purose: </option>
                <option value="monetize">Monetization of Leave Credits</option>
                <option value="terminal">Terminal Leave</option>
            </select>
            
            <h4><br>C. Number of Working Days Applied For </h4>
            <label for="numwk">Number of Working Days Applied For: </label>
            <input id="numwk" type="text" name="numwk" placeholder="Number of Working Days">
            <label for="inclusive"><br>Inclusive Dates:</label>
            <input id="inclusive" type="text" name="inclusive" placeholder="Inclusive Dates">

            <h4><br>D. Commutation </h4>
            <select id="commutation" name="commutation">
                <option value="notreq">Not Requested </option>
                <option value="req">Requested</option>
            </select>
            <br><br>
            <h4>Signature</h4>
            <br><br>
            <button type="submit">Submit</button>
</form>
</main>
            </div>
    </div>
</div>

    </body>
</html>