<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FacultySchedule</title>

    <?php include(APPPATH.'views/FacultySidebar2.php');?>

    <style>
    .center-buttons {
        margin-left: 255px;
        margin-top: 20px;
        /* Adjust the margin to provide space */
    }

    .center-buttons button {

        /* Green background color */
        color: white;
        border: none;
        padding: 10px 20px;
        /* Adjust padding to control button size */
        margin: 10px;
        /* Adjust margin to create space between buttons */
        cursor: pointer;
        border-radius: 5px;
    }



    table {
        width: 55%;
        border-collapse: collapse;
        border: 1px solid #ccc;
        margin-left: 291px;
        margin-top: 26px;
    }

    table th {
        padding: 10px;
        text-align: left;
        background-color: #f2f2f2;
    }

    table td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    .reschedule-button {
        background-color: #FF6347;
        /* A red or coral background color */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .take-demo-button {
        background-color: red;
        /* Green background color */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    </style>
</head>

<body>

    <nav class="main-header navbar navbar-expand navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url(); ?>home" class="nav-link">Logout</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url(); ?>FacultyDashboard" class="nav-link">Dashboard</a>
            </li>

        </ul>

        <!-- Right navbar links -->

    </nav>
    <div class="center-buttons">
        <button class="btn btn-warning" onclick="showTable1()">Today Demo</button>
        <button class="btn btn-info" onclick="showTable2()"> Demo List</button>
    </div>
  
    <section>

        <table id="table1" style="display: none;">
        
            <thead>
                
                <tr>
                    <th>Name</th>
                    <th>Date/Time</th>
                    <th>Course/subcorce</th>
                    <th>Stetus</th>

                    <!-- Add more columns here -->
                </tr>
            </thead>
            <tbody>
                
                <?php foreach ($data as $item): ?>
                <tr>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['Book_Date_Time'] ?></td>
                    <td><?= $item['course']; ?>/<?= $item['sub_course']; ?></td>

                    <td>
                        <?php
            //              if ($item['Conducted_Demo'] === 'N') {
            //              $today = date('Y-m-d');
            //              $demoDate = date('Y-m-d', strtotime($item['Book_Date_Time']));
        
            //   if ($demoDate < $today) {
            //   echo '<button type="button" class="reschedule-button">Reschedule</button>';
            //   } else {
            //   echo '<button type="button" class="take-demo-button">Take Demo</button>';
   //     }
 //   }
    ?> <button type="button" class="btn btn-secondary">Take Demo</button>
                    </td>
                    <!-- Add more columns here -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </section>

    <section>
        <table id="table2" style="display: none;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date/Time</th>
                    <th>Course</th>
                    <th>Stetus</th>
                    <!-- Add more columns here -->
                </tr>
            </thead>

            <tbody>
                <?php foreach ($allData as $ite): ?>

                <tr>

                    <td><?= $ite['name']; ?></td>
                    <td> <?php
                    if ($ite['Reshedule_date'] !== null) {
                        echo $ite['Reshedule_date'] . ' ' . $ite['Reshedule_Time'];
                    } else {
                        echo $ite['Book_Date_Time'];
                        
                    }
                    ?></td>
                    <td><?= $ite['course']; ?></td>

                    <td>
                        <?php
                    $today = date('Y-m-d');
                    $demoDate = date('Y-m-d', strtotime($ite['Book_Date_Time']));
                   
                   if ($today < $demoDate) {
                    echo '<p style="background-color: darkgoldenrod;">Be ready For Take Demo</p>';
                } elseif ($ite['Reshedule_date'] !== null && strtotime($ite['Reshedule_date']) > strtotime($today)) {
                    echo '<p style="background-color: aquamarine;">Be ready For Take Demo</p>';
                } else {
                    echo '<p style="background-color: aquamarine;">Wait For Reschedule</p>';
                }
                    ?>
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <script>
    function showTable1() {
        document.getElementById('table1').style.display = 'table';
        document.getElementById('table2').style.display = 'none';
    }

    function showTable2() {
        document.getElementById('table1').style.display = 'none';
        document.getElementById('table2').style.display = 'table';
    }
    </script>
</body>

</html>