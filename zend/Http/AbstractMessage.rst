.. Http/AbstractMessage.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\AbstractMessage
===========================

HTTP standard message (Request/Response)

Methods
+++++++

setVersion
----------

.. function:: setVersion()


    Set the HTTP version for this object, one of 1.0 or 1.1
    (AbstractMessage::VERSION_10, AbstractMessage::VERSION_11)

    :param string: (Must be 1.0 or 1.1)

    :rtype: AbstractMessage 

    :throws: Exception\InvalidArgumentException 



getVersion
----------

.. function:: getVersion()


    Return the HTTP version for this request

    :rtype: string 



setHeaders
----------

.. function:: setHeaders()


    Provide an alternate Parameter Container implementation for headers in this object,
    (this is NOT the primary API for value setting, for that see getHeaders())


    :param Headers: 

    :rtype: AbstractMessage 



getHeaders
----------

.. function:: getHeaders()


    Return the header container responsible for headers

    :rtype: Headers 



__toString
----------

.. function:: __toString()


    Allow PHP casting of this object

    :rtype: string 





Constants
+++++++++

VERSION_10
==========

VERSION_11
==========

