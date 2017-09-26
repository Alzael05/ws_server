<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<style>

		html,
		body {
			margin: 0;
			padding: 0;
			height: 100%;
		}
		/* .container {
		min-height:100%;
		position:relative;
		} */
		.header {
			max-height: 100%;
			/* min-height:100%; */
			height: 5rem;
			background: gray;
		}
		.body {
			max-height: 100%;
			min-height: 100%;
			padding-top: 4rem;
			padding-bottom: 1rem;
		}

		#div_card_shatapp {

		}

		#div_card_msg {

		}

	</style>
</head>
<body>
	<div class="fixed-top sticky-top header">
	</div>
	<div class="container-fluid">
		<div class="body col align-self-baseline">
			<div class="row">
				<div class="col-1 d-sm-block"></div>
				<div class="col-12 col-md-6">
					<div class="card" id="div_card_shatapp">
						<div class="card-header">
							ShatApp
						</div>
						<div class="card-body">
							<form>

								<div class="col col-xs-12">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon" id="">Message</span>
											<input type="text" class="form-control" id="txt_message">
											<span class="input-group-btn">
												<button type="button" class="btn btn-primary"
														style="display: none;"
														id="btn_send"
														>
													Send
												</button>
											</span>

										</div>
									</div>
									<div></div>
								</div>
								<div class="col col-xs-12">
									<div class="btn-toolbar" role="toolbar" aria-label="">
										<div class="col " role="group" aria-label="">
											<button type="button" class="btn btn-success"
													style="/*display: none;*/"
													id="btn_connect"
													>
												Connect
											</button>
											<button type="button" class="btn btn-outline-danger"
													style="display: none;"
													id="btn_disconnect"
													>
												Disconnect
											</button>
										</div>
										<div class="col btn-group" role="group" aria-label="">
											<button type="button" class="btn btn-dark"
													style="display: none;"
													id="btn_subs"
													>
												Subscribe
											</button>
											<button type="button" class="btn btn-outline-dark"
													style="display: none;"
													id="btn_unsubs"
													>
												Unsubscribe
											</button>
											<!--
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-secondary dropdown-toggle"
														id="dd_topic"
														data-toggle="dropdown"
														aria-haspopup="true"
														aria-expanded="false"
														>
													Topic
												</button>
												<div class="dropdown-menu" aria-labelledby="dd_topic">
													<a class="dropdown-item" href="#">Sample</a>
													<a class="dropdown-item" href="#">Love</a>
												</div>
											</div>
											-->
											<select class="form-control btn btn-info-"
													style="display: none;"
													id="dd_topic"
													name="dd_topic"
													>
												<option class="dropdown-item" value="sample">Sample</option>
												<option class="dropdown-item" value="love">Love</option>
											</select>
										</div>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
				<div class="col-12 m-4 d-md-none"></div>
				<div class="col-12 col-md-4">
					<div class="card" id="div_card_msg">
						<div class="card-header">
							Messages
						</div>
						<div class="card-body" id="div_messages"></div>
					</div>
				</div>
				<div class="col-1 d-sm-block"></div>
			</div>
		</div>
	</div>
	<div class="fixed-bottom d-md-none">
		<div class="row">
			<div class="col btn-group d-flex justify-content-center" role="group" aria-label="">
				<button type="button" class="btn btn-outline-dark"
						style=""
						id="btn_"
						>
					<< Prev
				</button>
				<button type="button" class="btn btn-dark"
						style=""
						id="btn_"
						>
					-
				</button>
				<button type="button" class="btn btn-outline-dark"
						style=""
						id="btn_"
						>
					Next >>
				</button>
			</div>
		</div>
	</div>



	<?php
		// $to = 'alf.asi@nuevasys.ph';
		// $subject = 'Hello from XAMPP!';
		// $message = 'This is a test';
		// $headers = "From: root@localhost.com\r\n";
		// if (mail($to, $subject, $message, $headers)) {
		//    echo "SUCCESS";
		// } else {
		//    echo "ERROR";
		// }
	 ?>

	<!-- <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="temp_assets/js/jquery-3.2.1.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<script type="text/javascript" src="temp_assets/js/socket.io.js"></script>
	<!-- <script type="text/javascript" src="node_modules/autobahn/lib/autobahn.js"></script> -->
	<script type="text/javascript" src="temp_assets/js/_autobahn.js"></script>
	<!-- <script src="https://gist.githubusercontent.com/cboden/fcae978cfc016d506639c5241f94e772/raw/e974ce895df527c83b8e010124a034cfcf6c9f4b/autobahn.js"></script> -->
	<script type="text/javascript" src="temp_assets/js/chat.js"></script>

</body>
</html>
