<?php
require_once '../Models/UserModel.php';
require_once '../test/UserView.php';

class UserController {
  private $model;
  private $view;

  public function __construct($db) {
    $this->model = new UserModel($db);
    $this->view = new UserView();
  }

  public function showUser($id) {
    $user = $this->model->getUserById($id);
    $this->view->render($user);
  }
}
?>
