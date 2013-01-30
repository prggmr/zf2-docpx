.. Json/Server/Smd/Service.php generated using docpx on 01/30/13 03:32am


Zend\\Json\\Server\\Smd\\Service
================================

Create Service Mapping Description for a method

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param string|array: 

    :throws InvalidArgumentException: if no name provided



setOptions
----------

.. function:: setOptions()


    Set object state

    :param array: 

    :rtype: Service 



setName
-------

.. function:: setName()


    Set service name

    :param string: 

    :rtype: Service 

    :throws: InvalidArgumentException 



getName
-------

.. function:: getName()


    Retrieve name

    :rtype: string 



setTransport
------------

.. function:: setTransport()


    Set Transport
    
    Currently limited to POST

    :param string: 

    :throws InvalidArgumentException: 

    :rtype: Service 



getTransport
------------

.. function:: getTransport()


    Get transport

    :rtype: string 



setTarget
---------

.. function:: setTarget()


    Set service target

    :param string: 

    :rtype: Service 



getTarget
---------

.. function:: getTarget()


    Get service target

    :rtype: string 



setEnvelope
-----------

.. function:: setEnvelope()


    Set envelope type

    :param string: 

    :throws InvalidArgumentException: 

    :rtype: Service 



getEnvelope
-----------

.. function:: getEnvelope()


    Get envelope type

    :rtype: string 



addParam
--------

.. function:: addParam()


    Add a parameter to the service

    :param string|array: 
    :param array: 
    :param int|null: 

    :throws InvalidArgumentException: 

    :rtype: Service 



addParams
---------

.. function:: addParams()


    Add params
    
    Each param should be an array, and should include the key 'type'.

    :param array: 

    :rtype: Service 



setParams
---------

.. function:: setParams()


    Overwrite all parameters

    :param array: 

    :rtype: Service 



getParams
---------

.. function:: getParams()


    Get all parameters
    
    Returns all params in specified order.

    :rtype: array 



setReturn
---------

.. function:: setReturn()


    Set return type

    :param string|array: 

    :throws InvalidArgumentException: 

    :rtype: Service 



getReturn
---------

.. function:: getReturn()


    Get return type

    :rtype: string|array 



toArray
-------

.. function:: toArray()


    Cast service description to array

    :rtype: array 



toJson
------

.. function:: toJson()


    Return JSON encoding of service

    :rtype: string 



__toString
----------

.. function:: __toString()


    Cast to string

    :rtype: string 



_validateParamType
------------------

.. function:: _validateParamType()


    Validate parameter type

    :param string: 
    :param bool: 

    :rtype: string 

    :throws: InvalidArgumentException 



