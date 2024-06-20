<footer class="main-footer">
    <strong>Copyright &copy; 2023-2024 <a href="https://www.marketingintelligence.tech/" target="_blank">MI-TECH</a>.</strong> All rights reserved.


</footer>

</div>

<script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>plugins/sparklines/sparkline.js"></script>
<script src="<?= base_url() ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?= base_url() ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?= base_url() ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url() ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url() ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?= base_url() ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url() ?>public/js/custom.js"></script>
<script src="<?= base_url(); ?>plugins/fullcalendar/main.js"></script>

<script src="<?= base_url() ?>public/js/jquery.barrating.min.js"></script>
<script src="<?= base_url(); ?>/public/js/jquery.validate.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>



<!-- DataTables  & Plugins -->
<script src="<?= base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
$(document).ready(function() {
    const assignButton = $('#assignButton');
    const loaderContainer = $('#loaderContainer');

    // Add click event listener to the button
    assignButton.on('click', function() {
        // Show the loader container when the button is clicked
        loaderContainer.css('display', 'block');
    });
});
</script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>dist/js/adminlte.min.js"></script>

<!-- Select2 -->
<script src="<?= base_url(); ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url(); ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url(); ?>plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<!-- bootstrap color picker -->
<script src="<?= base_url(); ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<!-- Bootstrap Switch -->
<script src="<?= base_url(); ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= base_url(); ?>plugins/bs-stepper/js/bs-stepper.min.js"></script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>




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

    $(document).ready(function() {
    Dropzone.autoDiscover = false;

    // Get the template HTML and remove it from the document
    var previewNode = $("#template").get(0);
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    $(previewNode).remove();

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    });
});

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
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
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
        function ini_events(ele) {
            ele.each(function() {
                var eventObject = {
                    title: $.trim($(this).text())
                };
                $(this).data('eventObject', eventObject);
                $(this).draggable({
                    zIndex: 1070,
                    revert: true,
                    revertDuration: 0
                });
            });
        }

        ini_events($('#external-events div.external-event'));

        var date = new Date();
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear();

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendar.Draggable;

        var containerEl = document.getElementById('external-events');
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

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

                // echo "<pre>";print_r($FacultysheduleData);exit();
                foreach ($FacultysheduleData as $data) {
                    // Get the current day of the week (assuming $data->Day contains the day information)
                    $currentDayOfWeek = strtolower($data->Day);

                    // Calculate the date of the next occurrence of the specified day
                    $nextOccurrenceDate = date('Y-m-d', strtotime('next ' . $currentDayOfWeek));

                    // Use the next occurrence date along with start and end times
            ?> {
                        title: '<?= $data->full_name; ?> - <?= $data->start_time; ?> to <?= $data->end_time; ?>',
                        start: '<?= $nextOccurrenceDate; ?>T<?= $data->start_time; ?>',
                        end: '<?= $nextOccurrenceDate; ?>T<?= $data->end_time; ?>',
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
            event.textColor = getContrastColor(colorMap[facultyId]);
        });

        function getContrastColor(hexColor) {
            var r = parseInt(hexColor.substring(1, 3), 16);
            var g = parseInt(hexColor.substring(3, 5), 16);
            var b = parseInt(hexColor.substring(5, 7), 16);
            var brightness = (r * 299 + g * 587 + b * 114) / 1000;
            return brightness > 128 ? '#000000' : '#FFFFFF';
        }

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
                var eventColor = arg.event.backgroundColor || '';
                var textColor = getContrastColor(eventColor);
                return {
                    html: '<div class="fc-content" style="background-color:' + eventColor +
                        '; padding: 2%; border-radius: 5%">' +
                        '<span class="fc-title" style="display: block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; color: ' +
                        textColor + ';" title="' + arg.event.title + '">' +
                        '<div class="event-title">' + arg.event.title.split(' - ')[0] + '</div>' +
                        '<div class="event-time">' + arg.event.title.split(' - ')[1] + '</div>' +
                        '</span>' +
                        '</div>',
                };
            },
            dayRender: function(arg) {
                var currentDay = arg.date.getDate();
                var currentMonth = arg.date.getMonth() + 1;
                var currentYear = arg.date.getFullYear();

                var filteredEvents = facultyEvents.filter(function(event) {
                    var eventDate = new Date(event.start);
                    var eventDay = eventDate.getDate();
                    var eventMonth = eventDate.getMonth() + 1;
                    var eventYear = eventDate.getFullYear();

                    return (
                        eventDay === currentDay &&
                        eventMonth === currentMonth &&
                        eventYear === currentYear
                    );
                });

                var eventContainer = $('<div class="day-events"></div>');
                filteredEvents.forEach(function(event) {
                    var eventHtml =
                        '<div class="event" style="background-color:' +
                        event.backgroundColor +
                        '">' +
                        event.title +
                        '</div>';
                    eventContainer.append(eventHtml);
                });

                $(arg.el).append(eventContainer);
            },
        });

        calendar.render();

        var currColor = '#3c8dbc';
        $('#color-chooser > li > a').click(function(e) {
            e.preventDefault();
            currColor = $(this).css('color');
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color': currColor
            });
        });

        $('#add-new-event').click(function(e) {
            e.preventDefault();
            var val = $('#new-event').val();
            if (val.length == 0) {
                return;
            }

            var event = $('<div />');
            event.css({
                'background-color': currColor,
                'border-color': currColor,
                'color': '#fff'
            }).addClass('external-event');
            event.text(val);
            $('#external-events').prepend(event);

            ini_events(event);
            $('#new-event').val('');
        });
    });
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
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
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

        userTypeSelect.addEventListener("change", function() {
            toggleFormElementsVisibility();
        });

        selectAllStudentsCheckbox.addEventListener("change", function() {
            var studentCheckboxes = document.querySelectorAll('input[name="selected_students[]"]');
            studentCheckboxes.forEach(function(checkbox) {
                checkbox.checked = selectAllStudentsCheckbox.checked;

            });
        });

        selectAllFacultyCheckbox.addEventListener("change", function() {
            var facultyCheckboxes = document.querySelectorAll('input[name="selected_faculty[]"]');
            facultyCheckboxes.forEach(function(checkbox) {
                checkbox.checked = selectAllFacultyCheckbox.checked;
            });
        });

        toggleFormElementsVisibility();
    });
