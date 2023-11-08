
<footer>
   <div class="container cont-width">
     
      <div class="row">
         <div class="col-md-6 col-12 footer-div">
            <img src="public/images/logo.png" />
            <p class=" mt-2">At Enatyam, we are providing you with professional training of dance forms originating from the Indian subcontinent. Our talented mentors have been trained to provide you with an amazing dancing experience.</p>
         </div>
         <div class="col-md-3 col-6 footer-div pt-4">
            <ul class="row">
            <li>
                  <a href="Home">Home</a>
               </li>
               <li>
                  <a href="Dance">Dance</a>
               </li>
               <li>
                  <a href="music">Music</a>
               </li>
               <li>
                  <a href="Yoga">Yoga</a>
               </li>
              
<!--             
               <li>
                  <a href="#">Sanskrit Chanting</a>
               </li>
               <li>
                  <a href="#">Shopping</a>
               </li> -->
            </ul>
         </div>
         <div class="col-md-3 col-6 footer-div pt-4">
            <ul>
                <li>
                    <a href="Instruments">Instruments</a>
                </li>
            
                <li>
                    <a href="<?php echo base_url('Contactus');?>"> Contact Us</a>   
                </li>
                <li>
                    <a href="<?php echo base_url('Carrier');?>">Career</a>
                </li>
                
                <!-- <li>
                    <a href="<?php echo base_url('PrivacyPolicy');?>">Privacy Policy</a>
                </li>
                <li> 
                    <a href="<?php echo base_url('TermsAndConditions');?>">Terms and Conditions</a>
                </li>
                <li>
                    <a href="<?php echo base_url('RefundPolicy');?>">Refund Policy</a>
                </li>
                <li> -->
                    <a href="#">Blog</a>
                </li>
            </ul>
         </div>
      </div>

	  <div class="row">
		<div class="col-md-12 col-12 mt-3">
			<div class="social-div text-center">
				<a href="https://www.instagram.com/enatyam.india/" class="insta-div"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/e_natyam?s=08" class="twitter-div"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="https://m.facebook.com/enatyam/" class="facebook-div"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#" class="youtube-div"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="col-md-12 col-12 mt-3">
            <div class="footer-links text-center">
                <a href="">Pune</a>                           
                <a href="">Bangalore</a>
                <a href="">Hyderabad</a>
                <a href="">Chennai</a>
            <a href="">Mumbai</a>
            <a href="">Delhi</a>
            <a href="">Kolkata</a>
            <a href="">Lucknow</a>
            <a href="">Ahmedabad</a>
            </div>
        </div>

        <div class="col-md-12 col-12 mt-3">
            <div class="footer-links-sub text-center">
                <a href="">USA</a>
                <a href="">Canada</a>
                <a href="">UK</a>
                <a href="">Germany</a>
            <a href="">Singapore</a>
            <a href="">Australia</a>
            <a href="">New Zealand</a>
            <a href="">India</a>
            <a href="">Dubai</a>
            </div>
        </div>

      </div> 


    <div class="footer-row row">
        <div class="col-lg-12 copyright-p">
            <p>© Enatyam / Designed and Developed by <a href="https://www.marketingintelligence.tech">MI Tech Solutions Pvt. Ltd. </a></p>
    </div>

    </div>
    </div>
</footer>
<?php if ($page == 'enatyam' || $page == 'Home' || $page == 'StudentDashboard') { ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <!-- owl carousel js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- owl-carousel script -->
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        slideTransition: 'linear',
        autoplaySpeed: 3000,
        slideSpeed: 3000,
        paginationSpeed: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    </script>
    <script>
    jQuery(document).ready(function() {

        jQuery(".owl-prev").append("<i ></i>");
        jQuery(".owl-prev i").attr("class", "fa fa-arrow-left");
        jQuery(".owl-next").append("<i ></i>");
        jQuery(".owl-next i").attr("class", "fa fa-arrow-right");


    });
    </script>
    <!-- Latest compiled JavaScript -->

    <script>
    $(document).ready(function() {

        $('.counter-value').each(function() {

            $(this).prop('Counter', 0).animate({

                Counter: $(this).text()

            }, {

                duration: 3500,

                easing: 'swing',

                step: function(now) {

                    $(this).text(Math.ceil(now));

                }

            });

        });

    });
    </script>

<script>
    const accordionItemHeaders = document.querySelectorAll(
  ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
  accordionItemHeader.addEventListener("click", (event) => {
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

    const currentlyActiveAccordionItemHeader = document.querySelector(
      ".accordion-item-header.active"
    );
    if (
      currentlyActiveAccordionItemHeader &&
      currentlyActiveAccordionItemHeader !== accordionItemHeader
    ) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }
    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if (accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    } else {
      accordionItemBody.style.maxHeight = 0;
    }
  });
});

    </script>



<script>
function validateForm() {
    var name = document.forms["registrationForm"]["full_name"].value;
    var email = document.forms["registrationForm"]["email"].value;
    var mobile_no = document.forms["registrationForm"]["mobile_no"].value;

    var password = document.forms["registrationForm"]["password"].value;
    var cpassword = document.forms["registrationForm"]["confirm_pass"].value;
    var role = document.forms["registrationForm"]["role"].value;

    // Reset error messages
    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("mobile_noError").textContent = "";
    document.getElementById("passwordError").textContent = "";
    document.getElementById("roleerror").textContent = "";
    document.getElementById("confirmpasswordError").textContent = "";

    var valid = true;

    // Confirm password == password
    if(password !== cpassword){
        document.getElementById("confirmpasswordError").textContent = "Password does not match";
        valid = false;
    }

    // Password length check
    if(password.length <= 7){
        document.getElementById("passwordError").textContent = "You have to enter at least 8 characters!";
        valid = false;
    }

    if (name === "") {
        document.getElementById("nameError").textContent = "Name is required.";
        valid = false;
    }

    if (email === "" && mobile_no === "") {
        document.getElementById("emailError").textContent = "Either Email or Mobile no is required.";
        document.getElementById("mobile_noError").textContent = "Either Email or Mobile no is required.";
        valid = false;
    } else if (email !== "" && !isValidEmail(email)) {
        document.getElementById("emailError").textContent = "Invalid email format.";
        valid = false;
    }

    if (password === "") {
        document.getElementById("passwordError").textContent = "Password is required minimum 8 characters.";
        valid = false;
    }

    if (cpassword === "") {
        document.getElementById("confirmpasswordError").textContent = "Confirm Password is required.";
        valid = false;
    }

    if (role === "") {
        document.getElementById("roleerror").textContent = "Select the role.";
        valid = false;
    }

    return valid;
}

