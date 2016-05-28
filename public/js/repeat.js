/// <reference path="angular.js" />

var app = angular
		.module("repeatModule", [])
		.controller("repeatController", function ($scope){
			var newsList = [
			{title: "Angular", source: "Vimeo"},
			{title: "Meteor", source: "SlideShare"},
			{title: "Java", source: "Youtube"},
			{title: "Python", source: "Vimeo"},
			];

			$scope.newsList = newsList;
		})