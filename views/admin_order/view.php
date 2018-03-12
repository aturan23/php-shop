<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="admin-product">
  <div class="container">
    <ul class="row">
      <li class="active"><a href="/admin">Админпанель</a></li>
      <li class="active"><a href="/admin/order">Управление заказами</a></li>
      <li>Просмотр заказа</li>
    </ul>

    <h3>Просмотр заказа #<?php echo $order['id']; ?></h3>

    <h3>Информация о заказе</h3>

    <table class="table-admin-small table-bordered table-striped table">
      <tr>
        <td>Номер заказа</td>
        <td><?php echo $order['id']; ?></td>
      </tr>
      <tr>
        <td>Имя клиента</td>
        <td><?php echo $order['user_name']; ?></td>
      </tr>
      <tr>
        <td>Телефон клиента</td>
        <td><?php echo $order['user_phone']; ?></td>
      </tr>
      <tr>
        <td>Комментарий клиента</td>
        <td><?php echo $order['user_comment']; ?></td>
      </tr>
      <?php if($order['user_id'] != 0): ?>
        <tr>
          <td>ID клиента</td>
          <td><?php echo $order['user_id']; ?></td>
        </tr>
      <?php endif; ?>
      <tr>
        <td><b>Статус заказа</b></td>
        <td><?php echo Order::getStatusText($order['status']); ?></td>
      </tr>
      <tr>
        <td><b>Дата заказа</b></td>
        <td><?php echo $order['date']; ?></td>
      </tr>
    </table>

    <h3>Товары в заказе</h3>

    <table class="table-admin-medium table-bordered table-striped table ">
      <tr>
        <th>ID товара</th>
        <th>Акция</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
      </tr>
      <?php foreach($products as $product): ?>
        <tr>
          <td><?php echo $product['id']; ?></td>
          <?php if($product['is_sale']): ?>
            <td><?php echo $product['sale']; ?></td>
          <?php else: ?>
            <td>Без скидки</td>
          <?php endif; ?>
          <td><?php echo $product['product_name']; ?></td>
          <td>$<?php echo $product['price']; ?></td>
          <td><?php echo $productsQuantity[$product['id']]; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <a href="/admin/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

