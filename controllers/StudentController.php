<?php
include_once 'models/Student.php';
class StudentController extends Controller
{
    // goi thoi trang danh sach
    public function index()
    {
        // goi model
        $objstudent = new Student();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objstudent->all();
        $params = [
            'items' => $items
        ];

        // var_dump($params);
        // die();
        // include_once 'views/students/index.php';
        $this->view('student/index.php', $params);
    }
    // Goi toi trang them moi
    public function create()
    {
        // die();
        // Goi view
        // include_once 'views/students/create.php';
        $this->view('student/create.php');
        // <this->view 'views/students/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        $data = [
            'tenhocsinh' => $_REQUEST['tenhocsinh'],
            'lop' => $_REQUEST['lop'],
            'ngaysinh' => $_REQUEST['ngaysinh'],
            'gioitinh' => $_REQUEST['gioitinh'],
            'thongtinhhocsinh' => $_REQUEST['thongtinhhocsinh'],
        ];

   
        // Gọi model
        $objstudent = new Student();
        $objstudent->save($data);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=student&action=index');
        die();
    }
    public function edit()
    {
        $id = $_REQUEST['id'];
        // Gọi model
        $objstudent = new Student();
        $item = $objstudent->find($id);
        // truyen xuong view
        include_once 'views/student/edit.php';
    }
    public function update()
    {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();

        $id = $_REQUEST['id'];
        // Lấy dữ liệu từ _REQUEST gán vào mảng data
        $data = [
            // 'mahocsinh' => $_REQUEST['mahocsinh'],
            'tenhocsinh' => $_REQUEST['tenhocsinh'],
            'lop' => $_REQUEST['lop'],
            'ngaysinh' => $_REQUEST['ngaysinh'],
            'gioitinh' => $_REQUEST['gioitinh'],
            'thongtinhhocsinh' => $_REQUEST['thongtinhhocsinh']
        ];
         //     <th>mahocsinh</th>
    //     <th>tenhocsinh </th>
    //     <th>lop </th>
    //     <th>ngaysinh </th>
    //     <th>gioitinh </th>
    //     <th>thongtinhhocsinh </th>
    //     <th>action </th>
    // </tr>
        // Gọi model
        $objstudent = new Student();
        $objstudent->update($id, $data);

        // Chuyển hướng về trang danh sách
        // header("Location: index.php?controller=student&action=index ");
        // die();
        $this->redirect('index.php?controller=student&action=index');
        die();
    }
    public function destroy()
    {
        $id = $_REQUEST['id'];
        // Gọi model
        $objstudent = new Student();
        $objstudent->delete($id);

        // Chuyển hướng về trang danh sách
        // header("Location: index.php?controller=student&action=index ");
        // die();
        $this->redirect('index.php?controller=student&action=index');
        die();
    }
}
