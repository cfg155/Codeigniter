<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- Insert to Table -->
        <form action="/home/insert" method="POST" class="form">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" name="fullname" placeholder="">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="">
            </div>

            <div class="mb-3">
                <label for="">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male">
                    <label class="form-check-label" for="genderRadio">
                        Male
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female">
                    <label class="form-check-label" for="genderRadio">
                        Female
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="ip-add" class="form-label">IP_Address</label>
                <input type="text" class="form-control" name="ip_address" placeholder="Ex : 123.456.78">
            </div>

            <div class="mb-3">
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </form>

        <!-- View Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userData as $item) : ?>
                    <tr class="user-data">
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['fullname'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><button class="btn btn-primary"><a href="/detail/<?= $item['id'] ?>" class="text-white text-decoration-none">Detail</a></button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>