var AKMSControllers = angular.module('AKMSControllers', []);


// Document Head Controller
AKMSControllers.controller("headCtrl", function($scope){
  $scope.title = "Web Design in Riverside, CA | Web Design, Development, Marketing | AK Marketing Solutions";
  $scope.description = "Web related services for small business and Entrepreneurs including web design, development, and marketing."
});


// Recent Work Items Controller
AKMSControllers.controller("recentWorkItemCtrl", function($scope, $http){
  $http.get("assets/data/workItems.json").success(function(data){
    $scope.workItems = data.splice(0, 2);
  });
});


// Work Controller
AKMSControllers.controller("workCtrl", function($scope, $http){
  // Get the data and store into a variable
  $http.get("assets/data/workItems.json").success(function(data){
    $scope.workItems = data;
  });
  
  // Filters Array
  $scope.filters = [
    {"name": "all", "filterExpr": ""},
    {"name": "web",  "filterExpr": {category: 'web'}},
    {"name": "print","filterExpr": {category: 'print'}},
    {"name": "code", "filterExpr": {category: 'code'}}
  ];
  
  // Set Default Filter
  $scope.selectedFilter = $scope.filters[0];
  
  // Set Filter Function
  $scope.setFilter = function(filter){
    $scope.selectedFilter = filter;
  };
});


// Work Page Controller
AKMSControllers.controller("workPageCtrl", function($scope, $http, $routeParams){
  // Put the Full Array into a variable
  $http.get("assets/data/workItems.json").success(function(data){
    $scope.workItems = data;
    // Filter the array by id that matches the routeParams
    var filteredResult = $.grep($scope.workItems, function(item){
      return item.id === $routeParams.workId
    });
    // Put property values into variables to use in data binding
    $scope.selectedWork = {
      "title": filteredResult[0].name,
      "description": filteredResult[0].description,
      "url": filteredResult[0].url,
      "urlTitle": filteredResult[0].urlTitle,
      "photo1": filteredResult[0].photo1,
      "photo2": filteredResult[0].photo2,
      "photo3": filteredResult[0].photo3
    };
  });
});


// Contact Form Controller
AKMSControllers.controller("contactFormCtrl", function($scope){
  //JQuery Form Control
  $('#form2').hide().css({
    opacity: 0
  });
  $('#form2Btn').click(function(){
    $('#form1').hide();
    $('#form2').show().animate({
      opacity: 1
    }, 1500);
    $('#form1Btn').removeClass('formBtn-active').addClass('formBtn-inactive');
    $('#form2Btn').removeClass('formBtn-inactive').addClass('formBtn-active');
    
  });
  $('#form1Btn').click(function(){
    $('#form2').hide();
    $('#form1').show();
    $('#form2Btn').removeClass('formBtn-active').addClass('formBtn-inactive');
    $('#form1Btn').removeClass('formBtn-inactive').addClass('formBtn-active');
  });
  
  //JQuery Form 1 Send Control
  $('#form1').submit(function(){
    if ($('#contactName').val() != "" && $('#contactEmail').val() != "" && $('#messageContent').val() != ""){
      $.ajax({
        'url'    : $(this).attr('action'),
        'type'   : $(this).attr('method'),
        'data'   : $(this).serialize(),
        'success': function(data){
          $('#form1 input[type="submit"]').attr('value', 'form sent!').css('pointer-events', 'none');
          $('#form1')[0].reset();
          $('#form1').append('<p>Thanks for contacting me, I will get back to you as soon as possible.</p>');
        },
        error  : function(){
          $('#form1').append('<p>Something went wrong, please refresh the page and try again.</p>');
        }
      });
      return false;
    } else {
      $('#form1').append('<p style="color: red">Name, Email, and Message must be filled in</p>');
      return false;
    }
  });
  //JQuery Form 2 Send Control
  $('#form2').submit(function(){
    if ($('#contactName2').val() != "" && $('#contactEmail2').val() != "" && $('#messageContent2').val() != ""){
      $.ajax({
        'url'     : $(this).attr('action'),
        'type'    : $(this).attr('method'),
        'data'    : $(this).serialize(),
        'success' : function(data){
          $('#form2 input[type="submit"]').attr('value', 'form sent!').css('pointer-events', 'none');
          $('#form2')[0].reset();
          $('#form2').append('<p>Thanks for contacting me, I will get back to you as soon as possible.</p>');
        },
        error : function(){
          $('#form2').append('<p>Something went wrong, please refresh the page and try again.</p>');
        }
      });
      return false;
    } else {
      $('#form2').append('<p style="color: red">Name, Email, and Message must be filled in</p>');
      return false;
    }
  });
  
});






















