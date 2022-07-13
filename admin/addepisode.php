<?php require('libs/db.php')?>

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
            <div class="row text-center">
                <h2>Thêm tập phim</h2>
            </div>

            <form action="" method="post">
                <div>
                    <label for="id_film" class="col-md-2">
                        Chọn phim 
                    </label>
                    <div class="col-md-10">
                        <select id="id_film" style="color: black; width:90%" name="id_film" class="form-control">
                            <?php 
                                $sql1 = "SELECT * FROM film";
                                $result1 = mysqli_query($link, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>">
                                        <?php echo $row1["name"];?>
                                    </option>
                                <?php 
                                    }
                                }  
                                else {?>
                                    <option value="-1">None</option>
                                <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="ID-episode" class="col-md-2">
                        ID tập phim
                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="ID-episode" value="" name="id_episode">
                    </div>
                </div>
                <div>
                    <label for="name_episode" class="col-md-2">
                        Tên tập phim
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="name_episode" value="" name="name_episode">
                    </div>
                </div>
                <div>
                    <label for="link" class="col-md-2">
                        Link tập phim
                    </label>
                    <div class="col-md-9">
                            <input type="file" name="video_name" id="video_name" onchange="getlink()"/>
                            <input type="text" class="form-control" id="video_link" name="video" >
                            <p class="help-block">
                            </p>
                            <script>
                                function getlink() {
                                    var name =  document.getElementById("video_name").value;
                                    var n = name.lastIndexOf('\\'); 
                                    var result = name.substring(n + 1);
                                    document.getElementById("video_link").value = "images/video/" + result;
                                }
                            </script>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <!-- <input class="btn btn-primary" type="submit" value="Post"> -->
                        <button type="submit" class="btn btn-primary" id="button_post" name="button_post">Thêm tập phim </button>
                    </div>
                </div>
            </form>

            </div>
            <?php
            if(isset($_POST["button_post"])){
                $id_film = $_POST["id_film"];
                $id_episode = $_POST["id_episode"];
                $name_episode = $_POST["name_episode"];
                $content = $_POST["video"];

                $sql = "SELECT * FROM episode WHERE episode=". $id_episode;
                $result = mysqli_query($link,$sql);
                if (mysqli_num_rows($result)){?>
                    <script>
                        alert("Tập phim này đã có");
                    </script>
                <?php
                }else {
                    $sql = "INSERT INTO episode(film_id,episode,episode_name,content)            
                        VALUES ('$id_film', '$id_episode','$name_episode','$content')";
                    $result = mysqli_query($link,$sql);
                    if($result){?>
                        <script>
                            alert("Thêm tập phim thành công!");
                        </script>
                    <?php
                    } else { ?>
                        <script>
                            alert("Lỗi thêm tập phim"); -->
                        </script>
                    <?php 
                
                    }
                }
            }
            ?>
</div>