<?php
session_start();

//PHPMailer の読み込み （★PHPMailer 用に追加）
require '../php_mailer/vendor/autoload.php';
//メールアカウント情報（パスワード等）の読み込み （★PHPMailer 用に追加）
require '../libs/phpmailvars.php';

//入力画面からのアクセスでなれければ、戻す
if (!isset($_SESSION['form'])) {
  header('Location: ../index.php');
  exit();
} else {
  $post = $_SESSION['form'];
}

 $to = 'nissin5648@yahoo.co.jp';
  $form = $post['email'];
  $subject = 'お問い合わせが届きました';
  $body = <<<EOT
  名前: {$post['name']}
  メールアドレス: {$post['email']}
  内容: {$post['contact']}
  EOT;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // メールを送信する
  // メールの中身の確認
  // var_dump($body);
  // exit();

  // //セッションを消してお礼画面へ
  unset($_SESSION['form']);
  header('Location: thanks.html');
  exit();
}

//-------- ★★★ PHPMailer を使ったメールの送信処理 ★★★ ------------

//PHPMailer 名前空間の使用
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//mbstring の日本語設定
mb_language("japanese");
mb_internal_encoding("UTF-8");

//PHPMailer のインスタンスを生成
$mail = new PHPMailer(true);

try {
  //サーバ設定
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;   // デバグの出力を有効に
  $mail->isSMTP();  // SMTP を使用
  $mail->Host       = MAIL_HOST; // SMTP サーバーを指定（phpmailvars.phpで定義）
  $mail->SMTPAuth   = true;      // SMTP authentication を有効に
  $mail->Username   = MAIL_USER; // SMTP ユーザ名（phpmailvars.phpで定義）
  $mail->Password   = MAIL_PASSWORD; // SMTP パスワード（phpmailvars.phpで定義）
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS を有効に
  $mail->Port       = 587; // TCP ポートを指定

  //日本語用
  $mail->CharSet = "iso-2022-jp";
  $mail->Encoding = "7bit";

  //Recipients
  $mail->setFrom($post['email'], mb_encode_mimeheader($post['name']));  //差出人アドレス, 差出人名
  $mail->AddAddress(SEND_TO, mb_encode_mimeheader(SEND_TO_NAME)); //送信先アドレス・宛先名（phpmailvars.phpで定義）
  $mail->AddBcc(BCC);  //Bcc アドレス（phpmailvars.phpで定義）

  $mail->isHTML(false);    // Set email format to plain text
  $mail->Subject = mb_encode_mimeheader($subject);   //件名
  $mail->WordWrap = 70;  //70 文字で改行（好みで）

  $mail->Body  = mb_convert_encoding($body, "JIS", "UTF-8");

  //メール送信の結果（真偽値）を $result に代入
  $result = $mail->send();
} catch (Exception $e) {
  //PHPMailer のエラーを表示する場合
  //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//メール送信の結果判定
if ($result) {
  // //成功した場合はセッションを破棄
  // $_SESSION = array(); //空の配列を代入し、すべてのセッション変数を消去
  // session_destroy(); //セッションを破棄
} else {
  //送信失敗時（もしあれば）
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
  <link rel="stylesheet" href="./../css/style.css">
  <link rel="shortcut icon" href="../house_icon2.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/daec067e78.js" crossorigin="anonymous"></script>
  <title>Sho Miyamura</title>

</head>

<body>

  <div class="container confirm">
    <form action="" method="POST">
      <h2 class="confirm_head">お問い合わせ</h2>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-3">
            <i class="fas fa-pen-nib"></i>
            <label for="inputName">お名前</label>
          </div>
          <div class="col-lg-9">
            <p class="display_item"><?php echo htmlspecialchars($post['name']); ?></p>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-3">
            <i class="fas fa-envelope"></i>
            <label for="inputEmail">メールアドレス</label>
          </div>
          <div class="col-lg-9">
            <p class="display_item"><?php echo htmlspecialchars($post['email']); ?></p>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-3">
            <i class="fas fa-comments"></i>
            <label for="inputContent">お問い合わせ内容</label>
          </div>
          <div class="col-lg-9">
            <p class="display_item"><?php echo nl2br(htmlspecialchars($post['contact'])); ?></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col center">
          <a href="../index.php" class="back_btn btn send_btn">戻る</a>
          <button type="submit" class="btn btn-primary send_btn ">送信する</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- <script src="./..js/script.js"></script> -->
</body>

</html>