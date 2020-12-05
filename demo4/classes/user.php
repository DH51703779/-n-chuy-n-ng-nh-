<?php
$filepath= realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
?>
<?php

class user {
    private $db ;
    private $fm ;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format(); 
    }
    public function login_user($sdt,$pass)   
    {
        $sdt=$this->fm->validation($sdt);
        $pass=$this->fm->validation($pass);

        $sdt = mysqli_real_escape_string($this->db->link,$sdt);
        $pass = mysqli_real_escape_string($this->db->link,$pass);

        if(empty($sdt)|| empty($pass)){
            $alert =" User and pass not empty";
            return $alert ;
        }
        else{
            $query = "SELECT * FROM khach_hang WHERE sodienthoai='$sdt' AND passwords='$pass' LIMIT 1" ;
            $result = $this->db->select($query);

            if($result != false){
                $value = $result->fetch_assoc();
                Session::set('userlogin',true);
                Session::set('id',$value['id']);
                Session::set('sdt',$value['sodienthoai']);
                Session::set('name',$value['ten']);
                header('Location:index.php');

            }else{
                $alert =" User and pass not khop";
                return $alert ;
            }
        }
    }
    public function insert_user($ten,$sdt1,$sex,$pass1,$repass)
    {
        $ten=$this->fm->validation($ten);
        $sdt1=$this->fm->validation($sdt1);
        $sex=$this->fm->validation($sex);
        $pass1=$this->fm->validation($pass1);
        $repass=$this->fm->validation($repass);

        $ten = mysqli_real_escape_string($this->db->link,$ten);
        $sdt1 = mysqli_real_escape_string($this->db->link,$sdt1);
        $sex = mysqli_real_escape_string($this->db->link,$sex);
        $pass1 = mysqli_real_escape_string($this->db->link,$pass1);
        $repass = mysqli_real_escape_string($this->db->link,$repass);

        if(empty($ten)||empty($sdt1)||empty($pass1)){
            $alert ="Chưa nhập đủ thông tin !";
            return $alert ;
        }
        else
        {
            if($pass1==$repass){
            $query = "INSERT INTO khach_hang(ten,sodienthoai,gioitinh,passwords) VALUES('$ten','$sdt1','$sex','$pass1')" ;
            $result = $this->db->insert($query);
            if($result){
                $alert ="<span class='succsess'> Đăng ký thành công</span>";
                return $alert ;
            }else{
                $alert ="<span class='succsess'> Đăng Ký không thành công</span>";
                return $alert ;
            }
        }else
        $alert = "Mật khẩu chưa khớp";
        return $alert;

        }
    
    }
    // public function show_loai(){
        
    //     $query = "SELECT * FROM loai_mon order by id_loai desc" ;
    //     $result = $this->db->select($query);
    //     return $result;

    // }
    // public function show_loaimenu(){
        
    //     $query = "SELECT * FROM loai_mon " ;
    //     $result = $this->db->select($query);
    //     return $result;

    // }
    // public function update_loai($tenloai,$ghichu,$id){
    //     $tenloai=$this->fm->validation($tenloai);
    //     $ghichu=$this->fm->validation($ghichu);

    //     $tenloai = mysqli_real_escape_string($this->db->link,$tenloai);
    //     $ghichu = mysqli_real_escape_string($this->db->link,$ghichu);
    //     $id = mysqli_real_escape_string($this->db->link,$id);

    //     if(empty($tenloai)){
    //         $alert ="chưa nhập tên loại món ";
    //         return $alert ;
    //     }
    //     else{
    //         $query = "UPDATE  loai_mon SET name_loai='$tenloai',ghichu='$ghichu' Where id_loai='$id'" ;
    //         $result = $this->db->insert($query);
    //         if($result){
    //             $alert ="<span class='succsess'> Sửa thành công</span>";
    //             return $alert ;
    //         }else{
    //             $alert ="<span class='succsess'> Sửa không thành công</span>";
    //             return $alert ;
    //         }

    //         }
    // }
}

?>