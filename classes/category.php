<?php
$filepath = realpath(dirname(__FILE__));
  include_once ($filepath."../../lib/database.php");
  include_once ($filepath."../../helpers/format.php");
?>
<?php
  class category
  {
    private $db;
    private $fm;

    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function insert_category($catName){
      $catName = $this->fm->validation($catName);

      $catName = mysqli_real_escape_string($this->db->link, $catName);

      if(empty($catName)){
        $alert = "Tên danh mục không được để trống !!!";
        return $alert;
      }else{
        $query = "INSERT INTO tbl_category(catName) VALUE('$catName') ";
        $result = $this->db->insert($query);
        if($result) {
          $alert = "Danh mục được thêm thành công";
          return $alert;
        } else {
          $alert = "Danh mục thêm không thành công";
          return $alert;
        }
      }
    }
    public function show_category() {
      $query = "SELECT * FROM tbl_category order by catId desc";
      $result = $this->db->select($query);
      return $result;
    }
    public function update_category($catName,$catId) {
      $catName = $this->fm->validation($catName);
      $catName = mysqli_real_escape_string($this->db->link, $catName);

      $catId = mysqli_real_escape_string($this->db->link, $catId);

      if(empty($catName)){
        $alert = "Tên danh mục không được để trống !!!";
        return $alert;
      }else{
        $query = "UPDATE tbl_category SET catName='$catName' WHERE catId='$catId' ";
        $result = $this->db->update($query);
        if($result) {
          $alert = "Danh mục được cập nhật thành công";
          return $alert;
        } else {
          $alert = "Danh mục cập nhật không thành công";
          return $alert;
        }
      }
    }
    public function delete_category($catId) {
      $query = "DELETE FROM tbl_category WHERE catId='$catId' ";
      $result = $this->db->delete($query);
      if($result) {
        $alert = "Danh mục được xóa thành công";
        return $alert;
      } else {
         $alert = "Danh mục xóa không thành công";
        return $alert;
      }
    }
    public function getCatById($catId) {
      $query = "SELECT * FROM tbl_category WHERE catId='$catId' ";
      $result = $this->db->select($query);
      return $result;
    }
    // FrontEnd
    public function getCat() {
      $query = "SELECT * FROM tbl_category ";
      $result = $this->db->select($query);
      return $result;
    }
  }
?>