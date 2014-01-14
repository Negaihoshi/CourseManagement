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