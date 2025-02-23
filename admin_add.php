<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه موبایل</title>
    <link href="siteghaleb.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php
include("header.php");
?>

<div class="row">
    <p class="col" id="s">متن سایت را وارد کنید</p>
</div>
<form action="admin_add_action.php" method="post" enctype="multipart/form-data" class="row m-2">
    <input type="file" class="col-12 col-md card m-1" 
    name="image">

    <input type="text" class="col-12 col-md card m-1" 
    name="title" placeholder="عنوان">

    <input type="text" class="col-12 col-md card m-1" 
    name="text" placeholder="متن خبر">

    <input type="submit" class="col-12 col-md card m-1" 
    value="ذخیره">
</form>

<?php
include("footer.php");
?>
<script src="bootstrap.bundle.min.js"></script>