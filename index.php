<?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  //フォームの送信時にエラーをチェックする
  if ($post['name'] === '') {
    $error['name'] = 'blank';
  }
  if ($post['email'] === '') {
    $error['email'] = 'blank';
  } elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
    $error['email'] = 'email';
  }
  if ($post['contact'] === '') {
    $error['contact'] = 'blank';
  }

  if (count($error) === 0) {
    //エラーがないので確認画面に移動
    $_SESSION['form'] = $post;
    header('Location: php/confirm.php');
    exit();
  }
} else {
  if (isset($_SESSION['form'])) {
    $post = $_SESSION['form'];
  }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="house_icon2.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/daec067e78.js" crossorigin="anonymous"></script>
  <title>Sho Miyamura</title>

</head>

<body>

  <div class="container rounded" id="head">
    <header>
      <div class="container">
        <div class="fixed-top">
          <nav class="navbar   navbar-expand-lg navbar-light bg-light" id="navigation">
            <a class="navbar-brand" href="#">
              <img src="./images/pinterest_profile_imageのコピー3.png" alt="" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#" id="jump_top">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" id="jump_about">
                    <i class="fas fa-address-card"></i>
                    <span>About</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" id="jump_skill">
                    <i class="fas fa-code"></i>
                    <span>Skill</span>
                  </a>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" id="jump_works">
                    <i class="fas fa-briefcase"></i>
                    <span>Works</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" id="jump_contact">
                    <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
  </div>


  <!-- ヒーロー画像 -->
  <section>
    <div class="container">
      <div class="row hero">
        <img src="./images/music2.jpg" alt="" class="guitar">
        <p class="name">Sho Miyamura</p>
      </div>
    </div>
  </section>
  <!-- 自己紹介 -->
  <div class="for-scroll"></div>
  <section>
    <div class="container profile">
      <div class="row">
        <div class="col-12 col-sm-12 father">
          <h2 class="about_head">About</h2>
        </div>
        <div class="col-xs-12 col-lg-3">
          <img class="rounded-circle myphoto" src="./images/myphoto.jpg" alt="">
        </div>
        <!-- 自己紹介文 -->
        <div class=" intro col-12 col-lg-9">
          <p>22卒、TOEICスコア:550点(20年11月時点)</p>
          <p>
            はじめまして！同朋大学 ３年 文学部 人文学科の宮村 翔といいます！名古屋商科大学を中退して１年ほど浪人でしたが、今は気持ちを新たにがんばっています。
          </p>
          <p>
            大学では中国のことについて勉強していて、論文テーマには今のところ魏の武帝である曹操について研究したいと考えています。
          </p>
          <p>
            趣味はギターを弾くことで、高校生の頃からはじめました。現在は軽音サークルに所属していて、２年生の頃には大学祭に出演しました。1960~80年代の洋楽が好きでAC/DC、Queen、U2などを聞いています！
          </p>
          <p>私のモットーは日々精進です！昨日の自分よりも今日の自分が好きでいられるように、一日の終りにその日の出来事を振り返って改善を図っています。</p>
          <p>いつか、シリコンバレーにてフロントエンド・エンジニアとして働きたいと思っています。現在、英語の勉強をしており、コンピューターサイエンスを学ぶために将来的には大学院へ進学したいと考えております。そのために、現在のGPA2.52を在学中にGPA3.0以上に上げたいと考えており、４年次に多くの科目を取得していこうと思っています。</p>


          <a class="sns_button" href="https://twitter.com/onigiri0392"><i class="fab fa-twitter">Twitter</i></a>
          <a class="sns_button" href="https://github.com/Onigiri048"><i class="fab fa-github">GitHub</i></a>
          <a class="sns_button" href="https://www.youtube.com/channel/UCXnvOBpqylNCyZ7xdjWvC5Q/"><i class="fab fa-youtube">Youtube</i></a>
        </div>
        <div class="col-12 col-lg-12">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">2014/3</th>
                <td>黄柳野高校 卒業</td>
              </tr>
              <tr>
                <th scope="row">2014/4</th>
                <td>名古屋商科大学 入学</td>

              </tr>
              <tr>
                <th scope="row">2016/8</th>
                <td>名古屋商科大学 中退</td>
              </tr>
              <tr>
                <th scope="row">2018/4</th>
                <td>同朋大学 入学</td>
              </tr>
              <tr>
                <th scope="row">2022/3</th>
                <td>同朋大学 卒業見込み</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- 技術 -->

  <div class="container skill">
    <div class="row">
      <div class="col-sm-12">
        <div class="father">
          <h2 class="skill_head">Skill</h2>
        </div>



        <p id="desc">
          プログラミングを2020年の4月頃から独学しています。最初はバックエンドエンジニアを目指して、PHPやRubyを勉強していたのですが、自分が作ったものが目に見えて反映されるフロントエンドに興味をもって、現在はHTML/CSS,Bootstrapを中心に扱っていて今度はJavaScriptなどを学んで、動的なサイトを作れるようになりたいです。
        </p>
      </div>
      <div class="container skill_power">
        <div class="row skill_set">
          <div class="col-6 col-sm-3">
            <img src="./images/html-5.svg" alt="html-5">
            <p>★★★</p>
            <span>基本的な文章構造を構築することができます。</span>
          </div>
          <div class="col-6 col-sm-3">
            <img src="./images/css-3.svg" alt="css-3">
            <p>★★★</p>
            <span>簡単なスタイリングをすることができます。</span>
          </div>
          <div class="col-6 col-sm-3">
            <img src="./images/bootstrap.svg" alt="bootstrap">
            <p>★★★</p>
            <span>基礎部分やメニューを作ったり、レイアウトを組むときに使っています。</span>
          </div>
          <div class="col-6 col-sm-3">
            <img src="./images/sass.svg" alt="sass">
            <p>★★★</p>
            <span>基本的にはSassを使ってスタイリングをしています。</span>
          </div>
          <div class="col-6 col-sm-3">
            <img src="./images/php.svg" alt="php">
            <p>★★</p>
            <span>phpを使ってインターンで簡易掲示板を作成しました。</span>
          </div>
          <div class="col-6 col-sm-3">
            <img src="./images/javascript.svg" alt="javascript">
            <p>★★</p>
            <span>簡単な処理(ページ内を移動するなど)を作ることができます。</span>
          </div>
          <div class="col-6 col-sm-3">
            <img src="./images/typescript-icon.svg" alt="typescript">
            <p>★★</p>
            <span>udemyにて少しだけ学習したことがあります。</span>
          </div>
          <div class="col-6 col-sm-3">
            <img src="./images/vue.svg" alt="vue">
            <p>★</p>
            <span>これから勉強していきたいと考えています。</span>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- 実績 -->
  <div class="container works">
    <div class="row images">
      <div class="col-12 col-sm-12">
        <h2 class="works_head">Works</h2>
      </div>
      <div class="col-6 col-sm-6">
        <a href="https://www.udemy.com/course/php7basic/">
          <img class="certificate" src="./images/certificate1.jpg" alt="">
        </a>
        <p>udemyにてPHPの講座を修了しました。</p>
      </div>
      <div class="col-6 col-sm-6">
        <a href="https://www.tech-commit.jp/5emCyhdQUxGOBDwX"><img class="techcommit" src="./images/techcommit2.png" alt="">
        </a>
        <p>普段はTech Commitを利用しており、20時~22時にzoomを使って勉強会に参加しています。また、学習日報も記録しています。</p>
      </div>
      <div class="col-6 col-sm-6">
        <a href="https://techbowl.co.jp/techtrain"><img src="./images/techtrain.png" alt="">
        </a>
        <p>Tech Trainで企業やメンターからのミッションをメンターの方と面談しながら挑戦しています。こちらの自己紹介サイトもミッションの一つです。</p>
      </div>
      <div class="col-6 col-sm-6">
        <a href="https://engineer-shukatu.jp/techbase/">
          <img src="./images/techbase.jpg" alt="">
        </a>
        <p>TECH-BASEのインターンに2020/9/24~11/5まで参加いたしました。７つのチームで7人ずつに分かれてPHPを使って簡易掲示板を作りました。</p>
      </div>
    </div>
  </div>

  <!-- お問い合わせ -->
  <div class=" contact container">
    <div class="row">
      <div class="col-sm-12 father">
        <h2 class="contact_head">Contact</h2>
      </div>

      <!-- 名前 -->
      <form method="POST" action="" novalidate>
        <div class="form-group">
          <label for="InputName"> NAME:<span class="badge ">*</span></label>
          <input type="name" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="例：山田太郎" required name="name" value="<?php echo htmlspecialchars($post['name']); ?>">
          <small id="Help" class="form-text text-muted"></small>
          <?php if ($error['name'] === 'blank') : ?>
            <p class="error_msg">※お名前をご記入ください</p>
          <?php endif; ?>
        </div>
        <!-- メールアドレス -->
        <div class="form-group">
          <label for="InputEmail"> Email:<span class="badge ">*</span></label>
          <input type="email" class="form-control" id="InputEmail" placeholder="例：123456789@exsample.com" required name="email" value="<?php echo htmlspecialchars($post['email']); ?>">
          <small id="Help" class="form-text text-muted">
            <?php if ($error['email'] === 'blank') : ?>
              <p class="error_msg">※メールアドレスをご記入ください</p>
            <?php endif; ?>

            <?php if ($error['email'] === 'email') : ?>
              <p class="error_msg">※メールアドレスを正しくご記入ください</p>
            <?php endif; ?>
        </div>
        <!-- お問い合わせ内容 -->
        <div class="form-group">
          <label for="InputContact">
            Comment:<span class="badge">*</span>
          </label>
          <textarea name="contact" class="form-control" id="InputContact" rows="8" placeholder="お問い合わせ内容" required name="contact" value><?php echo htmlspecialchars($post['contact']); ?></textarea>
          <?php if ($error['contact'] === 'blank') : ?>
            <!-- <p class="error_msg">※お問い合わせ内容をご記入ください</p> -->
          <?php endif; ?>
        </div>

        <!-- 送信ボタン -->
        <div class="text-center" id="button">
          <button type="submit" class="submit_btn btn btn-primary border-0">送信</button>
        </div>
      </form>
    </div>
  </div>
  <!-- フッター -->
  <div class="container bottom">
    <div class="row">
      <footer class="text-white rounded">
        <p class="copy_right">&copy;2020 Sho Miyamura</p>
      </footer>
    </div>
  </div>

  <div id="js-scroll-top" class="scroll-top">TOP</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>