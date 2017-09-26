<?php


Ratchet\Wamp\WampConnection::__set_state( array(
    'wrappedConn' =>  Ratchet\WebSocket\Version\RFC6455\Connection::__set_state( array(
                          'wrappedConn' =>  Ratchet\Server\IoConnection::__set_state( array(
                                                'conn' => React\Socket\Connection::__set_state( array(
                                                            'bufferSize' => 65536,
                                                            'stream'     => NULL,
                                                            'readable'   => true,
                                                            'writable'   => true,
                                                            'closing'    => false,
                                                            'loop'       => React\EventLoop\StreamSelectLoop::__set_state(
                                                                array(
                                                                    'nextTickQueue'   =>  React\EventLoop\Tick\NextTickQueue::__set_state(
                                                                          array(
                                                                              'eventLoop' => NULL,
                                                                              'queue'     => SplQueue::__set_state( array() ),
                                                                          )
                                                                    ),
                                                                    'futureTickQueue' =>  React\EventLoop\Tick\FutureTickQueue::__set_state(
                                                                          array(
                                                                              'eventLoop' => NULL,
                                                                              'queue'     => SplQueue::__set_state( array() ),
                                                                          )
                                                                    ),
                                                                    'timers'          =>  React\EventLoop\Timer\Timers::__set_state(
                                                                          array(
                                                                              'time'      => 1504767239.8843269,
                                                                              'timers'    => SplObjectStorage::__set_state( array() ),
                                                                              'scheduler' => SplPriorityQueue::__set_state( array() ),
                                                                          )
                                                                    ),
                                                                    'readStreams'     => array(
                                                                          36 => NULL,
                                                                          41 => NULL,
                                                                          76 => NULL,
                                                                    ),
                                                                    'readListeners'   => array (
                                                                          36 => array (
                                                                              0 =>  React\ZMQ\SocketWrapper::__set_state(
                                                                                  array(
                                                                                          'fd'     => NULL,
                                                                                          'closed' => false,
                                                                                          'socket' => ZMQSocket::__set_state( array() ),
                                                                                          'loop'   => NULL,
                                                                                          'buffer' =>  React\ZMQ\Buffer::__set_state(
                                                                                              array(
                                                                                                  'socket'        => ZMQSocket::__set_state( array() ),
                                                                                                  'closed'        => false,
                                                                                                  'listening'     => false,
                                                                                                  'loop'          => NULL,
                                                                                                  'fd'            => NULL,
                                                                                                  'writeListener' => array (
                                                                                                      0 => NULL,
                                                                                                      1 => 'handleEvent',
                                                                                                  ),
                                                                                                  'messages'      => array (),
                                                                                                  'listeners'     => array (),
                                                                                              )
                                                                                        ),
                                                                                        'listeners' => array (
                                                                                            'message'   => array (
                                                                                                0 => array (
                                                                                                    0 =>  App\Source\WS_Handler::__set_state(
                                                                                                        array(
                                                                                                            'subscribedTopics' => array (),
                                                                                                            'clients'          => SplObjectStorage::__set_state( array() ),
                                                                                                            'log'              => App\Source\Log::__set_state(
                                                                                                                array(
                                                                                                                    'config' => array (
                                                                                                                        'receive_port'   => '5555',
                                                                                                                        'receive_ip'     => '0.0.0.0',
                                                                                                                        'bind_port'      => '8080',
                                                                                                                        'bind_ip'        => '0.0.0.0',
                                                                                                                        'sync_port'      => '5556',
                                                                                                                        'callback_port'  => '5557',
                                                                                                                        'server_name'    => 'SD-019',
                                                                                                                        'server_ip'      => '192.168.248.136',
                                                                                                                        'base_url'       => 'https://10.0.2.15/ws/master_v2',
                                                                                                                        'log_file'       => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_server.log',
                                                                                                                        'error_log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_error.log',
                                                                                                                        'mem_log'        => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_mem.log',
                                                                                                                    ),
                                                                                                                )
                                                                                                            ),
                                                                                                        )
                                                                                                    ),
                                                                                                    1 => 'send_message',
                                                                                                ),
                                                                                            ),
                                                                                        ),
                                                                                  )
                                                                              ),
                                                                              1 => 'handleEvent',
                                                                          ),
                                                                          41 => Closure::__set_state( array() ),
                                                                          76 => array (
                                                                              0 => NULL,
                                                                              1 => 'handleData',
                                                                          ),
                                                                    ),
                                                                    'writeStreams' => array (
                                                                        76 => NULL,
                                                                    ),
                                                                    'writeListeners' => array (
                                                                        76 => array (
                                                                            0 =>  React\Stream\Buffer::__set_state(
                                                                                array(
                                                                                    'stream'    => NULL,
                                                                                    'listening' => true,
                                                                                    'softLimit' => 65536,
                                                                                    'writable'  => true,
                                                                                    'closed'    => false,
                                                                                    'loop'      => NULL,
                                                                                    'data'      => 'HTTP/1.1 101 Switching Protocols
                                                                                                    Upgrade: websocket
                                                                                                    Connection: Upgrade
                                                                                                    Sec-WebSocket-Accept: XAz1wpBET4fVczoAUcwtw5IZJhw=
                                                                                                    Sec-WebSocket-Protocol: wamp
                                                                                                    X-Powered-By: Ratchet/0.3.6

                                                                                                    9[0,"129067742859b0ed07dcc87561518801",1,"Ratchet\\/0.3.6"]',
                                                                                    'listeners' => array (
                                                                                        'error' => array (
                                                                                            0 =>  Closure::__set_state( array() ),
                                                                                        ),
                                                                                        'close' => array (
                                                                                            0 => array (
                                                                                                0 => NULL,
                                                                                                1 => 'close',
                                                                                            ),
                                                                                        ),
                                                                                        'drain' => array (
                                                                                            0 => Closure::__set_state( array() ),
                                                                                        ),
                                                                                    ),
                                                                                )
                                                                            ),
                                                                            1 => 'handleWrite',
                                                                        ),
                                                                  ),
                                                                  'running' => true,
                                                              )
                                                          ),
    'buffer' =>
    React\Stream\Buffer::__set_state(array(
    'stream' => NULL,
    'listening' => true,
    'softLimit' => 65536,
    'writable' => true,
    'closed' => false,
    'loop' =>
    React\EventLoop\StreamSelectLoop::__set_state(array(
    'nextTickQueue' =>
    React\EventLoop\Tick\NextTickQueue::__set_state(array(
    'eventLoop' => NULL,
    'queue' =>
    SplQueue::__set_state(array(
    )),
    )),
    'futureTickQueue' =>
    React\EventLoop\Tick\FutureTickQueue::__set_state(array(
    'eventLoop' => NULL,
    'queue' =>
    SplQueue::__set_state(array(
    )),
    )),
    'timers' =>
    React\EventLoop\Timer\Timers::__set_state(array(
    'time' => 1504767239.8843269,
    'timers' =>
    SplObjectStorage::__set_state(array(
    )),
    'scheduler' =>
    SplPriorityQueue::__set_state(array(
    )),
    )),
    'readStreams' =>
    array (
    36 => NULL,
    41 => NULL,
    76 => NULL,
    ),
    'readListeners' =>
    array (
    36 =>
    array (
    0 =>
    React\ZMQ\SocketWrapper::__set_state(array(
    'fd' => NULL,
    'closed' => false,
    'socket' =>
    ZMQSocket::__set_state(array(
    )),
    'loop' => NULL,
    'buffer' =>
    React\ZMQ\Buffer::__set_state(array(
    'socket' =>
    ZMQSocket::__set_state(array(
    )),
    'closed' => false,
    'listening' => false,
    'loop' => NULL,
    'fd' => NULL,
    'writeListener' =>
    array (
    0 => NULL,
    1 => 'handleEvent',
    ),
    'messages' =>
    array (
    ),
    'listeners' =>
    array (
    ),
    )),
    'listeners' =>
    array (
    'message' =>
    array (
    0 =>
    array (
    0 =>
    App\Source\WS_Handler::__set_state(array(
    'subscribedTopics' =>
    array (
    ),
    'clients' =>
    SplObjectStorage::__set_state(array(
    )),
    'log' =>
    App\Source\Log::__set_state(array(
    'config' =>
    array (
    'receive_port' => '5555',
    'receive_ip' => '0.0.0.0',
    'bind_port' => '8080',
    'bind_ip' => '0.0.0.0',
    'sync_port' => '5556',
    'callback_port' => '5557',
    'server_name' => 'SD-019',
    'server_ip' => '192.168.248.136',
    'base_url' => 'https://10.0.2.15/ws/master_v2',
    'log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_server.log',
    'error_log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_error.log',
    'mem_log' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_mem.log',
    ),
    )),
    )),
    1 => 'send_message',
    ),
    ),
    ),
    )),
    1 => 'handleEvent',
    ),
    41 =>
    Closure::__set_state(array(
    )),
    76 =>
    array (
    0 => NULL,
    1 => 'handleData',
    ),
    ),
    'writeStreams' =>
    array (
    76 => NULL,
    ),
    'writeListeners' =>
    array (
    76 =>
    array (
    0 => NULL,
    1 => 'handleWrite',
    ),
    ),
    'running' => true,
    )),
    'data' => 'HTTP/1.1 101 Switching Protocols
    Upgrade: websocket
    Connection: Upgrade
    Sec-WebSocket-Accept: XAz1wpBET4fVczoAUcwtw5IZJhw=
    Sec-WebSocket-Protocol: wamp
    X-Powered-By: Ratchet/0.3.6

    9[0,"129067742859b0ed07dcc87561518801",1,"Ratchet\\/0.3.6"]',
    'listeners' =>
    array (
    'error' =>
    array (
    0 =>
    Closure::__set_state(array(
    )),
    ),
    'close' =>
    array (
    0 =>
    array (
    0 => NULL,
    1 => 'close',
    ),
    ),
    'drain' =>
    array (
    0 =>
    Closure::__set_state(array(
    )),
    ),
    ),
    )),
    'listeners' =>
    array (
    'data' =>
    array (
    0 =>
    array (
    0 =>
    Ratchet\Server\IoServer::__set_state(array(
    'loop' => NULL,
    'app' =>
    Ratchet\Http\HttpServer::__set_state(array(
    '_reqParser' =>
    Ratchet\Http\HttpRequestParser::__set_state(array(
    'maxSize' => 4096,
    )),
    '_httpServer' =>
    Ratchet\Http\OriginCheck::__set_state(array(
    '_component' =>
    Ratchet\WebSocket\WsServer::__set_state(array(
    'versioner' =>
    Ratchet\WebSocket\VersionManager::__set_state(array(
    'versionString' => '13, 6, 0',
    'versions' =>
    array (
    13 =>
    Ratchet\WebSocket\Version\RFC6455::__set_state(array(
    '_verifier' =>
    Ratchet\WebSocket\Version\RFC6455\HandshakeVerifier::__set_state(array(
    )),
    'closeCodes' =>
    array (
    1000 => true,
    1001 => true,
    1002 => true,
    1003 => true,
    1007 => true,
    1008 => true,
    1009 => true,
    1010 => true,
    1011 => true,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
     'on' => true,
     'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
       'hasMbString' => true,
       'hasIconv' => true,
    )),
    )),
    )),
    6 =>
    Ratchet\WebSocket\Version\HyBi10::__set_state(array(
    '_verifier' =>
    Ratchet\WebSocket\Version\RFC6455\HandshakeVerifier::__set_state(array(
    )),
    'closeCodes' =>
    array (
    1000 => true,
    1001 => true,
    1002 => true,
    1003 => true,
    1007 => true,
    1008 => true,
    1009 => true,
    1010 => true,
    1011 => true,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
     'on' => true,
     'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
       'hasMbString' => true,
       'hasIconv' => true,
    )),
    )),
    )),
    0 =>
    Ratchet\WebSocket\Version\Hixie76::__set_state(array(
    )),
    ),
    )),
    'component' =>
    Ratchet\Wamp\WampServer::__set_state(array(
    'wampProtocol' =>
    Ratchet\Wamp\ServerProtocol::__set_state(array(
    '_decorating' =>
    Ratchet\Wamp\TopicManager::__set_state(array(
    'app' =>
    App\Source\WS_Handler::__set_state(array(
     'subscribedTopics' =>
    array (
    ),
     'clients' =>
    SplObjectStorage::__set_state(array(
    )),
     'log' =>
    App\Source\Log::__set_state(array(
       'config' =>
      array (
        'receive_port' => '5555',
        'receive_ip' => '0.0.0.0',
        'bind_port' => '8080',
        'bind_ip' => '0.0.0.0',
        'sync_port' => '5556',
        'callback_port' => '5557',
        'server_name' => 'SD-019',
        'server_ip' => '192.168.248.136',
        'base_url' => 'https://10.0.2.15/ws/master_v2',
        'log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_server.log',
        'error_log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_error.log',
        'mem_log' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_mem.log',
      ),
    )),
    )),
    'topicLookup' =>
    array (
    ),
    )),
    'connections' =>
    SplObjectStorage::__set_state(array(
    )),
    )),
    )),
    'connections' =>
    SplObjectStorage::__set_state(array(
    )),
    'acceptedSubProtocols' =>
    array (
    'wamp' => 0,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
    'on' => true,
    'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
    'hasMbString' => true,
    'hasIconv' => true,
    )),
    )),
    'isSpGenerated' => true,
    )),
    'allowedOrigins' =>
    array (
    0 => 'localhost',
    1 => 'ws.server.com',
    ),
    )),
    )),
    'handlers' =>
    SplFixedArray::__set_state(array(
    0 => NULL,
    1 =>
    array (
    0 => NULL,
    1 => 'handleEnd',
    ),
    2 =>
    array (
    0 => NULL,
    1 => 'handleError',
    ),
    )),
    'socket' =>
    React\Socket\Server::__set_state(array(
    'master' => NULL,
    'loop' =>
    React\EventLoop\StreamSelectLoop::__set_state(array(
    'nextTickQueue' =>
    React\EventLoop\Tick\NextTickQueue::__set_state(array(
    'eventLoop' => NULL,
    'queue' =>
    SplQueue::__set_state(array(
    )),
    )),
    'futureTickQueue' =>
    React\EventLoop\Tick\FutureTickQueue::__set_state(array(
    'eventLoop' => NULL,
    'queue' =>
    SplQueue::__set_state(array(
    )),
    )),
    'timers' =>
    React\EventLoop\Timer\Timers::__set_state(array(
    'time' => 1504767239.8843269,
    'timers' =>
    SplObjectStorage::__set_state(array(
    )),
    'scheduler' =>
    SplPriorityQueue::__set_state(array(
    )),
    )),
    'readStreams' =>
    array (
    36 => NULL,
    41 => NULL,
    76 => NULL,
    ),
    'readListeners' =>
    array (
    36 =>
    array (
    0 =>
    React\ZMQ\SocketWrapper::__set_state(array(
    'fd' => NULL,
    'closed' => false,
    'socket' =>
    ZMQSocket::__set_state(array(
    )),
    'loop' => NULL,
    'buffer' =>
    React\ZMQ\Buffer::__set_state(array(
    'socket' =>
    ZMQSocket::__set_state(array(
    )),
    'closed' => false,
    'listening' => false,
    'loop' => NULL,
    'fd' => NULL,
    'writeListener' =>
    array (
    0 => NULL,
    1 => 'handleEvent',
    ),
    'messages' =>
    array (
    ),
    'listeners' =>
    array (
    ),
    )),
    'listeners' =>
    array (
    'message' =>
    array (
    0 =>
    array (
      0 =>
      App\Source\WS_Handler::__set_state(array(
         'subscribedTopics' =>
        array (
        ),
         'clients' =>
        SplObjectStorage::__set_state(array(
        )),
         'log' =>
        App\Source\Log::__set_state(array(
           'config' =>
          array (
            'receive_port' => '5555',
            'receive_ip' => '0.0.0.0',
            'bind_port' => '8080',
            'bind_ip' => '0.0.0.0',
            'sync_port' => '5556',
            'callback_port' => '5557',
            'server_name' => 'SD-019',
            'server_ip' => '192.168.248.136',
            'base_url' => 'https://10.0.2.15/ws/master_v2',
            'log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_server.log',
            'error_log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_error.log',
            'mem_log' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_mem.log',
          ),
        )),
      )),
      1 => 'send_message',
    ),
    ),
    ),
    )),
    1 => 'handleEvent',
    ),
    41 =>
    Closure::__set_state(array(
    )),
    76 =>
    array (
    0 => NULL,
    1 => 'handleData',
    ),
    ),
    'writeStreams' =>
    array (
    76 => NULL,
    ),
    'writeListeners' =>
    array (
    76 =>
    array (
    0 =>
    React\Stream\Buffer::__set_state(array(
    'stream' => NULL,
    'listening' => true,
    'softLimit' => 65536,
    'writable' => true,
    'closed' => false,
    'loop' => NULL,
    'data' => 'HTTP/1.1 101 Switching Protocols
    Upgrade: websocket
    Connection: Upgrade
    Sec-WebSocket-Accept: XAz1wpBET4fVczoAUcwtw5IZJhw=
    Sec-WebSocket-Protocol: wamp
    X-Powered-By: Ratchet/0.3.6

    9[0,"129067742859b0ed07dcc87561518801",1,"Ratchet\\/0.3.6"]',
    'listeners' =>
    array (
    'error' =>
    array (
    0 =>
    Closure::__set_state(array(
    )),
    ),
    'close' =>
    array (
    0 =>
    array (
      0 => NULL,
      1 => 'close',
    ),
    ),
    'drain' =>
    array (
    0 =>
    Closure::__set_state(array(
    )),
    ),
    ),
    )),
    1 => 'handleWrite',
    ),
    ),
    'running' => true,
    )),
    'context' =>
    array (
    ),
    'listeners' =>
    array (
    'connection' =>
    array (
    0 =>
    array (
    0 => NULL,
    1 => 'handleConnect',
    ),
    ),
    ),
    )),
    )),
    1 => 'handleData',
    ),
    ),
    'end' =>
    array (
    0 =>
    array (
    0 =>
    Ratchet\Server\IoServer::__set_state(array(
    'loop' => NULL,
    'app' =>
    Ratchet\Http\HttpServer::__set_state(array(
    '_reqParser' =>
    Ratchet\Http\HttpRequestParser::__set_state(array(
    'maxSize' => 4096,
    )),
    '_httpServer' =>
    Ratchet\Http\OriginCheck::__set_state(array(
    '_component' =>
    Ratchet\WebSocket\WsServer::__set_state(array(
    'versioner' =>
    Ratchet\WebSocket\VersionManager::__set_state(array(
    'versionString' => '13, 6, 0',
    'versions' =>
    array (
    13 =>
    Ratchet\WebSocket\Version\RFC6455::__set_state(array(
    '_verifier' =>
    Ratchet\WebSocket\Version\RFC6455\HandshakeVerifier::__set_state(array(
    )),
    'closeCodes' =>
    array (
    1000 => true,
    1001 => true,
    1002 => true,
    1003 => true,
    1007 => true,
    1008 => true,
    1009 => true,
    1010 => true,
    1011 => true,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
     'on' => true,
     'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
       'hasMbString' => true,
       'hasIconv' => true,
    )),
    )),
    )),
    6 =>
    Ratchet\WebSocket\Version\HyBi10::__set_state(array(
    '_verifier' =>
    Ratchet\WebSocket\Version\RFC6455\HandshakeVerifier::__set_state(array(
    )),
    'closeCodes' =>
    array (
    1000 => true,
    1001 => true,
    1002 => true,
    1003 => true,
    1007 => true,
    1008 => true,
    1009 => true,
    1010 => true,
    1011 => true,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
     'on' => true,
     'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
       'hasMbString' => true,
       'hasIconv' => true,
    )),
    )),
    )),
    0 =>
    Ratchet\WebSocket\Version\Hixie76::__set_state(array(
    )),
    ),
    )),
    'component' =>
    Ratchet\Wamp\WampServer::__set_state(array(
    'wampProtocol' =>
    Ratchet\Wamp\ServerProtocol::__set_state(array(
    '_decorating' =>
    Ratchet\Wamp\TopicManager::__set_state(array(
    'app' =>
    App\Source\WS_Handler::__set_state(array(
     'subscribedTopics' =>
    array (
    ),
     'clients' =>
    SplObjectStorage::__set_state(array(
    )),
     'log' =>
    App\Source\Log::__set_state(array(
       'config' =>
      array (
        'receive_port' => '5555',
        'receive_ip' => '0.0.0.0',
        'bind_port' => '8080',
        'bind_ip' => '0.0.0.0',
        'sync_port' => '5556',
        'callback_port' => '5557',
        'server_name' => 'SD-019',
        'server_ip' => '192.168.248.136',
        'base_url' => 'https://10.0.2.15/ws/master_v2',
        'log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_server.log',
        'error_log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_error.log',
        'mem_log' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_mem.log',
      ),
    )),
    )),
    'topicLookup' =>
    array (
    ),
    )),
    'connections' =>
    SplObjectStorage::__set_state(array(
    )),
    )),
    )),
    'connections' =>
    SplObjectStorage::__set_state(array(
    )),
    'acceptedSubProtocols' =>
    array (
    'wamp' => 0,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
    'on' => true,
    'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
    'hasMbString' => true,
    'hasIconv' => true,
    )),
    )),
    'isSpGenerated' => true,
    )),
    'allowedOrigins' =>
    array (
    0 => 'localhost',
    1 => 'ws.server.com',
    ),
    )),
    )),
    'handlers' =>
    SplFixedArray::__set_state(array(
    0 =>
    array (
    0 => NULL,
    1 => 'handleData',
    ),
    1 => NULL,
    2 =>
    array (
    0 => NULL,
    1 => 'handleError',
    ),
    )),
    'socket' =>
    React\Socket\Server::__set_state(array(
    'master' => NULL,
    'loop' =>
    React\EventLoop\StreamSelectLoop::__set_state(array(
    'nextTickQueue' =>
    React\EventLoop\Tick\NextTickQueue::__set_state(array(
    'eventLoop' => NULL,
    'queue' =>
    SplQueue::__set_state(array(
    )),
    )),
    'futureTickQueue' =>
    React\EventLoop\Tick\FutureTickQueue::__set_state(array(
    'eventLoop' => NULL,
    'queue' =>
    SplQueue::__set_state(array(
    )),
    )),
    'timers' =>
    React\EventLoop\Timer\Timers::__set_state(array(
    'time' => 1504767239.8843269,
    'timers' =>
    SplObjectStorage::__set_state(array(
    )),
    'scheduler' =>
    SplPriorityQueue::__set_state(array(
    )),
    )),
    'readStreams' =>
    array (
    36 => NULL,
    41 => NULL,
    76 => NULL,
    ),
    'readListeners' =>
    array (
    36 =>
    array (
    0 =>
    React\ZMQ\SocketWrapper::__set_state(array(
    'fd' => NULL,
    'closed' => false,
    'socket' =>
    ZMQSocket::__set_state(array(
    )),
    'loop' => NULL,
    'buffer' =>
    React\ZMQ\Buffer::__set_state(array(
    'socket' =>
    ZMQSocket::__set_state(array(
    )),
    'closed' => false,
    'listening' => false,
    'loop' => NULL,
    'fd' => NULL,
    'writeListener' =>
    array (
    0 => NULL,
    1 => 'handleEvent',
    ),
    'messages' =>
    array (
    ),
    'listeners' =>
    array (
    ),
    )),
    'listeners' =>
    array (
    'message' =>
    array (
    0 =>
    array (
      0 =>
      App\Source\WS_Handler::__set_state(array(
         'subscribedTopics' =>
        array (
        ),
         'clients' =>
        SplObjectStorage::__set_state(array(
        )),
         'log' =>
        App\Source\Log::__set_state(array(
           'config' =>
          array (
            'receive_port' => '5555',
            'receive_ip' => '0.0.0.0',
            'bind_port' => '8080',
            'bind_ip' => '0.0.0.0',
            'sync_port' => '5556',
            'callback_port' => '5557',
            'server_name' => 'SD-019',
            'server_ip' => '192.168.248.136',
            'base_url' => 'https://10.0.2.15/ws/master_v2',
            'log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_server.log',
            'error_log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_error.log',
            'mem_log' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_mem.log',
          ),
        )),
      )),
      1 => 'send_message',
    ),
    ),
    ),
    )),
    1 => 'handleEvent',
    ),
    41 =>
    Closure::__set_state(array(
    )),
    76 =>
    array (
    0 => NULL,
    1 => 'handleData',
    ),
    ),
    'writeStreams' =>
    array (
    76 => NULL,
    ),
    'writeListeners' =>
    array (
    76 =>
    array (
    0 =>
    React\Stream\Buffer::__set_state(array(
    'stream' => NULL,
    'listening' => true,
    'softLimit' => 65536,
    'writable' => true,
    'closed' => false,
    'loop' => NULL,
    'data' => 'HTTP/1.1 101 Switching Protocols
    Upgrade: websocket
    Connection: Upgrade
    Sec-WebSocket-Accept: XAz1wpBET4fVczoAUcwtw5IZJhw=
    Sec-WebSocket-Protocol: wamp
    X-Powered-By: Ratchet/0.3.6

    9[0,"129067742859b0ed07dcc87561518801",1,"Ratchet\\/0.3.6"]',
    'listeners' =>
    array (
    'error' =>
    array (
    0 =>
    Closure::__set_state(array(
    )),
    ),
    'close' =>
    array (
    0 =>
    array (
      0 => NULL,
      1 => 'close',
    ),
    ),
    'drain' =>
    array (
    0 =>
    Closure::__set_state(array(
    )),
    ),
    ),
    )),
    1 => 'handleWrite',
    ),
    ),
    'running' => true,
    )),
    'context' =>
    array (
    ),
    'listeners' =>
    array (
    'connection' =>
    array (
    0 =>
    array (
    0 => NULL,
    1 => 'handleConnect',
    ),
    ),
    ),
    )),
    )),
    1 => 'handleEnd',
    ),
    ),
    'error' =>
    array (
    0 =>
    array (
    0 =>
    Ratchet\Server\IoServer::__set_state(array(
    'loop' => NULL,
    'app' =>
    Ratchet\Http\HttpServer::__set_state(array(
    '_reqParser' =>
    Ratchet\Http\HttpRequestParser::__set_state(array(
    'maxSize' => 4096,
    )),
    '_httpServer' =>
    Ratchet\Http\OriginCheck::__set_state(array(
    '_component' =>
    Ratchet\WebSocket\WsServer::__set_state(array(
    'versioner' =>
    Ratchet\WebSocket\VersionManager::__set_state(array(
    'versionString' => '13, 6, 0',
    'versions' =>
    array (
    13 =>
    Ratchet\WebSocket\Version\RFC6455::__set_state(array(
    '_verifier' =>
    Ratchet\WebSocket\Version\RFC6455\HandshakeVerifier::__set_state(array(
    )),
    'closeCodes' =>
    array (
    1000 => true,
    1001 => true,
    1002 => true,
    1003 => true,
    1007 => true,
    1008 => true,
    1009 => true,
    1010 => true,
    1011 => true,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
     'on' => true,
     'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
       'hasMbString' => true,
       'hasIconv' => true,
    )),
    )),
    )),
    6 =>
    Ratchet\WebSocket\Version\HyBi10::__set_state(array(
    '_verifier' =>
    Ratchet\WebSocket\Version\RFC6455\HandshakeVerifier::__set_state(array(
    )),
    'closeCodes' =>
    array (
    1000 => true,
    1001 => true,
    1002 => true,
    1003 => true,
    1007 => true,
    1008 => true,
    1009 => true,
    1010 => true,
    1011 => true,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
     'on' => true,
     'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
       'hasMbString' => true,
       'hasIconv' => true,
    )),
    )),
    )),
    0 =>
    Ratchet\WebSocket\Version\Hixie76::__set_state(array(
    )),
    ),
    )),
    'component' =>
    Ratchet\Wamp\WampServer::__set_state(array(
    'wampProtocol' =>
    Ratchet\Wamp\ServerProtocol::__set_state(array(
    '_decorating' =>
    Ratchet\Wamp\TopicManager::__set_state(array(
    'app' =>
    App\Source\WS_Handler::__set_state(array(
     'subscribedTopics' =>
    array (
    ),
     'clients' =>
    SplObjectStorage::__set_state(array(
    )),
     'log' =>
    App\Source\Log::__set_state(array(
       'config' =>
      array (
        'receive_port' => '5555',
        'receive_ip' => '0.0.0.0',
        'bind_port' => '8080',
        'bind_ip' => '0.0.0.0',
        'sync_port' => '5556',
        'callback_port' => '5557',
        'server_name' => 'SD-019',
        'server_ip' => '192.168.248.136',
        'base_url' => 'https://10.0.2.15/ws/master_v2',
        'log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_server.log',
        'error_log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_error.log',
        'mem_log' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_mem.log',
      ),
    )),
    )),
    'topicLookup' =>
    array (
    ),
    )),
    'connections' =>
    SplObjectStorage::__set_state(array(
    )),
    )),
    )),
    'connections' =>
    SplObjectStorage::__set_state(array(
    )),
    'acceptedSubProtocols' =>
    array (
    'wamp' => 0,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
    'on' => true,
    'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
    'hasMbString' => true,
    'hasIconv' => true,
    )),
    )),
    'isSpGenerated' => true,
    )),
    'allowedOrigins' =>
    array (
    0 => 'localhost',
    1 => 'ws.server.com',
    ),
    )),
    )),
    'handlers' =>
    SplFixedArray::__set_state(array(
    0 =>
    array (
    0 => NULL,
    1 => 'handleData',
    ),
    1 =>
    array (
    0 => NULL,
    1 => 'handleEnd',
    ),
    2 => NULL,
    )),
    'socket' =>
    React\Socket\Server::__set_state(array(
    'master' => NULL,
    'loop' =>
    React\EventLoop\StreamSelectLoop::__set_state(array(
    'nextTickQueue' =>
    React\EventLoop\Tick\NextTickQueue::__set_state(array(
    'eventLoop' => NULL,
    'queue' =>
    SplQueue::__set_state(array(
    )),
    )),
    'futureTickQueue' =>
    React\EventLoop\Tick\FutureTickQueue::__set_state(array(
    'eventLoop' => NULL,
    'queue' =>
    SplQueue::__set_state(array(
    )),
    )),
    'timers' =>
    React\EventLoop\Timer\Timers::__set_state(array(
    'time' => 1504767239.8843269,
    'timers' =>
    SplObjectStorage::__set_state(array(
    )),
    'scheduler' =>
    SplPriorityQueue::__set_state(array(
    )),
    )),
    'readStreams' =>
    array (
    36 => NULL,
    41 => NULL,
    76 => NULL,
    ),
    'readListeners' =>
    array (
    36 =>
    array (
    0 =>
    React\ZMQ\SocketWrapper::__set_state(array(
    'fd' => NULL,
    'closed' => false,
    'socket' =>
    ZMQSocket::__set_state(array(
    )),
    'loop' => NULL,
    'buffer' =>
    React\ZMQ\Buffer::__set_state(array(
    'socket' =>
    ZMQSocket::__set_state(array(
    )),
    'closed' => false,
    'listening' => false,
    'loop' => NULL,
    'fd' => NULL,
    'writeListener' =>
    array (
    0 => NULL,
    1 => 'handleEvent',
    ),
    'messages' =>
    array (
    ),
    'listeners' =>
    array (
    ),
    )),
    'listeners' =>
    array (
    'message' =>
    array (
    0 =>
    array (
      0 =>
      App\Source\WS_Handler::__set_state(array(
         'subscribedTopics' =>
        array (
        ),
         'clients' =>
        SplObjectStorage::__set_state(array(
        )),
         'log' =>
        App\Source\Log::__set_state(array(
           'config' =>
          array (
            'receive_port' => '5555',
            'receive_ip' => '0.0.0.0',
            'bind_port' => '8080',
            'bind_ip' => '0.0.0.0',
            'sync_port' => '5556',
            'callback_port' => '5557',
            'server_name' => 'SD-019',
            'server_ip' => '192.168.248.136',
            'base_url' => 'https://10.0.2.15/ws/master_v2',
            'log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_server.log',
            'error_log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_error.log',
            'mem_log' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_mem.log',
          ),
        )),
      )),
      1 => 'send_message',
    ),
    ),
    ),
    )),
    1 => 'handleEvent',
    ),
    41 =>
    Closure::__set_state(array(
    )),
    76 =>
    array (
    0 => NULL,
    1 => 'handleData',
    ),
    ),
    'writeStreams' =>
    array (
    76 => NULL,
    ),
    'writeListeners' =>
    array (
    76 =>
    array (
    0 =>
    React\Stream\Buffer::__set_state(array(
    'stream' => NULL,
    'listening' => true,
    'softLimit' => 65536,
    'writable' => true,
    'closed' => false,
    'loop' => NULL,
    'data' => 'HTTP/1.1 101 Switching Protocols
    Upgrade: websocket
    Connection: Upgrade
    Sec-WebSocket-Accept: XAz1wpBET4fVczoAUcwtw5IZJhw=
    Sec-WebSocket-Protocol: wamp
    X-Powered-By: Ratchet/0.3.6

    9[0,"129067742859b0ed07dcc87561518801",1,"Ratchet\\/0.3.6"]',
    'listeners' =>
    array (
    'error' =>
    array (
    0 =>
    Closure::__set_state(array(
    )),
    ),
    'close' =>
    array (
    0 =>
    array (
      0 => NULL,
      1 => 'close',
    ),
    ),
    'drain' =>
    array (
    0 =>
    Closure::__set_state(array(
    )),
    ),
    ),
    )),
    1 => 'handleWrite',
    ),
    ),
    'running' => true,
    )),
    'context' =>
    array (
    ),
    'listeners' =>
    array (
    'connection' =>
    array (
    0 =>
    array (
    0 => NULL,
    1 => 'handleConnect',
    ),
    ),
    ),
    )),
    )),
    1 => 'handleError',
    ),
    ),
    ),
    'decor' => NULL,
    )),
    'resourceId' => 76,
    'remoteAddress' => '127.0.0.1',
    'httpHeadersReceived' => true,
    'WebSocket' =>
    stdClass::__set_state(array(
    'request' =>
    Guzzle\Http\Message\EntityEnclosingRequest::__set_state(array(
    'expectCutoff' => 1048576,
    'body' =>
    Guzzle\Http\EntityBody::__set_state(array(
    'contentEncoding' => false,
    'rewindFunction' => NULL,
    'stream' => NULL,
    'size' => 0,
    'cache' =>
    array (
    'wrapper_type' => 'PHP',
    'stream_type' => 'TEMP',
    'mode' => 'w+b',
    'unread_bytes' => 0,
    'seekable' => true,
    'uri' => 'php://temp',
    'is_local' => true,
    'is_readable' => true,
    'is_writable' => true,
    ),
    'customData' =>
    array (
    ),
    )),
    'postFields' =>
    Guzzle\Http\QueryString::__set_state(array(
    'fieldSeparator' => '&',
    'valueSeparator' => '=',
    'urlEncode' => 'RFC 3986',
    'aggregator' => NULL,
    'data' =>
    array (
    ),
    )),
    'postFiles' =>
    array (
    ),
    'eventDispatcher' => NULL,
    'url' =>
    Guzzle\Http\Url::__set_state(array(
    'scheme' => 'http',
    'host' => 'ws.server.com',
    'port' => 8443,
    'username' => NULL,
    'password' => NULL,
    'path' => '/',
    'fragment' => NULL,
    'query' =>
    Guzzle\Http\QueryString::__set_state(array(
    'fieldSeparator' => '&',
    'valueSeparator' => '=',
    'urlEncode' => 'RFC 3986',
    'aggregator' => NULL,
    'data' =>
    array (
    ),
    )),
    )),
    'method' => 'GET',
    'client' => NULL,
    'response' => NULL,
    'responseBody' => NULL,
    'state' => 'new',
    'username' => NULL,
    'password' => NULL,
    'curlOptions' =>
    Guzzle\Common\Collection::__set_state(array(
    'data' =>
    array (
    ),
    )),
    'isRedirect' => false,
    'headers' =>
    Guzzle\Http\Message\Header\HeaderCollection::__set_state(array(
    'headers' =>
    array (
    'host' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'ws.server.com:8443',
    ),
    'header' => 'Host',
    'glue' => ',',
    )),
    'connection' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'Upgrade',
    ),
    'header' => 'Connection',
    'glue' => ',',
    )),
    'pragma' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'no-cache',
    ),
    'header' => 'Pragma',
    'glue' => ',',
    )),
    'cache-control' =>
    Guzzle\Http\Message\Header\CacheControl::__set_state(array(
    'directives' => NULL,
    'values' =>
    array (
    0 => 'no-cache',
    ),
    'header' => 'Cache-Control',
    'glue' => ',',
    )),
    'upgrade' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'websocket',
    ),
    'header' => 'Upgrade',
    'glue' => ',',
    )),
    'origin' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'https://localhost',
    ),
    'header' => 'Origin',
    'glue' => ',',
    )),
    'sec-websocket-version' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => '13',
    ),
    'header' => 'Sec-WebSocket-Version',
    'glue' => ',',
    )),
    'user-agent' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36',
    ),
    'header' => 'User-Agent',
    'glue' => ',',
    )),
    'dnt' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => '1',
    ),
    'header' => 'DNT',
    'glue' => ',',
    )),
    'accept-encoding' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'gzip, deflate, br',
    ),
    'header' => 'Accept-Encoding',
    'glue' => ',',
    )),
    'accept-language' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'en-US,en;q=0.8,fil;q=0.6',
    ),
    'header' => 'Accept-Language',
    'glue' => ',',
    )),
    'cookie' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'PHPSESSID=79muas1vhmolhb1djn3qtoseh7; __onxs=di5koszcHWB33ypWApx10LBe6jufSLws7qzkA4fmQxBZ0kC%2FN50j2VmUcu3E9K69flHZm0LwrlwPrOINvdC2GUJJBylwryZoPDrXdBIGvLfaJ%2FA21ND8Q5YY4X90H2hw5y9GMNb%2FkeKH1VKJjdkBBl18kg1NUrNCHTdJHUsrJUnr6bgsvySKoS4v5Mbe%2BGhRS7wa7HgDqCb%2B49uEQbaE8kZyAz%2B5xjaSR%2Bm1qgO%2FFmTpkga%2F6YR7%2B%2Bx%2Bsd9D5%2BECPQftePDZvc3Rxhw5XmcCUM5%2BSqDgn%2BTAA%2FrXXUF4lrK0qMonwW2WSep57jsc0shTc%2FCJLLLUyqmC2RDAWZI1IG0BOdjfu0%2BH%2BTAkqBbymRk%2B%2FR7k5qo4dVCX3UbNnOtiH78XC2xs3XHYCOrcHmx%2BS4fph88CJb3vkuGrMHl2w0T7qbWm8NZpE0qfYBbrqwO1oDnFZyfTSnj4nkByXDk3hA%3D%3D2fd64f869f48d2cae01c3be6694274721cefa5ee; __onxlif=0; __onxa=1504656644',
    ),
    'header' => 'Cookie',
    'glue' => ',',
    )),
    'sec-websocket-key' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'HHDXmwDUymWlqvpbxJOXRA==',
    ),
    'header' => 'Sec-WebSocket-Key',
    'glue' => ',',
    )),
    'sec-websocket-extensions' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'permessage-deflate; client_max_window_bits',
    ),
    'header' => 'Sec-WebSocket-Extensions',
    'glue' => ',',
    )),
    'sec-websocket-protocol' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 'wamp',
    ),
    'header' => 'Sec-WebSocket-Protocol',
    'glue' => ',',
    )),
    'content-length' =>
    Guzzle\Http\Message\Header::__set_state(array(
    'values' =>
    array (
    0 => 0,
    ),
    'header' => 'Content-Length',
    'glue' => ',',
    )),
    ),
    )),
    'headerFactory' =>
    Guzzle\Http\Message\Header\HeaderFactory::__set_state(array(
    'mapping' =>
    array (
    'cache-control' => 'Guzzle\\Http\\Message\\Header\\CacheControl',
    'link' => 'Guzzle\\Http\\Message\\Header\\Link',
    ),
    )),
    'params' =>
    Guzzle\Common\Collection::__set_state(array(
    'data' =>
    array (
    ),
    )),
    'protocol' => 'HTTP',
    'protocolVersion' => '1.1',
    )),
    'established' => true,
    'closing' => false,
    'version' =>
    Ratchet\WebSocket\Version\RFC6455::__set_state(array(
    '_verifier' =>
    Ratchet\WebSocket\Version\RFC6455\HandshakeVerifier::__set_state(array(
    )),
    'closeCodes' =>
    array (
    1000 => true,
    1001 => true,
    1002 => true,
    1003 => true,
    1007 => true,
    1008 => true,
    1009 => true,
    1010 => true,
    1011 => true,
    ),
    'validator' =>
    Ratchet\WebSocket\Encoding\ToggleableValidator::__set_state(array(
    'on' => true,
    'validator' =>
    Ratchet\WebSocket\Encoding\Validator::__set_state(array(
    'hasMbString' => true,
    'hasIconv' => true,
    )),
    )),
    )),
    'coalescedCallback' =>
    Ratchet\Wamp\WampServer::__set_state(array(
    'wampProtocol' =>
    Ratchet\Wamp\ServerProtocol::__set_state(array(
    '_decorating' =>
    Ratchet\Wamp\TopicManager::__set_state(array(
    'app' =>
    App\Source\WS_Handler::__set_state(array(
    'subscribedTopics' =>
    array (
    ),
    'clients' =>
    SplObjectStorage::__set_state(array(
    )),
    'log' =>
    App\Source\Log::__set_state(array(
    'config' =>
    array (
    'receive_port' => '5555',
    'receive_ip' => '0.0.0.0',
    'bind_port' => '8080',
    'bind_ip' => '0.0.0.0',
    'sync_port' => '5556',
    'callback_port' => '5557',
    'server_name' => 'SD-019',
    'server_ip' => '192.168.248.136',
    'base_url' => 'https://10.0.2.15/ws/master_v2',
    'log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_server.log',
    'error_log_file' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_error.log',
    'mem_log' => 'C:\\xampp\\htdocs\\ws_server\\log\\ws_mem.log',
    ),
    )),
    )),
    'topicLookup' =>
    array (
    ),
    )),
    'connections' =>
    SplObjectStorage::__set_state(array(
    )),
    )),
    )),
    )),
    'WAMP' =>
    stdClass::__set_state(array(
    'sessionId' => '129067742859b0ed07dcc87561518801',
    'prefixes' =>
    array (
    ),
    'subscriptions' =>
    SplObjectStorage::__set_state(array(
    )),
    )),
    )),
    )),
    )
)
