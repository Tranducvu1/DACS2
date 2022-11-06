
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
    <header>
        <h1>Sản phẩm</h1>
        </header>
    <section class="admin-content">
        <div class="admin-content-left">
            <ul>
                <li><a href="#">Danh muc</a>
                    <ul>
                        <li><a href="#">Thêm danh mục</a></li>
                        <li><a href="#">Danh sách danh mục</a></li>
                    </ul>
                </li>
                <li><a href="#">Loại sản phẩm</a>
                    <ul>
                        <li><a href="#">Thêm loại sản phẩm</a></li>
                        <li><a href="#">Danh sách loại sản phẩm</a></li>
                    </ul>
                </li>
                <li><a href="#">Sản phẩm</a>
                    <ul>
                        <li><a href="cartegoryadd.php">Thêm sản phẩm</a></li>
                        <li><a href="#">Danh sách sản phẩm</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST">
                    <label for="">Nhập tên sản phẩm<span style="color: red;">*</span></label>
                    <input type="text" placeholder="Nhập tên sản phẩm">
                    <select name="" id="">
                        <label value="">--Chọn danh mục<span style="color: red;">*</span></label>
                    </select>
                    <select name="" id="">
                        <option value="">--Chọn--</option>
                    </select>
                    <select name="" id="">
                        <label for="">--Chọn loại sản phẩm<span style="color: red;">*</span></label>
                        <option value="">--Chọn--</option>
                    </select>
                    <label for="">Giá sản phẩm<span style="color: red;">*</span></label>
                    <input type="text">
                    <label for="">Giá khuyến mãi<span style="color: red;">*</span></label>
                    <input type="text">
                    <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label>
                    <textarea name="" id cols="30" rows="10"></textarea>
                    <label for="">Ảnh sản phẩm<span style="color: red;">*</span></label>
                    <input type="file">
                    <label for="">Ảnh mô<span style="color: red;">*</span></label>
                    <input type="file">
                    <button type="submit">Thêm<span style="color: red;">*</span></button>
                </form>
            </div>
        </div>
    </section>
   </body>
</html>