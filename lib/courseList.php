<body>
    <div class="ui teal inverted menu">
    	<div class="ui twelve page grid">
	        <a class="active item" href="#/">
	            <i ></i> Course Management
	        </a>
	        <a class="item" href="#/courseList">
	            <i class="search icon"></i> 課程搜尋
	        </a>
	        <a class="item" href="#/teacherList">
	            <i class="users icon"></i> 講師資料
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
	                    echo '<a class="item"  href="lib/logout.php"><i class="sign out icon"></i> 登出 </a>';
	                }
	            ?>
	        </div>
	    </div>
    </div>
    <div class="ui twelve page grid">
		<form class="uk-form">
            <fieldset>
                <div class="uk-form-row">
                    <form class="uk-search" data-uk-search>
                        <input class="uk-search-field" ng-model="query" type="search" placeholder="搜尋...">
                    </form>
                    <select ng-model="orderProp">
                        <option value="RegisterDate">最新</option>
                        <option value="name">按照字母順序</option>
                    </select>
                </div>
            </fieldset>
        </form>
		<div class="ui icon input">
			<input placeholder="Search..." type="text"  ng-model="query">
			<i class="inverted search icon"></i>
		</div>
		<div class="ui selection dropdown">
			<input name="gender" type="hidden">
			<div class="text">Female</div>
			<i class="dropdown icon"></i>
			<div class="menu">
			<div class="item" data-value="1">Male</div>
			<div class="item active" data-value="0">Female</div>
			</div>
		</div>
        <table class="uk-table uk-table-striped">
            <caption>課程資料</caption>
            <thead>
                <tr>
                    <th>課程代碼</th>
                    <th>課程名稱</th>
                    <th>講師</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="customer in customers | filter:query | orderBy:orderProp">
                    <td>{{customer.mobile}}</td>
                    <td>{{customer.address}}</td>
                    <td>{{customer.addDate}}</td>
                </tr>
            </tbody>
        </table>
		<table class="ui table segment">
			<thead>
				<tr>
					<th>課程代碼</th>
					<th>課程名稱</th>
					<th>講師</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="customer in customers | filter:query | orderBy:orderProp">
					<td class="positive">{{customer.mobile}}</td>
					<td class="positive">{{customer.address}}</td>
					<td class="positive">{{customer.addDate}}</td>
				</tr>

			</tbody>
		</table>
	</div>