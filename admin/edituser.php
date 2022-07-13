<?php require('libs/db.php');
    if(isset($_GET["id"])){
        $userID = $_GET['id'];
    }
    $sql = "SELECT * FROM user WHERE id = $userID";
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) == 0) { 
        echo "No required user";
    } else {
        $row = mysqli_fetch_assoc($result);?>

<div id="content-wrapper"class="d-flex flex-column">  
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
    </li>

    <!-- Nav Item - Messages -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
                Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_1.svg"
                        alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                        problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_2.svg"
                        alt="...">
                    <div class="status-indicator"></div>
                </div>
                <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how
                        would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_3.svg"
                        alt="...">
                    <div class="status-indicator bg-warning"></div>
                </div>
                <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with
                        the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                        alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">hai</span>
            <img class="img-profile rounded-circle"
                src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>     
       <div class="container">
       <div id="add-user">
            <div class="row text-center">
                <h2>Chỉnh sửa User</h2>
            </div>
            <form method="post" id="form-update" name="form-update" class="form-horizontal" action="" role="form" style="padding: 20px;">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">ID</label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control" name="id" id="id" value="<?php echo $row["ID"];?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tài khoản</label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $row["username"];?>">
                        <label class="notifyerror" style="visibility: hidden; height: 0px" id="usernameerror">Tên tài khoản chỉ bao gồm ký tự a-z, A-Z và số</label>
                        </div>
                    </div>
                    <!-- dont have to get value of password from db -->
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Mật khẩu mới</label>
                        <div class="col-lg-7">
                        <input type="password" class="form-control" name="password" id="password1" value="">
                        <label class="notifyerror" style="visibility: hidden; height: 0px" id="password1error">Mật khẩu phải bao gồm chữ thường, chữ hoa và số, độ dài tối thiểu 8 ký tự</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Họ tên</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $row["fullname"];?>">
                            <label class="notifyerror" style="visibility: hidden; height: 0px" id="fullnameerror">Tên chỉ bao gồm các chữ cái</label>  
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-7"><input type="email" class="form-control" name="email" id="email" value="<?php echo $row["email"];?>">
                            <label class="notifyerror" style="visibility: hidden; height: 0px" id="emailerror">Email không đúng định dạng name@domain</label>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday" class="col-lg-3 control-label">Ngày sinh</label>
                        <div class="col-lg-7">
                            <input class="form-control" type="date" value="<?php echo $row["birthday"];?>" id="birthday" name="birthday">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Giới tính</label>
                        <div class="col-lg-7">
                            <label class="checkbox-inline">
                            <input type="radio" name="gender" id="update-gender-male" value="male" <?php if($row["sex"] == "male") echo "checked";?>> Nam</label>
                            <label class="checkbox-inline">
                                <input type="radio" name="gender" id="update-gender-female" value="female" <?php if($row["sex"] == "female") echo "checked";?>> Nữ
                            </label>
                        </div>
                    </div>
                    
                    <div class="col-offset-3 col-lg-10">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-7">
                            <button type="submit" class="btn btn-primary" id="button_update" name="button_update">Lưu lại </button>
                            <button type="submit" class="btn btn-primary" id="button_previous" name="button_previous" onclick="goToPrePage()">Về trang trước </button>
                        </div>
                    </div>

                    <div class="clear"></div>
                </form>
            
        </div>
        </div>
        <script>
        function goToPrePage() {
                // alert("lallalla");
                location.href= "edit_delete.php"; //not go to edit_delete.php page,   WHY????
                // alert("heheheh");
        };
    </script>
    <script language="javascript">
        var username = document.getElementById("username");
        var password1 = document.getElementById("password1");
        var password2 = document.getElementById("password2");
        var fullname = document.getElementById("fullname");
        var email = document.getElementById("email");
        var phone = document.getElementById("phone");
        var button_update = document.getElementById("button_update");

        var usernameerror = document.getElementById("usernameerror");
        //var passworderror = document.getElementById("passworderror");
        var password1error =  document.getElementById("password1error");
        var password2error1 =  document.getElementById("password2error1");
        var fullnameerror = document.getElementById("fullnameerror");
        var emailerror =  document.getElementById("emailerror");
        //var phoneerror =  document.getElementById("phoneerror");

        var regUsername = /^[A-Za-z0-9]+$/;
        var regFullname = /^[A-Za-z ]+$/;
        var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        // var regPhone =  /^\d{10}$/;
        var regPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/

        //var errorPasswordDefault = (passworderror.innerText || passworderror.textContent);

        username.onchange = function(){
            checkname();
        }

        password1.onchange = function(){
            checkNewpassword();
        }

        password2.onchange = function(){
            checkNewpassword2();
        }

        fullname.onchange = function(){
            checkfullname();
        }

        email.onchange = function(){
            checkemail();
        }

        button_update.onclick = function(){
            if(username.value.toString().length <= 0){
            alert("Bạn chưa nhập tên tài khoản");
            checkname();
            return false;
            }

            if(fullname.value.toString().length <= 0){
            alert("Bạn chưa nhập tên");
            checkname();
            return false;
            }

            if(email.value.toString().length <= 0){
            alert("Bạn chưa nhập email");
            checkemail();
            return false;
            }

            var validName = checkname();

            var validNewPass1 = true;
            var validNewPass2 = true;

            if(password1.value.toString().length > 0 || password2.value.toString().length > 0){
            validNewPass1 = checkNewpassword();
            validNewPass2 = checkNewpassword2();
            }
            var validFullname = checkfullname();
            var validEmail = checkemail();

            if(validName && validNewPass1 && validNewPass2 && validFullname && validEmail){
            return true;
            }
            return false;
        }
        function checkNewpassword(){
            if(!regPassword.test(password1.value)){
            password1error.style.visibility = 'visible';
            password1error.style.height = 'auto';
            return false;
            }
            else{
            password1error.style.visibility = 'hidden';
            password1error.style.height = '0px';
            
            if(password2.value.toString().length > 0){
                if(password2.value.localeCompare(password1.value) == 0){
                password2error1.style.visibility = 'hidden';
                password2error1.style.height = '0px';
                return true;
                }
                else{
                password2error1.innerHTML = "Mật khẩu không khớp";
                password2error1.style.visibility = 'visible';
                password2error1.style.height = 'auto';
                return false;
                }
            }   
            return true;
            }
        }

        function checkname(){
            if(!regUsername.test(username.value)){
            usernameerror.style.visibility = 'visible';
            usernameerror.style.height = 'auto';
            return false;
            }
            else{
            usernameerror.style.visibility = 'hidden';
            usernameerror.style.height = '0px';
            return true;
            }
        }

        function checkpass(){
            if(!regPassword.test(password.value)){
            passworderror.style.visibility = 'visible';
            passworderror.style.height = 'auto';
            return false;
            }
            else{
            passworderror.style.visibility = 'hidden';
            passworderror.style.height = '0px';
            return true;
            }
        }

        function checkemail(){
            if(!regEmail.test(email.value)){
            emailerror.style.visibility = 'visible';
            emailerror.style.height = 'auto';
            return false;
            }
            else{
            emailerror.style.visibility = 'hidden';
            emailerror.style.height = '0px';
            return true;
            }
        }

        function checkfullname(){
            if(!regFullname.test(fullname.value)){
            fullnameerror.style.visibility = 'visible';
            fullnameerror.style.height = 'auto';
            return false;
            }
            else{
            fullnameerror.style.visibility = 'hidden';
            fullnameerror.style.height = '0px';
            return true;
            }
        }

        function checkNewpassword2(){
            if(!regPassword.test(password2.value)){
            //password2error1.innerHTML = errorPasswordDefault;
            password2error1.style.visibility = 'visible';
            password2error1.style.height = 'auto';
            return false;
            }
            else{
            if(password1.value.toString().length > 0){
                if(password2.value.localeCompare(password1.value) == 0){
                password2error1.style.visibility = 'hidden';
                password2error1.style.height = '0px';
                return true;
                }
                else{
                password2error1.innerHTML = "Mật khẩu không khớp";
                password2error1.style.visibility = 'visible';
                password2error1.style.height = 'auto';
                return false;
                }
            }
            else{
                password2error1.style.visibility = 'hidden';
                password2error1.style.height = '0px';
                return true;
            }
            }
        }
    </script>

    <?php
        require_once("libs/db.php");
        if(isset($_POST["button_update"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            // echo $username;
                $hash = password_hash($password, PASSWORD_BCRYPT);
            $email = $_POST["email"];
            $fullName = $_POST["fullname"];
            $birthday = $_POST["birthday"];
            $gender = $_POST["gender"];

            //thực hiện việc lưu trữ dữ liệu vào db 
            // edit != insert
            $sql = "SELECT * FROM user WHERE ID = '$userID'";
            $check = mysqli_query($link,$sql);
            print_r(mysqli_num_rows($check));
            if(mysqli_num_rows($check) <= 0){ ?>
                <script>
                    alert('Tài khoản với ID <?php echo $userID;?> chưa có');
                </script>";
                <?php
            }
            else{
                $sql = "UPDATE user SET username='$username', password='$hash', fullname='$fullName', email='$email', birthday='$birthday', sex='$gender' WHERE id = $userID";
                $result = mysqli_query($link,$sql); 

                if ($result){?>
                    <script>
                        alert("Edit user successfully!");
                        location.href= window.location.href; //reload page
                    </script>
                <?php 
                } else{ 
                ?>
                    <script>
                        alert("Edit user fail!"); -->
                        location.href= window.location.href; //reload page
                    </script>
                <?php
                }
            }
        }
    ?>
   

</div>
<?php }
        mysqli_close($link);
    ?>