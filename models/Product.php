<?php

class Product
{
  const SHOW_BY_DEFAULT = 8;

  public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
  {
    $count = intval($count);
    $db = Db::getConnection();

    $productsList = [];

    $result = $db->query('SELECT id, product_name, price, sale, img2903701, img2903702, is_sale FROM product '
      . 'WHERE status = "1" '
      . 'ORDER BY id DESC LIMIT ' . $count);
    $i = 0;
    while($row = $result->fetch()) {
      $productsList[$i]['id'] = $row['id'];
      $productsList[$i]['product_name'] = $row['product_name'];
      $productsList[$i]['price'] = $row['price'];
      $productsList[$i]['sale'] = $row['sale'];
      $productsList[$i]['img2903701'] = $row['img2903701'];
      $productsList[$i]['img2903702'] = $row['img2903702'];
      $productsList[$i]['is_sale'] = $row['is_sale'];
      $i++;
    }
    return $productsList;
  }

  public static function getProductListByCategory($categoryID = false, $page = 1)
  {
    if($categoryID) {
      $page = intval($page);
      $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

      $db = Db::getConnection();
      $products = [];

      $result = $db->query("SELECT id, product_name, price, sale, img2903701, img2903702, is_sale FROM product "
        . "WHERE status = '1' AND category_id = '$categoryID' "
        . "ORDER BY id DESC LIMIT " . self::SHOW_BY_DEFAULT . " OFFSET " . $offset);
      $i = 0;
      while($row = $result->fetch()) {
        $products[$i]['id'] = $row['id'];
        $products[$i]['product_name'] = $row['product_name'];
        $products[$i]['price'] = $row['price'];
        $products[$i]['sale'] = $row['sale'];
        $products[$i]['img2903701'] = $row['img2903701'];
        $products[$i]['img2903702'] = $row['img2903702'];
        $products[$i]['is_sale'] = $row['is_sale'];
        $i++;
      }
      return $products;
    }
  }

  public static function getProductById($id)
  {
    $id = intval($id);
    if($id) {
      $db = Db::getConnection();

      $result = $db->query('SELECT * FROM product WHERE id = ' . $id);
      $result->setFetchMode(PDO::FETCH_ASSOC);


      return $result->fetch();
    }
  }

  public static function getTotalProductsInCategory($id)
  {
    $db = Db::getConnection();

    $result = $db->query('SELECT count(id) AS count FROM product WHERE status = "1" AND category_id = ' . $id);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $row = $result->fetch();


    return $row['count'];
  }

  /**
   * Возвращает список товаров с указанными индентификторами
   * @param array $idsArray <p>Массив с идентификаторами</p>
   * @return array <p>Массив со списком товаров</p>
   */
  public static function getProdustsByIds($idsArray)
  {
    // Соединение с БД
    $db = Db::getConnection();

    // Превращаем массив в строку для формирования условия в запросе
    $idsString = implode(',', $idsArray);

    // Текст запроса к БД
    $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

    $result = $db->query($sql);

    // Указываем, что хотим получить данные в виде массива
    $result->setFetchMode(PDO::FETCH_ASSOC);

    // Получение и возврат результатов
    $i = 0;
    $products = array();
    while($row = $result->fetch()) {
      $products[$i]['id'] = $row['id'];
      $products[$i]['product_name'] = $row['product_name'];
      $products[$i]['price'] = $row['price'];
      $products[$i]['is_sale'] = $row['is_sale'];
      $products[$i]['sale'] = $row['sale'];
      $products[$i]['img70901'] = $row['img70901'];
      $i++;
    }
    return $products;
  }

  public static function getProductsList()
  {
    // Соединение с БД
    $db = Db::getConnection();

    // Получение и возврат результатов
    $result = $db->query('SELECT id, product_name, price, sale, is_sale FROM product ORDER BY id ASC');
    $productsList = array();
    $i = 0;
    while($row = $result->fetch()) {
      $productsList[$i]['id'] = $row['id'];
      $productsList[$i]['product_name'] = $row['product_name'];
      $productsList[$i]['price'] = $row['price'];
      $productsList[$i]['sale'] = $row['sale'];
      $productsList[$i]['is_sale'] = $row['is_sale'];
      $i++;
    }
    return $productsList;
  }

  /**
   * Удаляет товар с указанным id
   * @param integer $id <p>id товара</p>
   * @return boolean <p>Результат выполнения метода</p>
   */
  public static function deleteProductById($id)
  {
    // Соединение с БД
    $db = Db::getConnection();

    // Текст запроса к БД
    $sql = 'DELETE FROM product WHERE id = :id';

    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    return $result->execute();
  }

