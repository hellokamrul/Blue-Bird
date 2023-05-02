<?php
class UserModel {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function getUserById($id) {
    $query = "SELECT name, phone, email, gender, dob FROM users WHERE id = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      return $result->fetch_assoc();
    } else {
      return null;
    }
  }
}
?>
