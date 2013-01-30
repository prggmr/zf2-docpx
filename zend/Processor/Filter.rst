.. Config/Processor/Filter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Config\\Processor\\Filter
===============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Filter all config values using the supplied Zend\Filter

    :param ZendFilter: 



setFilter
+++++++++

.. function:: setFilter()


    @param  ZendFilter $filter

    :rtype: Filter 



getFilter
+++++++++

.. function:: getFilter()


    @return ZendFilter



process
+++++++

.. function:: process()


    Process

    :param Config: 

    :rtype: Config 

    :throws: Exception\InvalidArgumentException 



processValue
++++++++++++

.. function:: processValue()


    Process a single value

    :param mixed: 

    :rtype: mixed 



