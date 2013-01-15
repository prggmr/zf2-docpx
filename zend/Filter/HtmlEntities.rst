.. /Filter/HtmlEntities.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\HtmlEntities
**************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Sets filter options

    :param array|Traversable $options: 



getQuoteStyle
-------------

.. function:: getQuoteStyle()


    Returns the quoteStyle option

    :rtype: integer 



setQuoteStyle
-------------

.. function:: setQuoteStyle($quoteStyle)


    Sets the quoteStyle option

    :param integer $quoteStyle: 

    :rtype: HtmlEntities Provides a fluent interface



getEncoding
-----------

.. function:: getEncoding()


    Get encoding

    :rtype: string 



setEncoding
-----------

.. function:: setEncoding($value)


    Set encoding

    :param string $value: 

    :rtype: HtmlEntities 



getCharSet
----------

.. function:: getCharSet()


    Returns the charSet option
    
    Proxies to {@link getEncoding()}

    :rtype: string 



setCharSet
----------

.. function:: setCharSet($charSet)


    Sets the charSet option
    
    Proxies to {@link setEncoding()}

    :param string $charSet: 

    :rtype: HtmlEntities Provides a fluent interface



getDoubleQuote
--------------

.. function:: getDoubleQuote()


    Returns the doubleQuote option

    :rtype: bool 



setDoubleQuote
--------------

.. function:: setDoubleQuote($doubleQuote)


    Sets the doubleQuote option

    :param bool $doubleQuote: 

    :rtype: HtmlEntities Provides a fluent interface



filter
------

.. function:: filter($value)


    Defined by Zend\Filter\FilterInterface
    
    Returns the string $value, converting characters to their corresponding HTML entity
    equivalents where they exist

    :param string $value: 

    :throws Exception\DomainException: 

    :rtype: string 





