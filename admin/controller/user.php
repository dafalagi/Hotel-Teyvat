<?php
    include_once('./config/serverConfig.php');

    class User {
        public $conn;

        public function __construct()
        {
            // Create database connection 
                $this->conn =  new mysqli(dbHost, dbUsername, dbPassword, dbName); 
         
                // Check connection 
                if ($this->conn->connect_error) { 
                    echo "Connection failed: " . $this->conn->connect_error; 
                }else {
                    return $this->conn;
                }
        }

        public function login($post){
            $username = $this->conn->real_escape_string($_POST['username']);
            $password = $this->conn->real_escape_string($_POST['password']);

            if (!empty($username || !empty($password))){
                $sql = "SELECT * FROM akun WHERE username='$username'";
                $result = $this->conn->query($sql);
                if ($result -> num_rows == 1){
                    while ($row = $result -> fetch_assoc()){
                        if (password_verify($password, $row['Password'])){
                            $_SESSION['login'] = "true";
                            $_SESSION['username'] = $username;
                            header('Location:./home.php', true, 301);
                            exit();
                        }else {
                            return $errMsg = "Email or Password is invalid";
                        }
                    }
                }else {
                    return $errMsg = "User not found";
                }
            }else {
                return  $errMsg = "Username and Password is required";
            }
        }

        /*public function register($post){
            $username = $this->conn->real_escape_string($_POST['username']);
            $email = $this->conn->real_escape_string($_POST['email']);
            $password1 = $this->conn->real_escape_string($_POST['password_1']);
            $password2 = $this->conn->real_escape_string($_POST['password_2']);
            $password = password_hash($password1, PASSWORD_BCRYPT);

            $sql = "SELECT * FROM akun WHERE email='$email'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            
            if (empty($username) || empty($email) || empty($password1) || empty($password2)){
                return $errMsg = "Please fill the blank field";
            }else if ($username == $row['Username']){
                return $errMsg = "Username already exists";
            }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $errMsg = "Email is not valid. Please try again";
            }else if ($email == $row['Email']){
                return $errMsg = "Email already exists";
            }else if ($password1 != $password2){
                return $errMsg = "Password does not match";
            }else if (strlen($password1) < 6){
                return $errMsg = "Password should be 6 digits";
            }else {
                $sql2 = "INSERT INTO akun VALUES ('$username','$email','$password')";
                $result2 = $this->conn->query($sql2);
                if ($result2 == true){
                    $_SESSION['login'] = "true";
                    $_SESSION['username'] = $username;
                    header('Location:./home.php', true, 301);
                    exit();
                }else {
                    return $errMsg = "You are not registered. Please try again";
                }
            }

        }*/

        public function viewUser(){
            $sql = "SELECT * FROM akun";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function insertUser($post){
            $username = $this->conn->real_escape_string($_POST['username']);
            $email = $this->conn->real_escape_string($_POST['email']);
            $password1 = $this->conn->real_escape_string($_POST['password']);
            $password = password_hash($password1, PASSWORD_BCRYPT);

            $sql = "INSERT INTO akun
                    VALUES ('$username', '$email', '$password')";
            $result = $this->conn->query($sql);
            
            return $result;
        }

        public function getUser($id){
            $sql = "SELECT * FROM akun where username='$id'";
            $result = $this->conn->query($sql);
            
            return $result;
        }

        public function updateUser($post){
            $id = $this->conn->real_escape_string($_POST['id']);
            $username = $this->conn->real_escape_string($_POST['username']);
            $email = $this->conn->real_escape_string($_POST['email']);
            $password1 = $this->conn->real_escape_string($_POST['password']);
            $password = password_hash($password1, PASSWORD_BCRYPT);

            $sql = "UPDATE akun SET username='$username', email='$email', password='$password' WHERE username='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function deleteUser($id){
            $sql = "DELETE FROM akun WHERE username='$id'";
            $result = $this->conn->query($sql);

            return $result;
        }

        public function logout(){
            session_unset();
            session_destroy();
            header("Location:./index.php", true, 301);
            exit();
        }
    }
?>