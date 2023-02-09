<form class="table" action="index.php?controller=student&action=update&id=<?= $item['mahocsinh'];?>" method="post">
tenhocsinh :<input class="form-control" type="text" name="tenhocsinh" value="<?= $item['tenhocsinh'];?>"> <br>
lop: <input class="form-control" type="text" name="lop" value="<?= $item['lop'];?>"> <br>
ngaysinh: <input class="form-control" type="text" name="ngaysinh" value="<?= $item['ngaysinh'];?>"> <br>
gioitinh: <input class="form-control" type="text" name="gioitinh" value="<?= $item['gioitinh'];?>"> <br>
thongtinhhocsinh: <input class="form-control" type="text" name="thongtinhhocsinh" value="<?= $item['thongtinhhocsinh'];?>"> <br>
    <input type="submit" value="sửa">
</form>
