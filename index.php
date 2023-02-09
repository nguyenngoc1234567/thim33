<?php
// $data =[
//     'name'=>'a',
//     'dt' => 22
// ];
// extract($data);
// // $name = $data['name'];


// die();

// index.php?controller=product&action=index
// index.php?action=create
// echo '<pre>';
// print_r( $_REQUEST );
// die();
// Kiểm tra tồn tại chỉ số controller trong mảng $_REQUEST
if( isset( $_REQUEST['controller'] ) ){
    $controller = $_REQUEST['controller'];
}else{
    $controller = 'student';
}
// Kiểm tra tồn tại chỉ số action trong mảng $_REQUEST
if( isset( $_REQUEST['action'] ) ){
    $action = $_REQUEST['action'];
}else{
    $action = 'index';
}

// Quyết định gọi controller nào dựa vào biến controller
include_once 'controllers/Controller.php';
switch ($controller) {
    case 'student':
        include_once 'controllers/StudentController.php';
        $objController = new StudentController();
        break;
    // case 'blogs':
    //     include_once 'controllers/StudentController.php';
    //     $objController = new StudentController();
    default:
        # code...
        break;
}
// Quyết định gọi action nào dựa vào biến action
switch ($action) {
    // Hiển thị trang danh sách
    case 'index':
        $objController->index();
        break;
    // Hiển thị form thêm mới
    case 'create':
        $objController->create();
        break;
    // Xử lý thêm mới
    case 'store':
        $objController->store();
        break;
    // Hiển thị form chỉnh sửa
    case 'edit':
        $objController->edit();
        break;
    // Xử lý chỉnh sửa
    case 'update':
        $objController->update();
        break;
    // Hiển thị trang xóa
    case 'edit':
        $objController->edit();
        break;
     // Xử lý xóa
    case 'destroy':
        $objController->destroy();
        break;
    default:
        $objController->index();
        break;
}