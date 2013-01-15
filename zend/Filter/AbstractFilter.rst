.. /Filter/AbstractFilter.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\AbstractFilter
****************************


@category   Zend



Methods
=======

hasPcreUnicodeSupport
---------------------

.. function:: hasPcreUnicodeSupport()


    @return bool



setOptions
----------

.. function:: setOptions($options)


    @param  array|Traversable $options

    :rtype: AbstractFilter 

    :throws: Exception\InvalidArgumentException 



getOptions
----------

.. function:: getOptions()


    Retrieve options representing object state

    :rtype: array 



__invoke
--------

.. function:: __invoke($value)


    Invoke filter as a command
    
    Proxies to {@link filter()}

    :param mixed $value: 

    :throws Exception\ExceptionInterface: If filtering $value is impossible

    :rtype: mixed 



isOptions
---------

.. function:: isOptions($options)


    @param  mixed $options

    :rtype: bool 





