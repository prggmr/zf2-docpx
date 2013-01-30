.. Server/Server.php generated using docpx on 01/30/13 03:32am


Zend\\Server\\addFunction
=========================

.. function:: Zend\Server\addFunction()


    Attach a function as a server method
    
    Namespacing is primarily for xmlrpc, but may be used with other
    implementations to prevent naming collisions.

    :param string: 
    :param string: 
    :param null|array: array of arguments to pass to callback at
                   dispatch.

    :rtype: void 



Zend\\Server\\setClass
======================

.. function:: Zend\Server\setClass()


    Attach a class to a server
    
    The individual implementations should probably allow passing a variable
    number of arguments in, so that developers may define custom runtime
    arguments to pass to server methods.
    
    Namespacing is primarily for xmlrpc, but could be used for other
    implementations as well.

    :param mixed: Class name or object instance to examine and attach
                     to the server.
    :param string: Optional namespace with which to prepend method
                          names in the dispatch table.
                          methods in the class will be valid callbacks.
    :param null|array: array of arguments to pass to callbacks at
                   dispatch.

    :rtype: void 



Zend\\Server\\fault
===================

.. function:: Zend\Server\fault()


    Generate a server fault

    :param mixed: 
    :param int: 

    :rtype: mixed 



Zend\\Server\\handle
====================

.. function:: Zend\Server\handle()


    Handle a request
    
    Requests may be passed in, or the server may automatically determine the
    request based on defaults. Dispatches server request to appropriate
    method and returns a response

    :param mixed: 

    :rtype: mixed 



Zend\\Server\\getFunctions
==========================

.. function:: Zend\Server\getFunctions()


    Return a server definition array
    
    Returns a server definition array as created using
    {@link Reflection}. Can be used for server introspection,
    documentation, or persistence.

    :rtype: array 



Zend\\Server\\loadFunctions
===========================

.. function:: Zend\Server\loadFunctions()


    Load server definition
    
    Used for persistence; loads a construct as returned by {@link getFunctions()}.

    :param array: 

    :rtype: void 



Zend\\Server\\setPersistence
============================

.. function:: Zend\Server\setPersistence()


    Set server persistence


    :param int: 

    :rtype: void 



Zend\\Server\\setReturnResponse
===============================

.. function:: Zend\Server\setReturnResponse()


    Sets auto-response flag for the server.
    
    To unify all servers, default behavior should be to auto-emit response.

    :param bool: 

    :rtype: Server Self instance.



Zend\\Server\\getReturnResponse
===============================

.. function:: Zend\Server\getReturnResponse()


    Returns auto-response flag of the server.

    :rtype: bool $flag Current status.



Zend\\Server\\getResponse
=========================

.. function:: Zend\Server\getResponse()


    Returns last produced response.

    :rtype: string|object Content of last response, or response object that
                      implements __toString() methods.



