.. Json/Server/Response.php generated using docpx on 01/30/13 03:32am


Zend\\Json\\Server\\Response
============================

Methods
+++++++

setOptions
----------

.. function:: setOptions()


    Set response state

    :param array: 

    :rtype: Response 



loadJson
--------

.. function:: loadJson()


    Set response state based on JSON

    :param string: 

    :rtype: void 



setResult
---------

.. function:: setResult()


    Set result

    :param mixed: 

    :rtype: Response 



getResult
---------

.. function:: getResult()


    Get result

    :rtype: mixed 



setError
--------

.. function:: setError()


    Set result error

    :param mixed: 

    :rtype: Response 



getError
--------

.. function:: getError()


    Get response error

    :rtype: null|Error 



isError
-------

.. function:: isError()


    Is the response an error?

    :rtype: bool 



setId
-----

.. function:: setId()


    Set request ID

    :param mixed: 

    :rtype: Response 



getId
-----

.. function:: getId()


    Get request ID

    :rtype: mixed 



setVersion
----------

.. function:: setVersion()


    Set JSON-RPC version

    :param string: 

    :rtype: Response 



getVersion
----------

.. function:: getVersion()


    Retrieve JSON-RPC version

    :rtype: string 



toJson
------

.. function:: toJson()


    Cast to JSON

    :rtype: string 



getArgs
-------

.. function:: getArgs()


    Retrieve args

    :rtype: mixed 



setArgs
-------

.. function:: setArgs()


    Set args

    :param mixed: 

    :rtype: self 



setServiceMap
-------------

.. function:: setServiceMap()


    Set service map object

    :param Smd: 

    :rtype: Response 



getServiceMap
-------------

.. function:: getServiceMap()


    Retrieve service map

    :rtype: Smd|null 



__toString
----------

.. function:: __toString()


    Cast to string (JSON)

    :rtype: string 



