.. /Config/Processor/Filter.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Processor\\Filter
*******************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($filter)


    Filter all config values using the supplied Zend\Filter

    :param ZendFilter $filter: 



setFilter
---------

.. function:: setFilter($filter)


    @param  ZendFilter $filter

    :rtype: Filter 



getFilter
---------

.. function:: getFilter()


    @return ZendFilter



process
-------

.. function:: process($config)


    Process

    :param Config $config: 

    :rtype: Config 

    :throws: Exception\InvalidArgumentException 



processValue
------------

.. function:: processValue($value)


    Process a single value

    :param mixed $value: 

    :rtype: mixed 





