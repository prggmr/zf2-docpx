.. Log/Processor/RequestId.php generated using docpx on 01/30/13 03:32am


Zend\\Log\\Processor\\RequestId
===============================

Methods
+++++++

process
-------

.. function:: process()


    Adds a identifier for the request to the log.
    
    This enables to filter the log for messages belonging to a specific request

    :param array: event data

    :rtype: array event data



getIdentifier
-------------

.. function:: getIdentifier()


    Provide unique identifier for a request

    :rtype: string 



