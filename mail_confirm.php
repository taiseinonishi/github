<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="confirm">

    <header class="">
        <div class="logo">
            <a href="index.html"><img src="https://github.com/taiseinonishi/github/blob/master/logo%20.png?raw=true" alt="" Taisei Ohnishi></a>
        </div>
        <nav>
            <ul class="global-nav">
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="confirm">
            <h1>問い合わせ内容確認</h1>
            <p class="p">お問い合わせ内容はこちらで宜しいでしょうか？
                　<br>よろしければ「送信する」ボタンを押して下さい
                　</p>
                　<div class="contacts">
            　<p><strong>名前</strong>
                <br>
                <?php echo $_POST["name"]; ?>
            </p>

            <p><strong>メールアドレス</strong>
                <br>
                <?php echo  $_POST["email"];?>
            </p>

            <p><strong>電話番号</strong>
                <br>
                <?php echo $_POST["tel"];?>
            </p>

            <p><strong>お問い合わせ種別</strong>
                <br>
                <?php echo $_POST["type"]; ?>
            </p>

            <p><strong>連絡方法</strong>
                <br>
                <?php echo $_POST["contact"]; ?>
            </p>

            <p><strong>その他</strong>
                <br>
                <?php echo $_POST["message"]; ?>
            </p>
</div>

            <form action="contact.php" class="back">
                <input type="submit" class="button1" value="戻って修正する" />
            </form>


            <form action="insert.php" method="post" class="go">
                <input type="submit" class="button2" value="登録する" />
                <input type="hidden" value="<?php echo $_POST["name"]; ?>" name="name">
                <input type="hidden" value="<?php echo $_POST["mail"]; ?>" name="mail">
                <input type="hidden" value="<?php echo $_POST["tel"]; ?>" name="tel">
                <input type="hidden" value="<?php echo $_POST["type"]; ?>" name="type">
                <input type="hidden" value="<?php echo $_POST["contact"]; ?>" name="contact">
                <input type="hidden" value="<?php echo $_POST["message"]; ?>" name="message">
            </form>
            
        </div>
    </main>
</body>

</html>
