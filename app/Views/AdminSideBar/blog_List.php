<?php echo view('AdminSideBar.php'); ?>

<div class="content-wrapper" style="min-height: 1172.73px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blog List</li>
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Short Description</th>
                                            <th>Long Description</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($blogs as $blog) : ?>
                                            <tr id="row_<?php echo $blog->id; ?>">
                                                <td id="title_<?php echo $blog->id; ?>"><?php echo $blog->title; ?></td>
                                                <td id="short_desc_<?php echo $blog->id; ?>" style="max-height: 40px; overflow: hidden; text-overflow: ellipsis;"><?php echo $blog->short_desc; ?></td>
                                                <td id="long_desc_<?php echo $blog->id; ?>" style="max-height: 40px; overflow: hidden; text-overflow: ellipsis;"><?php echo $blog->long_desc; ?></td>
                                                <td id="image_<?php echo $blog->id; ?>"><img src="<?php echo base_url('public/uploads/blog_img/' . $blog->image); ?>" width="100" alt="<?php echo $blog->image; ?>"></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <i class="far fa-edit me-2 btn-edit" data-id="<?php echo $blog->id; ?>"></i>
                                                        <button class="btn btn-success btn-save" data-id="<?php echo $blog->id; ?>" style="display:none;">Save</button>
                                                    </div>
                                                    <i class="far fa-trash-alt me-2 text-danger btn-delete" data-id="<?php echo $blog->id; ?>"></i>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Edit button click event
        $('.btn-edit').click(function() {
            var id = $(this).data('id');
            $('#title_' + id).html('<input type="text" class="form-control" id="edit_title_' + id + '" value="' + $('#title_' + id).text() + '">');
            $('#short_desc_' + id).html('<textarea class="form-control" id="edit_short_desc_' + id + '">' + $('#short_desc_' + id).text() + '</textarea>');
            $('#long_desc_' + id).html('<textarea class="form-control" id="edit_long_desc_' + id + '">' + $('#long_desc_' + id).text() + '</textarea>');
            $('#image_' + id).html('<input type="file" class="form-control-file" id="edit_image_' + id + '">'); // Add image input field
            $(this).hide();
            $(this).siblings('.btn-save').show();
        });

        // Save button click event
        $('.btn-save').click(function() {
            var id = $(this).data('id');
            var title = $('#edit_title_' + id).val();
            var short_desc = $('#edit_short_desc_' + id).val();
            var long_desc = $('#edit_long_desc_' + id).val();
            var image = $('#edit_image_' + id).prop('files')[0]; // Get the edited image file

            // Prepare form data
            var formData = new FormData();
            formData.append('id', id);
            formData.append('title', title);
            formData.append('short_desc', short_desc);
            formData.append('long_desc', long_desc);
            if (image) {
                formData.append('image', image);
            }

            // Perform AJAX request to update the blog post
            $.ajax({
                url: '<?php echo base_url('update_blog'); ?>',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Update the table cell with the new values
                    $('#title_' + id).html(title);
                    $('#short_desc_' + id).html(short_desc);
                    $('#long_desc_' + id).html(long_desc);
                    $('#row_' + id + ' .btn-edit').show();
                    $('#row_' + id + ' .btn-save').hide();
                    location.reload();
                }
            });
        });

        // Delete button click event
        $('.btn-delete').click(function() {
            var id = $(this).data('id');

            // Show edit and save buttons
            $('#row_' + id + ' .btn-edit').show();
            $('#row_' + id + ' .btn-save').hide();

            // Confirm deletion
            if (confirm("Are you sure you want to delete this blog post?")) {
                // Perform AJAX request to delete the blog post
                $.ajax({
                    url: '<?php echo base_url('delete_blog'); ?>',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        // Remove the table row from the DOM
                        $('#row_' + id).remove();
                    }
                });
            }
        });
    });
</script>

<?php echo view('AdminSideBar/AdminFooter.php');?>
