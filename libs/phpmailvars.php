<?php
//SMTP サーバー（サーバーの場合：localhost でも可）
define('MAIL_HOST', 'sv10614.xserver.jp');

//PHPMailer を使って送信するための E-mail アカウント
define('MAIL_USER', 'helloworld@sho-miyamura.com');

//パスワード
define('MAIL_PASSWORD', 'staygold94');

//送信先
define('SEND_TO', 'ichinomiya0256@gmail.com');

//送信先の名前
define('SEND_TO_NAME', '宮村 翔');

//Bcc アドレス
define('BCC', 'ichinomiya0256@gmail.com');

//自動返信をする場合の送信元アドレス
define('AR_SEND_FROM', 'ichinomiya0256@gmail.com');

//自動返信をする場合の送信元名前
define('AR_SEND_FROM_NAME', '宮村 翔');