function isValidEmail(email) {
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailRegex.test(email);
}

</script>

<script>
function validateFormLogin() {

    var email2 = document.forms["loginForm"]["email"].value;
    var password2 = document.forms["loginForm"]["password"].value;
    var mobile_no2 = document.forms["loginForm"]["mobile_no"].value;

    // Reset error messages

    document.getElementById("emailError1").textContent = "";
    document.getElementById("passwordError1").textContent = "";
    document.getElementById("mobile_noError1").textContent = "";

    var valid = true;


    if (email2 === "" && mobile_no2 === "") {
        document.getElementById("emailError").textContent = "Either Email or Mobile no is required.";
        document.getElementById("mobile_noError").textContent = "Either Email or Mobile no is required.";
        valid = false;
    } else if (email2 !== "" && !isValidEmail(email2)) {
        document.getElementById("emailError").textContent = "Invalid email format.";
        valid = false;
    }

    if (password2 === "") {
        document.getElementById("passwordError1").textContent = "Password is required.";
        valid = false;
    }


    return valid;
}

function isValidEmail(email) {
    // Simple email format validation (you can use a more advanced regular expression)
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailRegex.test(email);
}
</script>
<?php }else if ($page == 'Dance' || $page == 'music' || $page == 'Yoga'){ ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- owl-carousel script -->
      <script>
         $('.owl-carousel').owlCarousel({
         loop:true,
         margin:10,
         nav:false,
         dots:true,
         autoplay:true,
         slideTransition: 'linear',
        autoplaySpeed: 3000,
        slideSpeed: 3000,
    paginationSpeed: 3000,
         responsive:{
             0:{
                 items:1
             },
             600:{
                 items:3
             },
             1000:{
            items:3
             }
         }
         })
      </script>
      <script>
        jQuery(document).ready(function(){

            jQuery( ".owl-prev" ).append( "<i ></i>" );
            jQuery( ".owl-prev i" ).attr( "class" ,"fa fa-arrow-left" );
            jQuery( ".owl-next" ).append( "<i ></i>" );
            jQuery( ".owl-next i" ).attr( "class" ,"fa fa-arrow-right" );


        });
        </script>


<?php }else if($page == 'Instruments'){ ?>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script>
         $('.owl-carousel').owlCarousel({
         loop:true,
         margin:10,
         nav:false,
         dots:true,
         autoplay:true,
         slideTransition: 'linear',
        autoplaySpeed: 3000,
        slideSpeed: 3000,
    paginationSpeed: 3000,
         responsive:{
             0:{
                 items:1
             },
             600:{
                 items:3
             },
             1000:{
            items:3
             }
         }
         })
      </script>
      <script>
        jQuery(document).ready(function(){

            jQuery( ".owl-prev" ).append( "<i ></i>" );
            jQuery( ".owl-prev i" ).attr( "class" ,"fa fa-arrow-left" );
            jQuery( ".owl-next" ).append( "<i ></i>" );
            jQuery( ".owl-next i" ).attr( "class" ,"fa fa-arrow-right" );


        });
      </script>

      
 
<?php }else if($page == 'instuments'){ ?>
    <!-- <script>
const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
        // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

        const currentlyActiveAccordionItemHeader = document.querySelector(
            ".accordion-item-header.active"
        );
        if (
            currentlyActiveAccordionItemHeader &&
            currentlyActiveAccordionItemHeader !== accordionItemHeader
        ) {
            currentlyActiveAccordionItemHeader.classList.toggle("active");
            currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
        }
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }
    });
});
</script> -->




    <?php }else if($page == 'Carrier'){ ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
<script>
function handleSubmit(collapse_val)


// Step-1 validation
{
    if (collapse_val == "collapseOne") {
        var phoneno_regx = /^\d{10}$/;
        var name_error_msg = "Name field is required";
        var email_error_msg = "Email field is required";
        var phone_error_msg = "Phone Number field is required"; // Define phone_error_msg
        var demo_for_error_msg = "Position Applying for field is required";

        if ($("#name").val() == '') {
            name_error_msg = "Name field is required";
        } else {
            name_error_msg = "";
        }
        if ($("#femail").val() == '') {
            email_error_msg = "Email field is required";
        } else {
            email_error_msg = "";
        }
        if ($("#phone").val()) {
            if (!phoneno_regx.test($("#phone").val())) {
                phone_error_msg = "Please enter valid 10 digits phone number.";
            } else {
                phone_error_msg = "";
            }
        } else {
            phone_error_msg = "Phone Number field is required";
        }
        if ($("#course").val() == '') {
            demo_for_error_msg = "Position Applying for field is required";
        } else {
            demo_for_error_msg = "";
        }

        $("#namespanid").html(name_error_msg);
        $("#emailspanid").html(email_error_msg);
        $("#phonespanid").html(phone_error_msg); // Update the phonespanid error message
        $("#coursespanid").html(demo_for_error_msg);

        if (name_error_msg == "" && email_error_msg == "" && phone_error_msg == "" && demo_for_error_msg == "") {
            $("#collapseTwo").collapse('show');
        }

        // Step-2 validation

    }
    if (collapse_val == "collapseTwo") {
        var sub_course_error_msg = "At least one sub_course must be selected"; // Initial error message

        // Check if at least one checkbox with the class "checkboxCondition" is checked
        if ($(".checkboxCondition:checked").length === 0) {
            sub_course_error_msg =
                "At least one sub_course must be selected"; // Update error message if none are checked
        } else {
            sub_course_error_msg = ""; // No error if at least one is checked
        }

        $("#sub_coursespanid").html(sub_course_error_msg);

        // Check if all previous validation (name, email, phone, and demo_for) passed
        if (sub_course_error_msg == "") {
            // Show the "collapseThree" section
            $("#collapseThree").collapse('show');
        }
    }



    // Step-3 validation

    if (collapse_val == "collapseThree") {
        var education_error_msg = "Select at least one education option";

        // Get the selected education option value
        var selectedEducation = $("#education").val();

        if (selectedEducation === null || selectedEducation === "") {
            education_error_msg = "At least one education option must be selected";
        } else {
            education_error_msg = "";
        }

        // Update the error message
        $("#educationspanid").text(education_error_msg);

        // If all validation passes, show the next collapse section
        if (education_error_msg === "") {
            $("#collapseFour").collapse('show');
        }
    }





    // Step-4 validation

    $("form").submit(function(event) {
        // Reset any previous error messages
        $("#Countryspanid, #Statespanid, #Districtspanid").text("");

        // Flag to track validation status
        var valid = true;

        // Validate Country
        var selectedCountry = $("#inputCountry").val();
        if (selectedCountry === "SelectCountry") {
            $("#Countryspanid").text("Please select a Country.");
            valid = false;
        }

        // Validate State
        var selectedState = $("#inputState").val();
        if (selectedState === "SelectState") {
            $("#Statespanid").text("Please select a State.");
            valid = false;
        }

        // Validate District (if needed)
        var selectedDistrict = $("#inputDistrict").val();
        if (selectedDistrict === "") {
            $("#Districtspanid").text("Please select a District.");
            valid = false;
        }

        // Prevent form submission if validation fails
        if (!valid) {
            event.preventDefault();
        }
    });
}
// function handlePrevious(collapse_val){
//     if(collapse_val == "collapseTwo")
//     {
//         $("#collapseTwo").collapse('hide');
//     }
// }
</script>


<script>
    const stepButtons = document.querySelectorAll('.step-button');
    const progress = document.querySelector('#progress');

    Array.from(stepButtons).forEach((button, index) => {
        button.addEventListener('click', () => {
            progress.setAttribute('value', index * 100 / (stepButtons.length -
                1)); //there are 3 buttons. 2 spaces.

            stepButtons.forEach((item, secindex) => {
                if (index > secindex) {
                    item.classList.add('done');
                }
                if (index < secindex) {
                    item.classList.remove('done');
                }
            })
        })
    })
    </script>
    <script>
    var AndraPradesh = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna",
        "Kurnool", "Prakasam", "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram",
        "West Godavari"
    ];
    var ArunachalPradesh = ["Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang",
        "Kra Daadi", "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley",
        "Lower Subansiri", "Namsai", "Papum Pare", "Siang", "Tawang", "Tirap",
        "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang", "Itanagar"
    ];
    var Assam = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo",
        "Chirang", "Darrang", "Dhemaji", "Dhubri", "Dibrugarh", "Goalpara", "Golaghat",
        "Hailakandi", "Hojai", "Jorhat", "Kamrup Metropolitan", "Kamrup (Rural)",
        "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon",
        "Nagaon", "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur",
        "South Salmara Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong"
    ];
    var Bihar = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur",
        "Buxar", "Darbhanga", "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad",
        "Kaimur", "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura",
        "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia",
        "Rohtas", "Saharsa", "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi",
        "Siwan", "Supaul", "Vaishali", "West Champaran"
    ];
    var Chhattisgarh = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur",
        "Bilaspur", "Dantewada", "Dhamtari", "Durg", "Gariaband", "Janjgir Champa",
        "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba", "Koriya", "Mahasamund",
        "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur",
        "Surguja"
    ];
    var Goa = ["North Goa", "South Goa"];
    var Gujarat = ["Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch",
        "Bhavnagar", "Botad", "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka",
        "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh", "Kheda", "Kutch", "Mahisagar",
        "Mehsana", "Morbi", "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar",
        "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"
    ];
    var Haryana = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram",
        "Hisar", "Jhajjar", "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh",
        "Mewat", "Palwal", "Panchkula", "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat",
        "Yamunanagar"
    ];
    var HimachalPradesh = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu",
        "Lahaul Spiti", "Mandi", "Shimla", "Sirmaur", "Solan", "Una"
    ];
    var JammuKashmir = ["Anantnag", "Bandipora", "Baramulla", "Budgam", "Doda", "Ganderbal",
        "Jammu", "Kargil", "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Leh", "Poonch",
        "Pulwama", "Rajouri", "Ramban", "Reasi", "Samba", "Shopian", "Srinagar", "Udhampur"
    ];
    var Jharkhand = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum",
        "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma",
        "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh", "Ranchi", "Sahebganj",
        "Seraikela Kharsawan", "Simdega", "West Singhbhum"
    ];
    var Karnataka = ["Bagalkot", "Bangalore Rural", "Bangalore Urban", "Belgaum", "Bellary",
        "Bidar", "Vijayapura", "Chamarajanagar", "Chikkaballapur", "Chikkamagaluru",
        "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag", "Gulbarga",
        "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore", "Raichur",
        "Ramanagara", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"
    ];
    var Kerala = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam",
        "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta",
        "Thiruvananthapuram", "Thrissur", "Wayanad"
    ];
    var MadhyaPradesh = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat",
        "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara",
        "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna", "Gwalior", "Harda",
        "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa", "Khargone",
        "Mandla", "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Raisen",
        "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna",
        "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi",
        "Singrauli", "Tikamgarh", "Ujjain", "Umaria", "Vidisha"
    ];
    var Maharashtra = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara",
        "Buldhana", "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon",
        "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded",
        "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad",
        "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha",
        "Washim", "Yavatmal"
    ];
    var Manipur = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West",
        "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati",
        "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"
    ];
    var Meghalaya = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills",
        "North Garo Hills", "Ri Bhoi", "South Garo Hills", "South West Garo Hills",
        "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills",
        "West Khasi Hills"
    ];
    var Mizoram = ["Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha",
        "Serchhip", "Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit",
        "Saiha", "Serchhip"
    ];
    var Nagaland = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren",
        "Phek", "Tuensang", "Wokha", "Zunheboto"
    ];
    var Odisha = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack",
        "Debagarh", "Dhenkanal", "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur",
        "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara", "Kendujhar", "Khordha",
        "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri",
        "Rayagada", "Sambalpur", "Subarnapur", "Sundergarh"
    ];
    var Punjab = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka",
        "Firozpur", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana",
        "Mansa", "Moga", "Mohali", "Muktsar", "Pathankot", "Patiala", "Rupnagar", "Sangrur",
        "Shaheed Bhagat Singh Nagar", "Tarn Taran"
    ];
    var Rajasthan = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara",
        "Bikaner", "Bundi", "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur",
        "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer", "Jalore", "Jhalawar",
        "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh",
        "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Tonk", "Udaipur"
    ];
    var Sikkim = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
    var TamilNadu = ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul",
        "Erode", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai",
        "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai",
        "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi",
        "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai",
        "Tiruvarur", "Vellore", "Viluppuram", "Virudhunagar"
    ];
    var Telangana = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon",
        "Jayashankar", "Jogulamba", "Kamareddy", "Karimnagar", "Khammam", "Komaram Bheem",
        "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak", "Medchal", "Nagarkurnool",
        "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Ranga Reddy",
        "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural",
        "Warangal Urban", "Yadadri Bhuvanagiri"
    ];
    var Tripura = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura",
        "Unakoti", "West Tripura"
    ];
    var UttarPradesh = ["Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi", "Amroha",
        "Auraiya", "Azamgarh", "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda",
        "Barabanki", "Bareilly", "Basti", "Bhadohi", "Bijnor", "Budaun", "Bulandshahr",
        "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Faizabad", "Farrukhabad",
        "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda",
        "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur",
        "Jhansi", "Kannauj", "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi",
        "Kheri", "Kushinagar", "Lalitpur", "Lucknow", "Maharajganj", "Mahoba", "Mainpuri",
        "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar", "Pilibhit",
        "Pratapgarh", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar",
        "Shahjahanpur", "Shamli", "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra",
        "Sultanpur", "Unnao", "Varanasi"
    ];
    var Uttarakhand = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar",
        "Nainital", "Pauri", "Pithoragarh", "Rudraprayag", "Tehri", "Udham Singh Nagar",
        "Uttarkashi"
    ];
    var WestBengal = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur",
        "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata",
        "Malda", "Murshidabad", "Nadia", "North 24 Parganas", "Paschim Bardhaman",
        "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur", "Purulia",
        "South 24 Parganas", "Uttar Dinajpur"
    ];
    var AndamanNicobar = ["Nicobar", "North Middle Andaman", "South Andaman"];
    var Chandigarh = ["Chandigarh"];
    var DadraHaveli = ["Dadra Nagar Haveli"];
    var DamanDiu = ["Daman", "Diu"];
    var Delhi = ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi",
        "North West Delhi", "Shahdara", "South Delhi", "South East Delhi",
        "South West Delhi", "West Delhi"
    ];
    var Lakshadweep = ["Lakshadweep"];
    var Puducherry = ["Karaikal", "Mahe", "Puducherry", "Yanam"];


    $("#inputState").change(function() {
        var StateSelected = $(this).val();
        var optionsList;
        var htmlString = "";

        switch (StateSelected) {
            case "Andra Pradesh":
                optionsList = AndraPradesh;
                break;
            case "Arunachal Pradesh":
                optionsList = ArunachalPradesh;
                break;
            case "Assam":
                optionsList = Assam;
                break;
            case "Bihar":
                optionsList = Bihar;
                break;
            case "Chhattisgarh":
                optionsList = Chhattisgarh;
                break;
            case "Goa":
                optionsList = Goa;
                break;
            case "Gujarat":
                optionsList = Gujarat;
                break;
            case "Haryana":
                optionsList = Haryana;
                break;
            case "Himachal Pradesh":
                optionsList = HimachalPradesh;
                break;
            case "Jammu and Kashmir":
                optionsList = JammuKashmir;
                break;
            case "Jharkhand":
                optionsList = Jharkhand;
                break;
            case "Karnataka":
                optionsList = Karnataka;
                break;
            case "Kerala":
                optionsList = Kerala;
                break;
            case "Madya Pradesh":
                optionsList = MadhyaPradesh;
                break;
            case "Maharashtra":
                optionsList = Maharashtra;
                break;
            case "Manipur":
                optionsList = Manipur;
                break;
            case "Meghalaya":
                optionsList = Meghalaya;
                break;
            case "Mizoram":
                optionsList = Mizoram;
                break;
            case "Nagaland":
                optionsList = Nagaland;
                break;
            case "Orissa":
                optionsList = Orissa;
                break;
            case "Punjab":
                optionsList = Punjab;
                break;
            case "Rajasthan":
                optionsList = Rajasthan;
                break;
            case "Sikkim":
                optionsList = Sikkim;
                break;
            case "Tamil Nadu":
                optionsList = TamilNadu;
                break;
            case "Telangana":
                optionsList = Telangana;
                break;
            case "Tripura":
                optionsList = Tripura;
                break;
            case "Uttaranchal":
                optionsList = Uttaranchal;
                break;
            case "Uttar Pradesh":
                optionsList = UttarPradesh;
                break;
            case "West Bengal":
                optionsList = WestBengal;
                break;
            case "Andaman and Nicobar Islands":
                optionsList = AndamanNicobar;
                break;
            case "Chandigarh":
                optionsList = Chandigarh;
                break;
            case "Dadar and Nagar Haveli":
                optionsList = DadraHaveli;
                break;
            case "Daman and Diu":
                optionsList = DamanDiu;
                break;
            case "Delhi":
                optionsList = Delhi;
                break;
            case "Lakshadeep":
                optionsList = Lakshadeep;
                break;
            case "Pondicherry":
                optionsList = Pondicherry;
                break;
        }


        for (var i = 0; i < optionsList.length; i++) {
            htmlString = htmlString + "<option value='" + optionsList[i] + "'>" +
                optionsList[i] + "</option>";
        }
        $("#inputDistrict").html(htmlString);

    });
    </script>

