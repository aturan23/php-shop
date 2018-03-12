<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="admin-content">
  <div class="container">
    <h3>Добрый день, администратор!</h3>
    <p>Вам доступны такие возможности:</p>
    <ul>
      <li><a href="/admin/product"><i class="fa fa-edit"></i> Управление товарами</a></li>
      <li><a href="/admin/category"><i class="fa fa-edit"></i> Управление категориями</a></li>
      <li><a href="/admin/order"><i class="fa fa-edit"></i> Управление заказами</a></li>
    </ul>
  </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

