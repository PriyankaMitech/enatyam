<footer class="main-footer">
<strong>Copyright &copy; 2023-2024 <a href="https://mitech">MI-TECH</a>.</strong> All rights reserved.
    All rights reserved.
    
</footer>

</div>

<script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>plugins/chart.js/Chart.min.js"></script>
<script src="<?=base_url()?>plugins/sparklines/sparkline.js"></script>
<script src="<?=base_url()?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?=base_url()?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?=base_url()?>plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?=base_url()?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?=base_url()?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?=base_url()?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url()?>public/js/custom.js"></script>
<script src="<?= base_url(); ?>plugins/fullcalendar/main.js"></script>

<script src="<?=base_url()?>public/js/jquery.barrating.min.js"></script>
<script src="<?=base_url(); ?>/public/js/jquery.validate.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>



<!-- DataTables  & Plugins -->
<script src="<?=base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url(); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url(); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url(); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url(); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url(); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url(); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url(); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url(); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url(); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url(); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url(); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- AdminLTE App -->
<script src="<?=base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url(); ?>dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
    $(document).ready(function() {

        $("#toggle-table5").click(function() {
            $("#faculty-table5").toggle("");
            $("#faculty-table").hide();
            $("#faculty-table4").hide();
            $("#faculty-table2").hide();

        });



        $("#toggle-table2").click(function() {
            $("#faculty-table2").toggle("");
            $("#faculty-table").hide();
            $("#faculty-table4").hide();
            $("#faculty-table5").hide();

        });

        $("#toggle-table4").click(function() {
            $("#faculty-table4").toggle("");
            $("#faculty-table").hide();
            $("#faculty-table2").hide();

        });


        $("#toggle-table").click(function() {
            $("#faculty-table").toggle("");
            $("#faculty-table4").hide();
            $("#faculty-table2").hide();

        });

        $("#toggle-table6").click(function() {
            $("#faculty-table6").toggle("");



        });
        $(".coundd_demo").click(function() {
            $("#coundd_demo-payment-table").toggle("");
            $("#pending-demo-table").hide();
            $("#comp-payment-table").hide();
            $("#unattended-tabal").hide();

        });


        $(".pend-demo").click(function() {
            $("#pending-demo-table").toggle("");
            $("#comp-payment-table").hide();
            $("#coundd_demo-payment-table").hide();
            $("#unattended-tabal").hide();


        });
        $(".UnattendedList").click(function() {
            $("#unattended-tabal").toggle("");
            $("#comp-payment-table").hide();
            $("#coundd_demo-payment-table").hide();
            $("#pending-demo-table").hide();

        });
        $(".comp-payment").click(function() {
            $("#comp-payment-table").toggle("");
            $("#pending-demo-table").hide();
            $("#coundd_demo-payment-table").hide();
            $("#unattended-tabal").hide();

        });

        var groupSessionTable = $('#groupSessionTable').DataTable();
        $('#selectedRowsTable').hide();

        $('#groupSessionTable tbody').on('change', '.select-checkbox', function() {
            var rowData = $(this).closest('tr');
            var rowId = rowData.data('id');

            if ($(this).prop('checked')) {
                var clonedRow = rowData.clone();
                clonedRow.find('td:first-child input').remove();
                $('#selectedRowsBody').append(clonedRow);
            } else {
                $('#selectedRowsBody tr[data-id="' + rowId + '"]').remove();
                updateRowNumbers();
            }

            var hasSelectedRows = $('#selectedRowsBody tr').length > 0;
            $('#selectedRowsTable').toggle(hasSelectedRows);
        });

        $('#postSelectedRows').on('click', function() {
            var selectedRowIds = [];
            $('#selectedRowsBody tr').each(function() {
                var rowId = $(this).data('id');
                selectedRowIds.push(rowId);
            });
            $('#selectedRowsTable').append('<input type="hidden" name="selectedRowIds" value="' +
                selectedRowIds.join(',') + '">');
        });

        $('#courseSearch').on('input', function() {
            groupSessionTable.columns(3).search(this.value).draw();
        });

        $('#subCourseSearch').on('input', function() {
            groupSessionTable.columns(4).search(this.value).draw();
        });

        function updateRowNumbers() {
            $('#selectedRowsBody tr').each(function(index) {
                $(this).find('td:first-child').text(index + 1);
            });
        }


    });

    function showStudentTable(button) {
        // Hide all tables with class "table"
        var tables = document.querySelectorAll('.table');
        for (var i = 0; i < tables.length; i++) {
            tables[i].style.display = 'none';
        }

        // Show the student assignment table
        document.getElementById('student-assignment-table').style.display = 'table';
    }
    document.addEventListener('DOMContentLoaded', function() {
        var buttons = document.querySelectorAll('.group-button');
        var recordsContainers = document.querySelectorAll('.group-records');
        if (recordsContainers.length > 0) {
            recordsContainers[0].style.display = 'block';
        }
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                var group = this.getAttribute('data-group');
                var clickedRecordsContainer = document.querySelector('[data-group-id="' +
                    group + '-records"]');
                recordsContainers.forEach(function(container) {
                    if (container === clickedRecordsContainer) {
                        container.style.display = 'block';
                    } else {
                        container.style.display = 'none';
                    }
                });
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            // Your FullCalendar configuration options here
            // ...

            eventDrop: function(info) {
                var eventId = info.event.id;
                var newStart = info.event.start;
                var newEnd = info.event.end;
                var title = info.event.title;

                $.ajax({
                    url: '/save-event', // Make sure this URL matches your CodeIgniter route
                    type: 'POST',
                    data: {
                        id: eventId,
                        title: title,
                        start: newStart,
                        end: newEnd,
                    },
                    success: function(response) {
                        console.log('Event updated and saved to the database.');
                    },
                });
            },
        });

        calendar.render();
    });
