<?php

// Трейт Cacheable
trait Cacheable {
    private $cache = [];

    public function getCache($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }

    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }
}

// Класс DataProvider
class DataProvider {
    use Cacheable;

    public function fetchData($query) {
        // Проверяем кэш
        $cachedData = $this->getCache($query);
        if ($cachedData !== null) {
            return $cachedData; // Возвращаем данные из кэша
        }

        // Логика получения данных (например, из базы данных)
        // Для примера просто возвращаем массив
        $data = ['data1', 'data2', 'data3']; 

        // Сохраняем данные в кэш
        $this->setCache($query, $data);

        return $data;
    }
}

// Класс ProductRepository
class ProductRepository {
    use Cacheable;

    public function getProduct($productId) {
        // Проверяем кэш
        $cachedProduct = $this->getCache($productId);
        if ($cachedProduct !== null) {
            return $cachedProduct; // Возвращаем продукт из кэша
        }

        $product = ['id' => $productId, 'name' => 'Продукт ' . $productId]; // Здесь должен быть ваш запрос

        // Сохраняем продукт в кэш
        $this->setCache($productId, $product);

        return $product;
    }
}

// Пример использования
$dataProvider = new DataProvider();
$query = 'SELECT * FROM data';
$data1 = $dataProvider->fetchData($query);
$data2 = $dataProvider->fetchData($query); // Этот вызов должен использовать кэш

echo "Данные: ";
print_r($data1);
echo "<br>";

$productRepository = new ProductRepository();
$product1 = $productRepository->getProduct(1);
$product2 = $productRepository->getProduct(1); // Этот вызов должен использовать кэш

echo "Продукт: ";
print_r($product1);
echo "<br>";
?>
