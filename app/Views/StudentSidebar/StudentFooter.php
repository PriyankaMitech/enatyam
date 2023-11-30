</body>
</html>
<footer class="main-footer">
  <strong>Copyright &copy; 2023-2024 <a href="https://mitech">MI-TECH</a>.</strong> All rights reserved.
  </footer>
  <script src="plugins/jquery/jquery.min.js"></script>
 <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
 <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
 <script src="plugins/raphael/raphael.min.js"></script>
 <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
 <script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
 <script>
        function toggleUploadForm() {
            var uploadForm = document.getElementById("uploadForm");
            if (uploadForm.style.display === "none") {
                uploadForm.style.display = "block";
            } else {
                uploadForm.style.display = "none";
            }
        }
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $("input[name='datetimes']").daterangepicker({},
                function(start, end, label) {
                    let startDate = start.format("YYYY-MM-DD").toString();
                    let endDate = end.format("YYYY-MM-DD").toString();

                    document.getElementById("startDate").innerHTML =
                        "Start date: " + startDate;
                    document.getElementById("endDate").innerHTML = "End date: " + endDate;

                }
            );
        });
    </script>
    <script>
        var uploadText = document.getElementById("uploadRecording");
        var videoSection = document.getElementById("videoSection");
        uploadText.addEventListener("click", function() {
            // Toggle the visibility of the video section
            if (videoSection.style.display === "none") {
                videoSection.style.display = "block";
            } else {
                videoSection.style.display = "none";
            }
        });
    </script>

    <script>
        document.getElementById("uploadLink").addEventListener("click", function() {
            var uploadForm = document.getElementById("uploadForm");

            if (uploadForm.style.display === "none" || uploadForm.style.display === "") {
                uploadForm.style.display = "block";

            } else {
                uploadForm.style.display = "none";

            }
        });
    </script>
    <script>
        function toggleFacultyProfile() {
            const facultyProfile = document.getElementById("faculty-profile");
            facultyProfile.classList.toggle("hidden");
            $("#uploadForm").hide();

        }
    </script>
 

<script>
function updatePassword() {
    var formData = $('#updatePasswordForm').serialize();
    $.ajax({
        type: 'POST',
        url: 'Studentpasswordupdate',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                // Password updated successfully
                $('#updatePasswordForm').html('<div class="alert alert-success">' + response
                    .message + '</div>');
            } else {
                // Display error message
                $('#password-error').text(response.error);
            }
        },
        error: function() {
            alert('An error occurred during the password update.');
        }
    });
}
const togglePassword = (inputId, iconId) => {
    const passwordInput = document.getElementById(inputId);
    const passwordIcon = document.getElementById(iconId);
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    passwordIcon.classList.toggle('fa-eye');
    passwordIcon.classList.toggle('fa-eye-slash');
};
</script>