.. /Http/Client/Adapter/Curl.php generated using docpx on 01/15/13 05:29pm


Zend\\Http\\Client\\Adapter\\Curl
*********************************


An adapter class for Zend\Http\Client based on the curl extension.
Curl requires libcurl. See for full requirements the PHP manual: http://php.net/curl



Methods
=======

__construct
-----------

.. function:: __construct()


    Adapter constructor
    
    Config is set using setOptions()




setOptions
----------

.. function:: setOptions([$options = false])


    Set the configuration array for the adapter

    :param array|Traversable $options: 

    :rtype: Curl 

    :throws: AdapterException\InvalidArgumentException 



getConfig
---------

.. function:: getConfig()


    Retrieve the array of all configuration options

    :rtype: array 



setCurlOption
-------------

.. function:: setCurlOption($option, $value)


    Direct setter for cURL adapter related options.

    :param string|int $option: 
    :param mixed $value: 

    :rtype: Curl 



connect
-------

.. function:: connect($host, [$port = 80, [$secure = false]])


    Initialize curl

    :param string $host: 
    :param int $port: 
    :param bool $secure: 

    :rtype: void 

    :throws: AdapterException\RuntimeException if unable to connect



write
-----

.. function:: write($method, $uri, [$httpVersion = 1.1, [$headers = false, [$body = false]]])


    Send request to the remote server

    :param string $method: 
    :param \Zend\Uri\Uri $uri: 
    :param float $httpVersion: 
    :param array $headers: 
    :param string $body: 

    :rtype: string $request

    :throws: AdapterException\RuntimeException If connection fails, connected to wrong host, no PUT file defined, unsupported method, or unsupported cURL option
    :throws: AdapterException\InvalidArgumentException if $method is currently not supported



read
----

.. function:: read()


    Return read response from server

    :rtype: string 



close
-----

.. function:: close()


    Close the connection to the server



getHandle
---------

.. function:: getHandle()


    Get cUrl Handle

    :rtype: resource 



setOutputStream
---------------

.. function:: setOutputStream($stream)


    Set output stream for the response

    :param resource $stream: 

    :rtype: Curl 



readHeader
----------

.. function:: readHeader($curl, $header)


    Header reader function for CURL

    :param resource $curl: 
    :param string $header: 

    :rtype: int 





