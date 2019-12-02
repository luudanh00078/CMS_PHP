<?php
  class News {
    var $id;
    var $name;
    var $content;
    var $thumbnail;
    var $danhmuc_id;
    var $status;
    function __construct($id, $name, $content, $thumbnail, $danhmuc_id, $status )
    {
      $this->id = $id;
      $this->name = $name;
      $this->content = $content;
      $this->thumbnail = $thumbnail;
      $this->danhmuc_id= $danhmuc_id;
      $this->status = $status;
    } 
    static function connect(){
        $conn = new mysqli('localhost', 'user_hoang', '12345', 'trangtintuc');
        $conn->set_charset("utf8");
        if($conn->connect_error){
            die('kết nối thất bại' . $conn->connect_error);
        }else{
            echo 'kết nối thành công';
            }
      }
      static function getListFromDb(){
        //ketnoi db
        $conn = new mysqli('localhost', 'user_hoang', '12345', 'trangtintuc');
        $conn->set_charset("utf8");
        if($conn->connect_error){
            die('kết nối thất bại' . $conn->connect_error);
        }else{
            //echo 'kết nối thành công';
            }
        $query = "SELECT * FROM baiviet ";
        $result = $conn->query($query);
        $rs = array();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
              array_push($rs, new News(
                  $row["id"],
                  $row["name"],
                  $row["content"],
                  $row["thumbnail"],
                  $row["danhmuc_id"],
                  $row["status"]
              ));
            }
        }
        $conn->close();
        return $rs;
      }
      static function getListById($id){
        //ketnoi db
        $conn = new mysqli('localhost', 'user_hoang', '12345', 'trangtintuc');
        $conn->set_charset("utf8");
        if($conn->connect_error){
            die('kết nối thất bại' . $conn->connect_error);
        }else{
            //echo 'kết nối thành công';
            }
        $query = "SELECT * FROM baiviet WHERE id = '$id' ";
        $result = $conn->query($query);
        $rs = $result->fetch_assoc();
        
        $conn->close();
        return $rs;
      }



    }
?>