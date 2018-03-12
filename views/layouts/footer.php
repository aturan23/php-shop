<footer class="container-fluid" style="margin-top: 250px">
  <div class="footer">
    <div class="row">
      <ul class="footer__about">
        <li><h3 class="footer__header"><span class="red">SH</span>ere</h3></li>
        <li><p class="footer__comdesc">This is easy to update text from footer widget area. Add here information about
            your store.</p></li>
        <li>
          <ul>
            <li><p>56 Abylay khana,</p></li>
            <li><p>Alma-Ara KZ 10016</p></li>
            <li><p>Email: <span>asylkhan001@gmail.com</span></p></li>
            <li><p>Phone: <span>+7 747 792 6783</span></p></li>
          </ul>
        </li>
      </ul>
      <ul class="footer__links">
        <li>
          <h3>useful links</h3>
          <hr>
        </li>
        <li class="footer__useful">
          <ul>
            <li><a href="">home page</a></li>
            <li><a href="">about us</a></li>
            <li><a href="">delivery info</a></li>
            <li><a href="">order tracking</a></li>
            <li><a href="">order tracking</a></li>
            <li><a href="">order tracking</a></li>
          </ul>
        </li>
        <li class="footer__useful">
          <ul>
            <li><a href="">my account</a></li>
            <li><a href="">my basket</a></li>
            <li><a href="">my wishlist</a></li>
            <li><a href="">page 404</a></li>
            <li><a href="">page 404</a></li>
            <li><a href="">page 404</a></li>
          </ul>
        </li>
      </ul>
      <div class="footer__tags">

      </div>
    </div>
  </div>
</footer>

<!--Styles and script-->
<link rel="stylesheet" href="/template/css/font-awesome.min.css">
<link rel="stylesheet" href="/template/css/main.min.css">
<script src="/template/js/scripts.min.js"></script>
<script src="/template/libs/slick/slick.min.js"></script>
<script>
  $(document).ready(function () {
    $(".add-to-cart").on('click', function () {
      var id = $(this).attr("data-id");
      $.ajax(
        {
          url: '/cart/addAjax/' + id,
          type: 'POST',
          cache: false,
          success: function (result) {
            $("#cart-count").text(result);
          }
        }
      );
      return false;
    });

    $(".add-to-comment").on('click', function () {
      var str = 'submit=1&comment=' + $('#comment').val();
      $.ajax(
        {
          url: '/product/comment',
          type: 'POST',
          data: str,
          cache: false,
          success: function (result) {
            alert(result);
          }
        }
      );
      window.location.href = "/product/<?php echo $product['id']; ?>";
      return false;
    })
  })
</script>

<!--Styles and script-->
</body>
</html>