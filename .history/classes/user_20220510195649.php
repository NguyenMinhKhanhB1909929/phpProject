<?php
$filepath = realpath(dirname(__FILE__));
  include_once ($filepath."../../lib/session.php");
  include_once ($filepath."../../lib/database.php");
  include_once ($filepath."../../helpers/format.php");
?>
<?php
  class user
  {
    private $db;
    private $fm;

    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function add_user($email, $pass) {
      $email = $this->fm->validation($email);
      $pass = $this->fm->validation($pass);
      $email = mysqli_real_escape_string($this->db->link, $email);
      $pass = mysqli_real_escape_string($this->db->link, md5($pass));
      if($email=='' || $pass =='') {
        $alert = "Dang ki that bai";
        return $alert;
      } else {
        $checkEmail = "SELECT * FROM tbl_user WHERE email='$email' LIMIT 1";
        $result_check = $this->db->select($checkEmail);
        if($result_check) {
          $alert = "Dang ki that bai";
          return $alert;
        } else {
          $query = "INSERT INTO tbl_user(Email,password) VALUE('$email','$pass') ";
          $result = $this->db->insert($query);
        if($result) {
          $alert = "Thêm tai khoan thành công";
          return $alert;
        } else {
          $alert = "Thêm tai khoan mới không thành công";
          return $alert;
        }
        }
      }
    }
    public function login($email, $pass) {
      $email = mysqli_real_escape_string($this->db->link, $email);
      $pass = mysqli_real_escape_string($this->db->link, md5($pass));
      if($email=='' || $pass =='') {
        $alert = "Dang nhap that bai";
        echo $alert;
        return $alert;
      }
      else {
        $checkLogin = "SELECT * FROM tbl_user WHERE email='$email' AND password='$pass'";
        $result = $this->db->select($checkLogin);
        if($result) {
          $resultSession =  $result->fetch_assoc();
          Session::set('userLogin',true);
          Session::set('userId',$resultSession['userId']);
          Session::set('email',$resultSession['Email']);
        } else {
          echo "dang nhap that bai";
        }
        }
      }
      public function showUser($id) {
        $query = "SELECT * FROM tbl_user WHERE userId='$id'";
        $result = $this->db->select($query);
        return $result;
      }
      public function updateUser($data,$id) {
        $fullName = mysqli_real_escape_string($this->db->link, $data['fullName']);
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $phone = mysqli_real_escape_string($this->db->link, $data['phone']);
        $sex = mysqli_real_escape_string($this->db->link, $data['sex']);
        $diachi = mysqli_real_escape_string($this->db->link, $data['diachi']);
        $tinh = mysqli_real_escape_string($this->db->link, $data['tinh']);
        $quan = mysqli_real_escape_string($this->db->link, $data['quan']);
        $phuong = mysqli_real_escape_string($this->db->link, $data['phuong']);
        if($email == '') {
          $alert = "khong duoc rong truong email";
          return $alert;
        } else {
          $query = "UPDATE tbl_user SET fullName='$fullName', Email='$email',phone='$phone',sex='$sex',
          diachi='$diachi',tinh='$tinh',quan='$quan',phuong='$phuong' WHERE userId='$id'";
          $result = $this->db->update($query);
          return $result;
        }
      }
      public function getUser() {
        $query = "SELECT * FROM tbl_user";
        $result = $this->db->select($query);
        return $result;
      }
    }
?>