.. Filter/Word/SeparatorToSeparator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\Word\\SeparatorToSeparator
========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: Separator to search for
    :param string: Separator to replace with



setSearchSeparator
++++++++++++++++++

.. function:: setSearchSeparator()


    Sets a new seperator to search for

    :param string: Seperator to search for

    :rtype: SeparatorToSeparator 



getSearchSeparator
++++++++++++++++++

.. function:: getSearchSeparator()


    Returns the actual set separator to search for

    :rtype: string 



setReplacementSeparator
+++++++++++++++++++++++

.. function:: setReplacementSeparator()


    Sets a new separator which replaces the searched one

    :param string: Separator which replaces the searched one

    :rtype: SeparatorToSeparator 



getReplacementSeparator
+++++++++++++++++++++++

.. function:: getReplacementSeparator()


    Returns the actual set separator which replaces the searched one

    :rtype: string 



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\Filter
    
    Returns the string $value, replacing the searched separators with the defined ones

    :param string: 

    :rtype: string 



