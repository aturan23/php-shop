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
    })
  })
</script>

<!--Styles and script-->
</body>
</html>