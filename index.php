<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>MyAngularLite</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- LIB -->
		<script src="node_modules/angular/angular.js" type="text/javascript"></script>
		<!-- YOUR APP -->
		<script src="app.js" type="text/javascript"></script>
	</head>
	<body ng-app="">
		<div class="logo-wrapper">
			<h1>MyAngularLite</h1>
			<p>Simply Shows the power of AngularJS</p>
			<br />
		</div>
		<div class="box">
			<h4>Round 1 - Hello (your name)</h4>
			<p>Name : <input type="text" ng-model="name" /></p>
  			<h1>Hello {{name}}</h1>
  			Code:<br />
  			<code>
				&lt;p&gt;Name : &lt;input type="text" ng-model="name"&gt;&lt;/p&gt;<br />
  				&lt;h1&gt;Hello {{name}}&lt;/h1&gt;
  			</code>
  			<br /><br />
		</div>
		<div class="box">
			<h4>Round 2 - Securing Output</h4>
			<div data-ng-app="" data-ng-init="firstName='John'">
				<p>The name is <span data-ng-bind="firstName"></span></p>
			</div>
  			Code:<br />
  			<code>
  				&lt;div data-ng-app="" data-ng-init="firstName='John'"&gt;<br />
					&lt;p&gt;The name is &lt;span data-ng-bind="firstName"&gt;&lt;/span&gt;&lt;/p&gt;<br />
				&lt;/div&gt;
  			</code>
  			<br /><br />
		</div>
		<div class="box">
			<h4>Round 3 - Coming Soon</h4>
  			Code:<br />
  			<code>
  				
  			</code>
  			<br /><br />
		</div>
		<div class="box">
			<h4>Round 4 - Coming Soon</h4>
  			Code:<br />
  			<code>
  				
  			</code>
  			<br /><br />
		</div>
		<br />
		(c) jccultima123
		<br /><br /><br />
	</body>
</html>