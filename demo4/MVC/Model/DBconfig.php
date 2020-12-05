<?php
class database{
    private $hostname = 'localhost';
    private $username ='root';
    private $pass ='';
    private $dbname= 'gs_restaurant' ;


    private $conn = NULL;
    private $result = NULL;

    public function connect()
    {
        $this->conn = new mysqli($this-> hostname,$this->username , $this->pass,$this->dbname) ;
        if(!$this->conn){
            echo"ket noi that bai";
            exit();
        }
        else{
            mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;
    }
    //thuc thi cau truy van 
    public function execute($sql){
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    // lay du lieu 
    public function getdata(){
        if($this->result){
            $data= mysqli_fetch_array($this->result);
        }
        else{
            $data=0;
        }
        return $data ;
    }
    //lay toan bo du lieu 
    public function getAlldata(){
        if(!$this->result){
            return FALSE;

        }
        else {
            while($datas = $this->getdata()){
                $data[]=$datas;
            }
        }
        return $data ;
    }
    //them du lieu 
    public function insertdata(){
        $sql= "INSERT INTO $tbltable()VALUES()";
        return $this->execute($sql);
    } 
     //sua du lieu
    public function UpdateData(){
        $sql ="UPDATE $tb() SET() WHERE ()";
        return $this->execute($sql);
    }
    //xoa du lieu
    public function Delete(){
        $sql="DELETE FROM $table() WHERE ()";
        return $this->execute($sql);
    }

  
    
    
}
?>