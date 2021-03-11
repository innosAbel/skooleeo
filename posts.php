<?php include 'header.php'; ?>
<?php if ($posts) : ?>
  <?php while ($row=$posts->fetch_assoc()) : ?>
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['title'] ?></h5>
        <p class="card-text"><?php echo shortenText($row['body']); ?></p>
        <hr>
        <p class="card-text"><?php echo formatDate($row['date']) ?> by <a href="#"><?php echo $row['author'] ?></p>
        <a href="post.php?id=<?php echo urlencode($row['id']) ; ?>">
          <button type="button" class="btn btn-primary btn-lg btn-block">Read More</button>
        </a>
      </div>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p>There are no posts yet</p>

<?php endif; ?>
<?php include 'footer.php'; ?>