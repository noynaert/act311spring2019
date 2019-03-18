# AngularJS

```html
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="">
	<p>City : <input type="text" ng-model="city"></p>
	<h1>Visit {{city}}</h1>
</div>
```

## What we see above

* Used a simple cdn to load AngularJS
* ng-app
  * "ng" is a common prefix for Angular
  * The ng-app is the framework itself.  In this case there isn't one supplied by the developer.  But the framework provides a default.
* ng-model
  * Note the use of "model" in ng-model.  This is saying put the user types into the model in the "name" data item.
* The view
  * Roughly the {{ }} notation is part of the view.  It is saying to fetch the value of "name" from the model.
* The controller
  * We don't really have a controller in this example.

## An example with a controller

Notice the use of an object

```html
<div ng-app = "mainApp" ng-controller = "placeController">
	City: <input type = "text" ng-model = "place.city"><br>
	<br>
	State: <input type = "text" ng-model = "place.state"><br>
	<br>
	You are entering: {{place.fullName()}}
	</div>
	
	<script>
	var mainApp = angular.module("mainApp", []);
	
	mainApp.controller('placeController', function($scope) {
		$scope.place = {
			city: "St. Joseph",
			state: "Missouri",
			
			fullName: function() {
				var where;
				where = $scope.place;
				return where.city + " " + where.state;
			}
		};
	});
	</script>
```