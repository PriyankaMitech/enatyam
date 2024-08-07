var options = {
  key: "rzp_test_Ctoq9lGccMcZwj",
  amount: 100,
  name: "RazorPay Infovistar",
  description: "Order # ABC-.date('YmdHis')",
  netbanking: true,
  currency: "INR", // INR
  prefill: {
    name: "Test",
    email: "tests",
    contact: "7977878878",
  },
  notes: {
    soolegal_order_id: "1234",
  },
  handler: function (transaction) {
    document.getElementById("razorpay_payment_id").value =
      transaction.razorpay_payment_id;
    document.getElementById("razorpay-form").submit();
  },
  modal: {
    ondismiss: function () {
      location.reload();
    },
  },
};

var razorpay_pay_btn, instance;
function razorpaySubmit(el) {
  if (typeof Razorpay == "undefined") {
    setTimeout(razorpaySubmit, 200);
    if (!razorpay_pay_btn && el) {
      razorpay_pay_btn = el;
      el.disabled = true;
      el.value = "Please wait...";
    }
  } else {
    if (!instance) {
      instance = new Razorpay(options);
      if (razorpay_pay_btn) {
        razorpay_pay_btn.disabled = false;
        razorpay_pay_btn.value = "Pay Now";
      }
    }
    instance.open();
  }
}

