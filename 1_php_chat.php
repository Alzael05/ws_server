<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
	<input type="text" class="form-control" id="txt_message">
	<select class="btn btn-default" id="dd_topic" name="dd_topic" >
		<option value="sample">Sample</option>
		<option value="love">Love</option>
	</select>
	<button class="btn btn-primary" style="display: none;" id="btn_send" >Send</button>
	<button class="btn btn-primary" id="btn_connect" >Connect</button>
	<button class="btn btn-primary" style="/*display: none;*/" id="btn_disconnect" >Disconnect</button>

	<div class="panel" id="div_messages"></div>

	<!-- <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="temp_assets/js/jquery-3.2.1.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<script type="text/javascript" src="temp_assets/js/socket.io.js"></script>
	<!-- <script type="text/javascript" src="node_modules/autobahn/lib/autobahn.js"></script> -->
	<script type="text/javascript" src="temp_assets/js/autobahn.js"></script>
	<!-- <script type="text/javascript" src="temp_assets/js/autobahn-modified.js"></script> -->
	<!-- <script src="https://gist.githubusercontent.com/cboden/fcae978cfc016d506639c5241f94e772/raw/e974ce895df527c83b8e010124a034cfcf6c9f4b/autobahn.js"></script> -->

	<script>
		// $( function () {

			( function ( $ ) {
				var websocket;

				var $btn_send = $( '#btn_send' );
				var $btn_connect = $( '#btn_connect' );
				var $btn_disconnect = $( '#btn_disconnect' );
				var $dd_topic = $( '#dd_topic' );
				var $div_messages = $( '#div_messages' );

				var conn;
				var subs_topic;
				// var ping_interval;

				var connection = new autobahn.Connection( {
					url: 	'wss://ws.server.com:8081',
					realm: 	'realm1'
				} );

				connection.onopen = function ( session, details ) {

					// $btn_send.show();
					// $btn_connect.hide();
					// $btn_disconnect.show();
					subs_topic = $( '#dd_topic' ).val();

					console.log( session );
					console.log( details );

					session.subscribe( subs_topic , on_event ).then(
                        function ( subscription ) {
						// This is where you would add the new article to the DOM ( beyond the scope of this tutorial )
							console.log( subscription );
						},
						function ( error ) {
							console.log( error );
						}
					);

					session.unsubscribe( subs_topic ).then(
						function ( gone ) {
							console.log( gone );
						},
						function ( error ) {
							console.log( error );
						}
					);
				};

				function on_event ( args, kwargs, details ) {
					console.log( args );
					console.log( kwargs );
					console.log( details );
					// event received, do something ..
					// console.log( topic );
					// console.log( data );
					// console.log( 'New message "' + topic + '" : ' + data.message );

					// var received_msg = data.message;
					// var time_stamp = data.when;
					// $div_messages.append( '<span class="label label-default">' + received_msg + '<!--<h6>' + time_stamp + '</h6>--></span><br/>' )
				}

				connection.onclose = function ( reason, details ) {

					// $btn_send.hide();
					// $btn_connect.show();
					// $btn_disconnect.hide();

					console.log( reason );
					console.log( details );
					console.warn( 'WebSocket connection closed' );
					// clearInterval( ping_interval );
					// ping_interval = null;
					// console.log( ping_interval );
				};


				function ws_connect ( argument ) {
					console.log(connection);
					connection.open();

					console.log(connection.session);
					console.log(connection.isConnected);
					console.log(connection.isOpen);
					console.log(connection.transport);
				}

				function ws_disconnect ( argument ) {
					console.log(connection.session);
					console.log(connection.isConnected);
					console.log(connection.isOpen);
					console.log(connection.transport);

					connection.close();
				}

				function send_message () {
					// websocket.send( $( '#txt_message' ).val() );
					$.ajax( {
						url: 		'send.php',
						type: 		'post',
						dataType: 	'json',
						data: 		{
										category: 	'chat',
										topic: 		subs_topic/*$( '#dd_topic' ).val()*//*'love'*/,
										message: 	$( '#txt_message' ).val()
									}
					// } )
					// .done( function () {
					// 	console.log( 'success' );
					// } )
					// .fail( function () {
					// 	console.log( 'error' );
					// } )
					// .always( function () {
					// 	console.log( 'complete' );
					} );
				}

				$btn_connect.on( 'click', ws_connect );
				$btn_disconnect.on( 'click', ws_disconnect );
				$btn_send.on( 'click', send_message );
			} )( jQuery );

		// } );
	</script>
</body>
</html>
