<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
<style>.video-row {
    display: flex;
    justify-content: space-between; /* Distribute videos evenly within the row */
    margin-bottom: 20px; /* Add some space between rows */
}

.video-card {
    width: 30%; 
    border: 1px solid #ccc;
    padding: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.video-info {
    margin-top: 10px;
}
</style>
</head>

<body>
    
<?php include('FacultySidebar2.php'); ?>
<div class="center" style="margin-left: 260px;">
    <div class="video-container" style="max-width: 1000px;"> <!-- Adjust max-width as needed -->
        <?php if (!empty($results)): ?>
            <div class="video-row">
                <?php $videoCount = 0; ?>
                <?php foreach ($results as $result): ?>
                    <div class="video-card" style="width: 19%; margin: 1%;"> <!-- Adjust width and margin as needed -->
                        <video width="100%" height="auto" controls> <!-- Adjust the video size -->
                            <source src="<?= base_url('public/uploads/StudentStudyvideos/' . $result->name) ?>" type="video/mp4">
                        </video>
                        <div class="video-info"> <!-- Create a container for video information -->
                            <b><p>Uploaded by: <?= $result->Student_name ?></p></b>
                            <b><p>Uploaded Date/Time: <?= $result->DateTime ?></p></b>
                        </div>
                    </div>
                    <?php
                    $videoCount++;
                    if ($videoCount % 5 == 0) { // Display 5 videos in one row
                        echo '</div><div class="video-row">';
                    }
                    ?>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No videos found.</p>
        <?php endif; ?>
    </div>
</div>


</body>

</html>