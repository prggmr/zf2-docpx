.. /Http/AbstractMessage.php generated using docpx on 01/15/13 05:29pm


Zend\\Http\\AbstractMessage
***************************


HTTP standard message (Request/Response)



Methods
=======

setVersion
----------

.. function:: setVersion($version)


    Set the HTTP version for this object, one of 1.0 or 1.1
    (AbstractMessage::VERSION_10, AbstractMessage::VERSION_11)

    :param string $version: (Must be 1.0 or 1.1)

    :rtype: AbstractMessage 

    :throws: Exception\InvalidArgumentException 



getVersion
----------

.. function:: getVersion()


    Return the HTTP version for this request

    :rtype: string 



setHeaders
----------

.. function:: setHeaders($headers)


    Provide an alternate Parameter Container implementation for headers in this object,
    (this is NOT the primary API for value setting, for that see getHeaders())


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param Headers $headers: 

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
---------

VERSION_10
++++++++++

VERSION_11
++++++++++

