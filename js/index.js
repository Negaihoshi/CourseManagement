var index = angular.module('index', ['ngRoute'], function($routeProvider){
	$routeProvider.when('/', {
		templateUrl: 'lib/test.html'
	}).when('/courseList', {
		templateUrl: 'lib/courseList.php'
	});
});