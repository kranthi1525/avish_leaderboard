<?php
$conn = mysqli_connect('localhost', 'root', '', 'avishkaar');
function generateRandomString($teamname, $clg, $loc, $theme, $title) {
    $prefix = substr($teamname, 0, 3) . substr($clg, 0, 3) . substr($loc, 0, 3) . substr($theme, 0, 3) . substr($title, 0, 3);
    $randomNumber = mt_rand(1000, 9999);
    return "AVI".strtoupper($prefix) . $randomNumber;
}
function generateRandomString_stu($studentname, $gender, $mob) {
    $prefix = substr($studentname, 0, 3) . substr($gender, 0, 3) . substr($mob, 0, 3);
    $randomNumber = mt_rand(1000, 9999);
    return "AVI".strtoupper($prefix) . $randomNumber;
}

if (isset($_POST['addteamdata'])) {
    $teamname = mysqli_real_escape_string($conn, $_POST['teamName']);
    $clg = mysqli_real_escape_string($conn, $_POST['collegename']);
    $loc = mysqli_real_escape_string($conn, $_POST['location']);
    $theme = mysqli_real_escape_string($conn, $_POST['theme']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $mentor = mysqli_real_escape_string($conn, $_POST['mentor']);
    $unqtmID = generateRandomString($teamname, $clg, $loc, $theme, $title);
    $insert = "INSERT INTO registration_details (NAME, COLLEGE, LOCATION, THEME, MEMBER, ID, MENTOR, TYPE) 
               VALUES ('$teamname', '$clg', '$loc', '$theme', '$title', '$unqtmID', '$mentor', 1 )";
    if (mysqli_query($conn, $insert)) {
        echo $unqtmID;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['addstudentdata'])) {
    $studentname = mysqli_real_escape_string($conn, $_POST['studentname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $mobnum = mysqli_real_escape_string($conn, $_POST['mobile']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pos = mysqli_real_escape_string($conn, $_POST['leader']);
    $unqtmID = mysqli_real_escape_string($conn, $_POST['teamID']);
    $unqstId=generateRandomString_stu($studentname, $gender, $mobnum);

    $insert = "INSERT INTO registration_details (NAME, COLLEGE, LOCATION, THEME, MEMBER, TYPE, MENTOR,ID) 
               VALUES ('$studentname', '$gender', '$mobnum', '$email', '$pos', 2, '$unqstId', '$unqtmID')";

    if (mysqli_query($conn, $insert)) {
        echo $unqtmID;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>