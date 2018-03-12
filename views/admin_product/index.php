<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="admin-product">
  <div class="container">
    <ul class="row">
      <li class="active"><a href="/admin">Админпанель</a></li>
      <li>Управление товарами</li>
    </ul>

    <a href="/admin/product/create" class="admin-add"><i class="fa fa-plus"></i> Добавить товар</a>

    <h3>Список товаров</h3>

    <table class="">
      <thead>
      <tr>
        <th>ID товара</th>
        <th>Название товара</th>
        <th>Цена</th>
        <th>Скидка</th>
        <th>Редактировать</th>
        <th>Удалить</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach($productsList as $product): ?>
        <tr>
          <td><?php echo $product['id']; ?></td>
          <td><?php echo $product['product_name']; ?></td>
          <td><?php echo $product['price']; ?></td>
          <td><?php echo $product['sale']; ?></td>
          <td>
            <a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a>
          </td>
          <td>
            <a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

