<?php include ROOT . '/views/layouts/header.php'; ?>

  <section class="my-account">
    <div class="container">
      <h3>Кабинет пользователя</h3>
      <h4>Привет, <?php echo $user['username']; ?>!</h4>
      <div>
        <ul>
          <li><a href="/cabinet/edit"><i class="fa fa-edit"></i> Редактировать данные</a></li>
          <li><a href="/cabinet/history"><i class="fa fa-edit"></i> Список покупок</a></li>
        </ul>
      </div>
    </div>
  </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>