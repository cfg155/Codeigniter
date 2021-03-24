<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <h4>ID : <?= $userData['id'] ?></h4>
        <h2>Name : <?= $userData['fullname'] ?></h2>
        <h2>Email : <?= $userData['email'] ?></h2>
        <h2>Gender : <?= $userData['gender'] ?></h2>
        <h2>IP Address : <?= $userData['ip_address'] ?></h2>
    </div>
</body>

</html>