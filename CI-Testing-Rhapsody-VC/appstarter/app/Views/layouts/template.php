<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <!-- This is Navbar Module -->
    <?= $this->include('layouts/navbar.component.php') ?>

    <!-- Your content -->
    <?= $this->renderSection('content') ?>

    <!-- This is Footer Module-->
    <?= $this->include('layouts/footer.component.php'); ?>
</body>

</html>