<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
            <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
        
        mb_internal_encoding("UTF-8");
        $pdo = new PDO("mysql:dbname=suzuki;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keijiban");
        
        ?>
        
        <header>
            <div class="headgazou">
            <img src="4eachblog_logo.jpg">
            </div>
            <ul class="menu">
                <li>メニュー</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
    
        <main>
            <div class="main-container">
                
                <div class="left">
                    <h1>プログラミングに役立つ掲示板</h1>
                    
                    
        <form method="post" action="insert.php">
            <h2>入力フォーム</h2>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
            </div>
            
            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
            </div>
        
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="35" rows="7" name="comments"></textarea>
            </div>
            
            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
        </form>
                <?php
                 while ($row = $stmt->fetch()) {
                     
                     echo "<div class='kiji2'>";
                     echo "<h3>".$row['title']."</h3>";
                     echo "<div class='contents'>";
                     echo $row['comments'];
                     echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                     echo "</div>";
                     echo "</div>";
                 }
                        
                ?>
                </div>
                
                
                <div class="right">
                    <h1>人気の記事</h1>
                    <ul class="kiji">
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ TOP5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                        
                    <h1>オススメリンク</h1>
                    <ul class="link">
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                    
                    <h1>カテゴリ</h1>
                    <ul class="ctg">
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
                
            </div>
        </main>
        
        <footer>
            copyright©internous | 4each blog the which provides A to Z about programming.
         </footer>
    </body>
</html>
       