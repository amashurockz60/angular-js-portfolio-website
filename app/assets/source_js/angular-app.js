// Angular App
var AKMSApp = angular.module("AKMSApp", ["ngRoute", "AKMSControllers"]);

AKMSApp.config(function($routeProvider){
  $routeProvider
    .when("/",
    {
      "templateUrl": "assets/views/home.html"
    })
    .when("/services",
    {
      "templateUrl": "assets/views/services.html"
    })
    .when("/work",
    {
      "templateUrl": "assets/views/work.html"
    })
    .when("/work/:workId",
    {
      "templateUrl": "assets/views/work-page.html"
    })
    .when("/contact",
    {
      "templateUrl": "assets/views/contact.php"
    })
    .otherwise(
    {
      template: "<div>there is no page here</div>"
    })
});