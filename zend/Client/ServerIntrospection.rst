.. XmlRpc/Client/ServerIntrospection.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\XmlRpc\\Client\\ServerIntrospection
=========================================

Wraps the XML-RPC system.* introspection methods

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param \Zend\XmlRpc\Client $client



getSignatureForEachMethod
+++++++++++++++++++++++++

.. function:: getSignatureForEachMethod()


    Returns the signature for each method on the server,
    autodetecting whether system.multicall() is supported and
    using it if so.

    :rtype: array 



getSignatureForEachMethodByMulticall
++++++++++++++++++++++++++++++++++++

.. function:: getSignatureForEachMethodByMulticall()


    Attempt to get the method signatures in one request via system.multicall().
    This is a boxcar feature of XML-RPC and is found on fewer servers.  However,
    can significantly improve performance if present.

    :param array: 

    :throws Exception\IntrospectException: 

    :rtype: array array(array(return, param, param, param...))



getSignatureForEachMethodByLooping
++++++++++++++++++++++++++++++++++

.. function:: getSignatureForEachMethodByLooping()


    Get the method signatures for every method by
    successively calling system.methodSignature

    :param array: 

    :rtype: array 



getMethodSignature
++++++++++++++++++

.. function:: getMethodSignature()


    Call system.methodSignature() for the given method

    :param array: 

    :throws Exception\IntrospectException: 

    :rtype: array array(array(return, param, param, param...))



listMethods
+++++++++++

.. function:: listMethods()


    Call system.listMethods()

    :rtype: array array(method, method, method...)



