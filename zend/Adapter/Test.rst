.. Http/Client/Adapter/Test.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Http\\Client\\Adapter\\Test
=================================

A testing-purposes adapter.

Should be used to test all components that rely on Zend_Http_Client,
without actually performing an HTTP request. You should instantiate this
object manually, and then set it as the client's adapter. Then, you can
set the expected response using the setResponse() method.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Adapter constructor, currently empty. Config is set using setOptions()



setNextRequestWillFail
++++++++++++++++++++++

.. function:: setNextRequestWillFail()


    Set the nextRequestWillFail flag

    :param bool: 

    :rtype: \Zend\Http\Client\Adapter\Test 



setOptions
++++++++++

.. function:: setOptions()


    Set the configuration array for the adapter

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 



connect
+++++++

.. function:: connect()


    Connect to the remote server

    :param string: 
    :param int: 
    :param bool: 
    :param int: 

    :throws Exception\RuntimeException: 



write
+++++

.. function:: write()


    Send request to the remote server

    :param string: 
    :param \Zend\Uri\Uri: 
    :param string: 
    :param array: 
    :param string: 

    :rtype: string Request as string



read
++++

.. function:: read()


    Return the response set in $this->setResponse()

    :rtype: string 



close
+++++

.. function:: close()


    Close the connection (dummy)



setResponse
+++++++++++

.. function:: setResponse()


    Set the HTTP response(s) to be returned by this adapter

    :param \Zend\Http\Response|array|string: 



addResponse
+++++++++++

.. function:: addResponse()


    Add another response to the response buffer.

    :param string|Response: 



setResponseIndex
++++++++++++++++

.. function:: setResponseIndex()


    Sets the position of the response buffer.  Selects which
    response will be returned on the next call to read().

    :param integer: 

    :throws Exception\OutOfRangeException: 



