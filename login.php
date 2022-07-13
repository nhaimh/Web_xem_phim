<?php
    session_start();
?>

<?php
    require_once("libs/db.php");
    if(isset($_POST["btn_login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
            
        $username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {?>
            <?php
            echo "<script>
			alert('Username và Password không được để trống!');
            document.location='index.php';    
            </script>";
            ?>
            <?php
        }
        else{
			$sql = "SELECT * FROM user WHERE username = '$username'";
            $result = mysqli_query($link,$sql);
            if(!$result || (mysqli_num_rows($result) < 1)){?>
                <?php
                    echo "<script>
			        alert('Username không đúng!');
                    document.location='index.php';    
                    </script>";
                ?>
            <?php
            }
            $dbarray = mysqli_fetch_array($result); 

            if(password_verify($password,$dbarray["password"])){
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                // phân quyền
                if($dbarray['usertype'] == 99){
                    header('Location:admin/index.php');
                }
                else{
                    //member
                    header('Location:index.php');                    
                }
            }
            else{?>
                <?php
                    echo "<script>
			        alert('Password không đúng!');
                    document.location='index.php';    
                    </script>";
                ?>
                <?php
            }
		}
    }
?>