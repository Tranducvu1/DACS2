<?php  
    include "header.php";
    include "slider.php";
    ?>
<?php 
session_start();
$conn = mysqli_connect("localhost","root","","sinhvien");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/Admin/style.css">
        <link rel="stylesheet" href="css/screen-index.css">
        <link rel="stylesheet" href="js/main.js">
        <title>Yody</title>
    </head>
   <body>
   <div class="admin-content-right">
            <div class="admin-content-right-cartegory_list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Tùy biến</th>
                   </tr> 
                   <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="">Sửa</a><a href="">Xóa</a>
                        </td>
                   </tr>
                </table>
            </div>
        </div>
    </section>
   </body>
</html>