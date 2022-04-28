<?php
$filepath = realpath(dirname(__FILE__));
  include_once ($filepath."../../lib/database.php");
  include_once ($filepath."../../helpers/format.php");
 ?>
<?php
  class product
  {
    private $db;
    private $fm;

    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function insert_product($data, $files){
      $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
      $category = mysqli_real_escape_string($this->db->link, $data['category']);
      $price = mysqli_real_escape_string($this->db->link, $data['price']);
      $quantity = mysqli_real_escape_string($this->db->link, $data['quantity']);
      $productDesc = mysqli_real_escape_string($this->db->link, $data['productDesc']);

      $permitted = array('jpg', 'jpeg', 'png', 'gif');
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_temp = $_FILES['image']['tmp_name'];

      $div = explode('.', $file_name);
      $file_ext = strtolower(end($div));
      $unique_image = substr(md5(time()), 0, 10).'.' .$file_ext;
      $uploaded_image = "uploads/".$unique_image;

      if($productName == '' || $category == '' || $price == '' || $quantity == '' || $productDesc == '' || $file_name == '' ){
        $alert = "Các trường không được rỗng";
        return $alert;
      }else{
        move_uploaded_file($file_temp,  $uploaded_image);
        $query = "INSERT INTO tbl_product(productName,catId,price,quantity,productDesc,image) VALUE('$productName','$category','$price','$quantity','$productDesc','$unique_image') ";
        $result = $this->db->insert($query);
        if($result) {
          $alert = "Thêm sản phẩm mới thành công";
          return $alert;
        } else {
          $alert = "Thêm sản phẩm mới không thành công";
          return $alert;
        }
      }
    }
    public function show_product() {
      $query = "SELECT tbl_product.*, tbl_category.catName
                FROM tbl_product INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId
                order by tbl_product.productId desc";
      $result = $this->db->select($query);
      return $result;
    }
    public function update_product($data,$files,$productId) {
      $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
      $category = mysqli_real_escape_string($this->db->link, $data['category']);
      $price = mysqli_real_escape_string($this->db->link, $data['price']);
      $quantity = mysqli_real_escape_string($this->db->link, $data['quantity']);
      $productDesc = mysqli_real_escape_string($this->db->link, $data['productDesc']);

      $permitted = array('jpg', 'jpeg', 'png', 'gif');
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_temp = $_FILES['image']['tmp_name'];

      $div = explode('.', $file_name);
      $file_ext = strtolower(end($div));
      $unique_image = substr(md5(time()), 0, 10).'.' .$file_ext;
      $uploaded_image = "uploads/".$unique_image;

      if($productName == '' || $category == '' || $price == '' || $quantity == '' || $productDesc == ''){
        $alert = "Cac truong khong dc rong";
        return $alert;
      }else {
        if(!empty($file_name)) {
          if($file_size > 30048) {
          $alert = "image size should be less then 2Mb";
          return $alert;
        }
        elseif(in_array($file_ext, $permitted) === false) {
          $alert = "You can upload only:-". implode('.', $permitted);
          return $alert;
        }
        move_uploaded_file($file_temp,  $uploaded_image);
          $query = "UPDATE tbl_product SET
            productName = '$productName',
            catId = '$category',
            image = '$unique_image',
            price = '$price',
            quantity = '$quantity',
            productDesc = '$productDesc'
            WHERE productId = '$productId'";
        }else {
          $query = "UPDATE tbl_product SET
        productName = '$productName',
        catId = '$category',
        price = '$price',
        quantity = '$quantity',
        productDesc = '$productDesc'
        WHERE productId = '$productId'";
        echo "456";
        }
      }
        $result = $this->db->update($query);
        if($result) {
          $alert = "San pham được cập nhật thành công";
          return $alert;
        } else {
          $alert = "San pham cập nhật không thành công";
          return $alert;
        }
    }
    public function delete_product($productId) {
      $query = "DELETE FROM tbl_product WHERE productId='$productId' ";
      $result = $this->db->delete($query);
      if($result) {
        $alert = "San pham được xóa thành công";
        return $alert;
      } else {
         $alert = "San pham xóa không thành công";
        return $alert;
      }
    }
    public function getProductById($productId) {
      $query = "SELECT * FROM tbl_product WHERE productId='$productId' ";
      $result = $this->db->select($query);
      return $result;
    }
    //FrontEnd--------------------------------------------------------------
    public function getProduct() {
      $query = "SELECT * FROM tbl_product";
      $result = $this->db->select($query);
      return $result;
    }
     public function detailProduct($productId) {
      $query = "SELECT * FROM tbl_product WHERE productId='$productId'";
      $result = $this->db->select($query);
      return $result;
    }
    public function getProductByCat($catId) {
       $query = "SELECT * FROM tbl_product WHERE catId='$catId'";
      $result = $this->db->select($query);
      return $result;
    }
    public function searchProduct($tukhoa) {
      $tukhoa = $this->fm->validation($tukhoa);
      $query = "SELECT * FROM tbl_product WHERE productName LIKE '%$tukhoa%'";
      $result = $this->db->select($query);
      return $result;
    }
  }
?>