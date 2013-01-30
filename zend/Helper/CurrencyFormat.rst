.. I18n/View/Helper/CurrencyFormat.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\I18n\\View\\Helper\\CurrencyFormat
========================================

View helper for formatting currency.

Methods
-------

setCurrencyCode
+++++++++++++++

.. function:: setCurrencyCode()


    The 3-letter ISO 4217 currency code indicating the currency to use.

    :param string: 

    :rtype: CurrencyFormat 



getCurrencyCode
+++++++++++++++

.. function:: getCurrencyCode()


    Get the 3-letter ISO 4217 currency code indicating the currency to use.

    :rtype: string 



setShouldShowDecimals
+++++++++++++++++++++

.. function:: setShouldShowDecimals()


    Set if the view helper should show two decimals

    :param bool: 

    :rtype: CurrencyFormat 



shouldShowDecimals
++++++++++++++++++

.. function:: shouldShowDecimals()


    Get if the view helper should show two decimals

    :rtype: bool 



setLocale
+++++++++

.. function:: setLocale()


    Set locale to use instead of the default.

    :param string: 

    :rtype: CurrencyFormat 



getLocale
+++++++++

.. function:: getLocale()


    Get the locale to use.

    :rtype: string|null 



__invoke
++++++++

.. function:: __invoke()


    Format a number.

    :param float: 
    :param string: 
    :param bool: 
    :param string: 

    :rtype: string 



