<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Apartment Rental</title>
    <!-- link to main style css -->
    <link rel="stylesheet" href="mainStyle.css">
    <!-- link to main js file for validation -->
    <script src="main.js"></script>
</head>
<body>
    <header>
        <h1>Choose Your Home Away From Home!</h1>
        <nav>
            <ul>
                <!-- nav links to get to landing page and bacck to the renter info page for absolutely no reason -->
                <li><a href="main.php">Home</a></li>
                <li><a href="main_app.php">Rentals</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Renter Information</h2>
        <!-- div to display the error message from js validation -->
        <div id="divMsg">
        </div>
        <form name="frmApp" id="frmApp" method="post" action="main_app_process.php" onsubmit="return validateForm();">
            <!-- 5 form elements needed here -->
             <div>
                <!-- validating at least 5 letters need to be entered for the first name -->
                <label for="txtName">Your First Name</label>
                <input type="text" id="txtName" name="txtName" required>
            </div>
            <div>
                <!-- validating at least 5 letters for last name -->
                <label for="txtName">Your Last Name</label>
                <input type="text" id="txtName" name="txtName" required>
            </div>
            <div>
                <!-- no validation just has to be text -->
                <label for="state">Your State Initials</label>
                <input type="text" id="state" name="state" required>
            </div>
            <div>
                <!-- no validation just has to be a number -->
                <label for="age">Your Current Age</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div>
                <!-- no validation just has to be a number -->
                <label for="salary">Your Current Salary</label>
                <input type="number" id="salary" name="salary" required>
            </div>
            <div>
                <button type="submit">Submit Application</button>
            </div>
        </form>
    </main>
</body>
</html>