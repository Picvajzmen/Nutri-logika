
  <!--Select one post -->
  <?php require_once("php/connection.php"); ?>
  <?php
  if (!isset($_GET['id'])) {
    header("Location:index.php");
  } else {
    $post_id = $_GET['id'];

    $sql = "SELECT * FROM posts  WHERE id= $post_id AND status = 1";
    $query = $conn->prepare($sql);
    $query->execute();
    $selectOne = $query->get_result()->fetch_assoc();
  }
  include_once 'php/includes/head-relative.php';
  ?>



  <!-- =====================
            SINGLE POST
    ======================= -->
  <main>
    <div class="single-post__wrapper">
      <div class="single-post__img--wrapper">
        <img src="css/img/blog/<?php echo $selectOne['image'] ?>" alt="" class="single-post__img" />
        <div class="single-post__title">
          <h1><?php echo $selectOne['title'] ?>.</h1>
          <ul class="single-post__title--info">
            <li>• Author: Jovan Cvetojevic</li>
            <li>• Date: <?php echo " " .  date('F j, Y', strtotime($selectOne['created_at'])); ?></li>
            <li>• Category: <?php echo $selectOne['topic'] ?></li>
          </ul>
        </div>
      </div>
      <div class="single-post__underline"></div>
      <div class="single-post__content-wrapper">
        <div class="single-post__content">
          <p>
            <?php echo htmlspecialchars_decode($selectOne['body']) ?>
          </p>
        </div>

        <div class="single-post__sidebar">
          <h2>Najnoviji postovi</h2>
          <ul>
            <?php
            //// Read all post from DB
            $table = 'posts';
            $allPosts = selectAll($table)
            ?>
            <?php foreach ($allPosts as $key => $post) : ?>
              <li class="sidebar-post">
                <div class="sidebar-post__title"> <a href="blog-single-post.php?id=<?php echo $post['id']; ?>"><?php echo ($post['title']); ?></a></div>
              </li>
            <?php endforeach; ?>
          </ul>

        </div>
      </div>
    </div>
  </main>

<?php include_once 'php/includes/foot-min.php'; ?>
</body>

</html>