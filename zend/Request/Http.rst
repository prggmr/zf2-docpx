.. XmlRpc/Request/Http.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\XmlRpc\\Request\\Http
===========================

XmlRpc Request object -- Request via HTTP

Extends {@link Zend_XmlRpc_Request} to accept a request via HTTP. Request is
built at construction time using a raw POST; if no data is available, the
request is declared a fault.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Attempts to read from php://input to get raw POST request; if an error
    occurs in doing so, or if the XML is invalid, the request is declared a
    fault.



getRawRequest
+++++++++++++

.. function:: getRawRequest()


    Retrieve the raw XML request

    :rtype: string 



getHeaders
++++++++++

.. function:: getHeaders()


    Get headers
    
    Gets all headers as key => value pairs and returns them.

    :rtype: array 



getFullRequest
++++++++++++++

.. function:: getFullRequest()


    Retrieve the full HTTP request, including headers and XML

    :rtype: string 



