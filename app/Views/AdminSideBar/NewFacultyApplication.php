<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <?php include(APPPATH.'views/AdminSidebar.php');?>
    <style>
    .row {
        margin-left: 213px;
        height: auto;
        width: auto;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
    }

    thead {
        background-color: antiquewhite;
    }

    .approve-button {
        background-color: green;
        width: 69px;
    }

    .decline-button {
        background-color: red;
        width: 69px;
    }
    .btn-secondary{margin-left:255px ;}
    </style>
</head>

<body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url()?>today" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>


            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url(); ?>" class="nav-link">Logout</a>
            </li>

        </ul>

    </nav>
    <button type="button" class="btn btn-secondary" id="showVideoContainer">Pending Application</button>
    <button type="button" class="btn btn-warning" id="showImageContainer">Rejected List</button>
    <button type="button" class="btn btn-warning" id="showFaculty">create password For Faculty</button>
    <div class="container" id="videoContainer" style="display: none;">
        <div class="row">
            <h1><b> New Applicant List</b></h1>
            <table class="table">
                <thead>
                    <tr>
                        <th> Date</th>

                        <th> Applicant Name</th>
                        <th> Contact Number</th>
                        <th> Email</th>
                        <th> Course/Subcourse</th>

                        <th> Resume</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carrer as $faculty): ?>
                    <tr>
                        <?php
                      
                        $dateTime = new DateTime($faculty->Booking_Date_Time);
                        $date = $dateTime->format('Y-m-d');
                       
                        ?>

                        <td><?= $date ?></td>

                        <td><?= $faculty->name ?></td>
                        <td><?= $faculty->phone ?></td>
                        <td><?= $faculty->email ?></td>
                        <td><?= $faculty->course ?>/<?= $faculty->sub_course ?></td>

                        <td></td>
                        <td>
                          
                            <form method="POST" action="AdminController/Steusupdate">
                                <input type="hidden" name="action" value="approve">
                                <input type="hidden" name="D_id" value="<?= $faculty->D_id ?>">
                                <button class="approve-button" type="submit">Approve</button>
                            </form>
                            <form method="POST" action="AdminController/Steusupdate">
                                <input type="hidden" name="action" value="decline">
                                <input type="hidden" name="D_id" value="<?= $faculty->D_id ?>">
                                <button class="decline-button" type="submit">Decline</button>
                            </form>
                           
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container" id="imageContainer" style="display: none;">

    <div class="row">
    <h1><b> Rejected List</b></h1>
            <table class="table">
                <thead>
                    <tr>
                        <th> Date</th>

                        <th> Applicant Name</th>
                        <th> Contact Number</th>
                        <th> Email</th>
                        <th> Course/Subcourse</th>

                        <th> Resume</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cansalList as $facult): ?>
                    <tr>
                        <?php
                      
                        $dateTime = new DateTime($facult->Booking_Date_Time);
                        $date = $dateTime->format('Y-m-d');
                       
                        ?>

                        <td><?= $date ?></td>

                        <td><?= $facult->name ?></td>
                        <td><?= $facult->phone ?></td>
                        <td><?= $facult->email ?></td>
                        <td><?= $facult->course ?>/<?= $facult->sub_course ?></td>

                        <td></td>
                        <td>
                          
                            <form method="POST" action="AdminController/backtoApplication">
                                <input type="hidden" name="action" value="Pending">
                                <input type="hidden" name="D_id" value="<?= $facult->D_id ?>">
                                <button class="approve-button" type="submit">Back </button>
                            </form>
                           
                           
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
    </div>
    <div class="container" id="facultyContainer" style="display: none;">
        <div class="row">
        <h1><b> Create password</b></h1>
        <table class="table">
                <thead>
                    <tr>
                        <th> Date</th>

                        <th> Applicant Name</th>
                      
                        <th> Email</th>
                    

                        <th>Enter Password</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($createPassword as $Password): ?>
                    <tr>
                        <?php
                      
                        $dateTime = new DateTime($Password->created_at);
                        $date = $dateTime->format('Y-m-d');
                       
                        ?>

                        <td><?= $date ?></td>

                        <td><?= $Password->full_name ?></td>
                       
                        <td><?= $Password->email ?></td>
                       
                        <form method="POST" action="AdminController/createpassword">
                        <td>  <input type="password" class="form-control" id="passwordInput" name="password"  placeholder="Password"></td>
                        <td>
                         
                                <input type="hidden" name="id" value="<?= $Password->id ?>">
                                <button class="btn btn-info" type="submit">update Password </button>
                           
                        </td>
                        </form>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
document.getElementById("showVideoContainer").addEventListener("click", function() {
    document.getElementById("videoContainer").style.display = "block";
    document.getElementById("imageContainer").style.display = "none";
    document.getElementById("facultyContainer").style.display = "none";
});

document.getElementById("showImageContainer").addEventListener("click", function() {
    document.getElementById("imageContainer").style.display = "block";
    document.getElementById("videoContainer").style.display = "none";
    document.getElementById("facultyContainer").style.display = "none";
});

document.getElementById("showFaculty").addEventListener("click", function() {
    document.getElementById("facultyContainer").style.display = "block";
    document.getElementById("videoContainer").style.display = "none";
    document.getElementById("imageContainer").style.display = "none";
});
</script>
</body>

</html>