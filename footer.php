
        </div><!-- /.blog-main -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Site Statistics</div>
            <div class="card-body">
            <?php include 'counter.php'; ?>
            <hr>
            <h4>Page Views</h4>
            <?php 
              // connect to the MySQL server
              $host = 'localhost';
              $user = 'root';
              $pass = '';
              $dbname = 'counter';
              $conn = new mysqli($host, $user, $pass, $dbname);

              //Page URL 
              $page_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
              
              //check for count
              $query = mysqli_query($conn, "SELECT * FROM `pageview` WHERE `pageurl`='".$page_url."' "); 
              $rows = mysqli_fetch_array($query); 
              $counter = $rows['totalview']; 
              if(empty($counter)) 
              {
              $counter = 1;
              mysqli_query($conn, "INSERT INTO `pageview` SET `pageurl`='".$page_url."',`totalview`='".$counter."'"); 
              } 
              //increase counters by 1 on page load
              $counter = $counter+1;
              mysqli_query($conn, "UPDATE `pageview` SET `totalview`='".$counter."' WHERE `pageurl`='".$page_url."'");
              if($counter)
              {
              echo "Total page visit: ".$counter;
              } ?>
            <p><?php echo $site_description ;?></p>
            </div>
          </div>
          </div>
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container --> 
      
  </body>
</html>
