<?php
require_once './config/DataBase.php';
class Product{
    private $conn;
    public function __construct(){
        $this->conn = DataBase::getInstance();
    }
        
    public function getproducts(){
        $stmt = $this->conn->query('SELECT * FROM product');
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
}
}
// $products = [
        //     [
        //         'id' => '1',
        //         'name' => 'Al Nashama Orange 7',
        //         'price' => '13',
        //         'description' => 'Orange 7 Special Prepaid Line',
        //         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
        //     ],
        //     [
        //         'id' => '2',
        //         'name' => 'Orange 8 Max',
        //         'price' => '14',
        //         'description' => 'Trendy, 50% extra GB, Picture of Orange 8 Max',
        //         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
        //     ],
        //     [
        //         'id' => '3',
        //         'name' => 'Orange 9 Max',
        //         'price' => '16',
        //         'description' => 'Trendy, 50% extra GB, Picture of Orange 9 Max',
        //         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
        //     ],
        //     [
        //         'id' => '4',
        //         'name' => 'Orange 11 Max',
        //         'price' => '18',
        //         'description' => 'Trendy, 50% extra GB, Picture of Orange 11 Max',
        //         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
        //     ],
        //     [
        //         'id' => '5',
        //         'name' => 'Orange 11 5G',
        //         'price' => '18',
        //         'description' => 'Trendy, 50% extra GB, Orange 11 5G - Orange Prepaid Phone Plan',
        //         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
        //     ],
        //     [
        //         'id' => '6',
        //         'name' => 'Orange 13 Max',
        //         'price' => '21',
        //         'description' => 'Trendy, 50% extra GB, Picture of Orange 13 Max',
        //         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
        //     ],
        //     [
        //         'id' => '7',
        //         'name' => 'test',
        //         'price' => '20',
        //         'description' => 'test',
        //         'img_url' => 'https://eshop.orange.jo/images/thumbs/0007377_orange-11-max_490.png'
        //     ]
        // ];    
?>
