.. /File/Transfer/Transfer.php generated using docpx on 01/15/13 05:29pm


Zend\\File\\Transfer\\Transfer
******************************


Base class for all protocols supporting file transfers



Methods
=======

__construct
-----------

.. function:: __construct([$adapter = "Http", [$direction = false, [$options = false]]])


    Creates a file processing handler

    :param string $adapter: Adapter to use
    :param bool $direction: OPTIONAL False means Download, true means upload
    :param array $options: OPTIONAL Options to set for this adapter

    :throws Exception\InvalidArgumentException: 



setAdapter
----------

.. function:: setAdapter($adapter, [$direction = false, [$options = false]])


    Sets a new adapter

    :param string $adapter: Adapter to use
    :param bool $direction: OPTIONAL False means Download, true means upload
    :param array $options: OPTIONAL Options to set for this adapter

    :rtype: Transfer 

    :throws: Exception\InvalidArgumentException 



getAdapter
----------

.. function:: getAdapter([$direction = false])


    Returns all set adapters

    :param bool $direction: On null, all directions are returned
                          On false, download direction is returned
                          On true, upload direction is returned

    :rtype: array|Adapter\AbstractAdapter 



__call
------

.. function:: __call($method, $options)


    Calls all methods from the adapter

    :param string $method: Method to call
    :param array $options: Options for this method

    :throws Exception\BadMethodCallException: if unknown method

    :rtype: mixed 





