.. Json/Server/Error.php generated using docpx on 01/30/13 03:32am


Zend\\Json\\Server\\Error
=========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param string: 
    :param int: 
    :param mixed: 



setCode
-------

.. function:: setCode()


    Set error code

    :param int: 

    :rtype: \Zend\Json\Server\Error 



getCode
-------

.. function:: getCode()


    Get error code

    :rtype: int|null 



setMessage
----------

.. function:: setMessage()


    Set error message

    :param string: 

    :rtype: \Zend\Json\Server\Error 



getMessage
----------

.. function:: getMessage()


    Get error message

    :rtype: string 



setData
-------

.. function:: setData()


    Set error data

    :param mixed: 

    :rtype: \Zend\Json\Server\Error 



getData
-------

.. function:: getData()


    Get error data

    :rtype: mixed 



toArray
-------

.. function:: toArray()


    Cast error to array

    :rtype: array 



toJson
------

.. function:: toJson()


    Cast error to JSON

    :rtype: string 



__toString
----------

.. function:: __toString()


    Cast to string (JSON)

    :rtype: string 





Constants
+++++++++

ERROR_PARSE
===========

ERROR_INVALID_REQUEST
=====================

ERROR_INVALID_METHOD
====================

ERROR_INVALID_PARAMS
====================

ERROR_INTERNAL
==============

ERROR_OTHER
===========

