<?php
$filepath = realpath(dirname(__FILE__));
  include_once ($filepath."../../lib/database.php");
  include_once ($filepath."../../helpers/format.php");
?>
<?php
  class cart
  {
    private $db;
    private $fm;

    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function addCart($productId,$quantity){
      $quantity = $this->fm->validation($quantity);
      $quantity = mysqli_real_escape_string($this->db->link, $quantity);
      $productId = mysqli_real_escape_string($this->db->link, $productId);
      $sId = session_id();


      $query = "SELECT * FROM tbl_product WHERE productId = '$productId'";
      $result = $this->db->select($query)->fetch_assoc();
      $image = $result['image'];
      $price = $result['price'];
      $productName = $result['productName'];

      $queryCart = "SELECT * FROM tbl_cart WHERE productId = '$productId' AND sId = '$sId'";
      $checkCart = $this->db->insert($queryCart);

      if(mysqli_num_rows($checkCart)) {
            header('Location:orderItem.php');
      }
      else {
        $query_insert = "INSERT INTO tbl_cart(productId,quantity,sId,image,price,productName) VALUE('$productId','$quantity','$sId', '$image' ,'$price','$productName')";
          $insertCart = $this->db->insert($query_insert);
          if($insertCart) {
            header('Location:orderItem.php');
          }
          else {header('Location:ItemDes.php');}
      }
  }
  public function getCart() {
    $sId = session_id();
    $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
    $result = $this->db->select($query);
    return $result;
  }
  public function deleteCart($cartId) {
    $sId = session_id();
    $query = "DELETE FROM tbl_cart WHERE cartId = '$cartId' AND sId = '$sId'";
    $result = $this->db->delete($query);
    header('Location:orderItem.php');
    return $result;
  }
  public function updateCart($productId, $quantityUpdate) {
    $sId = session_id();
    $query = "UPDATE tbl_cart SET quantity='$quantityUpdate'  WHERE productId = '$productId' AND sId = '$sId'";
    $result = $this->db->update($query);
    header('Location:orderItem.php');
    return $result;
  }
  public function check_cart() {
    $sId = session_id();
    $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
    $result = $this->db->select($query);
    return $result;
  }
  public function del_all_cart() {
    $sId = session_id();
    $query = "DELETE FROM tbl_cart WHERE sId = '$sId'";
    $result = $this->db->select($query);
    return $result;
  }
  public function insertOrder($userId) {
    $sId = session_id();
    $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
     $get_product = $this->db->select($query);
     if($get_product) {
       while($result = $get_product->fetch_assoc()) {
        $productId = $result['productId'];
        $productName = $result['productName'];
        $quantity = $result['quantity'];
        $price = $result['price']*$quantity;
        $userId = $userId;
        $query_insert = "INSERT INTO tbl_order(productId,quantity,userId,price,productName) VALUE('$productId','$quantity','$userId','$price','$productName')";
          $insertOrder = $this->db->insert($query_insert);
       }
     }
  }
  public function getOrder($userId) {
    $query = "SELECT * FROM tbl_order WHERE userId = '$userId' AND date_order=now()";
    $result = $this->db->select($query);
    return $result;
  }
  public function getOrdered($userId) {
    $query = "SELECT * FROM tbl_order WHERE userId = '$userId'";
    $result = $this->db->select($query);
    return $result;
  }
  public function getOrderNotYet() {
    $query = "SELECT * FROM tbl_order WHERE status='0'";
    $result = $this->db->select($query);
    return $result;
  }
  public function getOrderYet() {
    $query = "SELECT * FROM tbl_order WHERE status='1'";
    $result = $this->db->select($query);
    return $result;
  }
  public function getOrderDetail($id) {
    $query = "SELECT * FROM tbl_order WHERE id='$id'";
    $result = $this->db->select($query);
    return $result;
  }
  public function updateOrder($id) {
    $query = "UPDATE tbl_order SET status='1'  WHERE id='$id'";
    $result = $this->db->update($query);
    return $result;
  }
}
?>