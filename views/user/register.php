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
        <div class="text-center"><h2>Sign up</h2></div>
        <h4>First name</h4>
        <input title="Write your name" name="name" type="text" required>
        <h4>Second name</h4>
        <input title="Write your second name" name="s_name" type="text" required>
        <h4>E-mail</h4>
        <input title="Write your email" name="email" type="email" required>
        <h4>Password</h4>
        <input title="Write your password" name="password" type="password" required><br>
        <input type="submit" name="submit" class="form-valid" value="Sign up">
      </form>
    </div>
  </div>

  <?php include ROOT . '/views/layouts/footer.php' ?>