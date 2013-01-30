.. Filter/HtmlEntities.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\HtmlEntities
==========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets filter options

    :param array|Traversable: 



getQuoteStyle
+++++++++++++

.. function:: getQuoteStyle()


    Returns the quoteStyle option

    :rtype: integer 



setQuoteStyle
+++++++++++++

.. function:: setQuoteStyle()


    Sets the quoteStyle option

    :param integer: 

    :rtype: HtmlEntities Provides a fluent interface



getEncoding
+++++++++++

.. function:: getEncoding()


    Get encoding

    :rtype: string 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set encoding

    :param string: 

    :rtype: HtmlEntities 



getCharSet
++++++++++

.. function:: getCharSet()


    Returns the charSet option
    
    Proxies to {@link getEncoding()}

    :rtype: string 



setCharSet
++++++++++

.. function:: setCharSet()


    Sets the charSet option
    
    Proxies to {@link setEncoding()}

    :param string: 

    :rtype: HtmlEntities Provides a fluent interface



getDoubleQuote
++++++++++++++

.. function:: getDoubleQuote()


    Returns the doubleQuote option

    :rtype: bool 



setDoubleQuote
++++++++++++++

.. function:: setDoubleQuote()


    Sets the doubleQuote option

    :param bool: 

    :rtype: HtmlEntities Provides a fluent interface



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\FilterInterface
    
    Returns the string $value, converting characters to their corresponding HTML entity
    equivalents where they exist

    :param string: 

    :throws Exception\DomainException: 

    :rtype: string 