<script>
        $(function() {
            $('#course').change(function() {
                $('.selectCourse').hide();
                $('#' + $(this).val()).show();
            });
        });
</script>


    <?php }else if($page == 'demo'){ ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
                integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
            </script>

            <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script> -->
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
            </script> -->
            <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
                integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
            </script> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
function handleSubmit(collapse_val)


// Step-1 validation
{
    if (collapse_val == "collapseOne") {
        var phoneno_regx = /^\d{10}$/;
        var name_error_msg = "Name field is required";
        var email_error_msg = "Email field is required";
        var phone_error_msg = "Phone Number field is required"; // Define phone_error_msg
        var demo_for_error_msg = "Book Demo for field is required";

        if ($("#name").val() == '') {
            name_error_msg = "Name field is required";
        } else {
            name_error_msg = "";
        }
        if ($("#Inputemail").val() == '') {
            email_error_msg = "Email field is required";
        } else {
            email_error_msg = "";
        }
        if ($("#phone").val()) {
            if (!phoneno_regx.test($("#phone").val())) {
                phone_error_msg = "Please enter valid 10 digits phone number.";
            } else {
                phone_error_msg = "";
            }
        } else {
            phone_error_msg = "Phone Number field is required";
        }
        if ($("#course").val() == '') {
            demo_for_error_msg = "Book Demo for field is required";
        } else {
            demo_for_error_msg = "";
        }

        $("#namespanid").html(name_error_msg);
        $("#emailspanid").html(email_error_msg);
        $("#phonespanid").html(phone_error_msg); // Update the phonespanid error message
        $("#coursespanid").html(demo_for_error_msg);

        if (name_error_msg == "" && email_error_msg == "" && phone_error_msg == "" && demo_for_error_msg == "") {
            $("#collapseTwo").collapse('show');
        }

        // Step-2 validation

    }
    if (collapse_val == "collapseTwo") {
        var sub_course_error_msg = "At least one sub_course must be selected"; // Initial error message

        // Check if at least one checkbox with the class "checkboxCondition" is checked
        if ($(".checkboxCondition:checked").length === 0) {
            sub_course_error_msg =
                "At least one sub_course must be selected"; // Update error message if none are checked
        } else {
            sub_course_error_msg = ""; // No error if at least one is checked
        }

        $("#sub_coursespanid").html(sub_course_error_msg);

        // Check if all previous validation (name, email, phone, and demo_for) passed
        if (sub_course_error_msg == "") {
            // Show the "collapseThree" section
            $("#collapseThree").collapse('show');
        }
    }



    // Step-3 validation

    if (collapse_val == "collapseThree") {
        var age_error_msg = "Select at least one age group";
        var experience_error_msg = "Select whether you have learned any classes";
        var information_error_msg = "Information field is required";

        // Check if at least one age checkbox is checked
        if ($(".checkboxCondition[name='Age']:checked").length === 0) {
            age_error_msg = "At least one Age must be selected";
        } else {
            age_error_msg = "";
        }
        $("#Agespanid").html(age_error_msg);

        // Check if the experience radio buttons are selected
        if ($("input[name='exprience']:checked").length === 0) {
            experience_error_msg = "Select whether you have learned any classes";
        } else {
            experience_error_msg = "";

            // Check if "Yes" is selected for experience
            if ($("input[name='exprience']:checked").val() === "Yes") {
                // Check if the information field is empty
                if ($("#information").val().trim() === "") {
                    information_error_msg = "Information field is required";
                } else {
                    information_error_msg = "";
                }
            }
        }

        $("#expriencespanid").html(experience_error_msg);
        $("#informationspanid").html(information_error_msg);

        // If all validation passes, show the next collapse section
        if (age_error_msg === "" && experience_error_msg === "") {
            $("#collapseFour").collapse('show');
        }
    }




    // Step-4 validation

    $("form").submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Define validation variables and set them to default values
        var countryError = "";
        var stateError = "";
        var districtError = "";
        var dateTimeError = "";

        // Validate the Country field
        if ($("#inputCountry").val() === "SelectCountry") {
            countryError = "Please select a Country.";
        }

        // Validate the State field
        if ($("#inputState").val() === "SelectState") {
            stateError = "Please select a State.";
        }

        // Validate the District field (if needed)
        if ($("#inputDistrict").val() === "") {
            districtError = "Please select a District.";
        }

        // Validate the Date & Time field
        
        var selectedDate = new Date($("#demo_class-time").val());
        var currentDate = new Date();

        // Calculate the minimum allowed date (next day)
        var minimumDate = new Date(currentDate);
        minimumDate.setDate(currentDate.getDate() + 1);

        // Validate the Date & Time field
        if (selectedDate < minimumDate) {
            dateTimeError = "Please choose a Demo Class Date & Time from the next day.";
        }

        // Display validation error messages
        $("#Countryspanid").text(countryError);
        $("#Statespanid").text(stateError);
        $("#Districtspanid").text(districtError);
        $("#demo_class-timespanid").text(dateTimeError);

        // If there are no errors, allow the form submission
        if (countryError === "" && stateError === "" && districtError === "" && dateTimeError === "") {
            this.submit(); // Allow form submission
        }
    });
}
// function handlePrevious(collapse_val){
//     if(collapse_val == "collapseTwo")
//     {
//         $("#collapseTwo").collapse('hide');
//     }
// }
</script>


