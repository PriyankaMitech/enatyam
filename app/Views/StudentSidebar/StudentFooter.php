<footer class="main-footer">
    <strong>Copyright &copy; 2023-2024 <a href="https://www.marketingintelligence.tech/" target="_blank">MI-TECH</a>.</strong> All rights reserved.
</footer>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- this two for student calender  -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script src=" <?= base_url() ?>plugins/jquery/jquery.min.js"></script> -->
<script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url() ?>dist/js/adminlte.js"></script>
<script src="<?= base_url() ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url() ?>plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="<?= base_url() ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>public/js/custom.js"></script>
<script src="<?= base_url() ?>dist/js/pages/dashboard2.js"></script>
<script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
<script src="<?= base_url() ?>public/js/jquery.barrating.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.0/sweetalert2.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="<?= base_url(); ?>plugins/select2/js/select2.full.min.js"></script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({
            icons: {
                time: 'far fa-clock'
            }
        });

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() {
            myDropzone.enqueueFile(file)
        }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
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
    $(document).ready(function() {


        $('#faculty').barrating('set', 1);

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
        // Clear previous validation messages
        $('#password-error').text('');
        $('#success-message').hide();

        var oldPassword = $('#old-password').val();
        var newPassword = $('#new-password').val();
        var confirmPassword = $('#confirm-password').val();

        if (!oldPassword || !newPassword || !confirmPassword) {
            $('#password-error').text('Please fill in all fields.');
            return;
        }

        if (newPassword !== confirmPassword) {
            $('#password-error').text('New password and confirm password do not match.');
            return;
        }

        if (!isValidNewPassword(newPassword)) {
            $('#password-error').text('New password should start with an uppercase letter, have a total length of 8 characters, and include at least one special character.');
            return;
        }

        var formData = $('#updatePasswordForm').serialize();
        $.ajax({
            type: 'POST',
            url: 'Studentpasswordupdate',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Password updated successfully
                    $('#success-message').html('<div class="alert alert-success">' + response.message + '</div>').show();
                    setTimeout(function() {
                        location.reload(); // Refresh the page after 2 seconds
                    }, 1200);
                } else {
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

    // Additional validation function for new password
    function isValidNewPassword(password) {
        // Password should start with an uppercase letter, have a total length of 8 characters, and include at least one special character.
        const regex = /^(?=.*[!@#$%^&*(),.?":{}|<>]).{8}$/;
        return regex.test(password);
    }

    // Clear validation messages when focusing on password fields
    $('#old-password, #new-password, #confirm-password').focus(function() {
        $('#password-error').text('');
        $('#success-message').hide();
    });
</script>
<script>
    // Function to show/hide cards based on radio button selection
    document.addEventListener('DOMContentLoaded', function() {
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
<!--  -->
<script>
    $(document).on('change', '#selectOption', function(e) {
        e.preventDefault();
        var selectedOption = $(this).val();
        if (selectedOption === 'form1') {
            $('#form1').show();
            $('#form2').hide();
        } else if (selectedOption === 'form2') {
            $('#form1').hide();
            $('#form2').show();
        } else {
            $('.dynamic-form').hide();
        }
    });
    $(document).ready(function() {
        // Extract date, commonStartTime, and sessionNumber from the URL parameters
        var urlParams = new URLSearchParams(window.location.search);
        var urlDate = urlParams.get('date');
        var commonStartTime = urlParams.get('commonStartTime');
        var sessionNumber = urlParams.get('sessionNumber');

        // Set the date, current_time, reschedule_time in the form
        if (urlDate) {
            $('#form_date').val(urlDate);
            $('#reshule_date').val(urlDate); // Set the value for the second date field
        }
        if (commonStartTime) {
            $('#current_time').val(commonStartTime);
        }
        if (sessionNumber) {
            // Assuming sessionNumber is in the format 'sessionNumber=2'
            // Extract the numeric part and set it in the form
            var numericSessionNumber = parseInt(sessionNumber.replace('sessionNumber=', ''));
            $('#session_number').val(numericSessionNumber);
        }
    });

    function submitForm(formId) {
        var formData = $('#' + formId).serialize();

        $.ajax({
            type: 'POST',
            url: $('#' + formId).attr('action'),
            data: formData,
            success: function(response) {
                // Handle the success response if needed
                console.log('Form submitted successfully');
                console.log(response);
                window.location.href = '<?= base_url('ScheduleStudent'); ?>';
            },
            error: function(error) {
                // Handle the error response if needed
                console.error('Error submitting form:', error);
            }
        });
    }
</script>
<script>
    function redirectToOtherPage(date, sessionNumber, buttonText, commonStartTime) {
        var redirectUrl = 'reschedule';
        if (buttonText === 'Reschedule') {
            redirectUrl += '?date=' + encodeURIComponent(date) + '&sessionNumber=' + encodeURIComponent(sessionNumber) + '&commonStartTime=' + encodeURIComponent(commonStartTime);
            window.location.href = redirectUrl;
        }
    }
</script>
<script>
    function openModal(currentDate, sessionNumber, buttonText) {
        document.getElementById('modalCurrentDate').value = currentDate;
        document.getElementById('modalSessionNumber').value = sessionNumber;
        document.getElementById('modalButtonText').value = buttonText;
        document.getElementById('myModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }
</script>
<script>
    function updateLabel(inputId) {
        var input = document.getElementById(inputId);
        var label = input.nextElementSibling;
        var fileName = input.files[0].name;
        label.innerHTML = fileName;
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if the flash message exists
        var flashMessage = document.querySelector('.flash-success');
        var errorMessage = document.querySelector('.flash-message');


        if (flashMessage) {
            // Set a timeout to hide the flash message after 5 minutes (300,000 milliseconds)
            setTimeout(function() {
                flashMessage.style.display = 'none';
            }, 1200);
        }
        if (errorMessage) {
            setTimeout(function() {
                errorMessage.style.display = 'none';
            }, 1200);
        }
    });
</script>


        



<?php


if (!empty($counter_data)) {
    // Convert date and time strings to DateTime objects
    $bookDate = new DateTime($counter_data->Book_Date);
    $bookTime = new DateTime($counter_data->Book_Date_Time);
    
    // Combine date and time
    $bookDateTime = new DateTime($bookDate->format('Y-m-d') . ' ' . $bookTime->format('H:i:s'));
// echo $bookDateTime;exit();
    // Add 14 days to the combined datetime
    $bookDateTime->add(new DateInterval('P14D'));
    
    // Format the combined datetime into JavaScript compatible format
    $jsBookDateTime = $bookDateTime->format('Y/m/d H:i:s');
?>

<script>
const countdownDate = new Date("<?php echo $jsBookDateTime; ?>");

const hours = document.querySelector(".hours").querySelector(".flip-card");
const minutes = document.querySelector(".minutes").querySelector(".flip-card");
const seconds = document.querySelector(".seconds").querySelector(".flip-card");

function getTimeRemaining(endtime) {
  const total = Date.parse(endtime) - Date.parse(new Date());
  const seconds = Math.floor((total / 1000) % 60);
  const minutes = Math.floor((total / 1000 / 60) % 60);
  const hours = Math.floor((total / (1000 * 60 * 60)) % 24);

  return {
    total,
    hours,
    minutes,
    seconds
  };
}

function initializeClock(endtime) {
  function updateClock() {
    const t = getTimeRemaining(endtime);

    hours.querySelector(".top-half").innerText = ("0" + t.hours).slice(-2);
    minutes.querySelector(".top-half").innerText = ("0" + t.minutes).slice(-2);
    seconds.querySelector(".top-half").innerText = ("0" + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  const timeinterval = setInterval(updateClock, 1000);
}

initializeClock(countdownDate);
</script>





<?php } ?>


<?php


if (!empty($scounter_data)) {
    // Convert date and time strings to DateTime objects
    $bookDate = new DateTime(date('Y-m-d'));
    $bookTime = new DateTime($scounter_data->start_time);
    
    // Combine date and time
    $bookDateTime = new DateTime($bookDate->format('Y-m-d') . ' ' . $bookTime->format('H:i:s'));
// echo $bookDateTime;exit();
    // Add 14 days to the combined datetime
    $bookDateTime->add(new DateInterval('P14D'));
    
    // Format the combined datetime into JavaScript compatible format
    $jsBookDateTime = $bookDateTime->format('Y/m/d H:i:s');
?>

<script>
const countdownDate = new Date("<?php echo $jsBookDateTime; ?>");

const hours = document.querySelector(".hours").querySelector(".flip-card");
const minutes = document.querySelector(".minutes").querySelector(".flip-card");
const seconds = document.querySelector(".seconds").querySelector(".flip-card");

function getTimeRemaining(endtime) {
  const total = Date.parse(endtime) - Date.parse(new Date());
  const seconds = Math.floor((total / 1000) % 60);
  const minutes = Math.floor((total / 1000 / 60) % 60);
  const hours = Math.floor((total / (1000 * 60 * 60)) % 24);

  return {
    total,
    hours,
    minutes,
    seconds
  };
}

function initializeClock(endtime) {
  function updateClock() {
    const t = getTimeRemaining(endtime);

    hours.querySelector(".top-half").innerText = ("0" + t.hours).slice(-2);
    minutes.querySelector(".top-half").innerText = ("0" + t.minutes).slice(-2);
    seconds.querySelector(".top-half").innerText = ("0" + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  const timeinterval = setInterval(updateClock, 1000);
}

initializeClock(countdownDate);
</script>





<?php } ?>



</div>
</body>

</html>