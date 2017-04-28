var app = angular.module('GoldenPhoenixApp');

app.controller('UnderController', function(){
	var ctrl = this;
	ctrl.name = null;

	ctrl.init = function(){
		console.log(ctrl.name)
	}
});