// $(document).ready(function () {
//   $("#msgsend").click(function () {
//     var formdata = $("#chatform").serialize();
//     // console.log(formdata);
//     console.log($(".chatmsg").text());
//     if (formdata) {
//       $.ajax({
//         url: "http://localhost/enatyam/insertChat", // Make sure this URL matches your CodeIgniter route
//         type: "POST",
//         data: formdata,
//         dataType: "JSON",
//         success: function (response) {
//           console.log(response);
//           $("#chatform").trigger("reset");
//           var html =
//             '<div class="direct-chat-msg right"><div class="direct-chat-infos clearfix"><span class="direct-chat-name float-right"></span><span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span></div><img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image"><div class="direct-chat-text">' +
//             response.getdata.message +
//             "</div></div>";
//           $(".direct-chat-messages").append(html);
//           // Trigger page refresh after successful message insertion
//           location.reload();
//         },
//       });
//     }
//   });
$(document).ready(function () {
  $("#msgsend").click(function () {
    sendMessage();
  });

  $(".chatmsg").keypress(function (event) {
    if (event.which === 13) {
      // Check if Enter key is pressed (Enter key has keycode 13)
      event.preventDefault(); // Prevent default form submission behavior
      sendMessage();
    }
  });

  function sendMessage() {
    var messageInput = $(".chatmsg").val().trim(); // Get the message and remove leading/trailing whitespace
    if (messageInput !== "") {
      // Check if the message is not empty
      var formdata = $("#chatform").serialize();
      if (formdata) {
        $.ajax({
          url: "http://localhost/enatyam/insertChat",
          type: "POST",
          data: formdata,
          dataType: "JSON",
          success: function (response) {
            console.log(response);
            $("#chatform").trigger("reset");
            var html =
              '<div class="direct-chat-msg right"><div class="direct-chat-infos clearfix"><span class="direct-chat-name float-right"></span><span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span></div><img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image"><div class="direct-chat-text">' +
              response.getdata.message +
              "</div></div>";
            $(".direct-chat-messages").append(html);
            // Trigger page refresh after successful message insertion
            location.reload();
          },
        });
      }
    }
  }

  var SELECTOR_DIRECT_CHAT = ".direct-chat";
  var CLASS_NAME_DIRECT_CHAT_OPEN = "direct-chat-contacts-open";
  $(".chatopen").click(function () {
    $(SELECTOR_DIRECT_CHAT).toggleClass(CLASS_NAME_DIRECT_CHAT_OPEN);
  });

  $("#rate").click(function () {
    var formData = $("#feedbackform").serialize();
    var review_message = $("#review_message").val();
    $("#feedbackform .error").hide();
    if (review_message == "") {
      $("#review_message")
        .after('<span class="error">Write something </span>')
        .focus();
      return false;
    }
    $.ajax({
      type: "POST",
      url: "savefeedback",
      data: formData,
      dataType: "JSON",
      success: function (response) {
        $("#feedbackform").trigger("reset");
        location.reload(true);
        // swal.fire("Success", "Feedback submitted!", "succcess");
      },
      error: function (response) {
        console.log(response);
      },
    });
  });

  $("#courses").on("change", function () {
    var countryId = $(this).val();

    if (countryId) {
      $.ajax({
        type: "POST",
        url: "get_sub_courses_data",
        data: { courses_id_g: countryId },
        dataType: "json",
        success: function (data) {
          $("#sub_courses").empty();
          $("#sub_courses").append(
            '<option value="">Please select sub Courses</option>'
          );
          $.each(data, function (key, value) {
            $("#sub_courses").append(
              '<option value="' +
                value.id +
                '">' +
                value.sub_courses_name +
                "</option>"
            );
          });

          // Retrieve the selected state ID from the hidden input field
          var selectedStateId = $("#selected_sub_courses").val();

          // Select the state in the dropdown
          $("#sub_courses").val(selectedStateId);
        },
      });
    } else {
      $("#sub_courses").empty();
      $("#sub_courses").append('<option value="">Please Select State</option>');
    }
  });

  $("#courses").trigger("change");

  $("#searchstudvideo, #searchfacvideo").click(function () {
    console.log("hggfgf");
    if ($(this).val() == "searchfacvideo") {
      var formdata = $("#searchForm").serialize();
      var sdate = $("#startDate").val();
      var edate = $("#endDate").val();
      var container = "#facultyVideosContainer";
    } else {
      var formdata = $("#studentVideoForm").serialize();
      var sdate = $("#studentVideoStartDate").val();
      var edate = $("#studentVideoEndDate").val();
      var container = "#studentVideosContainer";
    }

    if (edate <= sdate) {
      alert("End date should be greater than start date");
      $("#studentVideoEndDate").focus();
      return false;
    }
    // alert(formdata)
    if (formdata) {
      $.ajax({
        url: "http://localhost/enatyam/getSearchData",
        type: "POST",
        data: formdata,
        dataType: "JSON",
        success: function (response) {
          var searchdata = response.searchStudentData;
          var html = "";
          console.log(container);
          if (response.searchStudentData == "false") {
            $(container).html("No matching records found!");
          } else {
            $.each(searchdata, function (index, faculty) {
              console.log(faculty.student_name);
              html +=
                '<div class="col-sm-3 mt-3"><div class="position-relative videoofs"><video width="100%" height="200px" controls="" poster="http://localhost/enatyam/public/images/play.jpg"><source class="img-fluid" src="http://localhost/enatyam/public/uploads/videos/' +
                faculty.name +
                '" type="video/mp4"></video><div class="ribbon-wrapper ribbon-lg"><div class="ribbon" style="background-color: #d41d8c; text-lg"><p class="card-text" style="color:#fff; background-color: #d41d8c">' +
                faculty.Student_name +
                ' </p></div></div><div class="p"><p class="card-text" style="padding: 6%; color:#fff; background-color: #d41d8c">Date &nbsp; : &nbsp; ' +
                faculty.DateTime +
                "<br>  Faculty Name &nbsp; : &nbsp; " +
                faculty.faculty_name +
                "</p></div></div></div>";
              $(container).html(html);
            });
          }
        },
      });
    }
  });

  $(".rating").barrating({
    theme: "fontawesome-stars",
  });
});