</script> -->

<script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     var userTypeSelect = document.getElementById("inputUserType");
    //     var studentFormElements = document.getElementById("studentFormElements");
    //     var facultyFormElements = document.getElementById("facultyFormElements");
    //     var selectAllStudentsCheckbox = document.getElementById("selectAllStudents");
    //     var selectAllFacultyCheckbox = document.getElementById("selectAllFaculty");

    //     function toggleFormElementsVisibility() {
    //         var userType = userTypeSelect.value;

    //         studentFormElements.style.display = "none";
    //         facultyFormElements.style.display = "none";

    //         if (userType === "student" || userType === "both") {
    //             studentFormElements.style.display = "block";
    //         }

    //         if (userType === "faculty" || userType === "both") {
    //             facultyFormElements.style.display = "block";
    //         }
    //     }

    //     userTypeSelect.addEventListener("change", function() {
    //         toggleFormElementsVisibility();
    //     });

    //     selectAllStudentsCheckbox.addEventListener("change", function() {
    //         var studentCheckboxes = document.querySelectorAll('input[name="selected_students[]"]');
    //         studentCheckboxes.forEach(function(checkbox) {
    //             checkbox.checked = selectAllStudentsCheckbox.checked;
    //         });
    //     });

    //     selectAllFacultyCheckbox.addEventListener("change", function() {
    //         var facultyCheckboxes = document.querySelectorAll('input[name="selected_faculty[]"]');
    //         facultyCheckboxes.forEach(function(checkbox) {
    //             checkbox.checked = selectAllFacultyCheckbox.checked;
    //         });
    //     });

    //     toggleFormElementsVisibility();

    //     $('#courses_id_n').on('change', function() {
    //         var courseId = $(this).val();
    //         var subCourseId = $('#sub_courses_id_n').val();
    //         // loadStudentList(courseId, subCourseId);
    //     });

    //     $('#sub_courses_id_n').on('change', function() {
    //         var courseId = $('#courses_id_n').val();
    //         var subCourseId = $(this).val();
    //         // loadStudentList(courseId, subCourseId);
    //     });

        // function loadStudentList(courseId, subCourseId) {
        //     $.ajax({
        //         url: 'your-api-url-to-fetch-students',
        //         type: 'POST',
        //         data: {
        //             course_id: courseId,
        //             sub_course_id: subCourseId
        //         },
        //         dataType: 'json',
        //         success: function(data) {
        //             var studentCheckboxList = document.getElementById("student_checkbox_list");
        //             studentCheckboxList.innerHTML = ""; // Clear existing list
        //             data.forEach(function(student) {
        //                 var checkbox = document.createElement("input");
        //                 checkbox.setAttribute("type", "checkbox");
        //                 checkbox.setAttribute("name", "selected_students[]");
        //                 checkbox.setAttribute("value", student.id);

        //                 var label = document.createElement("label");
        //                 label.innerHTML = student.full_name;

        //                 var div = document.createElement("div");
        //                 div.appendChild(checkbox);
        //                 div.appendChild(label);

        //                 studentCheckboxList.appendChild(div);
        //             });
        //         }
        //     });
        // }

    //     $('#courses_id_n').trigger('change');
    //     $('#sub_courses_id_n').trigger('change');
    // });
</script>




<script>
    $(document).ready(function() {
        $('#add_menu_form ').validate({
            rules: {
                menu_name: {
                    required: true,
                },
                url_location: {
                    required: true,

                },
            },
            messages: {
                menu_name: {
                    required: 'Please enter menu name.',
                },
                url_location: {
                    required: 'Please enter URL location.',
                },
            }
        });
    });
</script>
<script>
    $('#add_sub_courses_form').validate({
        rules: {
            courses_id: {
                required: true,
                min: 1, // Assuming that course IDs start from 1. Adjust if needed.
            },
            sub_courses_name: {
                required: true,
            },
        },
        messages: {
            courses_id: {
                required: 'Please select courses.',
                min: 'Please select a valid course.',
            },
            sub_courses_name: {
                required: 'Please enter sub courses name.',
            },
        },
    });
</script>


<script>
    $(document).ready(function() {
        $('#add_courses_form').validate({
            rules: {
                courses_name: {
                    required: true,
                },

            },
            messages: {
                courses_name: {
                    required: 'Please enter courses name.',
                },

            }
        });
    });
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
            }, 1500);
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

                    } else {
                        $('#menu_nameError').text('This URL Location is allredy available.');
                        $('.submitButton').prop('disabled', true);
                    }
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#courses_name').on('input', function() {
            var courses_name = $(this).val();
            // alert(courses_name);

            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/chechk_courses_name_id',
                data: {
                    courses_name: courses_name
                },
                success: function(response) {
                    console.log(response);
                    $('.error').hide()

                    if (response == 'false') {
                        $('.submitButton').prop('disabled', false);

                    } else {
                        $('#courses_name').after('<span class="error">This course name is already available.</span>');

                        $('.submitButton').prop('disabled', true);
                    }
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#sub_courses_name').on('input', function() {
            var courses_id = $('#courses_id').val();
            var sub_courses_name = $(this).val();

            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/chechk_sub_courses_name_id',
                data: {
                    courses_id: courses_id,
                    sub_courses_name: sub_courses_name
                },
                success: function(response) {
                    console.log(response);

                    if (response == 'false') {
                        $('#courses_idError').text('This course name is already available.');
                        $('#sub_courses_nameError').text('This sub course name is already available.');
                        $('.submitButton').prop('disabled', true);
                    } else {
                        // Clear error messages and enable submit button
                        $('#courses_idError').text('');
                        $('#sub_courses_nameError').text('');
                        $('.submitButton').prop('disabled', false);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });


    });
