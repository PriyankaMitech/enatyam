<?php echo view('AdminSideBar.php'); ?>
<!-- <style>
.group-button {
    margin-right: 10px;
    cursor: pointer;
}

.group-records {
    border: 1px solid #ddd;
    padding: 10px;
    display: none;
    margin-top: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th,
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.faculty-dropdown {
    width: 100%;
}
</style> -->
<style>
.group-records {
    display: none;
}
</style>

<div class="content-wrapper" style="min-height: 1172.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Groups of Student</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Groups of Student</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

        <div class="row">
    <div class="col-md-4">
        <label for="course">Select Course:</label>
        <select id="course" class="form-control">
            <option value="">Select Courses</option>
            <?php foreach ($cource as $course): ?>
                <option value="<?= $course['course'] ?>"><?= $course['course'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="col-md-4">
        <label for="subcourse">Select Subcourse:</label>
        <select id="subcourse" class="form-control">
            <option value="">Select Subcourses</option>
            <?php foreach ($sub_course as $subcourse): ?>
                <option value="<?= $subcourse['sub_course'] ?>"><?= $subcourse['sub_course'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="col-md-4">
        <label for="group">Select Group:</label>
        <select id="group" class="form-control">
            <option value="">Select Groups</option>
            <?php foreach ($groups as $group): ?>
                <option value="<?= $group['groupName'] ?>"><?= $group['groupName'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>


            <div class="row mt-3 group-records">
                <div class="col-md-12">
                    <table id="recordsTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Course</th>
                                <th>Subcourse</th>
                                <!-- Add more headers as needed -->
                            </tr>
                        </thead>
                        <tbody id="recordsBody"></tbody>
                    </table>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4" id="facultySelectionDropdown"></div>
                <div class="col-md-4" style="margin-top: 51px;">
                    <button type="submit" id="changefb" class="btn btn-warning changef" style="display:none">Change
                        Faculty</button>
                    <button type="submit" id="assignfb" class="btn btn-success changef" style="display:none">Assign
                        Faculty</button>

                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('AdminSideBar/AdminFooter.php'); ?>