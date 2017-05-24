<?php 

$host = "localhost";
$dbname = "sisfonews";
$username = "root";
$password = " ";
$db = "";

try {
      $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
      die("Connection error: ".$exception->getMessage());
}

$query = $db->prepare("SELECT * FROM berita");
$query->execute();
$data = $query->fetchAll();?>


<!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
 <?php 

foreach ($data as $ib) { ?>
                <h2>
                    <a href="#"><?php echo $ib['judul'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo $ib['tanggal'] ?></p>
                
 
 <p> <?php  echo $ib['isi'] ?></p>
<?php }
 
 ?> 
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>


 