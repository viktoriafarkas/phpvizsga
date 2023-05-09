<?php

    define("DB_HOST", "localhost");
    define("DB_NAME", "vezetes");
    define("DB_CHARSET", "utf8");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");


    class Admin {
        private $pdo = null;
        private $stmt = null;
        public $error = "";
        function __construct () { try {
            $this->pdo = new PDO(
                "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, DB_USER, DB_PASSWORD, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
                );
            } catch (Exception $ex) {exit($ex->getMessage());}
        }

        function __destruct() {
            if ($this->stmt !== null) {$this->stmt = null;}
            if ($this->pdo !== null) {$this->pdo = null;}
        }

        function query($sql, $data=null) {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($data);
        }

        function get($id) {
            $this->query(sprintf("SELECT * FROM admin WHERE %s = ?", is_numeric($id) ? "admin_id" : "admin_email"
            ), [$id]);
            return $this->stmt->fetch();
        }
        
        function save($email, $password, $id=null) {
            $sql = $id==null
            ? "INSERT INTO admin (admin_email, admin_password) VALUES (?,?)"
            : "UPDATE admin SET admin_email=?, admin_password=? WHERE admin_id=?";
            $data = [$email, password_hash($password, PASSWORD_DEFAULT)];
            if ($id!=null) {$data [] = $id; }

            $this->query($sql, $data);
            return true;
        }

        function verify($email, $password) {
            $admin = $this->get($email);
            $pass = is_array($admin);

            if ($pass) {
                $pass = password_verify($password, $admin["admin_password"]);
            }

            if ($pass) {
                foreach ($admin as $k => $v) { $_SESSION["admin"][$k] = $v;}
                unset($_SESSION["admin"]["user_password"]); 
            }

            if(!$pass) {
                $this->error = "Helytelen email vagy jelszó";
            } return $pass;
        }

    }

    // START SESSION
    session_start();

    // ADMIN OBJECT 
    $_ADM = new Admin();

/*     // TEST 1 - ADD USER - működik
    echo $_ADM->save("teszt@vizsga.hu", "12345")
    ? "OK" : $_ADM-> error;  */

/*     // TEST 2 - ADD USER - működik
    echo $_ADM->save("phpoktatas@vizsga.hu", "teszt123")
    ? "OK" : $_ADM-> error;  */

/*      // TEST 2 - GET USER - működik
    print_r($_ADM->get(1)); */

    // TEST - VERIFY USER LOGIN
/*      echo $_ADM->verify("teszt@vizsga.hu", "12345")
    ? "OK" : $_ADM->error;
    print_r($_SESSION);  */

?>