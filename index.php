<?php $auth = 0 ?>
<?php include "control/includes.php" ?>
<?php include "partials/header.php" ?>
<?php if(isset($_SESSION["auth"]["id"])){
	header("location: account/index.php");
	die();
}
?>
<?php if (isset($_SESSION["logedout"])): ?>
	<div class="alert alert-success">you successfully loged out, have a nice day</div>
	<?php unset($_SESSION["logedout"]); ?>
<?php endif; ?>
	<div class="jumbotron">
		<h2>Welcome to <strong>Crate Berry</strong> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></h2>
		<p>Just add your Crate Berry tagline here!</p>
	</div>
<?php include "partials/footer.php" ?>
