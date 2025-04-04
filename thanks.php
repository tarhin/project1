<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>レディアス美容クリニック福岡天神院</title>
  <link rel="stylesheet" href="css/ress.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="slick.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
  <?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';

  $mail = new PHPMailer(true);
  $mail ->CharSet   = 'UTF-8';

  try {
      // SMTP設定
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com'; // SMTPサーバー
      $mail->SMTPAuth   = true;
      $mail->Username   = 'tarchin6061@gmail.com'; // Gmailアカウント
      $mail->Password   = 'plny glri qsuh wagb'; // アプリパスワード
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port       = 587;

      // 送信者情報
      $mail->setFrom($_POST["email"], $_POST["name"]);
      $mail->addAddress('aokusa6061@gmail.com', 'Recipient Name');

      // メール内容
      // $mail->isHTML(true);
      $mail->Subject = 'お問い合わせがありました';
      $mail->Body = "お問い合わせがありました。\n";
      $mail->Body .= "\n";
      $mail->Body .= "入力された内容は以下の通りです。\n";
      $mail->Body .= "---\n";
      $mail->Body .= "\n";
      $mail->Body .= "お名前：";
      $mail->Body .= $_POST["name"]; // name属性がnameの内容が入ります
      $mail->Body .= "\n";
      $mail->Body .= "\n";
      $mail->Body .= "フリガナ:";
      $mail->Body .= $_POST["spell"]; // name属性がemailの内容が入ります
      $mail->Body .= "\n";
      $mail->Body .= "\n";
      $mail->Body .= "電話番号:\n";
      $mail->Body .= $_POST["tel"]; // name属性がemailの内容が入ります
      $mail->Body .= "\n";
      $mail->Body .= "\n";
      $mail->Body .= "メールアドレス:\n";
      $mail->Body .= $_POST["email"]; // name属性がemailの内容が入ります
      $mail->Body .= "\n";
      $mail->Body .= "\n";
      $mail->Body .= "生年月日:";
      $mail->Body .= $_POST["birth-year"]."年".$_POST["birth-month"]."月".$_POST["birth-day"]."日"; // name属性がemailの内容が入ります
      $mail->Body .= "\n";
      $mail->Body .= "\n";
      $mail->Body .= "性別:";
      $mail->Body .= $_POST["sex"]; // name属性がemailの内容が入ります
      $mail->Body .= "\n";
      $mail->Body .= "\n";
      $mail->Body .= "第一希望日:";
      $mail->Body .= $_POST["date1"]; // name属性がemailの内容が入ります
      $mail->Body .= "\n";
      $mail->Body .= "\n";
      $mail->Body .= "第二希望日:";
      $mail->Body .= $_POST["date2"]; // name属性がemailの内容が入ります
      $mail->Body .= "\n";
      $mail->Body .= "\n";
      $mail->Body .= "ご相談内容:\n";
      $mail->Body .= $_POST["message"]; 

      // メール送信
      $mail->send();

    } catch (Exception $e) {
        echo "メール送信に失敗: {$mail->ErrorInfo}";
    }

  ?>


    <!-- mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to = "tarchin6061@gmail.com";
    $subject = "お問い合わせがありました";

    $message = "お問い合わせがありました。\n";
    $message .= "\n";
    $message .= "入力された内容は以下の通りです。\n";
    $message .= "---\n";
    $message .= "\n";
    $message .= "お名前：\n";
    $message .= $_POST["name"]; // name属性がnameの内容が入ります
    $message .= "\n";
    $message .= "フリガナ:\n";
    $message .= $_POST["spell"]; // name属性がemailの内容が入ります
    $message .= "\n";
    $message .= "電話番号:\n";
    $message .= $_POST["tel"]; // name属性がemailの内容が入ります
    $message .= "\n";
    $message .= "メールアドレス:\n";
    $message .= $_POST["email"]; // name属性がemailの内容が入ります
    $message .= "\n";
    $message .= "生年月日:\n";
    $message .= $_POST["birth-year"]."年".$_POST["birth_month"]."月".$_POST["birth_day"]."日"; // name属性がemailの内容が入ります
    $message .= "\n";
    $message .= "性別:\n";
    $message .= $_POST["sex"]; // name属性がemailの内容が入ります
    $message .= "\n";
    $message .= "第一希望日:";
    $message .= $_POST["date1"]; // name属性がemailの内容が入ります
    $message .= "\n";
    $message .= "第二希望日:";
    $message .= $_POST["date2"]; // name属性がemailの内容が入ります
    $message .= "\n";
    $message .= "ご相談内容:\n";
    $message .= $_POST["message"]; 

    $headers = "From:".$_POST["email"];


    mb_send_mail($to, $subject, $message, $headers);

  ?>plny glri qsuh wagb -->
  <header>
    <div class="header_information">
      <div class="header_information_phone">
        <img src="img/vector_phone.png" class="img_phone" alt="phone" loading="lazy">
        <p>092-791-5973</p>  
      </div>
      <p>診療時間　9:00〜18:00 不定休</p>  
      <p class="res_sp">レディアス美容クリニック福岡天神院</p>
    </div>
    <div class="header_content">
      <div class="header_toggle res_sp">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <a href="">
        <div class="header_logo">
          <img src="img/logo.png" loading="lazy" alt="ロゴ画像">
          <h1>KOBE皮膚科福岡天神院</h1>
        </div>  
      </a>
      <div class="header_content_menu">
        <div class="header_menu_link">
          <a href="https://line.me/R/ti/p/@609fsprl?ts=03301632&oat_content=url" class="line_link"  target="_blank">
            <img src="img/line-icon.png" loading="lazy" alt="lineアイコン">
            LINE予約
          </a>
          <a href="contact.html" class="contact_link"  target="_blank">
            <img src="img/web-icon.png" loading="lazy" alt="WEBサイトアイコン">
            お問い合わせ
          </a>
          <div class="res_sp">
            <p>営業時間</p>
            <p>9:00〜18:00</p>
          </div>
        </div>
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="price.html">料金表</a></li>
          <li><a href="treatment.html">施術一覧</a></li>
          <li><a href="case.html">症例一覧</a></li>
          <li><a href="about_clinic.html">当院について</a></li>
          <li><a href="about_clinic.html">各クリニック案内</a></li>
          <li><a href="flow.html">施術の流れ</a></li>
          <li><a href="faq.html">よくある質問</a></li>
          <li><a href="aftercare.html">アフターケア</a></li>
          <li><a href="doctor.html">ドクター紹介</a></li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <div class="main_thanks main_column">
      <div class="thanks_content_header column_content_header">
        <h2>Thanks</h2>
        <div class="features_bar"></div>
        <h3>送信完了</h3>
      </div>
      <div class="thanks_content_wrapper">
        <div class="thanks_bg"></div>
        <div class="thanks_content">
          <h3>送信完了しました</h3>
          <p>メッセージは送信されました。ありがとうございます。</p>
          <a href="index.html" class="content_brown_button">TOPに戻る</a>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="footer_content_wrapper">
      <div class="footer_content_about_wrapper">
        <img src="img/logo.png" alt="ロゴ画像" loading="lazy">
        <div class="footer_link">
          <a href=""><img src="img/line-icon-white.png">LINE予約</a>
          <a href=""><img src="img/web-icon-white.png">ご予約</a>
          <a href=""><img src="img/vector_phone.png">電話予約</a>
        </div>
        <div class="footer_content_about">
          <div class="footer_about_text">
            <h4>クリニック名</h4>
            <p>医療法人社団 真清の会<br>レディアス美容クリニック福岡天神院</p>
          </div>
          <div class="footer_about_text">
            <h4>住所</h4>
            <p>〒810-0022<br>福岡県福岡市中央区薬院3-1-20 5F</p>
          </div>
          <div class="footer_about_text">
            <h4>アクセス</h4>
            <p>西鉄薬院駅、地下鉄薬院駅から徒歩5分</p>
          </div>
          <div class="footer_about_text">
            <h4>営業時間</h4>
            <p>9:00〜18:00</p>
          </div>
          <div class="footer_about_text">
            <h4>定休日</h4>
            <p>不定休</p>
          </div>
        </div>
      </div>
      <div class="footer_article_wrapper">
        <div class="footer_content_article">
          <h3>Contents</h3>
          <div class="footer_article">
            <div>
              <a href="index.html"><div></div>HOME</a>
              <a href="price.html"><div></div>料金表</a>
              <a href="case.html"><div></div>症例一覧</a>
              <a href="clinic.html"><div></div>当院について</a>
              <a href="about_clinic.html"><div></div>各クリニック案内</a>
              <a href="flow.html"><div></div>施術の流れ</a>
              <a href="aftercare.html"><div></div>アフターケア</a>
            </div>
            <div>
              <a href="faq.html"><div></div>よくある質問</a>
              <a href=""><div></div>ドクター紹介</a>
              <a href=""><div></div>お知らせ</a>
              <a href=""><div></div>コラム</a>
              <a href=""><div></div>プライバシーポリシー</a>
              <a href=""><div></div>お問い合わせ</a>  
            </div>
          </div>
        </div>
        <div class="footer_content_article">
          <h3>Treatment</h3>
          <div class="footer_article">
            <div>
              <a href=""><div></div>レーザートーニング</a>
              <a href=""><div></div>フォトシルク</a>
              <a href=""><div></div>たるみ治療（医療ハイフ）</a>
              <a href=""><div></div>医療脱毛</a>
              <a href=""><div></div>ボトックス注入</a>
            </div>
            <div>
              <a href=""><div></div>ピーリング</a>
              <a href=""><div></div>脂肪溶解注射</a>
              <a href=""><div></div>ダーマペン</a>
              <a href=""><div></div>アートメイク</a>
              <a href=""><div></div>保険診療</a>
            </div>  
          </div>
        </div>
      </div>
    </div>
    <div class="footer_content_copyright">
      <p>Copyright © レディアス美容クリニック All rights reserved.</p>
    </div>
  </footer>
  <script src="script.js"></script>
  <script src="script_calendar.js"></script>
</body>
</html>
