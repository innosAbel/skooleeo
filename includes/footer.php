
        </div><!-- /.blog-main -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Site Statistics</div>
            <div class="card-body">
            <?php include '../counter.php'; ?>
            <hr>
            <h4>Page Views</h4>
            <?php include '../pageviews.php'; ?>
            <p><?php echo $site_description ;?></p>
            </div>
          </div>
          </div>
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container --> 
      
  </body>
</html>
