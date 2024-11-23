<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$unqtmID = isset($_GET['unqtmID']) ? htmlspecialchars($_GET['unqtmID']) : ''; 

?>
<div id="studentForm" class="form-card">
    <h2>Student Registration</h2>
    <form id="studentRegistrationForm" method="POST" action="">
        <div class="form-group">
            <label for="studentname">Student Name:</label>
            <input type="text" id="studentname" name="studentname" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="male">MALE</option>
                <option value="female">FEMALE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="leader">Team Leader:</label>
            <select name="leader" id="leader">
                <option value="1">LEADER</option>
                <option value="2">MEMBER</option>
            </select>
        </div>
        <input type="hidden" name="teamID" value="<?php echo $unqtmID; ?>">
        <input type="hidden" name="addstudentdata" value="teamdata">
        <button type="button" onclick="StudentDataUpload(event)">Next Student</button>
        <!-- <button type="button" onclick="UploadStudentData(event)">Save</button> -->
    </form>
</div>