</script>

<script>
    $(function() {

        /* initialize the external events
        -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function() {

                // create an Event Object (https://fullcalendar.io/docs/event-object)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                })

            })
        }

        ini_events($('#external-events div.external-event'))

        /* initialize the calendar
        -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendar.Draggable;

        var containerEl = document.getElementById('external-events');
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function(eventEl) {
                return {
                    title: eventEl.innerText,
                    backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                };
            }
        });

        var facultyEvents = [
            <?php if (!empty($FacultysheduleData)) {
                foreach ($FacultysheduleData as $data) { ?> {
                        title: '<?= $data->full_name; ?> - <?= $data->start_time; ?> to <?= $data->end_time; ?>',
                        start: '<?= $data->date; ?>T<?= $data->start_time; ?>',
                        end: '<?= $data->date; ?>T<?= $data->end_time; ?>',
                        faculty_id: '<?= $data->faculty_register_id; ?>',
                    },
            <?php }
            } ?>
        ];


        var colorMap = {};

        facultyEvents.forEach(function(event) {
            var facultyId = event.faculty_id;

            if (!colorMap[facultyId]) {
                colorMap[facultyId] = getRandomColor();
            }

            event.backgroundColor = colorMap[facultyId];
            event.borderColor = colorMap[facultyId];
            event.textColor = getContrastColor(colorMap[facultyId]); // Set text color
        });

        function getContrastColor(hexColor) {
            var r = parseInt(hexColor.substring(1, 3), 16);
            var g = parseInt(hexColor.substring(3, 5), 16);
            var b = parseInt(hexColor.substring(5, 7), 16);
            var brightness = (r * 299 + g * 587 + b * 114) / 1000;

            return brightness > 128 ? '#000000' : '#FFFFFF';
        }

        // Rest of your code remains the same...


        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        var calendar = new Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            themeSystem: 'bootstrap',
            events: facultyEvents,
            editable: true,
            droppable: true,
            drop: function(info) {
                if (checkbox.checked) {
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            },
            eventContent: function(arg) {
                var eventColor = arg.event.backgroundColor || ''; // Ensure eventColor is defined
                var textColor = getContrastColor(eventColor); // Calculate text color based on background brightness
                return {
                    html: '<div class="fc-content" style="background-color:' + eventColor + '; padding: 2%; border-radius: 5%">' +
                        '<span class="fc-title" style="display: block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; color: ' + textColor + ';" title="' + arg.event.title + '">' +
                        '<div class="event-title">' + arg.event.title.split(' - ')[0] + '</div>' +
                        '<div class="event-time">' + arg.event.title.split(' - ')[1] + '</div>' +
                        '</span>' +
                        '</div>',
                };
            },
        });

        calendar.render();



        // $('#calendar').fullCalendar()

        var currColor = '#3c8dbc'
        $('#color-chooser > li > a').click(function(e) {
            e.preventDefault()
            currColor = $(this).css('color')
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color': currColor
            })
        })
        $('#add-new-event').click(function(e) {
            e.preventDefault()
            var val = $('#new-event').val()
            if (val.length == 0) {
                return
            }

            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color': currColor,
                'color': '#fff'
            }).addClass('external-event')
            event.text(val)
            $('#external-events').prepend(event)

            ini_events(event)
            $('#new-event').val('')
        })
    })
</script>
<script>
    document.getElementById("showVideoContainer").addEventListener("click", function() {
        document.getElementById("videoContainer").style.display = "block";
        document.getElementById("rescheduleContainer").style.display = "none";
        document.getElementById("imageContainer").style.display = "none";
    });

    document.getElementById("showImageContainer").addEventListener("click", function() {
        document.getElementById("imageContainer").style.display = "block";
        document.getElementById("rescheduleContainer").style.display = "none";
        document.getElementById("videoContainer").style.display = "none";

    });
    document.getElementById("showRescheduleContainer").addEventListener("click", function() {
        document.getElementById("rescheduleContainer").style.display = "block";
        document.getElementById("videoContainer").style.display = "none";
        document.getElementById("imageContainer").style.display = "none";
    });
    </script>
    
      <script>
        
        document.getElementById("showVideoContainer").addEventListener("click", function() {
            document.getElementById("videoContainer").style.display = "block";
            document.getElementById("FacultyVideoContainer").style.display = "none"; // Hide FacultyVideoContainer
        });

        document.getElementById("showFacultyVideoContainer").addEventListener("click", function() {
            document.getElementById("videoContainer").style.display = "none"; // Hide videoContainer
            document.getElementById("FacultyVideoContainer").style.display = "block";
        });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var userTypeSelect = document.getElementById("inputUserType");
        var studentFormElements = document.getElementById("studentFormElements");
        var facultyFormElements = document.getElementById("facultyFormElements");
        var selectAllStudentsCheckbox = document.getElementById("selectAllStudents");
        var selectAllFacultyCheckbox = document.getElementById("selectAllFaculty");

        function toggleFormElementsVisibility() {
            var userType = userTypeSelect.value;

            studentFormElements.style.display = "none";
            facultyFormElements.style.display = "none";

            if (userType === "student" || userType === "both") {
                studentFormElements.style.display = "block";
            }

            if (userType === "faculty" || userType === "both") {
                facultyFormElements.style.display = "block";
            }
        }

        userTypeSelect.addEventListener("change", function () {
            toggleFormElementsVisibility();
        });

        selectAllStudentsCheckbox.addEventListener("change", function () {
            var studentCheckboxes = document.querySelectorAll('input[name="selected_students[]"]');
            studentCheckboxes.forEach(function (checkbox) {
                checkbox.checked = selectAllStudentsCheckbox.checked;
            });
        });

        selectAllFacultyCheckbox.addEventListener("change", function () {
            var facultyCheckboxes = document.querySelectorAll('input[name="selected_faculty[]"]');
            facultyCheckboxes.forEach(function (checkbox) {
                checkbox.checked = selectAllFacultyCheckbox.checked;
            });
        });

        toggleFormElementsVisibility();
    });
</script>


<script>
$(document).ready(function() {
    $('#add_menu_form ').validate({
        rules: {
            menu_name: {
                required: true,
            },
            url_location : {
                required: true,
                
            },
        },
        messages: {
            menu_name: {
            required: 'Please enter menu name.',
            },
            url_location : {
                required: 'Please enter URL location.',
            }, 
        }
    });
});



</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if the flash message exists
        var flashMessage = document.querySelector('.flash-success');

        if (flashMessage) {
            // Set a timeout to hide the flash message after 5 minutes (300,000 milliseconds)
            setTimeout(function() {
                flashMessage.style.display = 'none';
            }, 3000);
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('#url_location').on('input', function() {
            var url_location = $(this).val();
            // alert(url_location);

            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/chechk_menu_name_id',
                data: {
                    menu_name: url_location
                },
                success: function(response) {
                    console.log(response);
                    if (response == 'false') {
                        $('#menu_nameError').text('');
                        $('.submitButton').prop('disabled', false);

                    } else if (response == 'true') {
                        $('#menu_nameError').text('This URL Location is allredy available.');
                        $('.submitButton').prop('disabled', true);
                    }
                }
            });
        });
    });
</script>


<script>
    $.validator.addMethod("mobile", function(value, element) {
        // Check if the input is a valid email or a valid mobile number
        return this.optional(element) || /^[0-9]{10}$/i.test(value);
    }, "Please enter a valid mobile number.");

    $.validator.addMethod('lettersOnly', function(value, element) {
        return /^[a-zA-Z\s]*$/.test(value); // This regex allows only letters and spaces
    }, 'Please enter letters only');

    $.validator.addMethod('customPassword', function(value, element) {
        // Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol. It should be at least 8 characters long.
        return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,}$/.test(value);
    }, 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol (!@#$%^&*) and be at least 8 characters long');

    $.validator.addMethod("emailval", function(value, element) {
        // Check if the input is a valid email or a valid mobile number
        return this.optional(element) || /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/i.test(value);
    }, "Please enter a valid email address.");

    $(document).ready(function() {
        $('#user_form').validate({
            rules: {
                full_name: {
                    required: true,
                    lettersOnly: true // Use the custom method here
                },
                email: {
                    required: true,
                    email: true,
                    emailval: true,
                },
                mobile_no: {
                    required: true,
                    mobile: true
                },
                password: {
                    required: true,
                    customPassword: true
                },
                // confirm_pass: {
                //     required: true,
                //     equalTo: '#password'
                // }
            },
            messages: {
                full_name: {
                    required: 'Please enter your name.',
                    lettersOnly: 'Please enter letters only.' // Custom error message
                },
                email: {
                    required: 'Please enter your email address.',
                    email: 'Please enter a valid email address.',
                    emailval: 'Please enter a valid email address.'
                },
                mobile_no: {
                    required: 'Please enter your mobile number.',
                    mobile: 'Please enter your mobile number.',
                },
                password: {
                    required: "Password is required.",
                    customPassword: "Password must contain at least one uppercase letter, one lowercase letter, one number, and be at least 8 characters long"
                },
                // confirm_pass: {
                //     required: 'Please confirm your password.',
                //     equalTo: 'Passwords do not match.'
                // }
            },
          
          
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#email').on('input', function() {
            var username = $(this).val();
            // alert(username);

            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/chechk_username_id',
                data: {
                    username: username
                },
                success: function(response) {
                    console.log(response);
                    if (response == 'false') {
                        $('#emailError').text('');
                        $('.submitButton').prop('disabled', false);

                    } else if (response == 'true') {
                        $('#emailError').text('This email is allredy available.');
                        $('.submitButton').prop('disabled', true);
                    }
                }
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('#mobile_no').on('input', function() {
            var mobile_no = $(this).val();
            // alert(username);

            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/chechk_mobile_no_id',
                data: {
                    mobile_no: mobile_no
                },
                success: function(response) {
                    console.log(response);
                    if (response == 'false') {
                        $('#mobile_noError').text('');
                        $('.submitButton').prop('disabled', false);

                    } else if (response == 'true') {
                        $('#mobile_noError').text('This mobile number is allredy available.');
                        $('.submitButton').prop('disabled', true);
                    }
                }
            });
        });
    });
</script>   
      
  
</body>

</html>








