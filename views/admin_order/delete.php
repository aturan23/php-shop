<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="admin-product">
  <div class="container">
    <ul class="row">
      <li class="active"><a href="/admin">Админпанель</a></li>
      <li class="active"><a href="/admin/order">Управление заказами</a></li>
      <li>Удалить заказ</li>
    </ul>


    <h3>Удалить заказ #<?php echo $id; ?></h3>


    <p>Вы действительно хотите удалить этот заказ?</p>

    <form method="post">
      <input type="submit" name="submit" value="Удалить"/>
    </form>
  </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