</script>
<script>
    $('#courses_id').on('change', function() {
        var courses_id = $(this).val();
        var sub_courses_name = $('#sub_courses_name').val();
        // alert(courses_id);
        // alert(sub_courses_name);


        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>chechk_courses_id_id',
            data: {
                courses_id: courses_id,
                sub_courses_name: sub_courses_name,

            },
            success: function(response) {
                console.log(response);
                $('.error').hide()
                if (response === 'false') {
                    $('#courses_idError').text('');
                    $('#sub_courses_nameError').text('');
                    $('.submitButton').prop('disabled', false);


                } else {
                    // Clear error messages and enable submit button
                    // $('#courses_idError').text('This courses name is already available.');
                    $('#sub_courses_name').after('<span class="error">This sub course name is already available.</span>');
                    $('.submitButton').prop('disabled', true);

                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
</script>

<script>
    $('#sub_courses_name').on('input', function() {
        var sub_courses_name = $(this).val();
        var courses_id = $('#courses_id').val();

        // alert(sub_courses_name);
        // alert(courses_id);


        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>chechk_sub_courses_name_id',
            data: {
                sub_courses_name: sub_courses_name,
                courses_id: courses_id
            },
            success: function(response) {
                console.log(response);
                $('.error').hide()

                if (response != '') {

                    $('#sub_courses_name').after('<span class="error">This sub course name is already available.</span>');
                    $('.submitButton').prop('disabled', true);

                } else {
                    $('#sub_courses_nameError').text('');
                    $('.submitButton').prop('disabled', false);
                }
            }
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
        },
        'Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol (!@#$%^&*) and be at least 8 characters long'
    );

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
                    customPassword: "Password must contain at least one uppercase letter, one lowercase letter, one number,  one symbol , and be at least 8 characters long"
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
                    if (response == 'false') {
                        $('#emailError').text('');
                        $('.submitButton').prop('disabled', false);

                    } else if (response == 'true') {
                        $('#emailError').text('This email is already available.');
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
                        $('#mobile_noError').text('This mobile number is already available.');
                        $('.submitButton').prop('disabled', true);
                    }
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.group-records').hide();
        $('#facultySelectionDropdown').hide();

        // Use change event on the course dropdown
        $('#course').on('change', function() {
            var course = $(this).val();
            var subcourse = $('#subcourse').val();
            fetchGroupsForCourse(course, subcourse);
        });

        // Use change event on the subcourse dropdown
        $('#subcourse').on('change', function() {
            var course = $('#course').val();
            var subcourse = $(this).val();
            fetchGroupsForCourse(course, subcourse);
        });

        function fetchGroupsForCourse(course, subcourse) {
            $.ajax({
                url: '<?= site_url('fetch_groups_for_course') ?>',
                type: 'POST',
                data: {
                    course: course,
                    subcourse: subcourse
                },
                dataType: 'json',
                success: function(response) {
                    // Populate the groups dropdown
                    $('#group').empty();
                    $('#group').append('<option value="">Select Groups</option>');
                    $.each(response.groups, function(index, group) {
                        $('#group').append('<option value="' + group.groupName + '">' + group.groupName + '</option>');
                    });
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }

        // Use change event on the group dropdown
        $('#group').on('change', function() {
            var group = $(this).val();
            fetchAndUpdateRecords(group);
        });

        function fetchAndUpdateRecords(group) {
            $.ajax({
                url: '<?= site_url('fetch_records') ?>',
                type: 'POST',
                data: {
                    group: group
                },
                dataType: 'json',
                success: function(response) {
                    $('#recordsBody').empty();

                    $.each(response.stdent_list, function(index, record) {
                        var fullName = record.full_name;
                        var email = record.email;
                        var mobileNumber = record.mobile_no;
                        var course = record.course;
                        var sub_course = record.sub_course;

                        var rowHtml = '<tr>';
                        rowHtml += '<td>' + fullName + '</td>';
                        rowHtml += '<td>' + email + '</td>';
                        rowHtml += '<td>' + mobileNumber + '</td>';
                        rowHtml += '<td>' + course + '</td>';
                        rowHtml += '<td>' + sub_course + '</td>';
                        rowHtml += '</tr>';

                        $('#recordsBody').append(rowHtml);
                    });

                    var facultyDropdownHtml =
                        '<div class="col-md-12 mt-3" id="facultySelectionDropdown">';
                    facultyDropdownHtml += '<label for="faculty">Select Faculty:</label>';
                    facultyDropdownHtml += '<select id="faculty" class="form-control">';

                    $.each(response.facultyData, function(index, faculty) {
                        facultyDropdownHtml += '<option value="' + faculty.id + '">' +
                            faculty.full_name + '</option>';
                    });

                    facultyDropdownHtml += '</select>';
                    facultyDropdownHtml += '</div>';

                    $('#facultySelectionDropdown').html(facultyDropdownHtml);

                    $('.group-records').show();
                    $('#facultySelectionDropdown').show();

                    if (response.stdent_list.length > 0 && response.stdent_list[0].Assign_Techer_id !== null) {
                        $('#changefb').show();
                        $('#assignfb').hide();
                        // Show the date option when the assign button is clicked
                        $('#selectedDateContainer').hide();
                    } else {
                        $('#changefb').hide();
                        $('#assignfb').show();
                        // Hide the date option when the change button is clicked
                        $('#selectedDateContainer').show();
                    }
                    $(document).on('click', '.changef', function() {
                        var selectedFacultyId = $('#facultySelectionDropdown select').val();
                        // Pass the date only when the assign button is not visible
                        var selectedDate = $('#assignfb').is(':visible') ? $('#selectedDate').val() : null;
                        postFacultyData(selectedFacultyId, group, selectedDate);
                    });
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }

        function postFacultyData(facultyId, groupName) {
            var selectedDate = $('#selectedDate').val(); // Get the selected date

            $.ajax({
                url: '<?= site_url('AssignFacultyToGroup') ?>',
                type: 'POST',
                data: {
                    faculty_id: facultyId,
                    group_name: groupName,
                    selected_date: selectedDate // Add the selected date to the data
                },
                success: function(response) {
                    console.log('Data posted successfully');
                    alert('Faculty assigned successfully!');
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                },
                error: function(error) {
                    console.error('Error posting data:', error);
                }
            });
        }
    });
</script>



<script>
    $(document).ready(function() {
        $('#searchForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(data) {
                    updateFacultyVideos(data);
                },
                error: function(xhr, status, error) {
                    console.error('AJAX request failed:', status, error);
                }
            });
        });

        function formatVideoDate(dateString) {
            // Parse the input date string
            var date = new Date(dateString);

            // Get day, month, and year
            var day = date.getDate();
            var month = date.toLocaleString('en-US', {
                month: 'short'
            });
            var year = date.getFullYear();

            // Create the custom format "dd Mmm yyyy"
            var customFormat = day + ' ' + month + ' ' + year;

            return customFormat;
        }

        function updateFacultyVideos(data) {
            $.each(data, function(index, faculty) {
                var base_url = '<?= base_url() ?>';
                var ribbonColor = '#ff0000'; // You might want to set an appropriate color

                var videoHTML = `
            <div class="col-sm-3 mt-3">
                <video width="100%" height="200px" controls poster="<?= base_url('public/images/play.jpg') ?>">
                    <source class="img-fluid" src="${base_url}/public/uploads/FacultyUplodedVideos/${faculty.video_name}" type="video/mp4">
                </video>
                <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon" style="background-color: ${ribbonColor}; text-lg">
                        <p class="card-text" style="color: #fff; background-color: ${ribbonColor}">${faculty.student_name}</p>
                    </div>
                    <div class="ribbon" style="background-color: ${ribbonColor}; text-lg">
                        <p class="card-text" style="color: #fff; background-color: ${ribbonColor}">${faculty.student_name}</p>
                    </div>
                </div>
                <div class="p">
                    <p class="card-text" style="padding: 6%; color: #fff; background-color: ${ribbonColor}">
                        Faculty Name: ${faculty.faculty_name} <br>
                        Date: ${formatVideoDate(faculty.DateTime)}
                    </p>
                </div>
            </div>
        `;

                container.append(videoHTML);
            });
        }

    });



    function postFacultyData(facultyId, groupName) {
        var selectedDate = $('#selectedDate').val(); // Get the selected date

        $.ajax({
            url: '<?= site_url('AssignFacultyToGroup') ?>',
            type: 'POST',
            data: {
                faculty_id: facultyId,
                group_name: groupName,
                selected_date: selectedDate // Add the selected date to the data
            },
            success: function(response) {
                console.log('Data posted successfully');
                alert('Faculty assigned successfully!');
                setTimeout(function() {
                    location.reload();
                }, 1000);
            },
            error: function(error) {
                console.error('Error posting data:', error);
            }
        });
    }
</script>


<script>
    $(document).ready(function() {
        $('#courses_id_g').on('change', function() {
            var countryId = $(this).val();
            console.log(countryId)
            if (countryId) {
                $.ajax({
                    url: '<?= base_url(); ?>get_sub_courses_data',
                    type: 'POST',
                    data: {
                        courses_id_g: countryId
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#sub_courses_id_g').empty();
                        $('#sub_courses_id_g').append('<option value="">Please select sub Courses</option>');
                        $.each(data, function(key, value) {
                            $('#sub_courses_id_g').append('<option value="' + value.id + '">' + value.sub_courses_name + '</option>');
                        });

                        // Retrieve the selected state ID from the hidden input field
                        var selectedStateId = $('#selected_sub_courses_id_g').val();

                        // Select the state in the dropdown
                        $('#sub_courses_id_g').val(selectedStateId);
                    }
                });
            } else {
                $('#sub_courses_id_g').empty();
                $('#sub_courses_id_g').append('<option value="">Please Select State</option>');
            }
        });

        // Trigger change event on #courses_id_g
        $('#courses_id_g').trigger('change');
    });
</script>


<script>
    $(document).ready(function() {
        $('#sub_courses_id_g').on('change', function() {
            function loadStudentData() {
                var subcoursesID = $('#sub_courses_id_g').val();
                var courses_id_g = $('#courses_id_g').val();

                $.ajax({
                    url: '<?= base_url(); ?>get_student_data',
                    type: 'POST',
                    data: {
                        sub_courses_id_g: subcoursesID,
                        courses_id_g: courses_id_g,
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#student_id').empty();
                        $.each(data, function(key, value) {
                            $('#student_id').append('<option value="' + value.id + '">' + value.full_name +' - ' + value.SessionsCount + ' Session '+'</option>');
                        });

                        // Retrieve the selected student IDs from the hidden input field
                        var selectedStudentIds = $('#selected_student_id').val();

                        // Convert the comma-separated string to an array of integers
                        var selectedIdsArray = selectedStudentIds.split(',').map(Number);

                        // Initialize Select2 and set the selected values
                        $('#student_id').select2();
                        $('#student_id').val(selectedIdsArray).trigger('change');
                    }
                });
            }

            // Function to load faculty data
            // function loadFacultyData() {
            //     var subcoursesID = $('#sub_courses_id_g').val();
            //     var courses_id_g = $('#courses_id_g').val();



            //     $.ajax({
            //         url: '<?= base_url(); ?>get_faculty_data',
            //         type: 'POST',
            //         data: {
            //             sub_courses_id_g: subcoursesID,
            //             courses_id_g: courses_id_g,
            //         },
            //         dataType: 'json',

            //         success: function(data) {
            //             $('#faculty_id_g').empty();
            //             $('#faculty_id_g').append('<option value="">Please select faculty</option>');
            //             $.each(data, function(key, value) {
            //                 $('#faculty_id_g').append('<option value="' + value.faculty_id + '">' + value.name + '</option>');
            //             });

            //             // Retrieve the selected faculty ID from the hidden input field
            //             var selectedFacultyId = $('#selected_faculty_id').val();

            //             // Select the faculty in the dropdown
            //             $('#faculty_id_g').val(selectedFacultyId);
            //         }
            //     });
            }

            // Use setTimeout to ensure that the document is fully loaded before trying to load student and faculty data
            setTimeout(function() {
                loadStudentData();
                loadFacultyData();
            }, 1000);

            // Event listener for change on #sub_courses_id_g
            $('#sub_courses_id_g').on('change', function() {
                loadStudentData();
            });
        });

    });
</script>

<script>
    $(document).ready(function() {
        // Get the current date in 'YYYY-MM-DD' format
        var currentDate = new Date().toISOString().split('T')[0];

        // Set the minimum date for create_group_date input
        $('#create_group_date').attr('min', currentDate);

        // Set the minimum date for session_start_date input
        $('#session_start_date').attr('min', currentDate);

        $('.Session_Start_Date').attr('min', currentDate);

        $('#notification_date').attr('min', currentDate)

    });
</script>


<script>
    $(document).ready(function() {
        $.validator.addMethod('minSelected', function(value, element, min) {
            return $(element).find('option:selected').length >= min;
        }, 'Please select at least {0} options.');

        $('#create_group_form').validate({
            rules: {
                courses_id_g: {
                    required: true,
                    min: 1, // Assuming that course IDs start from 1. Adjust if needed.

                },
                sub_courses_id_g: {
                    required: true,
                    min: 1, // Assuming that course IDs start from 1. Adjust if needed.


                },
                'student_id[]': {
                    required: true,
                    minSelected: 1 // Adjust the minimum number of selected options as needed
                },
                group_name: {
                    required: true,
                },

                faculty_id_g: {
                    required: true,
                    min: 1, // Assuming that course IDs start from 1. Adjust if needed.

                },
                session_start_date: {
                    required: true,
                }
            },
            messages: {
                courses_id_g: {
                    required: 'Please select courses.',
                    min: 'Please select courses.',

                },
                sub_courses_id_g: {
                    required: 'Please select sub courses.',
                    min: 'Please select sub courses.',
                },
                'student_id[]': {
                    required: 'Please select at least one student.',
                    minSelected: 'Please select at least one student.'
                },
                group_name: {
                    required: "Enter group name.",
                },

                faculty_id_g: {
                    required: 'Please select faculty.',
                    min: 'Please select faculty.',

                },
                session_start_date: {
                    required: 'Please select date.',
                }
            },




        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#faculty_id_g').on('change', function() {
            var facultyidg = $(this).val();
            var allDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

            console.log(facultyidg);
            if (facultyidg) {
                $.ajax({
                    url: '<?= base_url(); ?>get_shedule_data',
                    type: 'POST',
                    data: {
                        faculty_id_g: facultyidg
                    },
                    dataType: 'json',
                    success: function(data) {
                        // Clear existing checkboxes
                        $('.form-check').remove();

                        // Extract all unique days from the data
                        var allUniqueDays = [...new Set(data.map(item => item.days))];

                        // Generate checkboxes for all possible days
                        $.each(allDays, function(index, day) {
                            var isChecked = data.some(item => item.days === day);
                            var disabled = isChecked ? '' : 'disabled';

                            var checkboxHtml = `
                                <div class="form-check col-md-6">
                                    <input type="radio" class="form-check-input days" name="days[]" value="${day}" ${isChecked ? '' : ''} ${disabled}>
                                    <label class="form-check-label" for="days">${day}</label>
                                </div>
                            `;
                            $('.checkboxdays').append(checkboxHtml);
                        });
                    }

                });
            } else {
                // Clear existing checkboxes if faculty_id_g is not selected
                $('.form-check').remove();
            }



        });


        $('.checkboxdays').on('change', '.days', function() {
            var selectedDays = [];

            var selectedDays = $('.days:checked').map(function() {
                return this.value;
            }).get();
            fetchData(selectedDays);

        });

        // Trigger change event on #faculty_id_g
        $('#faculty_id_g').trigger('change');


        function fetchData(selectedDays) {
            // resetDropdownAndFetchData();

            var addedTimeSlots = [];
            var facultyidg = $('#faculty_id_g').val();
            // alert(selectedDays);

            // alert(facultyidg);
            $.ajax({
                url: '<?= base_url(); ?>get_shedule_data_for_group',
                type: 'POST',
                data: {
                    selectedDays: selectedDays,
                    facultyidg: facultyidg,
                },
                dataType: 'json',

                success: function(data) {
                    $('#shedule').empty();

                    if (!Array.isArray(data)) {
                        data = [data];
                    }

                    $.each(data, function(key, value) {
                        var startTime = value.start_time;
                        var endTime = value.end_time;

                        var slots = createOneHourTimeSlots(startTime, endTime);

                        // console.log(slots);
                        $.each(slots, function(index, slot) {
                            if (!addedTimeSlots.includes(slot)) {
                                $('#shedule').append('<option value="' + slot + '">' + slot + '</option>');
                                addedTimeSlots.push(slot);
                            }
                        });
                    });

                    // var selectedStateId = $('#selected_shedules_time').val();
                    // $('#shedules_time').val(selectedStateId);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                }
            });
        }

        function createOneHourTimeSlots(startTime, endTime) {
            var slots = [];
            var currentSlot = startTime;

            while (currentSlot < endTime) {
                var slot = currentSlot + ' - ' + addOneHour(currentSlot);
                slots.push(slot);
                currentSlot = addOneHour(currentSlot);
            }

            return slots;
        }

        function addOneHour(time) {
            var parts = time.split(':');
            var hours = parseInt(parts[0], 10);
            var minutes = parseInt(parts[1], 10);

            // Add one hour
            hours += 1;

            // Format to 'HH:mm:ss'
            return pad(hours) + ':' + pad(minutes) + ':00';
        }

        function pad(number) {
            return (number < 10 ? '0' : '') + number;
        }



    });

    function formatTime(timeString) {
        var timeParts = timeString.split(':');
        var hours = timeParts[0];
        var minutes = timeParts[1];

        return hours + ':' + minutes;
    }

    function resetDropdownAndFetchData() {
        $('#shedule').empty();
        $('#shedule').append('<option value="">Please select time</option>');
        addedTimeSlots = []; // Reset added time slots
        fetchData(selectedDays);
    }
</script>

<script>
    $(document).ready(function() {
        $('.open-modal').on('click', function() {
            var button = $(this);
            var modal = $('#modal-default-' + button.data('row-id'));

            // Set values in the modal
            modal.find('#modal-id').val(button.data('row-id'));
            modal.find('#modal-faculty-id').val(button.data('faculty-id'));
            modal.find('#modal-shedule').val(button.data('schedule'));
            modal.find('#modal-group-name').val(button.data('group-name'));
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.open-modal').on('click', function() {
            var button = $(this);
            var modal = $('#modal-default1-' + button.data('row-id1'));

            // Set values in the modal
            modal.find('#modal-id1').val(button.data('row-id1'));
            modal.find('#modal-faculty-id1').val(button.data('faculty-id1'));
            modal.find('#modal-shedule1').val(button.data('schedule1'));
            modal.find('#modal-group-name1').val(button.data('group-name1'));
        });
    });
</script>
<script>
    function validatePasswordOnInput() {
        var passwordInput = document.getElementById('passwordInput');
        var password = passwordInput.value;
        var passwordPattern = /^(?=.*[A-Z])(?=.*[!@#$%^&*(),.?\":{}|<>]).{8,}$/;
        var passwordError = document.getElementById('passwordError');
        if (!passwordPattern.test(password)) {
            passwordError.textContent = "Password must contain at least one uppercase letter, one lowercase letter, one number,  one symbol , and be at least 8 characters long";
        } else {
            passwordError.textContent = '';
        }
    }

    function validatePassword() {
        validatePasswordOnInput();
        return document.getElementById('passwordError').textContent === '';
    }
</script>
<script>
    $(document).ready(function() {
        function updateEndDateState() {
            var start_date_value = $('.start_date').val();

        }

        var currentDate = new Date();
        var tomorrowDate = new Date(currentDate);
        tomorrowDate.setDate(currentDate.getDate() + 1);
        var start_date_formatted = tomorrowDate.toISOString().split('T')[0];
        $('.start_date').val(start_date_formatted);

        var lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

        var month = (currentDate.getMonth() + 1).toString().padStart(2, '0');

        var end_date_formatted = currentDate.getFullYear() + '-' + month + '-' + lastDayOfMonth;


        $('.end_date').val(end_date_formatted);

        $('.start_date').attr('min', start_date_formatted);

        updateEndDateState();

        $('.start_date').on('change', function() {
            updateEndDateState();
        });
    });
</script>

<!-- 
<script>
    $(document).ready(function() {
        $('#email').on('input', function() {
            var username = $(this).val();
            // alert(username);

            $.ajax({
                type: 'POST',
                url: 'http://localhost/enatyam//chechk_username_id',
                data: {
                    username: username
                },
                success: function(response) {
                    if (response == 'false') {
                        $('#emailError').text('');
                        $('.submitButton').prop('disabled', false);

                    } else if (response == 'true') {
                        $('#emailError').text('This email is already available.');
                        $('.submitButton').prop('disabled', true);
                    }
                }
            });
        });
    });
</script> -->



<script>
    $(document).ready(function() {
        $('#group_name').on('input', function() {
            var group_name = $(this).val();
            // alert(username);

            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>check_group_name',
                data: {
                    group_name: group_name
                },
                success: function(response) {
                    console.log(response);
                    if (response == 'false') {

                        $('#group_namerror').text('');

                        $('.submitButton').prop('disabled', false);

                    } else if (response == 'true') {
                        $('#group_namerror').text('This group name is already available.');

                        $('.submitButton').prop('disabled', true);
                    }
                }
            });
        });
    });
</script>

<script>
    // $(document).ready(function() {
    //     $('#courses_id_n').on('change', function() {
    //         var countryId = $(this).val();
    //         console.log(countryId)
    //         if (countryId) {
    //             $.ajax({
    //                 url: '<?= base_url(); ?>get_sub_courses_data',
    //                 type: 'POST',
    //                 data: {
    //                     courses_id_g : countryId
    //                 },
    //                 dataType: 'json',
    //                 success: function(data) {
    //                     $('#sub_courses_id_n').empty();
    //                     $('#sub_courses_id_n').append('<option value="">Please select sub Courses</option>');
    //                     $.each(data, function(key, value) {
    //                         $('#sub_courses_id_n').append('<option value="' + value.id + '">' + value.sub_courses_name + '</option>');
    //                     });

    //                     // Retrieve the selected state ID from the hidden input field
    //                     var selectedStateId = $('#selected_sub_courses_id_n').val();

    //                     // Select the state in the dropdown
    //                     $('#sub_courses_id_n').val(selectedStateId);
    //                 }
    //             });
    //         } else {
    //             $('#sub_courses_id_n').empty();
    //             $('#sub_courses_id_n').append('<option value="">Please Select State</option>');
    //         }
    //     });

    //     // Trigger change event on #courses_id_g
    //     $('#courses_id_n').trigger('change');
    // });
</script>
<script>
    // $(document).ready(function() {
    //     $('#sub_courses_id_n').on('change', function() {
    //         function loadStudentData() {
    //             var subcoursesID = $('#sub_courses_id_n').val();
    //             var courses_id_g = $('#courses_id_n').val();

    //             $.ajax({
    //                 url: '<?= base_url(); ?>get_student_data',
    //                 type: 'POST',
    //                 data: {
    //                     sub_courses_id_g: subcoursesID,
    //                     courses_id_g: courses_id_g,
    //                 },
    //                 dataType: 'json',
    //                 success: function(data) {
    //                     $('#student_id').empty();
    //                     $('#student_checkbox_list').empty();
    //             $.each(data, function(key, value) {
    //                 $('#student_checkbox_list').append('<div class="form-check">' +
    //                     '<input class="form-check-input" type="checkbox" value="' + value.id + '" name="student_id[]"' +
    //                     (value.selected ? 'checked' : '') + '>' +
    //                     '<label class="form-check-label" for="student' + value.id + '">' +
    //                     value.full_name +
    //                     '</label>' +
    //                     '</div>');
    //             });
    //                     // Retrieve the selected student IDs from the hidden input field
    //                     var selectedStudentIds = $('#selected_student_id').val();

    //                     // Convert the comma-separated string to an array of integers
    //                     var selectedIdsArray = selectedStudentIds.split(',').map(Number);

    //                     // Initialize Select2 and set the selected values
    //                     $('#student_id').select2();
    //                     $('#student_id').val(selectedIdsArray).trigger('change');
    //                 }
    //             });
    //         }

       

    //         // Use setTimeout to ensure that the document is fully loaded before trying to load student and faculty data
    //         setTimeout(function() {
    //             loadStudentData();
                
    //         }, 1000);

    //         // Event listener for change on #sub_courses_id_g
    //         $('#sub_courses_id_n').on('change', function() {
    //             loadStudentData();
    //         });
    //     });

    // });

    // $(document).ready(function() {
    //     $('#sub_courses_id_n').on('change', function() {
    //         function loadStudentData() {
    //             var subcoursesID = $('#sub_courses_id_g').val();
    //             var courses_id_n = $('#courses_id_n').val();

    //             $.ajax({
    //                 url: '<?= base_url(); ?>get_student_data',
    //                 type: 'POST',
    //                 data: {
    //                     sub_courses_id_n: subcoursesID,
    //                     courses_id_n: courses_id_n,
    //                 },
    //                 dataType: 'json',
    //                 success: function(data) {
    //                     console.log(data);
    //                     $('#student_id').empty();
    //                     $.each(data, function(key, value) {
    //                         $('#student_id').append('<option value="' + value.id + '">' + value.full_name + '</option>');
    //                     });

    //                     // Retrieve the selected student IDs from the hidden input field
    //                     var selectedStudentIds = $('#selected_student_id').val();

    //                     // Convert the comma-separated string to an array of integers
    //                     var selectedIdsArray = selectedStudentIds.split(',').map(Number);

    //                     // Initialize Select2 and set the selected values
    //                     $('#student_id').select2();
    //                     $('#student_id').val(selectedIdsArray).trigger('change');
    //                 }
    //             });
    //         }

    //         // Function to load faculty data
    //         // function loadFacultyData() {
    //         //     var subcoursesID = $('#sub_courses_id_n').val();
    //         //     var courses_id_g = $('#courses_id_n').val();



    //         //     $.ajax({
    //         //         url: '<?= base_url(); ?>get_faculty_data',
    //         //         type: 'POST',
    //         //         data: {
    //         //             sub_courses_id_n: subcoursesID,
    //         //             courses_id_n: courses_id_n,
    //         //         },
    //         //         dataType: 'json',

    //         //         success: function(data) {
    //         //             $('#faculty_id_n').empty();
    //         //             $('#faculty_id_n').append('<option value="">Please select faculty</option>');
    //         //             $.each(data, function(key, value) {
    //         //                 $('#faculty_id_n').append('<option value="' + value.faculty_id + '">' + value.name + '</option>');
    //         //             });

    //         //             // Retrieve the selected faculty ID from the hidden input field
    //         //             var selectedFacultyId = $('#selected_faculty_id').val();

    //         //             // Select the faculty in the dropdown
    //         //             $('#faculty_id_n').val(selectedFacultyId);
    //         //         }
    //         //     });
    //         // }

    //         // Use setTimeout to ensure that the document is fully loaded before trying to load student and faculty data
    //         // setTimeout(function() {
    //         //     loadStudentData();
    //         //     loadFacultyData();
    //         // }, 1000);

    //         // Event listener for change on #sub_courses_id_g
    //         $('#sub_courses_id_n').on('change', function() {
    //             loadStudentData();
    //         });
    //     });

    // });
</script>

<script>
    $(document).ready(function() {
        $('#courses_id_n').on('change', function() {
            var countryId = $(this).val();
            console.log(countryId)
            if (countryId) {
                $.ajax({
                    url: '<?= base_url(); ?>get_sub_courses_data',
                    type: 'POST',
                    data: {
                        courses_id_g: countryId
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log("resoponse");
                        console.log(data);
                        $('#sub_courses_id_n').empty();
                        $('#sub_courses_id_n').append('<option value="">Please select sub Courses</option>');
                        $.each(data, function(key, value) {
                            $('#sub_courses_id_n').append('<option value="' + value.id + '">' + value.sub_courses_name + '</option>');
                        });

                        // Retrieve the selected state ID from the hidden input field
                        var selectedStateId = $('#selected_sub_courses_id_n').val();
                        console.log("resoponse11");
                        console.log(selectedStateId);    
                        // Select the state in the dropdown
                        $('#sub_courses_id_n').val(selectedStateId);
                    }
                });
            } else {
                $('#sub_courses_id_n').empty();
                $('#sub_courses_id_n').append('<option value="">Please Select State</option>');
            }
        });

        // Trigger change event on #courses_id_n
        $('#courses_id_n').trigger('change');
    });
</script>

<script>
    $(document).ready(function() {
        $('#sub_courses_id_n').on('change', function() {
            function loadStudentData() {
                var subcoursesID = $('#sub_courses_id_n').val();
                var courses_id_n = $('#courses_id_n').val();
                $('.checbox').show();

                $.ajax({
                    url: '<?= base_url(); ?>get_student_data',
                    type: 'POST',
                    data: {
                        sub_courses_id_g: subcoursesID,
                        courses_id_g: courses_id_n,
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#student_id_n').empty();
                        $.each(data, function(key, value) {
                            $('#student_id_n').append('<input type="checkbox" class="student_checkbox" name="student_ids[]" value="' + value.id + '"> ' + value.full_name + '<br>');
                        });

                        // Retrieve the selected student IDs from the hidden input field
                        var selectedStudentIds = $('#selected_student_id').val();
                        console.log(selectedStudentIds);

                        // Convert the comma-separated string to an array of integers
                        var selectedIdsArray = selectedStudentIds.split(',').map(Number);

                        // Set the checkboxes to checked based on the selected student IDs
                        $('#student_id_n input[type="checkbox"]').each(function() {
                            if ($.inArray(parseInt($(this).val()), selectedIdsArray) !== -1) {
                                $(this).prop('checked', true);
                            }
                        });
                    }
                });
            }

            function loadFacultyData() {
                var subcoursesID = $('#sub_courses_id_n').val();
                var courses_id_n = $('#courses_id_n').val();

                $.ajax({
                    url: '<?= base_url(); ?>get_faculty_data',
                    type: 'POST',
                    data: {
                        sub_courses_id_g: subcoursesID,
                        courses_id_g: courses_id_n,
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#faculty_id_n').empty();
                        $.each(data, function(key, value) {
                            $('#faculty_id_n').append('<input type="checkbox" class="faculty_checkbox" name="faculty_ids[]" value="' + value.faculty_id + '"> ' + value.name + '<br>');
                        });

                        // Retrieve the selected faculty IDs from the hidden input field
                        var selectedFacultyIds = $('#selected_faculty_id').val();
                        console.log(selectedFacultyIds);
                        // Convert the comma-separated string to an array of integers
                        var selectedIdsArray = selectedFacultyIds.split(',').map(Number);

                        // Set the checkboxes to checked based on the selected faculty IDs
                        $('#faculty_id_n input[type="checkbox"]').each(function() {
                            if ($.inArray(parseInt($(this).val()), selectedIdsArray) !== -1) {
                                $(this).prop('checked', true);
                            }
                        });
                    }
                });
            }

            // Use setTimeout to ensure that the document is fully loaded before trying to load student and faculty data
            setTimeout(function() {
                loadStudentData();
                loadFacultyData();
            }, 1000);

            // Event listener for change on #sub_courses_id_n
            $('#sub_courses_id_n').on('change', function() {
                loadStudentData();
                loadFacultyData();
            });
        });

        // Select all students checkbox
        $('#select_all_students').on('change', function() {
            $('.student_checkbox').prop('checked', $(this).prop('checked'));
        });

        // Select all faculty checkbox
        $('#select_all_faculty').on('change', function() {
            $('.faculty_checkbox').prop('checked', $(this).prop('checked'));
        });

        // Event listener for individual student checkboxes
        $(document).on('change', '.student_checkbox', function() {
            if (!$(this).prop('checked')) {
                $('#select_all_students').prop('checked', false);
            }
        });

        // Event listener for individual faculty checkboxes
        $(document).on('change', '.faculty_checkbox', function() {
            if (!$(this).prop('checked')) {
                $('#select_all_faculty').prop('checked', false);
            }
        });
    });
</script>










</body>

</html>