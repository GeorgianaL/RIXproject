// search button draft


/// <reference path="angular.min.js" />

var myApp = angular
	.module('myModule', [])
	.controller("myController", function ($scope){

		var news = [
			{title: "Angular", source: "Vimeo"},
			{title: "Meteor", source: "SlideShare"},
			{title: "Java", source: "Youtube"},
			{title: "Python", source: "Vimeo"},
			];

		$scope.news = news;

		$scope.search = function(item){
			if($scope.searchText == undefined){
				return true;
			}
			else{
				if(item.title.toLowerCase().indexOf($scope.searchText.toLowerCase()) != -1 || item.source.toLowerCase().indexOf($scope.searchText.toLowerCase()) != -1){
					return true;
				}
			}

			return false;
		}

	});

	