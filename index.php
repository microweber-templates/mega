<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo template_url(); ?>dist/style.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>

<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" data-layout-container rel="content" field="content">
    <module type="layouts" template="hero/skin-1"/>
</div>

<?php include template_dir() . "footer.php"; ?>

</body>
</html>
