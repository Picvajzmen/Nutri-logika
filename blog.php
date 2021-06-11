<!-- SEARCH -->
<?php /// SEARCH

if (isset($_POST['search-term']) && ($_POST['search-term']) !== "") {

  $search = strip_tags($_POST['search-term']);
  $naslov = `Rezultat pretrage <span>"'."$search". '"</span>`;
}
include_once 'php/includes/head-relative.php';
?>

  <!-- =====================
            BLOG MAIN
    ======================= -->
  <main>
    <?php
    //// Read ALL post from DB
    require_once('php/connection.php');

    $sql = "SELECT * FROM posts WHERE status = 1 ORDER BY id DESC";
    $query = $conn->prepare($sql);
    $query->execute();
    $posts = $query->get_result()->fetch_all(MYSQLI_ASSOC);
    ?>
    <div class="blog-index__wrapper">
      <div class="blog-index__main-title--wrapper">
        <div class="blog-index__main-title">
          <h1>Najnoviji <span>blog</span> postovi</h1>
        </div>
      </div>

      <?php foreach ($posts as $key => $post) : ?>
        <div class="blog-index__content">
          <ul class="blog-index__info--list">
            <li><span>Author:</span> Jovan Cvetojevic</li>
            <li><span>Date:</span> <?php echo " " .  date('F j, Y', strtotime($post['created_at'])); ?></li>
            <li><span>Category:</span> <?php echo $post['topic']; ?></li>
          </ul>
          <div class="blog-index__img-holder">
            <a href="blog-single-post.php?id=<?php echo $post['id'] ?>"><img src="css/img/blog/<?php echo ($post['image']); ?>" alt="" class="post-image"></a>
          </div>
          <div class="blog-index__content--text">
            <a href="blog-single-post.php?id=<?php echo $post['id']; ?>" class="single-blog__link">
              <div class="blog-index__title">
                <h4><?php echo $post['title']; ?></h4>
              </div>
              <?php echo substr($post['body'], 0, 200) . '...'; ?>
            </a>
          </div>
          <div class="blog-index__underline"></div>
        </div>
      <?php endforeach; ?>
      <!-- SEARCH <div class="blog-list__sidebar"> -->

      <?php
      $postTitle = "Najnoviji postovi";
      if (isset($_POST['search-term']) && ($_POST['search-term']) !== "") {

        $search = strip_tags($_POST['search-term']);
        $postTitle = 'Rezaltat pretrage po pojmu " ' . $search . '"';
        $searchPosts = searchPost($search);
        if ($searchPosts === []) {
          $postTitle = 'Nema Rezaltata pretrage po pojmu " ' . $search . '"';
        }
        $allPosts = $searchPosts;
      } else {
        //// Read all post from DB because there is not search 
        $table = 'posts';
        $allPosts = selectAll($table);
      }
      ///// END SEARCH

      ?>

      <div class="search-bar" id="search">
        <form action="blog.php#search" method="POST">
          <input type="text" name="search-term" placeholder="Pretraži...">
        </form>
        <div class="single-post__sidebar">
          <h2><?php echo $postTitle ?></h2>
          <ul>

            <?php foreach ($allPosts as $key => $post) : ?>
              <li class="sidebar-post">
                <div class="sidebar-post__title"> <a href="blog-single-post.php?id=<?php echo $post['id']; ?>"><?php echo ($post['title']); ?></a></div>
              </li>
            <?php endforeach; ?>
          </ul>

        </div>
      </div>
      <!-- </div> -->

      <!-- <div class="blog-index__button--wrapper">
              <button class="dugme-login-admin">
                <a href="blog.html">Pogledaj ceo blog</a>
              </button>
            </div> -->
    </div>
  </main>

  <?php include_once 'php/includes/foot-min.php'; ?>
</body>

</html>