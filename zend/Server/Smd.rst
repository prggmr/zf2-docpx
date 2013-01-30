.. Json/Server/Smd.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Json\\Server\\Smd
=======================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Set object state via options

    :param array: 

    :rtype: Smd 



setTransport
++++++++++++

.. function:: setTransport()


    Set transport

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: \Zend\Json\Server\Smd 



getTransport
++++++++++++

.. function:: getTransport()


    Get transport

    :rtype: string 



setEnvelope
+++++++++++

.. function:: setEnvelope()


    Set envelope

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Smd 



getEnvelope
+++++++++++

.. function:: getEnvelope()


    Retrieve envelope

    :rtype: string 



setContentType
++++++++++++++

.. function:: setContentType()


    Set content type

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: \Zend\Json\Server\Smd 



getContentType
++++++++++++++

.. function:: getContentType()


    Retrieve content type

    :rtype: string 



setTarget
+++++++++

.. function:: setTarget()


    Set service target

    :param string: 

    :rtype: Smd 



getTarget
+++++++++

.. function:: getTarget()


    Retrieve service target

    :rtype: string 



setId
+++++

.. function:: setId()


    Set service ID

    :param string: 

    :rtype: Smd 



getId
+++++

.. function:: getId()


    Get service id

    :rtype: string 



setDescription
++++++++++++++

.. function:: setDescription()


    Set service description

    :param string: 

    :rtype: Smd 



getDescription
++++++++++++++

.. function:: getDescription()


    Get service description

    :rtype: string 



setDojoCompatible
+++++++++++++++++

.. function:: setDojoCompatible()


    Indicate whether or not to generate Dojo-compatible SMD

    :param bool: 

    :rtype: Smd 



isDojoCompatible
++++++++++++++++

.. function:: isDojoCompatible()


    Is this a Dojo compatible SMD?

    :rtype: bool 



addService
++++++++++

.. function:: addService()


    Add Service

    :param Smd\Service|array: 

    :throws Exception\RuntimeException: 
    :throws Exception\InvalidArgumentException: 

    :rtype: Smd 



addServices
+++++++++++

.. function:: addServices()


    Add many services

    :param array: 

    :rtype: Smd 



setServices
+++++++++++

.. function:: setServices()


    Overwrite existing services with new ones

    :param array: 

    :rtype: Smd 



getService
++++++++++

.. function:: getService()


    Get service object

    :param string: 

    :rtype: bool|Smd\Service 



getServices
+++++++++++

.. function:: getServices()


    Return services

    :rtype: array 



removeService
+++++++++++++

.. function:: removeService()


    Remove service

    :param string: 

    :rtype: bool 



toArray
+++++++

.. function:: toArray()


    Cast to array

    :rtype: array 



toDojoArray
+++++++++++

.. function:: toDojoArray()


    Export to DOJO-compatible SMD array

    :rtype: array 



toJson
++++++

.. function:: toJson()


    Cast to JSON

    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    Cast to string (JSON)

    :rtype: string 





Constants
---------

ENV_JSONRPC_1
+++++++++++++

ENV_JSONRPC_2
+++++++++++++

SMD_VERSION
+++++++++++

