<?php
include_once 'models/Model.php';
class Student extends Model
{

    public function all()
    {
        // Viet cau sql
        $sql = "SELECT * FROM `student`";
        $stmt = $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC); //array 
        $items = $stmt->fetchAll();
        return $items;
    }
    public function find($id)
    {
        //lay du lieu theo ID
        $sql = "SELECT * FROM `student` WHERE mahocsinh  = $id";
        //Debug sql
        // var_dump($sql);
        $stmt = $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC); //array

        //Lấy về dữ liệu duy nhat
        $row = $stmt->fetch();
        return $row;
    }
    public function save($data)
    {

        $tenhocsinh = $data['tenhocsinh'];
        $lop = $data['lop'];
        $ngaysinh = $data['ngaysinh'];
        $gioitinh = $data['gioitinh'];
        $thongtinhhocsinh = $data['thongtinhhocsinh'];
        $sql = "INSERT INTO `student` (`tenhocsinh`, `lop`, `ngaysinh`, `gioitinh`,`thongtinhhocsinh`) VALUES ('$tenhocsinh', '$lop', '$ngaysinh', '$gioitinh', '$thongtinhhocsinh')";
        // var_dump($sql);
        // echo '<pre>';
        // print_r($data);
        // die();
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id, $data)
    {


        $tenhocsinh = $data['tenhocsinh'];
        $lop = $data['lop'];
        $ngaysinh = $data['ngaysinh'];
        $gioitinh = $data['gioitinh'];
        $thongtinhhocsinh = $data['thongtinhhocsinh'];
        $sql = "UPDATE `student` SET
          `tenhocsinh` = '$tenhocsinh',
          `lop` = '$lop',
           `ngaysinh` = '$ngaysinh',
           `gioitinh` = '$gioitinh',
           `thongtinhhocsinh` = '$thongtinhhocsinh'
            WHERE `student`.`mahocsinh` =  $id ";
        // thuc hien truy van
        $this->conn->exec($sql);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM student WHERE mahocsinh  = $id";
        //Debug sql
        // var_dump($sql);

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}
