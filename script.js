
	var myApp = angular
		.module("myApp",[])
		.controller("myController", myController);

		myController.$inject = ["$scope","$http"];

		function myController($scope,$http){
			$http.get("database.php")
				.then(function(respone){
					$scope.objects = respone.data.records;
				});
		}