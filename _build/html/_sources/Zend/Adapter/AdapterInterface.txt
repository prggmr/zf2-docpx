.. /Http/Client/Adapter/AdapterInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\Http\\Client\\Adapter\\setOptions
=======================================

.. function:: Zend\Http\Client\Adapter\setOptions()


    Set the configuration array for the adapter

    :param array $options: 



Zend\\Http\\Client\\Adapter\\connect
====================================

.. function:: Zend\Http\Client\Adapter\connect()


    Connect to the remote server

    :param string $host: 
    :param int $port: 
    :param bool $secure: 



Zend\\Http\\Client\\Adapter\\write
==================================

.. function:: Zend\Http\Client\Adapter\write()


    Send request to the remote server

    :param string $method: 
    :param \Zend\Uri\Uri $url: 
    :param string $httpVer: 
    :param array $headers: 
    :param string $body: 

    :rtype: string Request as text



Zend\\Http\\Client\\Adapter\\read
=================================

.. function:: Zend\Http\Client\Adapter\read()


    Read response from server

    :rtype: string 



Zend\\Http\\Client\\Adapter\\close
==================================

.. function:: Zend\Http\Client\Adapter\close()


    Close the connection to the server



