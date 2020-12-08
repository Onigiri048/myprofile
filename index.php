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
        <div class="center wide">
          <img class="rounded-circle myphoto" src="./images/myphoto.jpg" alt="">
        </div>
        <!-- 自己紹介文 -->
        <div class=" intro">
          <p>
            はじめまして、同朋大学 ３年 文学部 人文学科 歴史文化専攻の宮村 翔といいます
            。名古屋商科大学を中退して、１年ほど浪人していましたが今は気持ちを新たにしてがんばっています！
          </p>
          <p>
            将来、海外で働くのが私の目標です。かつて、どん底にいた自分がどこまで這い上がることができるのか、試したいです。そして、現在同じような境遇にいる人の励みになれるような存在になりたいです。世界ではIT人材が不足していると知り、プログラミングの技術を身につけて、ワールドワイドで活躍できるグローバル人材になりたいと考えました。そのために、文系ですがプログラミングの独学を始めました。
          </p>
          <p>
            英語を学ぶためにTOEICの勉強を６月頃から１日１時間スタディサプリENGLISHを活用して行っております。そして、プログラミングの学習を１日2〜３時間、UdemyやYoutubeといった動画教材を活用してスキルを習得しています。
          </p>
          <p>
            現在、GDPランキング１位であるアメリカについてだけではなく、２位の中国のことも学ぶために、大学では中国の歴史を勉強しています。世界情勢を鑑みても中国について知ることは、大変意義のあることだと考えています。
          </p>
          <p>
            大学ではとりわけ秦朝〜三国時代までの歴史について勉強しており、論文テーマには魏の武帝である曹操について研究します。小学生の頃より、歴史小説、歴史漫画が好きで日本の戦国時代や「三国史演義」、「蒼天航路」、「キングダム」などを読んでいました。大学では、「史記」や「三国志」の原文の漢文の訓読と読解を行っております。
          </p>
          <p>私のモットーは日々精進です！昨日の自分よりも今日の自分が好きでいられるように、１日の終りにその日の出来事を振り返って改善を図っています。具体的には、１日のスケジュールを事前にノートに書き出しておいて、その日の夜に自己評価して、次に予定を立てるときの参考にします。
          </p>
          <p>
            趣味はギターを弾くことで、高校生の頃から始めました。現在は軽音サークルに所属していて、大学祭に出演しました。1970~80年代の洋楽が好きでAC/DC、Queen、U2などを聞いています。洋楽を好きになったきっかけは「ジョジョの奇妙な冒険」という漫画で登場人物のスタンド名の由来を調べたことです。とりわけQueenは中学生の時から聞いており、今でも大好きでスイスのモントルーにあるフレディ・マーキュリーの銅像と一緒に記念写真を撮りました。
          </p>
          <p>
            ご覧いただきありがとうございます。いつか、お会いできる日を楽しみにしています。
          </p>


          <a class="sns_button" href="https://twitter.com/onigiri0392"><i class="fab fa-twitter"><span class="sns_str">Twitter</span></i></a>
          <a class="sns_button" href="https://github.com/Onigiri048"><i class="fab fa-github"><span class="sns_str">GitHub</span> </i></a>
          <a class="sns_button" href="https://www.youtube.com/channel/UCXnvOBpqylNCyZ7xdjWvC5Q/"><i class="fab fa-youtube"><span class="sns_str">Youtube</span></i></a>
        </div>
        <div class=" margin">
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
        <p class="strings">udemyにてPHPの講座を修了しました。</p>
      </div>
      <div class="col-6 col-sm-6">
        <a href="https://www.tech-commit.jp/5emCyhdQUxGOBDwX"><img class="techcommit" src="./images/techcommit2.png" alt="">
        </a>
        <p class="strings">普段はTech Commitを利用しており、20時~22時にzoomを使って勉強会に参加しています。また、学習日報も記録しています。</p>
      </div>
      <div class="col-6 col-sm-6">
        <a href="https://techbowl.co.jp/techtrain"><img src="./images/techtrain.png" alt="">
        </a>
        <p class="strings">Tech Trainで企業やメンターからのミッションをメンターの方と面談しながら挑戦しています。こちらの自己紹介サイトもミッションの一つです。</p>
      </div>
      <div class="col-6 col-sm-6">
        <a href="https://engineer-shukatu.jp/techbase/">
          <img src="./images/techbase.jpg" alt="">
        </a>
        <p class="strings">TECH-BASEのインターンに2020/9/24~11/5まで参加いたしました。７つのチームで7人ずつに分かれてPHPを使って簡易掲示板を作りました。</p>
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
  <div id="js-scroll-top" class="scroll-top">TOP</div>
  <!-- フッター -->
  <div class="container bottom">
    <div class="row">
      <footer class="text-white rounded">
        <p class="copy_right">&copy;2020 Sho Miyamura</p>
      </footer>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>