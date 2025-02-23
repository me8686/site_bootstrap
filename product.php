<?php include('header.php'); ?>
<?php
$link = mysqli_connect("localhost", "root", "", "site");
$result = mysqli_query($link, "SELECT * FROM product");
mysqli_close($link);
?>

<link href="bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.bundle.min.js"></script>

<div class="container my-5">
    <h2 class="text-center mb-4" id="s">محصولات</h2>
    <div class="row">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" id="ab"><?php echo $row['title']; ?></h5>
                        <p class="card-text" id="cw">رم: <?php echo $row['ram']; ?>GB</p>
                        <p class="card-text" id="cw">حافظه: <?php echo $row['storage']; ?>GB</p>
                        <p class="card-text" id="cw">وضعیت سیم‌کارته: <?php echo $row['dual_sim']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('footer.php'); ?>
