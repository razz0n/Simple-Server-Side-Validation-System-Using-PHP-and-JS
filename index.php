<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validation Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section id="topsection">
        <div class="logo"> 
            <a href="index.php"><img src="logo.png" alt="logo"></a>
        </div>
        <div class="webname">
            <h2>SERVER SIDE VALIDATION/h2>
        </div>
    </section>
    <section id="sidebar">
    </section>
    <section>
        <form method="POST" action="validated.php" onsubmit="return validation();">
            <h2>LOG IN</h2>
            <div class="row">
                <label>Username</label>
                <input type="text" name="username" id="username" autocomplete="off">
                <div  id="nameErr" class="error"></div>
            </div>
            <div class="row">
                <label>Password</label>
                <input type="password" name="password" id="password" autocomplete="off">
                <div  id="passErr" class="error"></div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </section>
    <section id="footer">
        <h4> This is copyright from Rajan Lamichhane.</h4>
        <h4> All rights reserved.</h4>
        <h3> 2019 </h3>
    </section>
    <script src="validate.js"></script>
 
</body>
</html>
