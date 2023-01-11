<?php

require_once "Encryption.php";
class Authentication
{
  private $conn;
  private $encrypt;
  private $count;
  private $usertype;
  private $type;
  private $username;
  function __construct()
  {
    $this->conn = new DatabaseConnection();
    $this->encrypt = new EncDec();
    $this->count = 0;
    $this->usertype = "";
    $this->type = "";
  }

  function authUser($login)
  {

    $dpassword = $this->encrypt->encrypt($login->getPassword());
    $userlogin = "SELECT username,password FROM student where username=? and password=? limit 1";
    try {
      $r_userlogin = $this->conn->executePrepareReturn($userlogin, "ss", array($login->getUserName(), $dpassword));
      $usertypename = mysqli_fetch_row($r_userlogin)[0];

      $this->usertype = $usertypename;
    } catch (Exception $exception) {
    }
    if ($usertypename) {
      $this->count++;
      $this->type = "u";
      echo $this->type;
      $this->username = $usertypename;
      $this->sessionStart($this->count, $this->type);

?>
<script>
window.location.href = "dashboard.php";
</script>
<?php }
    return $this->count;
  }

  function authAdmin($login)
  {

    $dpassword = $this->encrypt->encrypt($login->getPassword());

    $query = "SELECT type from staff WHERE userName=?";
    $m_userlogin = $this->conn->executePrepareReturn($query, "s", array($login->getUserName()));
    $type_id = mysqli_fetch_row($m_userlogin)[0];

    $userlogin = "SELECT userName,password FROM staff where userName=? and password=? and type=? limit 1";
    try {
      $r_userlogin = $this->conn->executePrepareReturn($userlogin, "ssi", array($login->getUserName(), $dpassword, $type_id));
      $usertypename = mysqli_fetch_row($r_userlogin)[0];

      $this->usertype = $usertypename;
    } catch (Exception $exception) {
      echo "hello" . $exception->getMessage();
    }
    if ($usertypename) {
      $this->count++;
      $this->type = "a";
      $this->username = $usertypename;
      $this->sessionStart($this->count, $this->type);
    ?>
<script>
window.location.href = "product.php";
</script>
<?php }
    return $this->count;
  }

  function authStaff($username, $password)
  {

    $dpassword = $this->encrypt->encrypt($password);

    $userlogin = "SELECT uname,password FROM user where uname=? and password=? limit 1";
    try {
      $r_userlogin = $this->conn->executePrepare($userlogin, "ss", array($username, $dpassword));
      $usertypename = mysqli_fetch_row($r_userlogin)[0];
      $this->usertype = $usertypename;
    } catch (Exception $exception) {
      echo "hello" . $exception->getMessage();
    }
    if (!$usertypename) { ?>
<script>
window.alert("please enter username and password");
</script>

<?php } else {
      $this->count++;
      $this->type = "s";
      $this->sessionStart($this->count, $this->type);

    ?>
<?php }
  }
  function sessionStart($count, $type)
  {
    if ($count == 1 && $type == "u") {
      $_SESSION['user'] = $type;
      $_SESSION['username'] = $this->username;
      $_SESSION['listelements'] = array();
      $_SESSION['count'] = 0;
      $_SESSION['allTotal'] = 0;
    } else if ($count == 1  && $type == "s") {

      $_SESSION['staff'] = $this->usertype;
    } else {

      $_SESSION['admin'] = $this->usertype;
        $_SESSION['user'] = $type;
    }
  }
  function getCount()
  {
    return $this->count;
  }
}
//au = new Authentication();
//$au->authUser("sandip547","sa#12753");


?>