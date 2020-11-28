<?php
include'../config/config.php';
$o = new PDO("mysql:host=localhost; dbname=bookstore_vn", 'root' ,'' );
$o->query('set names utf8');
$sql ="select * from nhaxb";
$stm = $o->query($sql);//tra ve 1 doi tuong PDO Statement
$data = $stm->fetchAll();
?>


<?php
 
Class Database{
   public $host   = DB_HOST;
   public $user   = DB_USER;
   public $pass   = DB_PASS;
   public $dbname = DB_NAME;
 
 
   public $link;
   public $error;
 
 public function __construct(){
  $this->connectDB();
 }
 
private function connectDB(){
   $this->link = new mysqli($this->host, $this->user, $this->pass, 
    $this->dbname);
   if(!$this->link){
     $this->error ="Connection fail".$this->link->connect_error;
    return false;
   }
 }
 
// Select or Read data
public function select($query){
  $result = $this->link->query($query) or 
   die($this->link->error.__LINE__);
  if($result->num_rows > 0){
    return $result;
  } else {
    return false;
  }
 }
 
// Insert data
public function insert($query){
   $insert_row = $this->link->query($query) or 
     die($this->link->error.__LINE__);
   if($insert_row){
     return $insert_row;
   } else {
     return false;
    }
 }
  
// Update data
 public function update($query){
   $update_row = $this->link->query($query) or 
     die($this->link->error.__LINE__);
   if($update_row){
    return $update_row;
   } else {
    return false;
    }
 }
  
// Delete data
 public function delete($query){
   $delete_row = $this->link->query($query) or 
     die($this->link->error.__LINE__);
   if($delete_row){
     return $delete_row;
   } else {
     return false;
    }
   }
 
}
?>


 
