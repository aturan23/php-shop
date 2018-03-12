<?php include ROOT . '/views/layouts/header.php'?>
  <section class="content">

    <div class="interesting">
      <div class="row">
        <div class="col-xl-4 col-lg-4"></div>
        <div class="text-center col-xl-4 col-lg-4">
          <h3 class="top-interesting">new arrivals</h3>
        </div>
        <div class="col-xl-4 col-lg-4"></div>
      </div>
      <div id="goods" class="row goods">

        <?php foreach($categoryProduct as $product): ?>
          <div class="goods-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="item">
              <a class="item__img" href="/product/<?php echo $product['id'] ?>">
                <img class="out" src="/template/img/models/<?php echo $product['img2903702']; ?>.jpg" alt="out">
                <img class="in" src="/template/img/models/<?php echo $product['img2903701']; ?>.jpg" alt="in">
              </a>
              <span class="item__wishelist"><a href=""><i class="fa fa-heart"></i></a></span>
              <?php if($product['is_sale']): ?>
                <span class="item__sale">sale</span>
              <?php endif; ?>
              <div class="item__desc">
                <div class="row margin-0">
                  <div class="desc__left">
                    <h3><a href="/product/<?php echo $product['id'] ?>"><?php echo $product['product_name']; ?></a></h3>
                    <span class="category">men</span>
                    <?php if($product['is_sale']): ?>
                      <span>$<?php echo $product['sale']; ?></span>
                    <?php else: ?>
                      <span>$<?php echo $product['price']; ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="desc__right">
                    <a href="#" class="add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-plus"></i></a>
                    <span>&nbsp;</span>
                    <?php if($product['is_sale']): ?>
                      <del>$<?php echo $product['price']; ?></del>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <div class="container text-center">
        <?php echo $pagination->get(); ?>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-3 col-lg-3">
            <div class="block">
              <div class="block__header"><h3>top-rated</h3></div>
              <!--<hr>-->
              <ul>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3">
            <div class="block">
              <div class="block__header"><h3>on-sale</h3></div>
              <!--<hr>-->
              <ul>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3">
            <div class="block">
              <div class="block__header"><h3>what you search</h3></div>
              <!--<hr>-->
              <ul>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3">
            <div class="block">
              <div class="block__header"><h3>new products</h3></div>
              <!--<hr>-->
              <ul>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
                <li class="block__items">
                  <div class="block__img"><a href=""><img src="/template/img/models/image1xxl14-90x90.jpg" alt="mini"></a>
                  </div>
                  <div class="block__desc">
                    <div class="block__itemname"><a href="">billionaire boys</a></div>
                    <span class="block__itemprice">$215</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="our-partners">
      <div class="inf-order container-fluid">
        <div class="row">
          <div class="order-features col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="order-icon">
              <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <div class="order-txt">
              <h3>Personal gifts</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat.</p>
            </div>
          </div>
          <div class="order-features col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="order-icon">
              <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
            </div>
            <div class="order-txt">
              <h3>Discount system</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="order-features col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="order-icon">
              <i class="fa fa-trophy" aria-hidden="true"></i>
            </div>
            <div class="order-txt">
              <h3>100% quality</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit.</p>
            </div>
          </div>
          <div class="order-features col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="order-icon">
              <i class="fa fa-truck" aria-hidden="true"></i>
            </div>
            <div class="order-txt">
              <h3>fast delivery</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="follow-us">
        <div class="row">
          <div class="col-xl-3">
            <div class="follow-img">

            </div>
            <div class="follow-inf"></div>
          </div>
          <div class="col-xl-3">
            <div class="follow-img">

            </div>
            <div class="follow-inf"></div>
          </div>
          <div class="col-xl-3">
            <div class="follow-img">

            </div>
            <div class="follow-inf"></div>
          </div>
          <div class="col-xl-3">
            <div class="follow-img">

            </div>
            <div class="follow-inf"></div>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php include ROOT . '/views/layouts/footer.php'?>