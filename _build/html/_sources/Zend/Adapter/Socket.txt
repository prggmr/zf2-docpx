.. /Http/Client/Adapter/Socket.php generated using docpx on 01/15/13 05:29pm


Zend\\Http\\Client\\Adapter\\Socket
***********************************


A sockets based (stream\socket\client) adapter class for Zend\Http\Client. Can be used
on almost every PHP environment, and does not require any special extensions.



Methods
=======

__construct
-----------

.. function:: __construct()


    Adapter constructor, currently empty. Config is set using setOptions()



setOptions
----------

.. function:: setOptions([$options = false])


    Set the configuration array for the adapter

    :param array|Traversable $options: 

    :throws AdapterException\InvalidArgumentException: 



getConfig
---------

.. function:: getConfig()


    Retrieve the array of all configuration options

    :rtype: array 



setStreamContext
----------------

.. function:: setStreamContext($context)


    Set the stream context for the TCP connection to the server
    
    Can accept either a pre-existing stream context resource, or an array
    of stream options, similar to the options array passed to the
    stream_context_create() PHP function. In such case a new stream context
    will be created using the passed options.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param mixed $context: Stream context or array of context options

    :throws Exception\InvalidArgumentException: 

    :rtype: Socket 



getStreamContext
----------------

.. function:: getStreamContext()


    Get the stream context for the TCP connection to the server.
    
    If no stream context is set, will create a default one.

    :rtype: resource 



connect
-------

.. function:: connect($host, [$port = 80, [$secure = false]])


    Connect to the remote server

    :param string $host: 
    :param int $port: 
    :param bool $secure: 

    :throws AdapterException\RuntimeException: 



write
-----

.. function:: write($method, $uri, [$httpVer = "1.1", [$headers = false, [$body = false]]])


    Send request to the remote server

    :param string $method: 
    :param \Zend\Uri\Uri $uri: 
    :param string $httpVer: 
    :param array $headers: 
    :param string $body: 

    :throws AdapterException\RuntimeException: 

    :rtype: string Request as string



read
----

.. function:: read()


    Read response from server


    :rtype: string 



close
-----

.. function:: close()


    Close the connection to the server



_checkSocketReadTimeout
-----------------------

.. function:: _checkSocketReadTimeout()


    Check if the socket has timed out - if so close connection and throw
    an exception




setOutputStream
---------------

.. function:: setOutputStream($stream)


    Set output stream for the response

    :param resource $stream: 

    :rtype: \Zend\Http\Client\Adapter\Socket 



__destruct
----------

.. function:: __destruct()


    Destructor: make sure the socket is disconnected
    
    If we are in persistent TCP mode, will not close the connection





