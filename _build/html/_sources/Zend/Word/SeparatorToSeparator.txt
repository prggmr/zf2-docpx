.. /Filter/Word/SeparatorToSeparator.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Word\\SeparatorToSeparator
****************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$searchSeparator = " ", [$replacementSeparator = "-"]])


    Constructor

    :param string $searchSeparator: Separator to search for
    :param string $replacementSeparator: Separator to replace with



setSearchSeparator
------------------

.. function:: setSearchSeparator($separator)


    Sets a new seperator to search for

    :param string $separator: Seperator to search for

    :rtype: SeparatorToSeparator 



getSearchSeparator
------------------

.. function:: getSearchSeparator()


    Returns the actual set separator to search for

    :rtype: string 



setReplacementSeparator
-----------------------

.. function:: setReplacementSeparator($separator)


    Sets a new separator which replaces the searched one

    :param string $separator: Separator which replaces the searched one

    :rtype: SeparatorToSeparator 



getReplacementSeparator
-----------------------

.. function:: getReplacementSeparator()


    Returns the actual set separator which replaces the searched one

    :rtype: string 



filter
------

.. function:: filter($value)


    Defined by Zend\Filter\Filter
    
    Returns the string $value, replacing the searched separators with the defined ones

    :param string $value: 

    :rtype: string 



_separatorToSeparatorFilter
---------------------------

.. function:: _separatorToSeparatorFilter($value)


    Do the real work, replaces the seperator to search for with the replacement seperator
    
    Returns the replaced string

    :param string $value: 

    :rtype: string 

    :throws: Exception\RuntimeException 





