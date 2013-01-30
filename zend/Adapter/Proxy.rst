.. Http/Client/Adapter/Proxy.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Client\\Adapter\\Proxy
==================================

HTTP Proxy-supporting Zend_Http_Client adapter class, based on the default
socket based adapter.

Should be used if proxy HTTP access is required. If no proxy is set, will
fall back to Zend_Http_Client_Adapter_Socket behavior. Just like the
default Socket adapter, this adapter does not require any special extensions
installed.

Methods
+++++++

setOptions
----------

.. function:: setOptions()


    Set the configuration array for the adapter

    :param array: 



connect
-------

.. function:: connect()


    Connect to the remote server
    
    Will try to connect to the proxy server. If no proxy was set, will
    fall back to the target server (behave like regular Socket adapter)

    :param string: 
    :param int: 
    :param bool: 

    :throws AdapterException\RuntimeException: 



write
-----

.. function:: write()


    Send request to the proxy server

    :param string: 
    :param \Zend\Uri\Uri: 
    :param string: 
    :param array: 
    :param string: 

    :throws AdapterException\RuntimeException: 

    :rtype: string Request as string



connectHandshake
----------------

.. function:: connectHandshake()


    Preform handshaking with HTTPS proxy using CONNECT method

    :param string: 
    :param integer: 
    :param string: 
    :param array: 

    :throws AdapterException\RuntimeException: 



close
-----

.. function:: close()


    Close the connection to the server



__destruct
----------

.. function:: __destruct()


    Destructor: make sure the socket is disconnected



