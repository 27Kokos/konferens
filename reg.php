<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kokodjam</title>
  <link rel="stylesheet" href="/css/styles.css?v=1.0">
</head>

<body>
  <?php include "header.php"; ?>
  <!-- Форма регистрации -->
  <div class="login">
    <div class="login-header">
    </div>
    <div class="login-form">
      <h3>Имя пользователя </h3>
      <input type="text" placeholder="Username" />
      <br>
      <h3>Почта</h3>
      <input type="email" placeholder="email" />
      <br>
      <h3>Пароль</h3>
      <input type="password" placeholder="Password" />
      <br>
      <input type="button" value="Зарегистрироваться" class="button" />
      <br>
    </div>
  </div>
  <script src="script.js"></script>
  <?php include "footer.php"; ?>
</body>

</html>