<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 550px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {
        height: auto;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row content">
      <?php
      include '../../layout/menu_admin.php';
      ?>
      <div class="col-sm-9">
        <div class="well">
          <h4>DANH SÁCH USER</h4>
          <p>Some text..</p>
        </div>

        <?php
        //session_start();
        //var_dump($_SESSION["listuser"]);
        for ($i = 0; $i < count($_SESSION["listuser"]); $i++) {
          echo '<div class="row">';

          echo '<div class="col-sm-2">';
          echo '<div class="well">';
          echo '<p>ID: ' . $_SESSION["listuser"][$i]["userid"] . '</p> ';
          echo '</div>';
          echo '</div>';

          echo '<div class="col-sm-5">';
          echo '<div class="well">';
          echo '<p>Usernamse: ' . $_SESSION["listuser"][$i]["username"] . '</p> ';
          echo '</div>';
          echo '</div>';

          echo '<div class="col-sm-5">';
          echo '<div class="well">';
          echo '<p>Password: ' . $_SESSION["listuser"][$i]["password"] . '</p> ';
          echo '</div>';
          echo '</div>';

          echo '</div>';
        }

        ?>
      </div>
    </div>
  </div>

</body>

</html>