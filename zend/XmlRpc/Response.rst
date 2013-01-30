.. XmlRpc/Response.php generated using docpx on 01/30/13 03:32am


Zend\\XmlRpc\\Response
======================

XmlRpc Response

Container for accessing an XMLRPC return value and creating the XML response.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Can optionally pass in the return value and type hinting; otherwise, the
    return value can be set via {@link setReturnValue()}.

    :param mixed: 
    :param string: 



setEncoding
-----------

.. function:: setEncoding()


    Set encoding to use in response

    :param string: 

    :rtype: \Zend\XmlRpc\Response 



getEncoding
-----------

.. function:: getEncoding()


    Retrieve current response encoding

    :rtype: string 



setReturnValue
--------------

.. function:: setReturnValue()


    Set the return value
    
    Sets the return value, with optional type hinting if provided.

    :param mixed: 
    :param string: 

    :rtype: void 



getReturnValue
--------------

.. function:: getReturnValue()


    Retrieve the return value

    :rtype: mixed 



_getXmlRpcReturn
----------------

.. function:: _getXmlRpcReturn()


    Retrieve the XMLRPC value for the return value

    :rtype: \Zend\XmlRpc\AbstractValue 



isFault
-------

.. function:: isFault()


    Is the response a fault response?

    :rtype: bool 



getFault
--------

.. function:: getFault()


    Returns the fault, if any.

    :rtype: null|\Zend\XmlRpc\Fault 



loadXml
-------

.. function:: loadXml()


    Load a response from an XML response
    
    Attempts to load a response from an XMLRPC response, autodetecting if it
    is a fault response.

    :param string: 

    :throws Exception\ValueException: if invalid XML

    :rtype: bool True if a valid XMLRPC response, false if a fault
response or invalid input



saveXml
-------

.. function:: saveXml()


    Return response as XML

    :rtype: string 



__toString
----------

.. function:: __toString()


    Return XML response

    :rtype: string 



