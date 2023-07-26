<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding: 0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>

<body>

	<div id="container">
		<h1>Welcome to CodeIgniter!</h1>

		<div id="body">
			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/views/welcome_message.php</code>

			<p>The corresponding controller for this page is found at:</p>
			<code>application/controllers/Welcome.php</code>

			<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="userguide3/">User Guide</a>.</p>
		</div>

		<div>
			<h1>Lorem ipsum dolor sit amet.</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, nesciunt eaque sed velit deleniti natus numquam ex necessitatibus rem minus harum voluptas corrupti unde. Illo minus quo ipsum ut vero quia non eos beatae nulla. Distinctio rem veniam nihil repellat molestiae consequuntur quos quae culpa, ea maxime, quis voluptatibus accusamus! Molestias dignissimos quis ea totam dolorem porro quasi, natus consequuntur saepe in aspernatur placeat, nam non beatae. Omnis magni ipsa veniam minus, quam eius iste harum ratione similique laudantium commodi tempora, ullam dolore delectus quia placeat praesentium voluptatum dolorem repudiandae iusto maxime excepturi? Magnam obcaecati, quam officia error adipisci sint, dolor atque ducimus maiores repellat corrupti sunt labore ratione, porro asperiores eaque provident? Necessitatibus non laborum, quia adipisci aspernatur aperiam temporibus laboriosam animi quasi saepe fuga aliquam cumque. Doloremque dolorum qui quas minima deserunt magni neque animi quos, doloribus cumque rerum officia pariatur in error exercitationem necessitatibus dolor porro cupiditate quibusdam! Id neque quaerat nam sit ea quis praesentium quae, amet temporibus distinctio dolores culpa natus, et eligendi dignissimos est officiis voluptates pariatur cumque deleniti voluptatum consequuntur maxime architecto consectetur? Deserunt, necessitatibus voluptatem quo quidem ipsam modi culpa eum earum, architecto nobis asperiores ipsum molestiae commodi tempora hic ad enim?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ea, eius quam illo eveniet vel quia quos ab iure assumenda. Consequuntur, cum debitis. Optio nobis ullam voluptatibus dolor ducimus doloribus sint eaque dignissimos tempore assumenda iure molestiae est non, provident magni atque rerum necessitatibus laborum quia. Optio ipsa cumque blanditiis sed. Minus, iusto dolorem. Porro ipsa, at labore laboriosam esse numquam perspiciatis accusamus quaerat quae maiores obcaecati architecto enim dolor possimus rerum praesentium libero consequuntur. Molestiae possimus eaque, officiis cupiditate maxime corrupti a consectetur sit sunt dolorum aut deleniti dicta exercitationem ex voluptatum culpa quam quos aperiam explicabo totam impedit.</p>
		</div>



		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

</body>

</html>