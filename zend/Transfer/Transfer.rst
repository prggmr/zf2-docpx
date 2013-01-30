.. File/Transfer/Transfer.php generated using docpx on 01/30/13 03:32am


Zend\\File\\Transfer\\Transfer
==============================

Base class for all protocols supporting file transfers

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Creates a file processing handler

    :param string: Adapter to use
    :param bool: OPTIONAL False means Download, true means upload
    :param array: OPTIONAL Options to set for this adapter

    :throws Exception\InvalidArgumentException: 



setAdapter
----------

.. function:: setAdapter()


    Sets a new adapter

    :param string: Adapter to use
    :param bool: OPTIONAL False means Download, true means upload
    :param array: OPTIONAL Options to set for this adapter

    :rtype: Transfer 

    :throws: Exception\InvalidArgumentException 



getAdapter
----------

.. function:: getAdapter()


    Returns all set adapters

    :param bool: On null, all directions are returned
                          On false, download direction is returned
                          On true, upload direction is returned

    :rtype: array|Adapter\AbstractAdapter 



__call
------

.. function:: __call()


    Calls all methods from the adapter

    :param string: Method to call
    :param array: Options for this method

    :throws Exception\BadMethodCallException: if unknown method

    :rtype: mixed 



