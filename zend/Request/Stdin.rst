.. XmlRpc/Request/Stdin.php generated using docpx on 01/30/13 03:32am


Zend\\XmlRpc\\Request\\Stdin
============================

XmlRpc Request object -- Request via STDIN

Extends {@link Zend_XmlRpc_Request} to accept a request via STDIN. Request is
built at construction time using data from STDIN; if no data is available, the
request is declared a fault.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Attempts to read from php://stdin to get raw POST request; if an error
    occurs in doing so, or if the XML is invalid, the request is declared a
    fault.



getRawRequest
-------------

.. function:: getRawRequest()


    Retrieve the raw XML request

    :rtype: string 



