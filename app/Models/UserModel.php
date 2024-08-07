<?php
namespace App\Models;
class UsertModel{
   private $db;
   function __construct(){
      $this->db=new DatabaseModel;
   }

//     function them_user($tenbang,$id,$firstname,$username,$password,$email,$diachi,$dienthoai,$quyen){
       
//         $sql = " INSERT INTO ".$tenbang." VALUES (
//             ".$id.",'".$firstname."','".$username."','".$password."','".$email."','".$diachi."','".$dienthoai."',
//             '".$quyen."'
//     )";
//     return $this->db->get_all($sql);
//  }


 function addUser($id,$firstname,$username,$password,$email,$diachi,$dienthoai,$quyen) {
 
    $sql = "INSERT INTO `user` (`id`, `firstname`, `username`, `password`, `email`, `diachi`, `dienthoai`, `quyen`) 
    VALUES (' ".$id.",'".$firstname."','".$username."','".$password."','".$email."','".$diachi."','".$dienthoai."',
            '".$quyen."')";
  
    return $this->db->get_all($sql);
  }



    // Đăng nhập user
    public function login($email, $password){
        return $this->db->pdo_query_one("SELECT * FROM user WHERE email=? AND password=?", $email , $password);
    }
// end ;
   //  public function loginAdmin($email, $pass){
   //      return $this->db->pdo_query_one("SELECT `role` FROM user WHERE email=? AND matkhau=?", $email, $pass);
   //  }

    public function register($HoTen, $email, $pass){
        return $this->db->pdo_execute("INSERT INTO user(`HoTen`, `email, `matkhau`) VALUES(?,?,?)", $HoTen, $email, $pass);
    }
   }

?>