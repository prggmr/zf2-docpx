.. XmlRpc/Fault.php generated using docpx on 01/30/13 03:32am


Zend\\XmlRpc\\Fault
===================

XMLRPC Faults

Container for XMLRPC faults, containing both a code and a message;
additionally, has methods for determining if an XML response is an XMLRPC
fault, as well as generating the XML for an XMLRPC fault response.

To allow method chaining, you may only use the {@link getInstance()} factory
to instantiate a Zend_XmlRpc_Server_Fault.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor



setCode
-------

.. function:: setCode()


    Set the fault code

    :param int: 

    :rtype: Fault 



getCode
-------

.. function:: getCode()


    Return fault code

    :rtype: int 



setMessage
----------

.. function:: setMessage()


    Retrieve fault message

    :param string: 

    :rtype: Fault 



getMessage
----------

.. function:: getMessage()


    Retrieve fault message

    :rtype: string 



setEncoding
-----------

.. function:: setEncoding()


    Set encoding to use in fault response

    :param string: 

    :rtype: Fault 



getEncoding
-----------

.. function:: getEncoding()


    Retrieve current fault encoding

    :rtype: string 



loadXml
-------

.. function:: loadXml()


    Load an XMLRPC fault from XML

    :param string: 

    :rtype: bool Returns true if successfully loaded fault response, false
if response was not a fault response

    :throws: Exception\ExceptionInterface if no or faulty XML provided, or if fault
response does not contain either code or message



isFault
-------

.. function:: isFault()


    Determine if an XML response is an XMLRPC fault

    :param string: 

    :rtype: bool 



saveXml
-------

.. function:: saveXml()


    Serialize fault to XML

    :rtype: string 



__toString
----------

.. function:: __toString()


    Return XML fault response

    :rtype: string 



