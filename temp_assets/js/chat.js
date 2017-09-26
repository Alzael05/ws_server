

		// $( function () {

			( function ( $ ) {
				// var websocket;

				var $btn_send = $( '#btn_send' );

				var $btn_connect = $( '#btn_connect' );
				var $btn_disconnect = $( '#btn_disconnect' );

				var $btn_subs = $( '#btn_subs' );
				var $btn_unsubs = $( '#btn_unsubs' );

				var $dd_topic = $( '#dd_topic' );
				var $div_messages = $( '#div_messages' );

				var conn;
				var sess;
				var topic;
				var ping_interval;


				// var ws = ( function () {
					// websocket = new WebSocket( 'ws://localhost:8081' );

					// websocket.onopen = function () {
					// 	// Web Socket is connected, send data using send()
					// 	console.log("Message is sent...");
					// 	$btn_send.show();//removeAttr( 'hidden' );
					// 	$btn_connect.hide();//prop( 'hidden', 'true' );
					// 	$btn_disconnect.show();//removeAttr( 'hidden' );
					// };

					// websocket.onmessage = function ( evt ) {
					// 	console.log("Message is received...");
					// 	var received_msg = evt.data;
					// 	$div_messages.append( '<span class="label label-default">' + received_msg + '</span><br/>' )
					// };

					// websocket.onclose = function () {
					// 	// websocket is closed.
					// 	console.log("Connection is closed...");
					// 	$btn_send.hide();//prop( 'hidden', 'true' );
					// 	$btn_connect.show();//removeAttr( 'hidden' );
					// 	$btn_disconnect.hide();//prop( 'hidden', 'true' );
					// };

					/*OLD*/
					// var socket = io( 'ws://localhost:8081', {
					// 	autoConnect: false,
					// 	path: '/ws_server'
					// } );
					// socket.on('connect', function(){
					// 	console.log('test');
					// 	$btn_send.show();
					// 	$btn_connect.hide();
					// 	$btn_disconnect.show();
					// 	topic = $( '#dd_topic' ).val();

					// });
					// // socket.on('event', function(data){});
					// socket.on('disconnect', function(){
					// 	console.log('test');
					// });
				//

					function ws_connect ( event ) {


						// socket.connect();
						/*conn = new */
						ab.connect( /*Session*/
							'wss://ws.localhost.com:8443',
							function ( session ) {
								// console.log( conn );
								sess = session;

								$btn_connect.hide();
								$btn_disconnect.show();
								$btn_subs.show();
								$dd_topic.show();

								console.log( session );
								// ping_interval = setInterval( function() {
								// 	sess.publish( 'a', 'b' );
								// }, 2000 );

								// sess._websocket.onmessage = function( param1, param2 ) {
								// 	console.log( param1 );
								// 	console.log( param2 );
								// };
							},
							function ( session ) {
								$btn_connect.show();
								$btn_disconnect.hide();
								$btn_subs.hide();
								$btn_unsubs.hide();
								$dd_topic.hide();

								// clearInterval( ping_interval );
								// ping_interval = null;
								// console.log( ping_interval );
								console.warn( 'WebSocket connection closed' );
							}//,
							// { 'skipSubprotocolCheck': true }
						);

					}

					function ws_subscribe ( event ) {
						topic = $( '#dd_topic' ).val();
						sess.subscribe( topic, recieve_msg );

						$btn_subs.hide();
						$btn_unsubs.show();
						$dd_topic.prop( 'disabled', 'true' );
						$btn_send.show();
					}

					function ws_unsubscribe ( event ) {
						sess.unsubscribe ( topic, recieve_msg );

						$btn_subs.show();
						$btn_unsubs.hide();
						$dd_topic.removeAttr( 'disabled' );
						$btn_send.hide();
					}

					var recieve_msg = function( topic, data ) {
						// This is where you would add the new article to the DOM ( beyond the scope of this tutorial )
						console.log( topic );
						console.log( data );
						console.log( 'New message "' + topic + '" : ' + data.message );

						var received_msg = data.message;
						var time_stamp = data.when;
						$div_messages.append( '<span class="label label-default">' + received_msg + '<!--<h6>' + time_stamp + '</h6>--></span><br/>' )
					}

					function ws_disconnect ( event ) {
						sess.close();
						// socket.disconnect();
					}


				// 	return {
				// 		ws_connect: ws_connect,
				// 		ws_disconnect: ws_disconnect,
				// 	}
				// } )()
					/*OLD*/

					/*
						var connection = new ab.Session( 'ws://localhost:8081' );

						// function randint( min, max ) {
						// 	return Math.floor( Math.random() * ( max - min + 1 ) + min);
						// }

						connection.onopen = function ( session ) {

							var counter = 0;

							setInterval( function () {
								// session.publish( 'com.myapp.heartbeat' );
								console.log( session );
								// var obj = { 'counter': counter, 'foo': [ 1, 2, 3 ] };
								// session.publish( 'chat', [ randint( 0, 100 ), 23 ], { c: "Hello", d: obj } );

								// counter += 1;

								// console.log( "events published" );
								}, 1000 );
						};

						connection.open();
					*/

					// conn.onopen = function ( session, details ) {
					// 	$btn_send.show();
					// 	$btn_connect.hide();
					// 	$btn_disconnect.show();
					// 	// Publish, Subscribe, Call and Register
					// };

					// conn.onclose = function ( reason, details ) {
					// 	$btn_send.hide();
					// 	$btn_connect.show();
					// 	$btn_disconnect.hide();
					// 	// handle connection lost
					// };
				//

				function send_message () {
					// websocket.send( $( '#txt_message' ).val() );
					$.ajax( {
						url: 		'send.php',
						type: 		'post',
						dataType: 	'json',
						data: 		{
										category: 	'chat',
										topic: 		topic/*$( '#dd_topic' ).val()*//*'love'*/,
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

				$btn_subs.on( 'click', ws_subscribe );
				$btn_unsubs.on( 'click', ws_unsubscribe );

				$btn_send.on( 'click', send_message );
			} )( jQuery );

		// } );
