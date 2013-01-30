.. I18n/View/Helper/NumberFormat.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\I18n\\View\\Helper\\NumberFormat
======================================

View helper for formatting dates.

Methods
-------

setFormatStyle
++++++++++++++

.. function:: setFormatStyle()


    Set format style to use instead of the default.

    :param integer: 

    :rtype: NumberFormat 



getFormatStyle
++++++++++++++

.. function:: getFormatStyle()


    Get the format style to use.

    :rtype: integer 



setFormatType
+++++++++++++

.. function:: setFormatType()


    Set format type to use instead of the default.

    :param integer: 

    :rtype: NumberFormat 



getFormatType
+++++++++++++

.. function:: getFormatType()


    Get the format type to use.

    :rtype: integer 



setLocale
+++++++++

.. function:: setLocale()


    Set locale to use instead of the default.

    :param string: 

    :rtype: NumberFormat 



getLocale
+++++++++

.. function:: getLocale()


    Get the locale to use.

    :rtype: string|null 



__invoke
++++++++

.. function:: __invoke()


    Format a number.

    :param integer|float: 
    :param integer: 
    :param integer: 
    :param string: 

    :rtype: string 



