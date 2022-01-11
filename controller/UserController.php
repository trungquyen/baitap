<?php
    require_once 'model/UserModel.php';
    class UserController{
        // Điều khiển về mặt logic giữa UserModel và User View
        function index(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $userModel = new UserModel();
            $users = $userModel->getAllUsers();
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/user/index.php';
        }

        function add(){
            $error = '';
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            if (isset($_POST['btnSave'])){
                $hovaten = $_POST['hovaten'];
                $gioitinh = $_POST['gioitinh'];
                $namsinh = $_POST['namsinh'];
                $nghenghiep = $_POST['nghenghiep'];
                $ngaycapthe = $_POST['ngaycapthe'];
                $ngayhethan = $_POST['ngayhethan'];
                $diachi = $_POST['diachi'];
                if (empty($hovaten)) {
                    $error = "Tên không được để chống";
                }else{
                    $userModel = new UserModel();
                    $userArr = [
                        'hovaten' => $hovaten,
                        'gioitinh' => $gioitinh,
                        'namsinh' => $namsinh,
                        'nghenghiep' => $nghenghiep,
                        'ngaycapthe' => $ngaycapthe,
                        'ngayhethan' => $ngayhethan,
                        'diachi' => $diachi
                    ];
                    $isUser = $userModel->AddUser($userArr);
                    if(!$isUser){
                        header("Location: index.php?controller=user&action=error"); //Chuyển hướng lỗi
                    }else{
                        header("Location: index.php?controller=user&action=index");
                    }
                    
                }
            }
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/add.php tương ứng
            require_once 'view/user/add.php';
            //header("Location: index.php?controller=employee&action=index");
        }

        
        function delete(){
            $madg = $_GET['id'];
            if (!is_numeric($madg)){
                header("Location: index.php?controller=user&action=index");
                exit();
            }
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $userModel = new UserModel();
            $$delUser = $userModel->DeleteUser($madg);
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/edit.php tương ứng
            // require_once 'view/employee/index.php';
            header("Location: index.php?controller=user&action=index");
        }

        function error(){
            require_once 'view/user/error.php';
        }
        
    }



?>