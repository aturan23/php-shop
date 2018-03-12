<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="admin-product">
  <div class="container">
    <ul class="row">
      <li class="active"><a href="/admin">Админпанель</a></li>
      <li class="active"><a href="/admin/product">Управление товарами</a></li>
      <li>Редактировать товар</li>
    </ul>


    <h3>Добавить новый товар</h3>

    <?php if (isset($errors) && is_array($errors)): ?>
      <ul>
        <?php foreach ($errors as $error): ?>
          <li> - <?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div>
      <form action="#" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-4">
            <p>Название товара</p>
            <input type="text" name="name" placeholder="" value="">
          </div>

          <div class="col-4">
            <p>Стоимость, $</p>
            <input type="text" name="price" placeholder="" value="">
          </div>

          <div class="col-4">
            <p>Скидка</p>
            <input type="text" name="sale" placeholder="" value="">
          </div>

          <div class="col-12">
            <p>Категория</p>
            <select name="category_id">
              <?php if (is_array($categoriesList)): ?>
                <?php foreach ($categoriesList as $category): ?>
                  <option value="<?php echo $category['id']; ?>">
                    <?php echo $category['name']; ?>
                  </option>
                <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>

          <div class="col-6">
            <p>Производитель</p>
            <input type="text" name="brand" placeholder="" value="">
          </div>

          <div class="col-6">
            <p>Изображение товара</p>
            <input type="file" name="image" placeholder="" value="">
          </div>

          <div class="col-12">
            <p>Детальное описание</p>
            <textarea title="Описание" name="description"></textarea>
          </div>

          <div class="col-6">
            <p>Наличие на складе</p>
            <select name="availability">
              <option value="1" selected="selected">Да</option>
              <option value="0">Нет</option>
            </select>
          </div>

          <div class="col-6">
            <p>Акция</p>
            <select name="is_sale">
              <option value="1" selected="selected">Да</option>
              <option value="0">Нет</option>
            </select>
          </div>

          <div class="col-6">
            <p>Рекомендуемые</p>
            <select name="is_recommended">
              <option value="1" selected="selected">Да</option>
              <option value="0">Нет</option>
            </select>
          </div>

          <div class="col-6">
            <p>Статус</p>
            <select name="status">
              <option value="1" selected="selected">Отображается</option>
              <option value="0">Скрыт</option>
            </select>
          </div>

        </div>

        <input type="submit" name="submit" class="submit" value="Сохранить">

      </form>
    </div>
  </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

