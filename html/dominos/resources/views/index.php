<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body ng-app="PizzaApp">
    <div class="container" ng-controller="PizzaCtrl">

      <div class="white-background top-block">
        <h1>
          <span class="blue-text">Where's</span> my <span class="red-text">Pizza?</span>
        </h1>
        <p class="lead">
          It can be difficult waiting for pizza - it's so tasty! Everyone loves pizza trackers, but how long will it take?<br />
          We're here to help, we'll tell you on average - how long your dominos order will take!
        </p>
      </div>

      <div class="white-background minute-display">
        <p class="lead">The average dominos order is currently taking</p>
        <span class="time-taken red-text">{{ avgwait }}</span>
        <p class="lead">Minutes</p>
      </div>

      <div class="white-background order-display">
        <h3 class="red-text">Current Open Orders</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Order Number</th>
              <th>Current Status</th>
              <th>Last Updated</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="order in orders">
              <td>{{ order.order_id }}</td>
              <td>{{ order.order_status }}</td>
              <td>{{ order.updated }}</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script type="text/javascript" src="script.js"></script>
  </body>
</html>
