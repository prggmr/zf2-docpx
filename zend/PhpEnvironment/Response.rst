.. Http/PhpEnvironment/Response.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\PhpEnvironment\\Response
====================================

HTTP Response for current PHP environment

Methods
+++++++

getVersion
----------

.. function:: getVersion()


    Return the HTTP version for this response

    :rtype: string 

    :see:  



detectVersion
-------------

.. function:: detectVersion()


    Detect the current used protocol version.
    If detection failed it falls back to version 1.0.

    :rtype: string 



headersSent
-----------

.. function:: headersSent()


    @return bool



contentSent
-----------

.. function:: contentSent()


    @return bool



sendHeaders
-----------

.. function:: sendHeaders()


    Send HTTP headers

    :rtype: Response 



sendContent
-----------

.. function:: sendContent()


    Send content

    :rtype: Response 



send
----

.. function:: send()


    Send HTTP response

    :rtype: Response 



