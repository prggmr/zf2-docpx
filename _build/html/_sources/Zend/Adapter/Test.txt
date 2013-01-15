.. /Http/Client/Adapter/Test.php generated using docpx on 01/15/13 05:29pm


Zend\\Http\\Client\\Adapter\\Test
*********************************


A testing-purposes adapter.

Should be used to test all components that rely on Zend_Http_Client,
without actually performing an HTTP request. You should instantiate this
object manually, and then set it as the client's adapter. Then, you can
set the expected response using the setResponse() method.



Methods
=======

__construct
-----------

.. function:: __construct()


    Adapter constructor, currently empty. Config is set using setOptions()



setNextRequestWillFail
----------------------

.. function:: setNextRequestWillFail($flag)


    Set the nextRequestWillFail flag

    :param bool $flag: 

    :rtype: \Zend\Http\Client\Adapter\Test 



setOptions
----------

.. function:: setOptions([$options = false])


    Set the configuration array for the adapter

    :param array|Traversable $options: 

    :throws Exception\InvalidArgumentException: 



connect
-------

.. function:: connect($host, [$port = 80, [$secure = false]])


    Connect to the remote server

    :param string $host: 
    :param int $port: 
    :param bool $secure: 
    :param int $timeout: 

    :throws Exception\RuntimeException: 



write
-----

.. function:: write($method, $uri, [$httpVer = "1.1", [$headers = false, [$body = false]]])


    Send request to the remote server

    :param string $method: 
    :param \Zend\Uri\Uri $uri: 
    :param string $httpVer: 
    :param array $headers: 
    :param string $body: 

    :rtype: string Request as string



read
----

.. function:: read()


    Return the response set in $this->setResponse()

    :rtype: string 



close
-----

.. function:: close()


    Close the connection (dummy)



setResponse
-----------

.. function:: setResponse($response)


    Set the HTTP response(s) to be returned by this adapter

    :param \Zend\Http\Response|array|string $response: 



addResponse
-----------

.. function:: addResponse($response)


    Add another response to the response buffer.

    :param string|Response $response: 



setResponseIndex
----------------

.. function:: setResponseIndex($index)


    Sets the position of the response buffer.  Selects which
    response will be returned on the next call to read().

    :param integer $index: 

    :throws Exception\OutOfRangeException: 





