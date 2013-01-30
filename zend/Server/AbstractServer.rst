.. Server/AbstractServer.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Server\\AbstractServer
============================

Abstract Server implementation

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Setup server description



getFunctions
++++++++++++

.. function:: getFunctions()


    Returns a list of registered methods
    
    Returns an array of method definitions.

    :rtype: Definition 



_buildCallback
++++++++++++++

.. function:: _buildCallback()


    Build callback for method signature

    :param Reflection\AbstractFunction: 

    :rtype: Method\Callback 



_buildSignature
+++++++++++++++

.. function:: _buildSignature()


    Build a method signature

    :param Reflection\AbstractFunction: 
    :param null|string|object: 

    :rtype: Method\Definition 

    :throws: Exception\RuntimeException on duplicate entry



_dispatch
+++++++++

.. function:: _dispatch()


    Dispatch method

    :param Method\Definition: 
    :param array: 

    :rtype: mixed 



_fixType
++++++++

.. function:: _fixType()


    Map PHP type to protocol type

    :param string: 

    :rtype: string 



