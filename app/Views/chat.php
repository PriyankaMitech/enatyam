
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Realtime Chat App | CodingNepal</title>
  <link rel="stylesheet" href="<?=base_url(); ?>/dist/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
      $builder = $db->table('register');
      $builder->where('id', $_SESSION['id']);
      $query = $builder->get();
    //   echo "<pre>";print_r($query);exit();
    //   echo $_SESSION['id'];exit();
      // Check if there are rows
      if ($query->getNumRows() > 0) {
          // Fetch the result row
          $row = $query->getRowArray();
          // Rest of your code...
        //   echo "<pre>";print_r( $row);exit();
      }
          ?>
          <img src="<?=base_url(); ?>/dist/img/avatar5.png" alt="">
          <div class="details">
            <span><?php echo $row['full_name']. " " . $row['full_name'] ?></span>
            <p>Active</p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>


</body>
</html>