var options = {
  key: "rzp_test_Ctoq9lGccMcZwj", // Enter the Key ID generated from the Dashboard
  amount: "1", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
  currency: "INR",
  name: "RazorPay Infovistar",
  description: "Test Transaction",
  image: "https://example.com/your_logo",
  order_id: "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
  // "handler": function (response){
  //     // alert(response.razorpay_payment_id);
  //     // alert(response.razorpay_order_id);
  //     // alert(response.razorpay_signature)
  // },
  callback_url: "https://eneqd3r9zrjok.x.pipedream.net/",
  prefill: {
    name: "Gaurav Kumar",
    email: "gaurav.kumar@example.com",
    contact: "9000090000",
  },
  notes: {
    address: "Razorpay Corporate Office",
  },
  theme: {
    color: "#3399cc",
  },
};
// var rzp1 = new Razorpay(options);
// rzp1.on('payment.failed', function (response){
//         // alert(response.error.code);
//         // alert(response.error.description);
//         // alert(response.error.source);
//         // alert(response.error.step);
//         // alert(response.error.reason);
//         // alert(response.error.metadata.order_id);
//         // alert(response.error.metadata.payment_id);
// });

$(document).ready(function () {
  // Function to update chat count
  function updateChatCount() {
    $.ajax({
      url: "http://localhost/enatyam/getChatCount", // URL to fetch chat count
      type: "GET",
      dataType: "json", // Expect JSON response
      success: function (response) {
        if (response.chat_count !== undefined) {
          $(".chatCounter").text(response.chat_count);
        } else {
          // Handle error or unauthorized access
          $(".chatCounter").text("Error: " + response.error);
        }
      },
      error: function (xhr, status, error) {
        console.error(status, error);
      },
    });
  }

  // Initial call to update chat count
  updateChatCount();

  // Set interval to update chat count every 5 seconds
  setInterval(updateChatCount, 5000);
});

$(document).ready(function () {
  // Function to update chat count
  function updatenotificationCount() {
    $.ajax({
      url: "http://localhost/enatyam/getnotificationCount", // URL to fetch chat count
      type: "GET",
      dataType: "json", // Expect JSON response
      success: function (response) {
        if (response.notification_count !== undefined) {
          $(".notificationCounter").text(response.notification_count);
        } else {
          // Handle error or unauthorized access
          $(".notificationCounter").text("Error: " + response.error);
        }
      },
      error: function (xhr, status, error) {
        console.error(status, error);
      },
    });
  }

  // Initial call to update chat count
  updatenotificationCount();

  // Set interval to update chat count every 5 seconds
  setInterval(updatenotificationCount, 5000);
});

$(document).ready(function () {
  // Function to update chat count
  function updatenotificationchatCount() {
    $.ajax({
      url: "http://localhost/enatyam/getnotificationchatCount", // URL to fetch chat count
      type: "GET",
      dataType: "json", // Expect JSON response
      success: function (response) {
        if (response.notificationchat_count !== undefined) {
          $(".notificationchatCounter").text(response.notificationchat_count);
        } else {
          // Handle error or unauthorized access
          $(".notificationchatCounter").text("Error: " + response.error);
        }
      },
      error: function (xhr, status, error) {
        console.error(status, error);
      },
    });
  }

  // Initial call to update chat count
  updatenotificationchatCount();

  // Set interval to update chat count every 5 seconds
  setInterval(updatenotificationchatCount, 5000);
});

$(document).ready(function () {
  // Function to update Student count
  function updatnewStudentCount() {
    $.ajax({
      url: "http://localhost/enatyam/getNewStudentCount", // URL to fetch Student count
      type: "GET",
      dataType: "json", // Expect JSON response
      success: function (response) {
        if (response.newStudentCount !== undefined) {
          $(".newStudentCounter").text(response.newStudentCount);
        } else {
          // Handle error or unauthorized access
          $(".newStudentCounter").text("Error: " + response.error);
        }
      },
      error: function (xhr, status, error) {
        console.error(status, error);
      },
    });
  }

  // Initial call to update Student count
  updatnewStudentCount();

  // Set interval to update Student count every 5 seconds
  setInterval(updatnewStudentCount, 5000);
});

$(document).ready(function () {
  // Function to update Faculty count
  function updatnewFacultyCount() {
    $.ajax({
      url: "http://localhost/enatyam/getNewFacultyCount", // URL to fetch Faculty count
      type: "GET",
      dataType: "json", // Expect JSON response
      success: function (response) {
        if (response.newFacultyCount !== undefined) {
          $(".newFacultyCounter").text(response.newFacultyCount);
        } else {
          // Handle error or unauthorized access
          $(".newFacultyCounter").text("Error: " + response.error);
        }
      },
      error: function (xhr, status, error) {
        console.error(status, error);
      },
    });
  }

  // Initial call to update Faculty count
  updatnewFacultyCount();

  // Set interval to update Faculty count every 5 seconds
  setInterval(updatnewFacultyCount, 5000);
});

