.. Http/Client/Adapter/Curl.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Http\\Client\\Adapter\\Curl
=================================

An adapter class for Zend\Http\Client based on the curl extension.
Curl requires libcurl. See for full requirements the PHP manual: http://php.net/curl

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Adapter constructor
    
    Config is set using setOptions()




setOptions
++++++++++

.. function:: setOptions()


    Set the configuration array for the adapter

    :param array|Traversable: 

    :rtype: Curl 

    :throws: AdapterException\InvalidArgumentException 



getConfig
+++++++++

.. function:: getConfig()


    Retrieve the array of all configuration options

    :rtype: array 



setCurlOption
+++++++++++++

.. function:: setCurlOption()


    Direct setter for cURL adapter related options.

    :param string|int: 
    :param mixed: 

    :rtype: Curl 



connect
+++++++

.. function:: connect()


    Initialize curl

    :param string: 
    :param int: 
    :param bool: 

    :rtype: void 

    :throws: AdapterException\RuntimeException if unable to connect



write
+++++

.. function:: write()


    Send request to the remote server

    :param string: 
    :param \Zend\Uri\Uri: 
    :param float: 
    :param array: 
    :param string: 

    :rtype: string $request

    :throws: AdapterException\RuntimeException If connection fails, connected to wrong host, no PUT file defined, unsupported method, or unsupported cURL option
    :throws: AdapterException\InvalidArgumentException if $method is currently not supported



read
++++

.. function:: read()


    Return read response from server

    :rtype: string 



close
+++++

.. function:: close()


    Close the connection to the server



getHandle
+++++++++

.. function:: getHandle()


    Get cUrl Handle

    :rtype: resource 



setOutputStream
+++++++++++++++

.. function:: setOutputStream()


    Set output stream for the response

    :param resource: 

    :rtype: Curl 



readHeader
++++++++++

.. function:: readHeader()


    Header reader function for CURL

    :param resource: 
    :param string: 

    :rtype: int 



