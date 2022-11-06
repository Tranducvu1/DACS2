<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name ="viewport" content="width=device-width",initial-scale=1,shrink-to-fit>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <link rel="stylesheet" href="app.css">
 <title>Product</title>
</head>
<body>

<h1>Create new products</h1>

<?php if(!empty($errors)): ?>
<div class= "alert alert-danger">
  <?php foreach ($errors as $error): ?>
  <div><?php echo $error ?></div>
<?php endforeach; ?>
</div>
<?php endif; ?>


<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label>ID</label>
    <input type="text" name="ID" class="form-control" value="<?php echo $mahang ?>">
  </div>

  <div class="form-group">
    <label>Danh mục</label>
    <input class="form-control" name="Danh mục" <?php echo $tenhang ?>></input>
  </div>

   <div class="form-group">
    <label>Loai san pham</label>
    <input type="text"  name="tonkho" class="form-control" value="<?php echo $tonkho ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</body>
</html>