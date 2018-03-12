<?php include ROOT . '/views/layouts/header.php'; ?>

  <section>
    <div class="container">
      <div class="row">

        <div class="col-12">
          <?php if($result): ?>
            <div class="text-center">
              <p><i class="fa fa-check-circle"></i> Данные отредактированы!</p>
            </div>

          <?php else: ?>
            <?php if(isset($errors) && is_array($errors)): ?>
              <ul>
                <?php foreach($errors as $error): ?>
                  <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <div class="signup-form"><!--sign up form-->
              <h2>Редактирование данных</h2>
              <form action="#" method="post">
                <p>Имя:</p>
                <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>

                <p>Фамилия:</p>
                <input type="text" name="s_name" placeholder="Фамилия" value="<?php echo $s_name; ?>"/>

                <p>Пароль:</p>
                <input type="password" name="password" placeholder="Пароль" value="<?php echo $pass; ?>"/>
                <br/>
                <input type="submit" name="submit" class="submit" value="Сохранить"/>
              </form>
            </div><!--/sign up form-->

          <?php endif; ?>
          <br/>
          <br/>
        </div>
      </div>
    </div>
  </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>