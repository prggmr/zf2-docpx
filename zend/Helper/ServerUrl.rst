.. View/Helper/ServerUrl.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\ServerUrl
=============================

Helper for returning the current server URL (optionally with request URI)

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    View helper entry point:
    Returns the current host's URL like http://site.com

    :param string|bool: [optional] if true, the request URI
                                    found in $_SERVER will be appended
                                    as a path. If a string is given, it
                                    will be appended as a path. Default
                                    is to not append any path.

    :rtype: string server url



getHost
+++++++

.. function:: getHost()


    Returns host

    :rtype: string host



setHost
+++++++

.. function:: setHost()


    Sets host

    :param string: new host

    :rtype: \Zend\View\Helper\ServerUrl fluent interface, returns self



getScheme
+++++++++

.. function:: getScheme()


    Returns scheme (typically http or https)

    :rtype: string scheme (typically http or https)



setScheme
+++++++++

.. function:: setScheme()


    Sets scheme (typically http or https)

    :param string: new scheme (typically http or https)

    :rtype: \Zend\View\Helper\ServerUrl fluent interface, returns self



getPort
+++++++

.. function:: getPort()


    Retrieve the server port

    :rtype: int|null 



setPort
+++++++

.. function:: setPort()


    Set server port

    :param int: 

    :rtype: ServerUrl 



setUseProxy
+++++++++++

.. function:: setUseProxy()


    Set flag indicating whether or not to query proxy servers

    :param bool: 

    :rtype: ServerUrl 



detectHost
++++++++++

.. function:: detectHost()


    Detect the host based on headers

    :rtype: void 



setHostFromProxy
++++++++++++++++

.. function:: setHostFromProxy()


    Detect if a proxy is in use, and, if so, set the host based on it

    :rtype: bool 



detectScheme
++++++++++++

.. function:: detectScheme()


    Detect the scheme

    :rtype: null 



detectPort
++++++++++

.. function:: detectPort()


    Detect the port

    :rtype: null 



setSchemeFromProxy
++++++++++++++++++

.. function:: setSchemeFromProxy()


    Set the current scheme based on detected proxy headers

    :rtype: bool 



setPortFromProxy
++++++++++++++++

.. function:: setPortFromProxy()


    Set port based on detected proxy headers

    :rtype: bool 



