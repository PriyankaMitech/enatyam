
<?php
$file = __DIR__ . "/Studentsidebar.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";}
?>
<style>
/* Certificate Card */
/* CSS for Certificate Card */
@import url('https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester');

.cursive {
    font-family: 'Pinyon Script', cursive;
}

.sans {
    font-family: 'Open Sans', sans-serif;
}

.bold {
    font-weight: bold;
}

.block {
    display: block;
}

.underline {
    border-bottom: 1px solid #777;
    padding: 5px;
    margin-bottom: 15px;
}

.margin-0 {
    margin: 0;
}

.padding-0 {
    padding: 0;
}

.pm-empty-space {
    height: 40px;
    width: 100%;
}

/* body {
    padding: 20px 0;
    background: #ccc;
} */

.pm-certificate-container {
    position: relative;
    width: 800px;
    height: 600px;
    background-color: #618597;
    padding: 30px;
    color: #333;
    font-family: 'Open Sans', sans-serif;
    box-shadow: 0 0 5px rgba(0, 0, 0, .5);
    /*background: -webkit-repeating-linear-gradient(
    45deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );
  background: repeating-linear-gradient(
    90deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );*/

    .outer-border {
        width: 794px;
        height: 594px;
        position: absolute;
        left: 50%;
        margin-left: -397px;
        top: 50%;
        margin-top: -297px;
        border: 2px solid #fff;
    }

    .inner-border {
        width: 730px;
        height: 530px;
        position: absolute;
        left: 50%;
        margin-left: -365px;
        top: 50%;
        margin-top: -265px;
        border: 2px solid #fff;
    }

    .pm-certificate-border {
        position: relative;
        width: 720px;
        height: 520px;
        padding: 0;
        border: 1px solid #E1E5F0;
        background-color: rgba(255, 255, 255, 1);
        background-image: none;
        left: 50%;
        margin-left: -360px;
        top: 50%;
        margin-top: -260px;
    }
        .pm-certificate-block {
            width: 650px;
            height: 200px;
            position: relative;
            left: 50%;
            margin-left: -325px;
            top: 70px;
            margin-top: 0;
        }

        .pm-certificate-header {
            margin-bottom: 10px;
        }

        .pm-certificate-title {
            position: relative;
            top: 40px;

            h2 {
                font-size: 34px !important;
            }
        }

        .pm-certificate-body {
            padding: 20px;

            .pm-name-text {
                font-size: 20px;
            }
        }

        .pm-earned {
            margin: 15px 0 20px;

            .pm-earned-text {
                font-size: 20px;
            }

            .pm-credits-text {
                font-size: 15px;
            }
        }

        .pm-course-title {
            .pm-earned-text {
                font-size: 20px;
            }

            .pm-credits-text {
                font-size: 15px;
            }
        }

        .pm-certified {
            font-size: 12px;

            .underline {
                margin-bottom: 5px;
            }
        }

        .pm-certificate-footer {
            width: 650px;
            height: 100px;
            position: relative;
            left: 50%;
            margin-left: -325px;
            bottom: -105px;
        }
    }
    body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .blur-background {
            position: relative;
        }
        .blurred-content {
            filter: blur(5px);
            pointer-events: none;
        }
        .message-container {
            position: fixed;
            top: 50%;
            left: 59%;
            transform: translate(-50%, -50%);
            background-color: rgba(168 175 195 / 80%);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: none;
        }
        .message-container.active {
            display: block;
        }
        .loader {
    border: 4px solid rgba(0, 0, 0, 0.1);
    border-left: 4px solid #333; /* Adjust the color as needed */
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 1s linear infinite;
    margin-right: 10px; /* Adjust spacing as needed */
    margin-left: 43%;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<div class="blur-background">
    <div class="content-wrapper blurred-content">
        <section class="content">
            <div class="container-fluid">
                <!-- Certificate Demo -->
                <div class="container pm-certificate-container">
                    <!-- Certificate content -->
                    <div class="outer-border"></div>
                    <div class="inner-border"></div>
                    <div class="pm-certificate-border col-xs-12">
                        <div class="row pm-certificate-header">
                            <div class="pm-certificate-title cursive col-xs-12 text-center">
                                <h2>Buffalo Public Schools Certificate of Completion</h2>
                            </div>
                        </div>
                        <div class="row pm-certificate-body">
                            <div class="pm-certificate-block">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="pm-certificate-name underline margin-0 col-xs-12 text-center">
                                                <span class="pm-name-text bold">TrueNorth Administrator</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="pm-earned col-xs-12 text-center">
                                            <span class="pm-earned-text padding-0 block cursive">has earned</span>
                                            <span class="pm-credits-text block bold sans">PD175: 1.0 Credit Hours</span>
                                            <!-- New points for online classes -->
                                            <span class="pm-credits-text block bold sans">Online Classes: 3.0 Points</span>
                                        </div>
                                        <div class="col-xs-12"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="pm-course-title col-xs-12 text-center">
                                            <span class="pm-earned-text block cursive">while completing the training course entitled</span>
                                            <span class="pm-credits-text block bold sans">BPS PGS Initial PLO for Principals at Cluster Meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="pm-certificate-footer">
                                        <div class="col-xs-4 pm-certified col-xs-4 text-center">
                                            <span class="pm-credits-text block sans">Buffalo City School District</span>
                                            <span class="pm-empty-space block underline"></span>
                                            <span class="bold block">Crystal Benton Instructional Specialist II, Staff Development</span>
                                        </div>
                                        <div class="col-xs-4">
                                            <!-- LEAVE EMPTY -->
                                        </div>
                                        <div class="col-xs-4 pm-certified col-xs-4 text-center">
                                            <span class="pm-credits-text block sans">Date Completed</span>
                                            <span class="pm-empty-space block underline"></span>
                                            <span class="bold block">DOB: </span>
                                            <span class="bold block">Social Security # (last 4 digits)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Certificate Demo -->
            </div>
        </section>
    </div>
    <div class="message-container" id="message">
    <div class="message-box">
        <div class="loader"></div>
        <p>You will receive your certificate after one year.</p>
    </div>
</div>
</div>



<?php
$file = __DIR__ . "/StudentFooter.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "File not found: $file";}
?>
<script>
    // JavaScript to toggle message display
    document.querySelector('.blur-background').addEventListener('click', function() {
        document.querySelector('.message-container').classList.add('active');
    });
</script>