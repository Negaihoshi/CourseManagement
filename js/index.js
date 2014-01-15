var index = angular.module('index', ['ngRoute'], function($routeProvider){
	$routeProvider.when('/', {
		templateUrl: 'indexContent.php'
	}).when('/courseList', {
		templateUrl: 'lib/courseList.php'
	}).when('/login', {
		templateUrl: 'lib/login.php'
	}).when('/teacherList', {
		templateUrl: 'lib/teacherList.php'
	}).otherwise({
		redirectTo: '/'
	});
});