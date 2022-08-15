<?php

require_once '../vendor/autoload.php';

$userRepo = new UserRepository();

$users = $userRepo->findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container" style="margin-top: 50px">

<?php if (count($users) < 1): ?>


<?php endif; ?>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">User Local Time</th>
      <th scope="col">Account Age</th>
      <th scope="col">Account Active</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>21:30</td>
      <td>3y 4m</td>
      <td>Yes</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