<script>
    const stepButtons = document.querySelectorAll('.step-button');
    const progress = document.querySelector('#progress');

    Array.from(stepButtons).forEach((button, index) => {
        button.addEventListener('click', () => {
            progress.setAttribute('value', index * 100 / (stepButtons.length -
                1)); //there are 3 buttons. 2 spaces.

            stepButtons.forEach((item, secindex) => {
                if (index > secindex) {
                    item.classList.add('done');
                }
                if (index < secindex) {
                    item.classList.remove('done');
                }
            })
        })
    })
    </script>
    <script>
    var AndraPradesh = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna",
        "Kurnool", "Prakasam", "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram",
        "West Godavari"
    ];
    var ArunachalPradesh = ["Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang",
        "Kra Daadi", "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley",
        "Lower Subansiri", "Namsai", "Papum Pare", "Siang", "Tawang", "Tirap",
        "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang", "Itanagar"
    ];
    var Assam = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo",
        "Chirang", "Darrang", "Dhemaji", "Dhubri", "Dibrugarh", "Goalpara", "Golaghat",
        "Hailakandi", "Hojai", "Jorhat", "Kamrup Metropolitan", "Kamrup (Rural)",
        "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon",
        "Nagaon", "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur",
        "South Salmara Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong"
    ];
    var Bihar = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur",
        "Buxar", "Darbhanga", "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad",
        "Kaimur", "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura",
        "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia",
        "Rohtas", "Saharsa", "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi",
        "Siwan", "Supaul", "Vaishali", "West Champaran"
    ];
    var Chhattisgarh = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur",
        "Bilaspur", "Dantewada", "Dhamtari", "Durg", "Gariaband", "Janjgir Champa",
        "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba", "Koriya", "Mahasamund",
        "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur",
        "Surguja"
    ];
    var Goa = ["North Goa", "South Goa"];
    var Gujarat = ["Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch",
        "Bhavnagar", "Botad", "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka",
        "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh", "Kheda", "Kutch", "Mahisagar",
        "Mehsana", "Morbi", "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar",
        "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"
    ];
    var Haryana = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram",
        "Hisar", "Jhajjar", "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh",
        "Mewat", "Palwal", "Panchkula", "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat",
        "Yamunanagar"
    ];
    var HimachalPradesh = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu",
        "Lahaul Spiti", "Mandi", "Shimla", "Sirmaur", "Solan", "Una"
    ];
    var JammuKashmir = ["Anantnag", "Bandipora", "Baramulla", "Budgam", "Doda", "Ganderbal",
        "Jammu", "Kargil", "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Leh", "Poonch",
        "Pulwama", "Rajouri", "Ramban", "Reasi", "Samba", "Shopian", "Srinagar", "Udhampur"
    ];
    var Jharkhand = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum",
        "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma",
        "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh", "Ranchi", "Sahebganj",
        "Seraikela Kharsawan", "Simdega", "West Singhbhum"
    ];
    var Karnataka = ["Bagalkot", "Bangalore Rural", "Bangalore Urban", "Belgaum", "Bellary",
        "Bidar", "Vijayapura", "Chamarajanagar", "Chikkaballapur", "Chikkamagaluru",
        "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag", "Gulbarga",
        "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore", "Raichur",
        "Ramanagara", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"
    ];
    var Kerala = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam",
        "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta",
        "Thiruvananthapuram", "Thrissur", "Wayanad"
    ];
    var MadhyaPradesh = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat",
        "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara",
        "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna", "Gwalior", "Harda",
        "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa", "Khargone",
        "Mandla", "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Raisen",
        "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna",
        "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi",
        "Singrauli", "Tikamgarh", "Ujjain", "Umaria", "Vidisha"
    ];
    var Maharashtra = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara",
        "Buldhana", "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon",
        "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded",
        "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad",
        "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha",
        "Washim", "Yavatmal"
    ];
    var Manipur = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West",
        "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati",
        "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"
    ];
    var Meghalaya = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills",
        "North Garo Hills", "Ri Bhoi", "South Garo Hills", "South West Garo Hills",
        "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills",
        "West Khasi Hills"
    ];
    var Mizoram = ["Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha",
        "Serchhip", "Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit",
        "Saiha", "Serchhip"
    ];
    var Nagaland = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren",
        "Phek", "Tuensang", "Wokha", "Zunheboto"
    ];
    var Odisha = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack",
        "Debagarh", "Dhenkanal", "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur",
        "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara", "Kendujhar", "Khordha",
        "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri",
        "Rayagada", "Sambalpur", "Subarnapur", "Sundergarh"
    ];
    var Punjab = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka",
        "Firozpur", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana",
        "Mansa", "Moga", "Mohali", "Muktsar", "Pathankot", "Patiala", "Rupnagar", "Sangrur",
        "Shaheed Bhagat Singh Nagar", "Tarn Taran"
    ];
    var Rajasthan = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara",
        "Bikaner", "Bundi", "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur",
        "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer", "Jalore", "Jhalawar",
        "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh",
        "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Tonk", "Udaipur"
    ];
    var Sikkim = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
    var TamilNadu = ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul",
        "Erode", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai",
        "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai",
        "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi",
        "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai",
        "Tiruvarur", "Vellore", "Viluppuram", "Virudhunagar"
    ];
    var Telangana = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon",
        "Jayashankar", "Jogulamba", "Kamareddy", "Karimnagar", "Khammam", "Komaram Bheem",
        "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak", "Medchal", "Nagarkurnool",
        "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Ranga Reddy",
        "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural",
        "Warangal Urban", "Yadadri Bhuvanagiri"
    ];
    var Tripura = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura",
        "Unakoti", "West Tripura"
    ];
    var UttarPradesh = ["Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi", "Amroha",
        "Auraiya", "Azamgarh", "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda",
        "Barabanki", "Bareilly", "Basti", "Bhadohi", "Bijnor", "Budaun", "Bulandshahr",
        "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Faizabad", "Farrukhabad",
        "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda",
        "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur",
        "Jhansi", "Kannauj", "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi",
        "Kheri", "Kushinagar", "Lalitpur", "Lucknow", "Maharajganj", "Mahoba", "Mainpuri",
        "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar", "Pilibhit",
        "Pratapgarh", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar",
        "Shahjahanpur", "Shamli", "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra",
        "Sultanpur", "Unnao", "Varanasi"
    ];
    var Uttarakhand = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar",
        "Nainital", "Pauri", "Pithoragarh", "Rudraprayag", "Tehri", "Udham Singh Nagar",
        "Uttarkashi"
    ];
    var WestBengal = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur",
        "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata",
        "Malda", "Murshidabad", "Nadia", "North 24 Parganas", "Paschim Bardhaman",
        "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur", "Purulia",
        "South 24 Parganas", "Uttar Dinajpur"
    ];
    var AndamanNicobar = ["Nicobar", "North Middle Andaman", "South Andaman"];
    var Chandigarh = ["Chandigarh"];
    var DadraHaveli = ["Dadra Nagar Haveli"];
    var DamanDiu = ["Daman", "Diu"];
    var Delhi = ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi",
        "North West Delhi", "Shahdara", "South Delhi", "South East Delhi",
        "South West Delhi", "West Delhi"
    ];
    var Lakshadweep = ["Lakshadweep"];
    var Puducherry = ["Karaikal", "Mahe", "Puducherry", "Yanam"];


    $("#inputState").change(function() {
        var StateSelected = $(this).val();
        var optionsList;
        var htmlString = "";

        switch (StateSelected) {
            case "Andra Pradesh":
                optionsList = AndraPradesh;
                break;
            case "Arunachal Pradesh":
                optionsList = ArunachalPradesh;
                break;
            case "Assam":
                optionsList = Assam;
                break;
            case "Bihar":
                optionsList = Bihar;
                break;
            case "Chhattisgarh":
                optionsList = Chhattisgarh;
                break;
            case "Goa":
                optionsList = Goa;
                break;
            case "Gujarat":
                optionsList = Gujarat;
                break;
            case "Haryana":
                optionsList = Haryana;
                break;
            case "Himachal Pradesh":
                optionsList = HimachalPradesh;
                break;
            case "Jammu and Kashmir":
                optionsList = JammuKashmir;
                break;
            case "Jharkhand":
                optionsList = Jharkhand;
                break;
            case "Karnataka":
                optionsList = Karnataka;
                break;
            case "Kerala":
                optionsList = Kerala;
                break;
            case "Madya Pradesh":
                optionsList = MadhyaPradesh;
                break;
            case "Maharashtra":
                optionsList = Maharashtra;
                break;
            case "Manipur":
                optionsList = Manipur;
                break;
            case "Meghalaya":
                optionsList = Meghalaya;
                break;
            case "Mizoram":
                optionsList = Mizoram;
                break;
            case "Nagaland":
                optionsList = Nagaland;
                break;
            case "Orissa":
                optionsList = Orissa;
                break;
            case "Punjab":
                optionsList = Punjab;
                break;
            case "Rajasthan":
                optionsList = Rajasthan;
                break;
            case "Sikkim":
                optionsList = Sikkim;
                break;
            case "Tamil Nadu":
                optionsList = TamilNadu;
                break;
            case "Telangana":
                optionsList = Telangana;
                break;
            case "Tripura":
                optionsList = Tripura;
                break;
            case "Uttaranchal":
                optionsList = Uttaranchal;
                break;
            case "Uttar Pradesh":
                optionsList = UttarPradesh;
                break;
            case "West Bengal":
                optionsList = WestBengal;
                break;
            case "Andaman and Nicobar Islands":
                optionsList = AndamanNicobar;
                break;
            case "Chandigarh":
                optionsList = Chandigarh;
                break;
            case "Dadar and Nagar Haveli":
                optionsList = DadraHaveli;
                break;
            case "Daman and Diu":
                optionsList = DamanDiu;
                break;
            case "Delhi":
                optionsList = Delhi;
                break;
            case "Lakshadeep":
                optionsList = Lakshadeep;
                break;
            case "Pondicherry":
                optionsList = Pondicherry;
                break;
        }


        for (var i = 0; i < optionsList.length; i++) {
            htmlString = htmlString + "<option value='" + optionsList[i] + "'>" +
                optionsList[i] + "</option>";
        }
        $("#inputDistrict").html(htmlString);

    });
    </script>
    
    <script>
        $(function() {
            $('#course').change(function() {
                $('.selectCourse').hide();
                $('#' + $(this).val()).show();
            });
        });
    </script>

    <?php }else if($page == 'Contactus'){ ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>

    <script>
        
        let prevScrollPos = window.pageYOffset;
        const navbar = document.querySelector('.tophead');

        window.addEventListener('scroll', () => {
        const currentScrollPos = window.pageYOffset;

            if (currentScrollPos > prevScrollPos) {
                // Scrolling down
                navbar.style.transform = 'translateY(-100%)';
                } else {
                    // Scrolling up or at the top
                    navbar.style.transform = 'translateY(0)';
                    navbar.style.backgroundColor = currentScrollPos === 0 ? 'transparent' : 'black';
                }

                prevScrollPos = currentScrollPos;
        });

        // Ensure initial state is transparent if at the top
        window.addEventListener('load', () => {
            if (window.pageYOffset === 0) {
                navbar.style.backgroundColor = 'transparent';
         }
        });
    </script>


    <?php } ?>



