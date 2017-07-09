<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<style>
.app {
	margin:auto;
	width: 50%;
	align-content: center;
}

.chartTitle {
	margin: auto;
	padding: 5px;
	font-size: 22px;
	text-align: center;
	font-family: verdana;
	color: #00e600;
}

table, th , td {
  border: 1px solid grey;
  border-collapse: collapse;
	font-size: 16px;
	font-family: verdana;
	margin:auto;
  padding: 5px;
}

tr:nth-child(even){background-color: #b3ffb3}

</style>
<html>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <head>
        <title font-size="22px">Employee Contacts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<div class="app" ng-app="contactList" ng-controller="contactListController">
        <div class="chartTitle">Contact List</div>
				<table>
					<tr ng-repeat="x in names">
						<td>{{x.id}}</td>
						<td>{{x.first_name}}</td>
						<td>{{x.last_name}}</td>
						<td>{{x.email}}</td>
						<td><button ng-click="onButtonClicked(x.first_name, x.last_name, x.email)">Info</button></td>
					</tr>
			</table>
		</div>
		<script>
		var peopleArray = <?php	$people = array(
						array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
						array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
						array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
						array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
						array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
					); echo json_encode($people);?>

		var app = angular.module('contactList', []);
		app.controller('contactListController', function($scope) {
			$scope.names = peopleArray;
			$scope.onButtonClicked = function(firstName, lastName, email){
				alert(firstName + ' ' + lastName + ', ' + email);
			}
		});
		</script>
    </body>
</html>
