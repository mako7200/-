<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/styles/github.min.css">
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <!-- ファビコンの設定（※未完成） -->
    <link rel ="icon" href="サラリーマン.png" type="image/png">
    <title>ポートフォリオ</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">ポートフォリオ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav me-auto mb-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">自己紹介</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://mako7200.github.io">作品紹介</a>
            </li>
            <li class="nav-item">
              <!-- フォームのID（※未完成） -->
              <a class="nav-link" href="https://docs.google.com/forms/d/e/{フォームのID}/viewform?embedded=true" width="640" height="1000" frameborder="0" marginheight="0" marginwidth="0">お問合せ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="container">
        <h1>自己紹介</h1>
        <p class="lead">
          <!-- あいさつの埋め込み -->
          <?php
          $hour = date('G');
          if ($hour >= 6 && $hour < 12) {
            echo 'おはようございます！私についてご紹介します。';
          } else if ($hour >= 12 && $hour <18) {
            echo 'こんにちは！私についてご紹介します。';
          } else {
            echo 'こんばんは！私についてご紹介します。';
          }
          ?></p>
        <table class="table table-bordered">
          <thead class="table-light">
            <tr><th colspan="2">プロフィール</th></tr>
          </thead>
          <tbody>
            <?php
            //生年月日の設定
            $birth_date = new DateTime('1999-04-28');
            $current_date = new DateTime();
            //年齢の計算
            $age = $current_date->diff($birth_date)->y;
            //現在の年を取得
            $current_year = date('Y')
            ?>
            <tr><td><p class="font-weight-bold">1</p></td><td></td></tr>
            <tr><td><p class="font-weight-bold">2</p></td><td></td></tr>
            <tr><td><p class="font-weight-bold">3</p></td><td></td></tr>
            <tr><td><p class="font-weight-bold">4</p></td><td></td></tr>
            <tr><td><p class="font-weight-bold">5</p></td><td></td></tr>
            <tr><td><p class="font-weight-bold">6</p></td><td><br /></td></tr>
          </tbody>
        </table>
        <table class="table table-bordered">
          <thead class="table-light">
            <tr><th colspan="2"></th></tr>
          </thead>
          <tbody>
            <tr><td><p class="font-weight-bold"></p></td><td><br /><br /><br /></td></tr>
            <tr><td><p class="font-weight-bold"></p></td><td><br /></td></tr>
            <tr><td><p class="font-weight-bold"></p></td><td></td></tr>
          </tbody>
        </table>
      </div>
    </main>
    <footer class="footer fixed-bottom text-center py-3">
      <div class="container">
        <!-- 常に現在の「西暦年」 -->
        <span class="text-muted">&copy; <?php echo date('Y'); ?> Hiroya Komatsu </span>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
  </body>
</html>