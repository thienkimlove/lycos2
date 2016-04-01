var app = angular.module('Application', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('MainController', function($scope){

    $scope.keyword = '';
    $scope.search = function(){
        if ($scope.keyword.length > 2) {
            var slug = $scope.keyword
                .toLowerCase()
                .replace(/ /g,'-')
                .replace(/[^\w-]/g,'');
            $window.location.href = Config.url + '/search/tag-' + slug ;
        }
    }

    $scope.contact = {};
    $scope.formReset = function(event){
        event.preventDefault();
        $scope.contact = {};
    }
    $scope.formSubmit = function(event){
        event.preventDefault();
        $('form[name=contactForm]').submit();
    }

    $scope.question = {};
    $scope.questionReset = function(event){
        event.preventDefault();
        $scope.question = {};
    }
    $scope.questionSubmit = function(event){
        event.preventDefault();
        $('form[name=questionForm]').submit();
    }

    $scope.email = null;
    $scope.registerEmailSubmit = function(event){
        event.preventDefault();
        $('form[name=registerEmail]').submit();
    }


});