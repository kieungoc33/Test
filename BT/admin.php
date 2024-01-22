<?php

    require 'connect.php';


    // Truy vấn dữ liệu từ cơ sở dữ liệu
    $sql = "SELECT * FROM `users` ";
    $result = mysqli_query($conn,$sql);


    if (!$result) {
        die("lôidddd". mysqli_error($conn));
    }
    
    
    



?>



<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>

    <form action="delete.php" method="GET">
    

        <div style="position: relative; top: 60px; right: -10px;">
            <table style="background-color: grey; border: 3px solid;">
                <thead>
                    <tr>
                        <td style="padding: 30px;">ID</td>
                        <td style="padding: 30px;">Name</td>
                        <td style="padding: 30px;">username</td>
                        
                        <td style="padding: 30px;">email</td>
                        
                        <td style="padding: 30px;">xóa</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if ($result->num_rows > 0) {
                            // Hiển thị dữ liệu trên trang web
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td> <?php echo $row['id'] ?> </td>
                                    <td> <?php echo $row['firstName'] ?> </td>
                                    <td> <?php echo $row['username'] ?> </td>
                                    
                                    
                                    <td> <?php echo $row['email'] ?> </td>
                                    
                                    <td> <a href="delete.php?id = <?php echo $row['id'] ?>">del</a></td>
                                </tr>
                                

                                <?php
                    
                            }
                        }


                    ?>




                </tbody>


            </table>
        </div>  

    
    </form>
  </body>

</html>