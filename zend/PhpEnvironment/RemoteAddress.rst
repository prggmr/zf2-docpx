.. Http/PhpEnvironment/RemoteAddress.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\PhpEnvironment\\RemoteAddress
=========================================

Functionality for determining client IP address.

Methods
+++++++

setUseProxy
-----------

.. function:: setUseProxy()


    Changes proxy handling setting.
    
    This must be static method, since validators are recovered automatically
    at session read, so this is the only way to switch setting.

    :param bool: Whether to check also proxied IP addresses.

    :rtype: RemoteAddress 



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

    :rtype: RemoteAddress 



setProxyHeader
--------------

.. function:: setProxyHeader()


    Set the header to introspect for proxy IPs

    :param string: 

    :rtype: RemoteAddress 



getIpAddress
------------

.. function:: getIpAddress()


    Returns client IP address.

    :rtype: string IP address.



getIpAddressFromProxy
---------------------

.. function:: getIpAddressFromProxy()


    Attempt to get the IP address for a proxied client

    :rtype: false|string 



normalizeProxyHeader
--------------------

.. function:: normalizeProxyHeader()


    Normalize a header string
    
    Normalizes a header string to a format that is compatible with
    $_SERVER

    :param string: 

    :rtype: string 



