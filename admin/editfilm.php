<?php require('libs/db.php');
if(isset($_GET["id"])){
    $filmID = $_GET['id'];
}
$sql = "SELECT * FROM film WHERE id = $filmID";
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
       <div id="edit-film">
            <div class="row text-center">
                <h2>Chỉnh sửa film</h2>
            </div>
            <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal" action="" role="form" >
                <div>
                    <label for="ID-film" class="col-md-2">
                        ID phim
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="ID-film" value="<?php echo $row["id"]; ?>" readonly>
                    </div>
                </div>
                <div>
                    <label for="film-name" class="col-md-2">
                        Tên phim
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="film-name" name="film-name" value="<?php echo $row["name"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="film-name2" class="col-md-2">
                        Tên phim 2
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="film-name2" name="film-name2" value="<?php echo $row["name2"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="status" class="col-md-2">
                        Trạng thái
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $row["status"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="director" class="col-md-2">
                        Đạo diễn
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="director" name="director" value="<?php echo $row["director"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="actor" class="col-md-2">
                        Diễn viên
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="actor" name="actor" value="<?php echo $row["actor"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="category" class="col-md-2">
                        Thể loại 
                    </label>
                    <div class="col-md-10">
                        <select id="category" style="color: black" name="category">
                            <?php 
                                $sql1 = "SELECT * FROM category";
                                $result1 = mysqli_query($link, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>" <?php echo ($row1["id"] == $row["category_id"]) ?  "selected": "" ?> >
                                        <?php echo $row1["name"];?>
                                    </option>
                            <?php 
                                    }
                                    
                                }  
                                else {
                                    echo "No catagory";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="type" class="col-md-2">
                        Type-movie 
                    </label>
                    <div class="col-md-10">
                        <select id="type" style="color: black" name="type_movie" >
                            <option value="1" <?php echo ($row["category_id"] == 1) ?  "selected": "" ?>>Phim lẻ</option>
                            <option value="2" <?php echo ($row["category_id"] == 2) ?  "selected": "" ?>>Phim bộ</option>
                            <option value="3" <?php echo ($row["category_id"] == 3) ?  "selected": "" ?>>Phim rạp</option>
                            
                            <!-- <?php 
                                $sql = "SELECT * FROM type_movie";
                                $result = mysqli_query($link, $sql);

                                if (mysqli_num_rows($result) > 0) { 
                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row["id"];?>">
                                        <?php echo $row["name"];?>
                                    </option>
                            <?php 
                                    }
                                }  
                                else {
                                    echo "No nation";
                                }
                            ?> -->
                        </select>
                    </div>
                </div>
                <div>
                    <label for="nation" class="col-md-2">
                        Quốc gia
                    </label>
                    <div class="col-md-10">
                        <select id="nation" style="color: black" name="nation" >
                            <?php 
                                $sql1 = "SELECT * FROM nation";
                                $result1 = mysqli_query($link, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>" <?php echo ($row["nation_id"] == $row1["id"]) ?  "selected": "" ?>>
                                        <?php echo $row1["name"];?>
                                    </option>
                            <?php 
                                    }
                                }  
                                else {
                                    echo "No nation";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="year" class="col-md-2">
                        Năm phát hành
                    </label>
                    <div class="col-md-9">
                        <select id="year" name="year" id="year" style="color: black" >
                            <option value="2015" <?php echo ($row["year"] == 2015) ?  "selected": "" ?>>2015</option>
                            <option value="2016" <?php echo ($row["year"] == 2016) ?  "selected": "" ?>>2016</option>
                            <option value="2017" <?php echo ($row["year"] == 2017) ?  "selected": "" ?>>2017</option>
                            <option value="2018" <?php echo ($row["year"] == 2018) ?  "selected": "" ?>>2018</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="image" class="col-md-2">
                    Link ảnh 
                    </label>
                    <div class="col-md-9">
                        <input type="file" name="image_name" id="image_name" onchange="alertName()"/>
                        <input type="text" class="form-control" id="image_link" name="image" value="<?php echo $row["image"]; ?>">
                        <p class="help-block">
                            Ví dụ: /images/cuoc-chien-vo-cuc.jpg
                        </p>
                        <script>
                            function alertName() {
                                var name =  document.getElementById("image_name").value;
                                var n = name.lastIndexOf('\\'); 
                                var result = name.substring(n + 1);
                                document.getElementById("image_link").value = "image/" + result;
                            }
                        </script>
                    </div>
                </div>
                <div>
                    <label for="decription" class="col-md-2">
                    Mô tả phim 
                    </label>
                    <div class="col-md-9" style="color: black">
                        <textarea name="decription" id="decription" cols="82" rows="10" ><?php echo $row["description"]; ?></textarea>
                    </div>
                
                </div>
                <div>
                    <label for="duration" class="col-md-2">
                    Thời lượng (phút)
                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="duration" name="duration" value="<?php echo $row["duration"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="author" class="col-md-2">
                    Tác giả
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="author" name="author" value="<?php echo $row["author"]; ?>">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary" id="button_update" name="button_update">Lưu lại</button>
                    </div>
                </div>
            </form>
            
        </div>
        <?php
        require_once("libs/db.php");
        if(isset($_POST["button_update"])){
            $name = $_POST["film-name"];
            $name2 = $_POST["film-name2"];
            $status = $_POST["status"];
            $director = $_POST["director"];
            $actor = $_POST["actor"];
            $category = $_POST["category"];
            $type_movie = $_POST["type_movie"];
            $nation = $_POST["nation"];
            $year = $_POST["year"];
            $link_image = $_POST["image"];
            $link_film = '';
            $description = $_POST["decription"];
            $duration = $_POST["duration"];
            $author = $_POST["author"];

            //thực hiện việc lưu trữ dữ liệu vào db 
            $sql = "SELECT * FROM film WHERE ID = '$filmID'";
            $check = mysqli_query($link,$sql);
            if(mysqli_num_rows($check) <= 0){ ?>
                <script>
                    alert('Phim với ID <?php echo $userID;?> không tồn tại');
                </script>";
                <?php
            }
            else{
                $sql = "UPDATE film SET 
                    name='$name',
                    name2='$name2', 
                    status='$status', 
                    director='$director', 
                    actor='$actor', 
                    category_id='$category',
                    type_movie='$type_movie',
                    nation_id='$nation',
                    image='$link_image',
                    description='$description',
                    duration='$duration',
                    author='$author'
                WHERE id = $filmID";
                $result = mysqli_query($link,$sql); 

                if ($result){?>
                    <script>
                        alert("Edit film successfully!");
                        location.href= window.location.href; //reload page
                    </script>
                <?php 
                } else{ 
                ?>
                    <script>
                        alert("Edit film fail!"); -->
                    </script>
                <?php
                }
            }
        }
    ?>
        </div>
</div>
<?php }
        mysqli_close($link);
    ?>