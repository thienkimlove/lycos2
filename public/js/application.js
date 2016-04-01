var app = angular.module('Application', ['ngCkeditor'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('FormController', function($scope){

    $scope.data = {};
    $scope.editorOptions = {
        uiColor: '#000000'
    };
});