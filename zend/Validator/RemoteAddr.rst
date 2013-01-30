.. Session/Validator/RemoteAddr.php generated using docpx on 01/30/13 03:32am


Zend\\Session\\Validator\\RemoteAddr
====================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    get the current user IP and store it in the session as 'valid data'



isValid
-------

.. function:: isValid()


    isValid() - this method will determine if the current user IP matches the
    IP we stored when we initialized this variable.

    :rtype: bool 



setUseProxy
-----------

.. function:: setUseProxy()


    Changes proxy handling setting.
    
    This must be static method, since validators are recovered automatically
    at session read, so this is the only way to switch setting.

    :param bool: Whether to check also proxied IP addresses.

    :rtype: void 



getUseProxy
-----------

.. function:: getUseProxy()


    Checks proxy handling setting.

    :rtype: bool Current setting value.



setTrustedProxies
-----------------

.. function:: setTrustedProxies()


    Set list of trusted proxy addresses

    :param array: 

    :rtype: void 



setProxyHeader
--------------

.. function:: setProxyHeader()


    Set the header to introspect for proxy IPs

    :param string: 

    :rtype: void 



getIpAddress
------------

.. function:: getIpAddress()


    Returns client IP address.

    :rtype: string IP address.



getData
-------

.. function:: getData()


    Retrieve token for validating call

    :rtype: string 



getName
-------

.. function:: getName()


    Return validator name

    :rtype: string 



