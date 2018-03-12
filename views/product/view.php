<?php include ROOT . '/views/layouts/header.php' ?>

  <div class="single-product">
    <div class="container">
      <div class="product">
        <div class="row single-product-product">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="product-img">
              <div class="product-img-main slider">
                <div class="slider_zoom">
                  <img src="/template/img/models/<?php echo $product['img5557101']; ?>.jpg" alt=""></div>
                <div class="slider_zoom">
                  <img src="/template/img/models/<?php echo $product['img5557102']; ?>.jpg" alt=""></div>
                <div class="slider_zoom">
                  <img src="/template/img/models/<?php echo $product['img5557103']; ?>.jpg" alt=""></div>
                <div class="slider_zoom">
                  <img src="/template/img/models/<?php echo $product['img5557104']; ?>.jpg" alt=""></div>
              </div>
              <div class="catalog-slider slider-nav">
                <div class="slick__item"><img src="/template/img/models/<?php echo $product['img70901']; ?>.jpg" alt="">
                </div>
                <div class="slick__item"><img src="/template/img/models/<?php echo $product['img70902']; ?>.jpg" alt="">
                </div>
                <div class="slick__item"><img src="/template/img/models/<?php echo $product['img70903']; ?>.jpg" alt="">
                </div>
                <div class="slick__item"><img src="/template/img/models/<?php echo $product['img70904']; ?>.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="product-description">
              <h3><?php echo $product['product_name']; ?></h3>
              <span class="product-category">men</span>
              <div class="rating-star-icons">
                <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                <span>(1 customer review)</span>
              </div>
              <p class="product-desc"><?php echo $product['description']; ?></p>
              <div class="product-price">
                <?php if($product['is_sale']): ?>
                  <span>$<?php echo $product['sale']; ?></span>
                  <del>$<?php echo $product['price']; ?></del>
                <?php else: ?>
                  <span>$<?php echo $product['price']; ?></span>
                <? endif; ?>
              </div>
              <form class="product__count" action="">
                <input type="button" value="-">
                <input class="count" type="number" step="1" min="1" size="4" pattern="[0-9]*" value="1">
                <input type="button" value="+">
                <input type="button" value="+ ADD TO CART" class="add-to-cart" data-id="<?php echo $product['id']; ?>">
              </form>
              <div class="product-add-to-wishlist">
                <a class="product-wishlist" href="">
                  <i class="fa fa-heart-o"></i> Add to wishlist
                </a>
              </div>
              <div class="product-information">
                <span>product id:</span><b><?php echo $product['id']; ?></b><br>
                <span>category:</span><b>men</b>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="tabs">
              <input type="radio" name="tab" id="tab-1" checked>
              <label for="tab-1">Additional information</label>
              <input type="radio" name="tab" id="tab-2">
              <label for="tab-2">Reviews (1)</label>

              <div class="tab-content">
                <article class="tab-1">
                  <table class="product-attributes">
                    <tbody>
                    <tr>
                      <th>weigh</th>
                      <td>12 kg</td>
                    </tr>
                    <tr>
                      <th>dimensions</th>
                      <td>12 X 51 X 21 cm</td>
                    </tr>
                    <tr>
                      <th>material</th>
                      <td>60% cotton, 40% polyester</td>
                    </tr>
                    <tr>
                      <th>size</th>
                      <td>regular fit - true to size</td>
                    </tr>
                    <tr>
                      <th>fit</th>
                      <td>thick jersey, sweat fabric</td>
                    </tr>
                    <tr>
                      <th>wash</th>
                      <td>machine wash</td>
                    </tr>
                    <tr>
                      <th>trim</th>
                      <td>thick jersey, sweat fabric</td>
                    </tr>
                    </tbody>
                  </table>
                </article>
                <article class="tab-2">
                  <h3><span>1</span> review for <span>cheap monday</span></h3>
                  <?php
                  $conn = mysqli_connect('localhost', 'root', '', 'cr15716_wfs');
                  $query = mysqli_query($conn, 'SELECT uname, r_txt FROM `reviews` ORDER BY id DESC');
                  if(!mysqli_num_rows($query)) {
                    echo '<h3>Комментарий к этомй записи пуст!</h3>';
                  } else {
                    while($row = mysqli_fetch_assoc($query)) {
                      $uname = mysqli_query($conn, "SELECT username FROM user WHERE id = $row[uname]");
                      $user = mysqli_fetch_assoc($uname);
                      echo '
                  <div class="comment">
                    <div class="author-avatar">
                      <img class="avatar" src="/template/img/models/avatar.png" alt="">
                    </div>
                    <div class="data-rating">
                      <div class="data">
                        <h4>'. $user['username'] .'</h4>
                        <span>january 11, 2017</span>
                        <h5>'. $row['r_txt'] .'</h5>
                      </div>
                      <div class="rating">
                        <a href=""><i class="rating-yellow fa fa-star-o" aria-hidden="true"></i></a>
                        <a href=""><i class="rating-yellow fa fa-star-o" aria-hidden="true"></i></a>
                        <a href=""><i class="rating-yellow fa fa-star-o" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </div>';
                    }
                  }

                  ?>
                  <hr>
                  <div class="add-review">
                    <h3>add a review</h3>
                    <form action="#" method="post">
                      <span>your rating</span><br>
                      <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-star-o" aria-hidden="true"></i></a>
                      <div class="review-comment">
                        <div class="comment-area">
                          <textarea class="form-control comment-text" name="comment" id="comment" cols="45" rows="8" placeholder="Your review" required></textarea>
                        </div>
                        <div class="send-form">
                          <input class="submit add-to-comment" name="submit" type="submit" value="Submit">
                        </div>
                      </div>
                    </form>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <section class="blogs">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-4">

        </div>
        <div class="col-xl-4 col-lg-4">

        </div>
        <div class="col-xl-4 col-lg-4">

        </div>
      </div>
    </div>
  </section>

<?php include ROOT . '/views/layouts/footer.php' ?>