<script>
$(document).ready(function() {
    $(document).ready(function() {
        $('#otpValidateForm').submit(function(e) {
            e.preventDefault();
            var entered_otp = $('#entered_otp').val();

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>otpvalidate',
                data: {
                    entered_otp: entered_otp
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    if (response.status === 'success') {
                        $('#passwordField').show();
                        $('#otpField').hide();
                    } else {
                        $('#passwordField').hide();
                        $('#otpField').show();
                        $('#invalidotp').text('Enter Correct OTP.');
                    }
                },
                error: function(error) {
                    console.log(error);
                    $('#passwordField').hide();
                    $('#otpField').show();
                    $('#invalidotp').text('An error occurred. Please try again.');
                }
            });
        });
    });


});
</script>
<script>
    // Add an event listener for form submission
    document.getElementById("newPasswordForm").addEventListener("submit", function(event) {
        const newPassword = document.getElementById("new_password").value;
        const confPassword = document.getElementById("conf_password").value;
        const errorSpan = document.getElementById("password_match_error");

        if (newPassword !== confPassword) {
            errorSpan.textContent = "Passwords do not match.";
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
<script>
function showLostPasswordModal() {
    // Hide the login modal
    $('#loginformpopup').modal('hide');
    // Show the "Lost Password" modal
    $('#lostpasswordmodal').modal('show');
}
</script>

<script>
$(document).ready(function() {
    $('#lostpasswordform').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        var email = $('#lostpassword_email').val();

        // Send the email address to the server via AJAX
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>lostpassword',
            data: {
                email: email
            },
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    $("#lostpasswordform")[0].reset()
                    $('#otpField').show();

                    $('#lostpasswordform').hide();
                } else {
                    // Email sending failed, show an error message
                    $('#lostpassword_email_error').text(' Enter Exist Email Address.');
                }
            },
            error: function() {
                $('#lostpassword_email_error').text('AJAX request failed.');
            }
        });
    });
});
</script>

