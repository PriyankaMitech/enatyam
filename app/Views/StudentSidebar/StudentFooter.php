<footer class="main-footer">
  <strong>Copyright &copy; 2023-2024 <a href="https://mitech">MI-TECH</a>.</strong> All rights reserved.
  </footer>
  <script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
 <script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?=base_url()?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?=base_url()?>dist/js/adminlte.js"></script>
 <script src="<?=base_url()?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
 <script src="<?=base_url()?>plugins/raphael/raphael.min.js"></script>
 <script src="<?=base_url()?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url()?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
 <script src="<?=base_url()?>plugins/chart.js/Chart.min.js"></script>
<script src="<?=base_url()?>dist/js/demo.js"></script>
<script src="<?=base_url()?>public/js/custom.js"></script>
<script src="<?=base_url()?>dist/js/pages/dashboard2.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="<?=base_url()?>dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>public/js/jquery.barrating.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.0/sweetalert2.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"> -->
    </script>
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


    <script type='text/javascript'>
        $(document).ready(function(){
            
            $('#faculty<?php //echo $rate['average_ue']; ?>').barrating('set', 3<?php //echo $rate['average_ue']; ?>);

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
<script>
        // Function to show/hide cards based on radio button selection
        document.addEventListener('DOMContentLoaded', function () {
            const radioButtons = document.querySelectorAll('input[type="radio"]');
            const cards = document.querySelectorAll('.card');

            radioButtons.forEach(radio => {
                radio.addEventListener('change', () => {
                    cards.forEach(card => card.style.display = 'none');
                    const selectedValue = document.querySelector('input[name="radioGroup"]:checked').value;
                    const selectedCards = document.querySelectorAll(`.card.${selectedValue}-card`);
                    selectedCards.forEach(card => card.style.display = 'block');
                });
            });

            // Show the first three cards by default
            const defaultCards = document.querySelectorAll('.card:nth-child(-n+3)');
            defaultCards.forEach(card => card.style.display = 'block');
        });
    </script>
    </div>
    </body>
</html>