  /**
   * Редактирует товар с заданным id
   * @param integer $id <p>id товара</p>
   * @param array $options <p>Массив с информацей о товаре</p>
   * @return boolean <p>Результат выполнения метода</p>
   */
  public static function updateProductById($id, $options)
  {
    // Соединение с БД
    $db = Db::getConnection();

    // Текст запроса к БД
    $sql = "UPDATE product
            SET 
                product_name = :product_name, 
                sale = :sale, 
                is_sale = :is_sale, 
                price = :price, 
                category_id = :category_id, 
                brand = :brand, 
                availability = :availability, 
                description = :description, 
                is_sale = :is_sale, 
                is_recommended = :is_recommended, 
                status = :status
            WHERE id = :id";

    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->bindParam(':product_name', $options['product_name'], PDO::PARAM_STR);
    $result->bindParam(':sale', $options['sale'], PDO::PARAM_STR);
    $result->bindParam(':is_sale', $options['is_sale'], PDO::PARAM_STR);
    $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
    $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
    $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
    $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
    $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
    $result->bindParam(':is_sale', $options['is_sale'], PDO::PARAM_INT);
    $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
    $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
    return $result->execute();
  }

  /**
   * Добавляет новый товар
   * @param array $options <p>Массив с информацией о товаре</p>
   * @return array <p>id добавленной в таблицу записи</p>
   */
  public static function createProduct($options)
  {
    // Соединение с БД
    $db = Db::getConnection();
    // Текст запроса к БД
    $sql = 'INSERT INTO product '
      . '(product_name, sale, price, category_id, brand, availability,'
      . 'description, is_sale, is_recommended, status)'
      . 'VALUES '
      . '(:product_name, :sale, :price, :category_id, :brand, :availability,'
      . ':description, :is_sale, :is_recommended, :status)';

    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':product_name', $options['product_name'], PDO::PARAM_STR);
    $result->bindParam(':sale', $options['sale'], PDO::PARAM_INT);
    $result->bindParam(':price', $options['price'], PDO::PARAM_INT);
    $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
    $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
    $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
    $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
    $result->bindParam(':is_sale', $options['is_sale'], PDO::PARAM_INT);
    $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
    $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
    if($result->execute()) {
      // Если запрос выполенен успешно, возвращаем id добавленной записи
      return $db->lastInsertId();
    }
    return $db->errorCode();
    // Иначе возвращаем 0
    return 0;
  }

  /**
   * Возвращает текстое пояснение наличия товара:<br/>
   * <i>0 - Под заказ, 1 - В наличии</i>
   * @param integer $availability <p>Статус</p>
   * @return string <p>Текстовое пояснение</p>
   */
  public static function getAvailabilityText($availability)
  {
    switch($availability) {
      case '1':
        return 'В наличии';
        break;
      case '0':
        return 'Под заказ';
        break;
    }
  }

  /**
   * Возвращает путь к изображению
   * @param integer $id
   * @return string <p>Путь к изображению</p>
   */
  public static function getImage($id)
  {
    // Название изображения-пустышки
    $noImage = 'no-image.jpg';

    // Путь к папке с товарами
    $path = '/template/img/upload/';

    // Путь к изображению товара
    $pathToProductImage = $path . $id . '.jpg';

    if(file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage)) {
      // Если изображение для товара существует
      // Возвращаем путь изображения товара
      return $pathToProductImage;
    }

    // Возвращаем путь изображения-пустышки
    return $path . $noImage;
  }

//  public static function uploadImages($name) {
//    // Соединение с БД
//    $db = Db::getConnection();
//
//    // Текст запроса к БД
//    $sql = 'INSERT INTO product '
//      . '(img5557101, img5557102, img5557103, img5557104, img2903701, img2903702,'
//      . 'img9090, img70901, img70902, img70903, img70904)'
//      . 'VALUES '
//      . '(:img5557101, :img5557102, :img5557103, :img5557104, :img2903701, :img2903702,'
//      . ':img9090, :img70901, :img70902, :img70903, :img70904)';
//
//    // Получение и возврат результатов. Используется подготовленный запрос
//    $result = $db->prepare($sql);
//    $result->bindParam(':img5557101', $options['product_name'], PDO::PARAM_STR);
//    $result->bindParam(':img5557102', $options['sale'], PDO::PARAM_STR);
//    $result->bindParam(':img5557103', $options['price'], PDO::PARAM_STR);
//    $result->bindParam(':img5557104', $options['category_id'], PDO::PARAM_STR);
//    $result->bindParam(':img2903701', $options['brand'], PDO::PARAM_STR);
//    $result->bindParam(':img2903702', $options['availability'], PDO::PARAM_STR);
//    $result->bindParam(':img9090', $options['description'], PDO::PARAM_STR);
//    $result->bindParam(':img70901', $options['is_recommended'], PDO::PARAM_STR);
//    $result->bindParam(':img70902', $options['status'], PDO::PARAM_STR);
//    $result->bindParam(':img70903', $options['status'], PDO::PARAM_STR);
//    $result->bindParam(':img70904', $options['status'], PDO::PARAM_STR);
//    if ($result->execute()) {
//      // Если запрос выполенен успешно, возвращаем id добавленной записи
//      return $db->lastInsertId();
//    }
//    // Иначе возвращаем 0
//    return 0;
//  }
}