

<a class="btn btn-info" href="index.php?controller=student&action=create">thêm mới</a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>mahocsinh</th>
            <th>tenhocsinh </th>
            <th>lop </th>
            <th>ngaysinh </th>
            <th>gioitinh </th>
            <th>thongtinhhocsinh </th>
            <th>action </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $key => $row) : ?>
            <tr>
                <td><?= $row['mahocsinh']; ?></td>
                <td><?= $row['tenhocsinh']; ?></td>
                <td><?= $row['lop']; ?></td>
                <td><?= $row['ngaysinh']; ?></td>
                <td><?= $row['gioitinh']; ?></td>
                <td><?= $row['thongtinhhocsinh']; ?></td>
                <td>
                    <a class="btn btn-warning" href="index.php?controller=student&action=edit&id=<?= $row['mahocsinh']; ?>">Sửa</a> |
                    <a class="btn btn-danger" href="index.php?controller=student&action=destroy&id=<?= $row['mahocsinh']; ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- /**
        $tenhocsinh = $data['tenhocsinh'];
        $lop = $data['lop'];
        $ngaysinh = $data['ngaysinh'];
        $gioitinh = $data['gioitinh'];
        $thongtinhhocsinh = $data['thongtinhhocsinh'];
        $sql = "INSERT INTO `student` (`tenhocsinh`, `lop`, `ngaysinh`, `gioitinh`,`thongtinhhocsinh`) VALUES ('$tenhocsinh', $lop, '$ngaysinh', '$gioitinh', '$thongtinhhocsinh')";
        // var_dump($sql); */ -->