<!-- model  -->
<script>
function showRegistrationModal() {
    // Hide the login modal
    $('#loginformpopup').modal('hide');
    // Show the registration modal
    $('#registerformpopup').modal('show');
}


function showLoginModal() {
    // Hide the registration modal
    $('#registerformpopup').modal('hide');
    // Show the login modal
    $('#loginformpopup').modal('show');
}
</script>
<!-- headerr -->
<script>
let prevScrollPos = window.pageYOffset;
const navbar = document.querySelector('.tophead');

window.addEventListener('scroll', () => {
    const currentScrollPos = window.pageYOffset;

    if (currentScrollPos > prevScrollPos) {
        // Scrolling down
        navbar.style.transform = 'translateY(-100%)';
    } else {
        // Scrolling up or at the top
        navbar.style.transform = 'translateY(0)';
        navbar.style.backgroundColor = currentScrollPos === 0 ? 'transparent' : 'black';
    }

    prevScrollPos = currentScrollPos;
});

// Ensure initial state is transparent if at the top
window.addEventListener('load', () => {
    if (window.pageYOffset === 0) {
        navbar.style.backgroundColor = 'transparent';
    }
});
</script>


<script>
function showRegistrationModal() {
    // Hide the login modal
    $('#loginformpopup').modal('hide');
    // Show the registration modal
    $('#registerformpopup').modal('show');
}

