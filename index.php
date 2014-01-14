<?php
    include_once("indexInfo.php");
?>
<body>
    <div class="ui teal inverted menu">
        <a class="active item" href="#/">
            <i ></i> Course Management
        </a>
        <a class="item" href="#/courseList">
            <i class="search icon"></i> 課程搜尋
        </a>
        <a class="item">
            <i class="user icon"></i> 講師資料
        </a>
        <div class="right menu">
            <a class="item"><i class="user icon"></i> 登入 </a>
            <a class="item"><i class="user icon"></i> 註冊 </a>
        </div>
    </div>
    <nav class="uk-navbar">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="index.php">課程管理系統</a></li>
            <li><a href="#/courseList">課程搜尋</a></li>
            <li><a href="">講師資料</a></li>
        </ul>

        <div class="uk-navbar-flip">
            <ul class="uk-navbar-nav">
                <?  session_start();
                    if (empty($_SESSION['email']) == true || isset($_SESSION['email']) == false ) {
                        echo "<li><a href='lib/login.php'>登入</a></li>";
                        echo "<li><a href='lib/register.php'>註冊</a></li>";
                    }
                    else {
                        if(isset($_SESSION['admin'])==true){
                            if($_SESSION['admin']==1) echo "<li><a href='lib/adminEdit.php'>主控台</a></li>";
                            else echo "<li><a href='lib/customerList.php'>主控台</a></li>";
                        }else{
                            echo "<li><a href='lib/customerList.php'>主控台</a></li>";
                        }
                        echo "<li><a href='lib/logout.php'>登出</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>


    <div ng-view></div>

</body>

</html>
