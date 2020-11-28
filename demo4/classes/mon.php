<?php

require_once'../lib/database.php';
require_once'../helpers/format.php';

?>
<?php

class mon {
    private $db ;
    private $fm ;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format(); 
    }
    public function insert_mon($data,$files)   
    {
       

        $name_mon = mysqli_real_escape_string($this->db->link,$data['name_mon']);
        $loaimon = mysqli_real_escape_string($this->db->link,$data['loaimon']);
        $gia = mysqli_real_escape_string($this->db->link,$data['gia']);
        $ghichu = mysqli_real_escape_string($this->db->link,$data['ghichu']);
        $tinhtrang = mysqli_real_escape_string($this->db->link,$data['tinhtrang']);
        // $image = mysqli_real_escape_string($this->db->link,$data['name_mon']);
        //kiểm tra hình ảnh và lấy hình ảnh cho vào folder upload
        $permited = array('jpg','jpeg','png','gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.',$file_name);
        $file_ext = strtolower(end($div));
        $unique_image= substr(md5(time()),0,10).'.'.$file_ext;
        $uploaded_image = "../images/food/".$unique_image;


        if($name_mon==""||$loaimon==""||$gia==""||$tinhtrang==""||$file_name==""){
            $alert ="chưa nhập đủ thông tin ";
            return $alert ;
        }
        else{
            move_uploaded_file($file_temp,$uploaded_image);
            $query = "INSERT INTO monan(name_mon,id_loai,gia_mon,ghichu_mon,images,tinhtrang) VALUES('$name_mon','$loaimon','$gia','$ghichu','$unique_image','$tinhtrang')";
            $result = $this->db->insert($query);
            if($result){
                $alert ="<span class='succsess'> Thêm thành công</span>";
                return $alert ;
            }else{
                $alert ="<span class='succsess'> Thêm không thành công</span>";
                return $alert ;
            }

            }
    
    }
    public function show_mon(){
        $query = " SELECT monan.* ,loai_mon.name_loai 
        From monan INNER JOIN loai_mon ON monan.id_loai = loai_mon.id_loai order by monan.id_mon desc ";
        // $query = "SELECT * FROM monan order by id_mon desc" ;
        $result = $this->db->select($query);
        return $result;

    }
    public function update_mon($data,$files,$id){
       
        
        $tinhtrang = mysqli_real_escape_string($this->db->link,$data['tinhtrang']);
        $gia = mysqli_real_escape_string($this->db->link,$data['gia']);
        $ghichu = mysqli_real_escape_string($this->db->link,$data['ghichu']);
        // $image = mysqli_real_escape_string($this->db->link,$data['name_mon']);
        //kiểm tra hình ảnh và lấy hình ảnh cho vào folder upload
        $permited = array('jpg','jpeg','png','gif'); // cho phép 
        $file_name = $_FILES['image']['name'];// 
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.',$file_name); // tách tên 
        $file_ext = strtolower(end($div)); // chuyển chữ hoa thành chữ thường   
        $unique_image= substr(md5(time()),0,10).'.'.$file_ext;
        $uploaded_image = "uploads/".$unique_image;

        if($tinhtrang=="" || $gia==""||$ghichu==""){
            $alert ="chưa nhập tên loại món ";
            return $alert ;
        }
        else{  
             if(!empty($file_name)){
                 //nếu người dùng chọn ảnh
                 if($file_size> 2000000){
                     $alert="<span class='error' > Image size should be less then 2MB!</span> . echo $file_size ";
                     return $alert;
                 }
                 elseif(in_array($file_ext,$permited)==false){
                     $alert="<span class='error'> you can upload only : -".implode(',',$permited)."</span>";
                     return $alert;
                 }
                 $query ="  UPDATE monan SET 
                --  name_mon='$name_mon',
                --  id_loai = '$loaimon',
                 gia_mon= '$gia',
                 ghichu_mon='$ghichu',
                 images ='$unique_image'
                 tinhtrang='$tinhtrang'
                 wHERE id_mon='$id'";
             }else{
                 //nếu người dùng không chọn ảnh
                $query ="  UPDATE monan SET 
                -- name_mon='$name_mon',
                -- id_loai = '$loaimon',
                gia_mon= '$gia',
                ghichu_mon='$ghichu'
                tinhtrang='$tinhtrang'
                wHERE id_mon='$id'";
             }


            $result = $this->db->insert($query);
            if($result){
                $alert ="<span class='success'> Sửa thành công!</span>";
                return $alert ;
            }else{
                $alert ="<span class='error'> Sửa không thành công</span>";
                return $alert ;
            }

        }
    }
    public function del_mon($id){
        $query = "DELETE FROM  monan  Where id_mon='$id'" ;
            $result = $this->db->delete($query);
            if($result){
                $alert ="<span class='success'> Xóa thành công !</span>";
                return $alert ;
            }else{
                $alert ="<span class='error'> Xóa không thành công !</span>";
                return $alert ;
            }

    }
    public function getmonbyid($id){
        $query = "SELECT * FROM monan where id_mon='$id'" ;
        $result = $this->db->select($query);
        return $result;
    }
}

?>