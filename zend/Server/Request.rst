.. Json/Server/Request.php generated using docpx on 01/30/13 03:32am


Zend\\Json\\Server\\Request
===========================

@todo       Revised method regex to allow NS; however, should SMD be revised to strip PHP NS instead when attaching functions?

Methods
+++++++

setOptions
----------

.. function:: setOptions()


    Set request state

    :param array: 

    :rtype: \Zend\Json\Server\Request 



addParam
--------

.. function:: addParam()


    Add a parameter to the request

    :param mixed: 
    :param string: 

    :rtype: \Zend\Json\Server\Request 



addParams
---------

.. function:: addParams()


    Add many params

    :param array: 

    :rtype: \Zend\Json\Server\Request 



setParams
---------

.. function:: setParams()


    Overwrite params

    :param array: 

    :rtype: \Zend\Json\Server\Request 



getParam
--------

.. function:: getParam()


    Retrieve param by index or key

    :param int|string: 

    :rtype: mixed|null Null when not found



getParams
---------

.. function:: getParams()


    Retrieve parameters

    :rtype: array 



setMethod
---------

.. function:: setMethod()


    Set request method

    :param string: 

    :rtype: \Zend\Json\Server\Request 



getMethod
---------

.. function:: getMethod()


    Get request method name

    :rtype: string 



isMethodError
-------------

.. function:: isMethodError()


    Was a bad method provided?

    :rtype: bool 



setId
-----

.. function:: setId()


    Set request identifier

    :param mixed: 

    :rtype: \Zend\Json\Server\Request 



getId
-----

.. function:: getId()


    Retrieve request identifier

    :rtype: mixed 



setVersion
----------

.. function:: setVersion()


    Set JSON-RPC version

    :param string: 

    :rtype: \Zend\Json\Server\Request 



getVersion
----------

.. function:: getVersion()


    Retrieve JSON-RPC version

    :rtype: string 



loadJson
--------

.. function:: loadJson()


    Set request state based on JSON

    :param string: 

    :rtype: void 



toJson
------

.. function:: toJson()


    Cast request to JSON

    :rtype: string 



__toString
----------

.. function:: __toString()


    Cast request to string (JSON)

    :rtype: string 