function showLoginModal() {
    // Hide the registration modal
    $('#registerformpopup').modal('hide');
    // Show the login modal
    $('#loginformpopup').modal('show');
}
    </script>
    <!-- headerr -->
    <script>
let prevScrollPos = window.pageYOffset;
const navbar = document.querySelector('.tophead');

window.addEventListener('scroll', () => {
    const currentScrollPos = window.pageYOffset;

    if (currentScrollPos > prevScrollPos) {
        // Scrolling down
        navbar.style.transform = 'translateY(-100%)';
    } else {
        // Scrolling up or at the top
        navbar.style.transform = 'translateY(0)';
        navbar.style.backgroundColor = currentScrollPos === 0 ? 'transparent' : 'black';
    }

    prevScrollPos = currentScrollPos;
});
// Ensure initial state is transparent if at the top
window.addEventListener('load', () => {
    if (window.pageYOffset === 0) {
        navbar.style.backgroundColor = 'transparent';
    }
});
</script>

<script>
    // JavaScript to handle time input validation
    var startTimeInput = document.getElementById("start-time");
    var endTimeInput = document.getElementById("end-time");

    startTimeInput.addEventListener("change", validateTimeInput);
    endTimeInput.addEventListener("change", validateTimeInput);

    function validateTimeInput() {
        var startTime = startTimeInput.value;
        var endTime = endTimeInput.value;

        if (startTime > endTime) {
            document.getElementById("demo_class-timespanid").textContent = "Start time must be before end time.";
            // You can disable the form submission or take other actions as needed.
        } else {
            document.getElementById("demo_class-timespanid").textContent = "";
            // The times are valid; you can proceed with form submission.
        }
    }


    function validateTimeInput() {
        var startTime = startTimeInput.value;
        var endTime = endTimeInput.value;

        if (startTime > endTime) {
            document.getElementById("demo_class-timespanid").textContent = "Start time must be before end time.";
            // You can disable the form submission or take other actions as needed.
        } else {
            document.getElementById("demo_class-timespanid").textContent = "";
            // The times are valid; you can proceed with form submission.
        }
    }
</script>

    
</body>


</html>
