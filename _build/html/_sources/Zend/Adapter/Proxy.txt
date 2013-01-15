.. /Http/Client/Adapter/Proxy.php generated using docpx on 01/15/13 05:29pm


Zend\\Http\\Client\\Adapter\\Proxy
**********************************


HTTP Proxy-supporting Zend_Http_Client adapter class, based on the default
socket based adapter.

Should be used if proxy HTTP access is required. If no proxy is set, will
fall back to Zend_Http_Client_Adapter_Socket behavior. Just like the
default Socket adapter, this adapter does not require any special extensions
installed.



Methods
=======

setOptions
----------

.. function:: setOptions([$options = false])


    Set the configuration array for the adapter

    :param array $options: 



connect
-------

.. function:: connect($host, [$port = 80, [$secure = false]])


    Connect to the remote server
    
    Will try to connect to the proxy server. If no proxy was set, will
    fall back to the target server (behave like regular Socket adapter)

    :param string $host: 
    :param int $port: 
    :param bool $secure: 

    :throws AdapterException\RuntimeException: 



write
-----

.. function:: write($method, $uri, [$httpVer = "1.1", [$headers = false, [$body = false]]])


    Send request to the proxy server

    :param string $method: 
    :param \Zend\Uri\Uri $uri: 
    :param string $httpVer: 
    :param array $headers: 
    :param string $body: 

    :throws AdapterException\RuntimeException: 

    :rtype: string Request as string



connectHandshake
----------------

.. function:: connectHandshake($host, [$port = 443, [$httpVer = "1.1", [$headers = false]]])


    Preform handshaking with HTTPS proxy using CONNECT method

    :param string $host: 
    :param integer $port: 
    :param string $httpVer: 
    :param array $headers: 

    :throws AdapterException\RuntimeException: 



close
-----

.. function:: close()


    Close the connection to the server



__destruct
----------

.. function:: __destruct()


    Destructor: make sure the socket is disconnected





