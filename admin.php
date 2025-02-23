<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه موبایل</title>
    <link href="siteghaleb.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body  class="admin-page">
<?php
include("header.php");
?>

<div class="row">
    <h2 class="col" id="s">
        <a href="admin_add.php" id="s">+</a>
      محتوای سایت را وارد کنید
    </h2>
</div>
<?php
$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"SELECT * FROM `admin`");
mysqli_close($link);
$row=mysqli_fetch_array($result);

while($row){
?>
<div class="row">
    <img class="img-thumbnail m-1 p-1 w-50" src="<?php echo($row["imageurl"]) ?>" alt="">
    <span class="col-12 col-md h5"><?php echo($row["title"]) ?></span>
    <span class="col-12 col-md h6"><?php echo($row["text"]) ?> </span>
    <a class="btn btn-danger" href="admin_delete.php?id=<?php echo($row["id"]) ?>">-</a>
    <a class="btn btn-success" href="admin_edit.php?id=<?php echo($row["id"]) ?>">*</a>
</div>
<?php
$row=mysqli_fetch_array($result);
}

include("footer.php");
?>
</body>
<script src="bootstrap.bundle.min.js"></script>