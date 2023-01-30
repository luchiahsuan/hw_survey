<header class="shadow mb-5">
    <nav class="container d-flex justify-content-between py-3">
        <?php

        $file_str = explode("/", $_SERVER['PHP_SELF']);
        $local = str_replace('.php', '', array_pop($file_str));
        switch ($local) {
            case "index":
        ?>

                <div>
                    <a class='mx-2' href="index.php">回首頁</a>
                </div>
                <div>
                    <marquee behavior="" direction="">請加入會員以參與投票喔！</marquee>
                </div>
                <div>
                    <a class='mx-2' href="index.php?do=reg">會員註冊</a>
                    <a class='mx-2' href="index.php?do=login">會員登入</a>
                </div>
            <?php

                break;
            case "admin_center":

            ?>
                <div>
                    <a class='mx-2' href="index.php">回網站首頁</a>
                    <a class='mx-2' href="./admin_center.php">回管理首頁</a>
                </div>
                <div>
                    <a class='mx-2' href="./survey_vote.php">投票資訊管理</a>
                </div>
                <div>
                    <a class='mx-2' href="logout.php">管理登出</a>
                </div>

            <?php

                break;
            case "survey_vote":

            ?>
                <div>
                    <a class='mx-2' href="index.php">回網站首頁</a>
                    <a class='mx-2' href="./admin_center.php">回管理首頁</a>
                </div>
                <div>
                    <a class='mx-2' href="./survey_vote.php">投票資訊管理</a>
                </div>
                <div>
                    <a class='mx-2' href="logout.php">管理登出</a>
                </div>

            <?php
                break;
            case "survey":
            ?>

                <div>
                    <a class='mx-2' href="../index.php">回網站首頁</a>
                </div>
                <div>
                    <a class='mx-2' href="../logout.php">會員登出</a>
                </div>

        <?php
                break;
        }
        ?>
    </nav>
</header>