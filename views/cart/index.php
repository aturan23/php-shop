<?php include ROOT . '/views/layouts/header.php' ?>
  <div class="item_list">
    <div class="container">
      <?php if($productsInCart): ?>
        <div class="item_list__header">
          <h3>cart</h3>
          <p>you've got 3 items in the cart</p>
        </div>
        <div class="item_list__items">
          <table>
            <thead>
            <tr>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($products as $product): ?>
              <tr>
                <td><a class="item_list__remove" href="/cart/delete/<?php echo $product['id']; ?>"><i class="fa fa-remove"></i></a></td>
                <td>
                  <a class="item_list__img" href="/product/<?php echo $product['id'] ?>"><img src="/template/img/models/<?php echo $product['img70901']; ?>.jpg" alt="cart"></a>
                </td>
                <td>
                  <a href="/product/<?php echo $product['id'] ?>"><?php echo $product['product_name']; ?></a>
                </td>
                <?php if($product['is_sale']): ?>
                  <td><a href=""></a>$<?php echo $product['sale']; ?></td>
                <?php else: ?>
                  <td><a href=""></a>$<?php echo $product['price']; ?></td>
                <?php endif; ?>
                <td><a class="product__count" href="">
                    <input type="button" value="-">
                    <input class="count" type="number" step="1" min="1" size="4" pattern="[0-9]*" value="<?php echo $productsInCart[$product['id']]; ?>">
                    <input type="button" value="+">
                  </a>
                </td>
                <?php if($product['is_sale']): ?>
                  <td><a href="">$<?php echo $productsInCart[$product['id']] * $product['sale']; ?></a></td>
                <?php else: ?>
                  <td><a href="">$<?php echo $productsInCart[$product['id']] * $product['price']; ?></a></td>
                <?php endif; ?>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="item_list__header">
          <h3>Total: $<?php echo $totalPrice; ?></h3>
          <p><a href="/cart/checkout">Оформить заказ</a></p>
        </div>
      <?php else: ?>
        <div class="item_list__header">
          <h3>cart</h3>
          <p>you've got 0 items in the cart</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php include ROOT . '/views/layouts/footer.php' ?>