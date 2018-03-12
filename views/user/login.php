<?php include ROOT . '/views/layouts/header.php' ?>
<div class="container center">
  <div class="login-form text-center">
    <form action="#" method="post">
      <?php if(isset($errors) && is_array($errors)): ?>
        <ul>
          <?php foreach($errors as $error): ?>
            <li> - <?php echo $error; ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <div class="text-center"><h2>Sign in</h2></div>
      <h4>E-mail</h4>
      <input title="Write your email" name="email" value="<?php echo $email; ?>" type="email" required>
      <h4>Password</h4>
      <input title="Write your password" value="<?php echo $pass; ?>" name="password" type="password" required>
      <div class="text-right"><a href="" class="forgot">Forgot your password?</a></div>
      <input type="submit" name="submit" class="form-valid" value="Sign in">
    </form>
  </div>
</div>
<?php include ROOT . '/views/layouts/footer.php' ?>