<div id="teamForm" class="form-card">
    <h2>Team Registration</h2>
    <form id="teamRegistrationForm" method="POST" action="">
        <div class="form-group">
            <label for="teamName">Team Name:</label>
            <input type="text" id="teamName" name="teamName" required>
        </div>
        <div class="form-group">
            <label for="collegeName">College Name:</label>
            <input type="text" id="collegeName" name="collegename" required>
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="theme">Theme:</label>
            <input type="text" id="theme" name="theme" required>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="mentor">MENTOR:</label>
            <input type="text" id="mentor" name="mentor" required>
        </div>
        <input type="hidden" name="addteamdata" value="teamdata">
        <button type="button" onclick="UploadFormData(event)">Submit Team Details</button>
    </form>
</div>