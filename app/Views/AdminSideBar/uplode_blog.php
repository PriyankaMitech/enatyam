<?php echo view('AdminSideBar.php'); ?>
<div class="content-wrapper" style="min-height: 1172.73px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create a New Blog Post</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="upload_blogs" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="course">Select Course:</label>
                                            <select class="form-control" id="course" name="course" required>
                                                <option value="">Select Course</option>
                                                <?php foreach ($courses_data as $course): ?>
                                                <option value="<?php echo $course->id; ?>">
                                                    <?php echo $course->courses_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="short_desc">Short Description:</label>
                                            <textarea class="form-control" id="short_desc" name="short_desc" rows="4"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="long_desc">Long Description:</label>
                                            <textarea class="form-control" id="long_desc" name="long_desc" rows="8"
                                                required></textarea>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        <input type="file" class="form-control-file" id="image" name="image"
                                            accept="image/*" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('AdminSideBar/AdminFooter.php');?>