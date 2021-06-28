<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt = $pdo->query("select * from 4each_keijiban");

?>


    <header>
        <img src="4eachblog_logo.jpg">
            <div class="header_list">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
    </header>

    <main>
        <div class="main_container">
            <div class="main_left">
                <h1>プログラミングに役立つ掲示板</h1>
                <div class="form1">
                    <h2>入力フォーム</h2>
                    <form method="post" action="insert.php">
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="50" name="handlename">
                        </div>
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="50" name="title">
                        </div>
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="100" rows="20" name="comments"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>

                    </form>
                </div>

                <?php

                while($row=$stmt->fetch()){
                    echo "<div class='article1'>";
                    echo "<h2 class='article_title'>".$row['title']."</h2>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                    }
                ?>

                <?php

                while($row=$stmt->fetch()){
                echo "<div class='article2'>";
                echo "<h2 class='article_title'>".$row['title']."</h2>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
                }
                ?>
                
            </div>
            <div class="main_right">
                <div class="popular_article">
                    <h1>人気の記事</h1>
                        <ul>
                            <li>PHPおすすめ本</li>
                            <li>PHP MyAdminの使い方</li>
                            <li>いま人気のエディッタTOP5</li>
                            <li>HTMLの基礎</li>
                        </ul>
                </div>
                <div class="suggest_link">
                    <h1>オススメリンク</h1>
                        <ul>
                            <li>インターノウス株式会社</li>
                            <li>XAMPPのダウンロード</li>
                            <li>Eclipseのダウンロード</li>
                            <li>Bracketsのダウンロード</li>
                        </ul>
                </div>
                <div class="cattegory">
                    <h1>カテゴリ</h1>
                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>JavaScript</li>
                        </ul>
                </div>
            </div>
        </div>
    </main>

    <footer>
        copyrightⓒinternous| 4each blog the which probides A to Z about programing.
    </footer>

</body>
</html>

