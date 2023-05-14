<?php
//nhung thu vien Model va Database 
require_once 'model/master.php';
//goi url duoi len
//de
if (isset($_GET['controller'], $_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'Home';
    $action = 'index';
}
require_once 'view/layout.php';


?>