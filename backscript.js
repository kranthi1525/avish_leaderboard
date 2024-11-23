
function teamform(){
    $.ajax({
        url: 'teamform.php',
        success: function (response) {
            $('.container-data').html(response);
        },
    });
}


function loadStudentForm(unqtmID) {
    $.ajax({
        url: 'studentregistrationform.php',
        method: 'GET',
        data: { unqtmID: unqtmID },
        success: function(response) {
            $('.container-data').html(response); // Replace the container's content with the form
        },
        error: function(xhr, status, error) {
            $('.container-data').html('<p>An error occurred while loading the student registration form.</p>');
        }
    });
}


function StudentDataUpload(event) {
    // alert("hello");
    event.preventDefault();
    const form = document.getElementById('studentRegistrationForm');
    const formData = new FormData(form);
    $.ajax({
        url: 'backListener.php', 
        type: 'POST', 
        data: formData, 
        processData: false, 
        contentType: false, 
        success: function(response) {
            console.log('AJAX response:', response);
            const unqtmID = response.trim();
            if (!unqtmID) {
                console.error('Unique Team ID is empty or undefined.');
            } else {
                console.log('Unique Team ID:', unqtmID);
                loadStudentForm(unqtmID);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            $('.container-data').html('<p>An error occurred while submitting the form.</p>');
        }
    });
}



function UploadFormData(event) {
    // alert("hello");
    event.preventDefault();
    const form = document.getElementById('teamRegistrationForm');
    const formData = new FormData(form);
    $.ajax({
        url: 'backListener.php', 
        type: 'POST', 
        data: formData, 
        processData: false, 
        contentType: false, 
        success: function(response) {
            console.log('AJAX response:', response);
            const unqtmID = response.trim();
            if (!unqtmID) {
                console.error('Unique Team ID is empty or undefined.');
            } else {
                console.log('Unique Team ID:', unqtmID);
                loadStudentForm(unqtmID);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            $('.container-data').html('<p>An error occurred while submitting the form.</p>');
        }
    });
}