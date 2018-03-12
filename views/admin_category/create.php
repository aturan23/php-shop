<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="admin-product">
  <div class="container">
    <ul class="row">
      <li class="active"><a href="/admin">Админпанель</a></li>
      <li class="active"><a href="/admin/category">Управление категориями</a></li>
      <li>Добавить категорию</li>
    </ul>

    <h3>Добавить новую категорию</h3>


    <?php if(isset($errors) && is_array($errors)): ?>
      <ul>
        <?php foreach($errors as $error): ?>
          <li> - <?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div class="col-lg-6">

      <form action="#" method="post">

        <p>Название</p>
        <input type="text" name="name" placeholder="" value="">

        <p>Порядковый номер</p>
        <input type="text" name="sort_order" placeholder="" value="">

        <p>Статус</p>
        <select name="status">
          <option value="1" selected="selected">Отображается</option>
          <option value="0">Скрыта</option>
        </select>

        <br><br>

        <input type="submit" name="submit" value="Сохранить">
      </form>
    </div>
  </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

