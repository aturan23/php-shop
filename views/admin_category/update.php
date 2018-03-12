<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="admin-product">
  <div class="container">
    <ul class="row">
      <li class="active"><a href="/admin">Админпанель</a></li>
      <li class="active"><a href="/admin/category">Управление категориями</a></li>
      <li>Редактировать категорию</li>
    </ul>

    <h3>Редактировать категорию "<?php echo $category['name']; ?>"</h3>

    <div class="col-6">
      <form action="#" method="post">

        <p>Название</p>
        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">

        <p>Порядковый номер</p>
        <input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>">

        <p>Статус</p>
        <select name="status">
          <option value="1" <?php if($category['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
          <option value="0" <?php if($category['status'] == 0) echo ' selected="selected"'; ?>>Скрыта</option>
        </select>

        <br><br>

        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
      </form>
    </div>
  </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

