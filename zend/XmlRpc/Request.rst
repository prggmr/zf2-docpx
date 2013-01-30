.. XmlRpc/Request.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\XmlRpc\\Request
=====================

XmlRpc Request object

Encapsulates an XmlRpc request, holding the method call and all parameters.
Provides accessors for these, as well as the ability to load from XML and to
create the XML request string.

Additionally, if errors occur setting the method or parsing XML, a fault is
generated and stored in {@link $fault}; developers may check for it using
{@link isFault()} and {@link getFault()}.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new XML-RPC request

    :param string: (optional)
    :param array: (optional)



setEncoding
+++++++++++

.. function:: setEncoding()


    Set encoding to use in request

    :param string: 

    :rtype: \Zend\XmlRpc\Request 



getEncoding
+++++++++++

.. function:: getEncoding()


    Retrieve current request encoding

    :rtype: string 



setMethod
+++++++++

.. function:: setMethod()


    Set method to call

    :param string: 

    :rtype: bool Returns true on success, false if method name is invalid



getMethod
+++++++++

.. function:: getMethod()


    Retrieve call method

    :rtype: string 



addParam
++++++++

.. function:: addParam()


    Add a parameter to the parameter stack
    
    Adds a parameter to the parameter stack, associating it with the type
    $type if provided

    :param mixed: 
    :param string: Optional; type hinting

    :rtype: void 



setParams
+++++++++

.. function:: setParams()


    Set the parameters array
    
    If called with a single, array value, that array is used to set the
    parameters stack. If called with multiple values or a single non-array
    value, the arguments are used to set the parameters stack.
    
    Best is to call with array of the format, in order to allow type hinting
    when creating the XMLRPC values for each parameter:
    <code>
    $array = array(
        array(
            'value' => $value,
            'type'  => $type
        )[, ... ]
    );
    </code>


    :rtype: void 



getParams
+++++++++

.. function:: getParams()


    Retrieve the array of parameters

    :rtype: array 



getTypes
++++++++

.. function:: getTypes()


    Return parameter types

    :rtype: array 



loadXml
+++++++

.. function:: loadXml()


    Load XML and parse into request components

    :param string: 

    :throws Exception\ValueException: if invalid XML

    :rtype: bool True on success, false if an error occurred.



isFault
+++++++

.. function:: isFault()


    Does the current request contain errors and should it return a fault
    response?

    :rtype: bool 



getFault
++++++++

.. function:: getFault()


    Retrieve the fault response, if any

    :rtype: null|\Zend\XmlRpc\Fault 



_getXmlRpcParams
++++++++++++++++

.. function:: _getXmlRpcParams()


    Retrieve method parameters as XMLRPC values

    :rtype: array 



saveXml
+++++++

.. function:: saveXml()


    Create XML request

    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    Return XML request

    :rtype: string 



