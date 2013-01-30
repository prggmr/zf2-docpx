.. I18n/View/Helper/DateFormat.php generated using docpx on 01/30/13 03:32am


Zend\\I18n\\View\\Helper\\DateFormat
====================================

View helper for formatting dates.

Methods
+++++++

setTimezone
-----------

.. function:: setTimezone()


    Set timezone to use instead of the default.

    :param string: 

    :rtype: DateFormat 



getTimezone
-----------

.. function:: getTimezone()


    Get the timezone to use.

    :rtype: string|null 



setlocale
---------

.. function:: setlocale()


    Set locale to use instead of the default.

    :param string: 

    :rtype: DateFormat 



getlocale
---------

.. function:: getlocale()


    Get the locale to use.

    :rtype: string|null 



__invoke
--------

.. function:: __invoke()


    Format a date.

    :param DateTime|integer|array: 
    :param int: 
    :param int: 
    :param string: 
    :param string|null: 

    :rtype: string 



