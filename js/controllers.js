var app = angular.module('starter.controllers',['ionic', 'cera.ionicSuperPopup'])

.run(function($ionicPlatform) {
  $ionicPlatform.ready(function() {
    if(window.cordova && window.cordova.plugins.Keyboard) {
      // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
      // for form inputs)
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);

      // Don't remove this line unless you know what you are doing. It stops the viewport
      // from snapping when text inputs are focused. Ionic handles this internally for
      // a much nicer keyboard experience.
      cordova.plugins.Keyboard.disableScroll(true);
    }
    if(window.StatusBar) {
      StatusBar.styleDefault();
    }
  });
})

.controller('ProfileCtrl', function($scope) {
    var data = localStorage.getItem("name");
    
    $scope.profile = [{
    acc_id: 201410505,
    Fname: data,
    img: 'img/avatar.jpg',
    stat: 'php/stat.png'
  }];

})

.controller('FaqCtrl', function($scope, $ionicLoading) {
	
$ionicLoading.show();

$scope.a = {};
$scope.a.airplaneMode = false;
$scope.off = function() {
if($scope.a.airplaneMode == true){
	$http.get('https://homeshield.000webhostapp.com/ionicHS/HomeShield/off.php')
}
}
	$ionicLoading.hide();

})

.controller('AccountCtrl', function($scope, $rootScope, $ionicLoading) {
  
  
  	$ionicLoading.show();
	$http.get('https://homeshield.000webhostapp.com/ionicHS/php/account_pull.php').success( function(info){
	$scope.accountInfo = info;
	$ionicLoading.hide();
	console.log(info);
		});
		
  //readonly property is used to control editability of account form
  $scope.readonly = true;

  // #SIMPLIFIED-IMPLEMENTATION:
  // We act on a copy of the root user
  $scope.accountUser = angular.copy($rootScope.user);
  var userCopy = {};

  $scope.startEdit = function(){
    $scope.readonly = false;
    userCopy = angular.copy($scope.user);
  };

  $scope.cancelEdit = function(){
    $scope.readonly = true;
    $scope.user = userCopy;
  };
  
  // #SIMPLIFIED-IMPLEMENTATION:
  // this function should call a service to update and save 
  // the data of current user.
  // In this case we'll just set form to readonly and copy data back to $rootScope.
  $scope.saveEdit = function(){
    $scope.readonly = true;
    $rootScope.user = $scope.accountUser;
  };

})

.controller('HistoryCtrl', function($scope, $state, ionicSuperPopup, $http, $stateParams, $ionicPopup, $ionicLoading){


$scope.a = {};
$scope.a.airplaneMode = false;
$scope.change = function() {
if($scope.a.airplaneMode == true){
	$http.get('https://homeshield.000webhostapp.com/ionicHS/HomeShield/ons.php')
}else if($scope.a.airplaneMode == false){
	$http.get('https://homeshield.000webhostapp.com/ionicHS/HomeShield/off.php')
}
}
	
	$ionicLoading.show();	
	setInterval(function(){
	$http.get('https://homeshield.000webhostapp.com/ionicHS/php/single_notification.php').success( function(info){

	$scope.reportIncident = info;
	$ionicLoading.hide();
	console.log(info);
	
	var i = info[0]['alert'];
	if(i=="HIGH"){
		$state.go('app.faq');
}
else if(i=="LOW"){
		$scope.reportIncident = info;

}
	}, 10000)

		});
	


  
	  
	        $scope.report = function () {
        $ionicPopup.prompt({
          scope: $scope,
          title: '<span class="energized">Report an issue</span>',
          subTitle: '<span class="stable">What\'s wrong or missing?</span>',
          inputType: 'text',
          inputPlaceholder: ''
        }).then(function (res) {
          if (res) {
            // here connect to backend and send report
          }
        });
      };
})

.controller('ReportCtrl', function($scope, $state, ionicSuperPopup, $http, $stateParams, $ionicPopup, $ionicLoading){


	
	$ionicLoading.show();	
	setInterval(function(){
	$http.get('https://homeshield.000webhostapp.com/ionicHS/php/report_insert.php').success( function(info){

	$scope.historyReport = info;
	$ionicLoading.hide();
	console.log(info);
	
	})

		});
	

	        $scope.report = function () {
        $ionicPopup.prompt({
          scope: $scope,
          title: '<span class="energized">Report an issue</span>',
          subTitle: '<span class="stable">What\'s wrong or missing?</span>',
          inputType: 'text',
          inputPlaceholder: ''
        }).then(function (res) {
          if (res) {
            // here connect to backend and send report
          }
        });
      };
})
	
.controller('statisticsCtrl', function($scope, $http, $stateParams, $ionicPopup, $ionicLoading){

	$ionicLoading.show();
	$http.get('https://homeshield.000webhostapp.com/ionicHS/php/statistics_pull.php').success( function(info){
	$scope.statisticsInfo = info;
	$ionicLoading.hide();
	console.log(info);
		});
	

	  
	  
	        $scope.report = function () {
        $ionicPopup.prompt({
          scope: $scope,
          title: '<span class="energized">Report an issue</span>',
          subTitle: '<span class="stable">What\'s wrong or missing?</span>',
          inputType: 'text',
          inputPlaceholder: ''
        }).then(function (res) {
          if (res) {
            // here connect to backend and send report
          }
        });
      };
})

.controller('newsController', function ($scope, $http) {

$ionicLoading.show();
    $http.get('https://newsapi.org/v1/articles?source=cnn&sortBy=top&apiKey=6d80a92cce7f4047b0e761178e5d62b5')
        .success(function (data) {
            // The json data will now be in scope.
            $scope.myJsonData = data.articles;

        });
		$ionicLoading.hide();
						
		$scope.loadNext = function () {
        statisticsInfo.getNext().then(function (statisticsInfo) {
          $scope.statisticsInfo = statisticsInfo;
        }).finally(function () {
          $scope.$broadcast('scroll.infiniteScrollComplete');
        });
      };
})

.controller('login', function ($scope, $http, $state, $ionicHistory) {
   $scope.loginform = function (){
    var username = $scope.username;
    var password = $scope.password;
    
    $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
    $http({
        url: 'https://homeshield.000webhostapp.com/ionicHS/php/login.php',
        method: "POST",
        data: {
            'username' : username,
            'password' : password
        }
    })
    .then(function(response){
        console.log(response);
        var data = response.data[0];
        if(data != "Account Doesn't exist!"){
            $scope.username = '';
            $scope.password = '';
            $state.go('app.home');
            localStorage.setItem("name",data);

        }
		else{
            $scope.error = data;
            $scope.password = '';
        }
    },
    function(response){
        console.log('Error');
    });
   }
})




.controller('register', function ($scope, $http, $state, $ionicHistory) {
   $scope.loginform = function (){
    var username = $scope.username;
    var password = $scope.password;
    var fullname = $scope.fullname;
    var address = $scope.address;
    var contact = $scope.contact;
    
    $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
    $http({
        url: 'https://homeshield.000webhostapp.com/ionicHS/php/register.php',
        method: "POST",
        data: {
            'username' : username,
            'password' : password,
            'fullname' : fullname,
            'address' : address,
            'contact' : contact
        }
    })
    .then(function(response){
        console.log(response);
        var data = response.data[0];
            $scope.username = '';
            $scope.password = '';
            $scope.address = '';
            $scope.contact = '';
            $state.go('dashboard');
            localStorage.setItem("name",fullname);
            localStorage.setItem("useraddress",address);
     
    },
    function(response){
        console.log('Error');
    });
   }
});



