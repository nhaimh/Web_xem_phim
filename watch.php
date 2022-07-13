<?php
  if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
  if (isset($_GET['episode'])) $episode = $_GET['episode'];
  $sql = "select * from `episode` where `film_id` = '$film_id' and `episode` = '$episode'";
  $query= mysqli_query($link, $sql);
  $r=mysqli_fetch_assoc($query);
?>
<div id="content">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="PbmyDxEh"></script>
    <div  id="movie-display">
        <div class="row cur-location">
            <nav id="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="?mod=home">Xem phim</a>
                    </li>
                    /
                    <li class="breadcrumb-item">
                      <?php
                        if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
                        $sql = "select * from `film` where `id` = '$film_id'";
                        $query= mysqli_query($link, $sql);
                        $r1=mysqli_fetch_assoc($query);
                        $type_movie = $r1['type_movie'];
                        $sql2 = "select * from `type-movie` where `id` = '$type_movie'";
                        $query = mysqli_query($link, $sql2);
                        $r2=mysqli_fetch_assoc($query);
                      ?>
                      <a href="?mod=list&type=<?php echo $r2['handle'] ?>&year=2018"><?php echo $r2['name'] ?></a>
                    </li>
                    /
                    <?php
                    $sql = "select * from `film` where `id` = '$film_id'";
                    $query= mysqli_query($link, $sql);
                    $r3=mysqli_fetch_assoc($query);
                    ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $r3['name'] ?></li>
                </ol>
            </nav>
        </div>
        <div class="row body_video">
            <div class="col-sm-12">
                <?php 
                     if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
                     $sql = "select * from `film` where `id` = '$film_id'";
                     $query= mysqli_query($link, $sql);
                     $r4=mysqli_fetch_assoc($query);
                ?>
                <iframe src="https://tartarus.feralhosting.com/firepig/JP/MOVIES/The%20Avengers%20%282012%29/The.Avengers.2012.720p.BluRay.x264.YIFY.mp4" 
                    width="670" height="400" frameborder="0" scrolling="no" allowfullscreen></iframe>
            </div>
            <div class="share">
                <div class="row">
                    <button type="button" class="btn btn-secondary">
                        <img src="images/icons/plus.png" alt="Share" width="20px"> Thêm vào hộp
                    </button>
                    <div class="fb-share-button" data-href="http://webphim/?mod=watch&film_id=121&episode=1" data-layout="button" data-size="small">
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u" class="fb-xfbml-parse-ignore">Share</a></div>
                    <button type="button" class="btn btn-secondary">AutoNext: On</button>
                    <button type="button" class="btn btn-secondary">
                        <img src="images/icons/lamp.png" alt="Share" width="20px"> Tắt đèn
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div  id="server-list">
        <div class="row">
            <div>
            <p>Bạn đang xem phim <a href="#"><?php echo $r3['name'] ?></a> online chất lượng cao miễn phí tại doanwebhd.click</p>
            </div>        
        </div>
    </div>
</div>


