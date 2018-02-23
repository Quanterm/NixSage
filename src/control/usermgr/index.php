<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/config.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/auth/auth.php');
	session_start();
	auth_is_authorized(array('admin'), NULL, TRUE);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<link rel="stylesheet" href="/common/css/footer.css">
		<link rel="stylesheet" href="/common/css/nav.css">
		<link rel="stylesheet" href="/common/css/dialog.css">
		<link rel="stylesheet" href="/common/css/default.css">
		<link rel="stylesheet" href="/control/usermgr/css/usermgr.css">
		<title>LibreSignage User Manager</title>
	</head>
	<body>
		<?php
			require_once($_SERVER['DOCUMENT_ROOT'].NAV_PATH);
		?>
		<main class="container-fluid">
			<div class="container text-center">
				<div class="container-fluid">
					<div class="row usr-table-row">
						<div class="usr-table-col col-1">
							#
						</div>
						<div class="usr-table-col col-2">
							User
						</div>
						<div class="usr-table-col col-3">
							Groups
						</div>
						<div class="usr-table-col col-3">
							Information
						</div>
						<div class="usr-table-col col-3">
						</div>
					</div>
				</div>
				<div id="users-table" class="container-fluid mt-3">
				</div>
				<div class="container-fluid mt-3 md-5">
					<div class="usr-table-row">
						<div class="usr-table-col">
							<input type="button"
								class="btn btn-primary"
								value="Create user"
								onclick="usermgr_create()">
							</input>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php
			require_once($_SERVER['DOCUMENT_ROOT'].FOOTER_PATH);
		?>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
		<script src="/common/js/api.js"></script>
		<script src="/common/js/dialog.js"></script>
		<script src="/common/js/user.js"></script>
		<script src="/control/usermgr/js/usermgr_ui.js"></script>
	</body>
</html>