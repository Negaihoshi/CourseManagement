    <div class="ui teal inverted menu">
        <div class="ui twelve page grid">
            <a class="active item" href="#/">
                <i ></i> Course Management
            </a>
            <a class="item" href="#/courseList">
                <i class="search icon"></i> 課程搜尋
            </a>
            <a class="item" href="#/teacherList">
                <i class="user icon"></i> 講師資料
            </a>
            <div class="right menu">
                <?
                    session_start();
                    if (empty($_SESSION['email']) == true || isset($_SESSION['email']) == false ) {
                        echo '<a class="item" href="#/login"><i class="user icon"></i> 登入 </a>';
                        echo '<a class="item" href="lib/login.php"><i class="user icon"></i> 註冊 </a>';
                    }else{
                        if(isset($_SESSION['admin'])==true){
                            if($_SESSION['admin']==1) echo '<a class="item" href="lib/adminEdit.php"><i class="user icon"></i> 主控台 </a>';
                            else echo '<a class="item" href="lib/adminEdit.php"><i class="user icon"></i> 主控台 </a>';
                        }else{
                                echo '<a class="item" href="lib/adminEdit.php"><i class="user icon"></i> 主控台 </a>';
                        }
                        echo '<a class="item"  href="lib/logout.php"><i class="user icon"></i> 登出 </a>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div>
        <div class="ui twelve page grid">
            <img src="img/Info.jpg" height="340" width="454" alt="">
        </div>
    </div>