$(document).ready(function () {
  function updateFacultyNotifications() {
    $.ajax({
      url: "http://localhost/enatyam/getNewFacultyNotifications", // URL to fetch new faculty notifications
      type: "GET",
      dataType: "json", // Expect JSON response
      success: function (response) {
        // Clear existing notifications
        $(".facultyNotifications").empty();

        // Append new faculty notifications
        if (
          response.facultyNotifications !== undefined &&
          response.facultyNotifications.length > 0
        ) {
          response.facultyNotifications.forEach(function (notification) {
            $(".facultyNotifications").append(`
            <a href="http://localhost/enatyam/NewFacultyApplication" class="dropdown-item">
              <i class="fas fa-users mr-2"></i>${notification.nname} - Faculty
            </a>
            <div class="dropdown-divider"></div>
          `);
          });
        }
      },
      error: function (xhr, status, error) {
        console.error(status, error);
      },
    });
  }

  updateFacultyNotifications();

  // Set interval to update Faculty count every 5 seconds
  setInterval(updateFacultyNotifications, 5000);
});

$(document).ready(function () {
  function updateStudentNotifications() {
    $.ajax({
      url: "http://localhost/enatyam/getNewStudentNotifications", // URL to fetch new student notifications
      type: "GET",
      dataType: "json", // Expect JSON response
      success: function (response) {
        // Clear existing notifications
        $(".studentNotifications").empty();

        // Append new student notifications
        if (
          response.studentNotifications !== undefined &&
          response.studentNotifications.length > 0
        ) {
          response.studentNotifications.forEach(function (notification) {
            $(".studentNotifications").append(`
            <a href="http://localhost/enatyam/studentProfiledata" class="dropdown-item">
              <i class="fas fa-users mr-2"></i>${notification.nname} - Student
            </a>
            <div class="dropdown-divider"></div>
          `);
          });
        }
      },
      error: function (xhr, status, error) {
        console.error(status, error);
      },
    });
  }

  updateStudentNotifications();

  // Set interval to update Faculty count every 5 seconds
  setInterval(updateStudentNotifications, 5000);
});

$(document).ready(function () {
  // Function to update notifications
  function updateNotifications() {
    $.ajax({
      url: "http://localhost/enatyam/updateNotifications", // URL to fetch new notifications
      type: "GET",
      dataType: "json", // Expect JSON response
      success: function (response) {
        // Clear existing notifications
        $(".notification-scroll").empty();

        // Append new notifications
        if (
          response.newNotifications !== undefined &&
          response.newNotifications.length > 0
        ) {
          response.newNotifications.forEach(function (notification) {
            $(".notification-scroll").append(`
                          <!-- Your HTML template for displaying a notification -->
                          <a href="http://localhost/enatyam/notification" class="dropdown-item view-notification">
                              <!-- Message Start -->
                              <div class="media">
                                  <img src="http://localhost/enatyam/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                  <div class="media-body">
                                      <h3 class="dropdown-item-title">
                                          ${notification.full_name}
                                          <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                      </h3>
                                      <p class="text-sm">
                                          ${notification.notification_description}
                                      </p>
                                      <p class="text-sm text-muted">
                                          ${notification.timestamp}
                                      </p>
                                  </div>
                              </div>
                              <!-- Message End -->
                          </a>
                      `);
          });
        } else {
          // If no new notifications, display a message
          $(".notification-scroll").append(
            `<p class="p-2">No new notifications available</p>`
          );
          $(".notification-scroll").append(`<hr>`);
        }
      },
      error: function (xhr, status, error) {
        console.error(status, error);
      },
    });
  }

  // Initial call to update notifications
  updateNotifications();

  // Set interval to update notifications every 5 seconds
  setInterval(updateNotifications, 5000);
});
