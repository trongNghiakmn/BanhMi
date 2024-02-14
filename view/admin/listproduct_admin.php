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
          <h4>DANH SÁCH SẢN PHẨM</h4>
          <p>Some text..</p>
        </div>
        
        <?php
        //session_start();
        //var_dump($_SESSION["listproduct"]);
        for($i=0;$i<count($_SESSION["listproduct"]);$i++){
          echo '<div class="row">';

          echo '<div class="col-sm-12">';
          echo '<div class="well">';
          echo '<p>ID Bánh: '.$_SESSION["listproduct"][$i]["mabanh"].'</p> ';
          echo '<p>Tên Bánh: '.$_SESSION["listproduct"][$i]["tenbanh"].'</p> ';
          echo '<p>Mô Tả: '.$_SESSION["listproduct"][$i]["mota"].'</p> ';
          echo '<p>Giá: '.$_SESSION["listproduct"][$i]["gia"].'</p> ';
          echo 'Hình: <image src="../../'.$_SESSION["listproduct"][$i]["hinh"].'" width="100px"/>';
          echo '<p>ID Loại: '.$_SESSION["listproduct"][$i]["maloai"].'</p> ';
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