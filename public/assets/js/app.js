var app_candidate = angular.module("AppCandidate", [])

.config(function($interpolateProvider) {
		$interpolateProvider.startSymbol('{%');
		$interpolateProvider.endSymbol('%}');
});