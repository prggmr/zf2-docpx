.. /Escaper/Escaper.php generated using docpx on 01/15/13 05:29pm


Zend\\Escaper\\Escaper
**********************


Context specific methods for use in secure output escaping



Methods
=======

__construct
-----------

.. function:: __construct([$encoding = false])


    Constructor: Single parameter allows setting of global encoding for use by
    the current object. If PHP 5.4 is detected, additional ENT_SUBSTITUTE flag
    is set for htmlspecialchars() calls.

    :param string $encoding: 

    :throws Exception\InvalidArgumentException: 



getEncoding
-----------

.. function:: getEncoding()


    Return the encoding that all output/input is expected to be encoded in.

    :rtype: string 



escapeHtml
----------

.. function:: escapeHtml($string)


    Escape a string for the HTML Body context where there are very few characters
    of special meaning. Internally this will use htmlspecialchars().

    :param string $string: 

    :rtype: string 



escapeHtmlAttr
--------------

.. function:: escapeHtmlAttr($string)


    Escape a string for the HTML Attribute context. We use an extended set of characters
    to escape that are not covered by htmlspecialchars() to cover cases where an attribute
    might be unquoted or quoted illegally (e.g. backticks are valid quotes for IE).

    :param string $string: 

    :rtype: string 



escapeJs
--------

.. function:: escapeJs($string)


    Escape a string for the Javascript context. This does not use json_encode(). An extended
    set of characters are escaped beyond ECMAScript's rules for Javascript literal string
    escaping in order to prevent misinterpretation of Javascript as HTML leading to the
    injection of special characters and entities. The escaping used should be tolerant
    of cases where HTML escaping was not applied on top of Javascript escaping correctly.
    Backslash escaping is not used as it still leaves the escaped character as-is and so
    is not useful in a HTML context.

    :param string $string: 

    :rtype: string 



escapeUrl
---------

.. function:: escapeUrl($string)


    Escape a string for the URI or Parameter contexts. This should not be used to escape
    an entire URI - only a subcomponent being inserted. The function is a simple proxy
    to rawurlencode() which now implements RFC 3986 since PHP 5.3 completely.

    :param string $string: 

    :rtype: string 



escapeCss
---------

.. function:: escapeCss($string)


    Escape a string for the CSS context. CSS escaping can be applied to any string being
    inserted into CSS and escapes everything except alphanumerics.

    :param string $string: 

    :rtype: string 



htmlAttrMatcher
---------------

.. function:: htmlAttrMatcher($matches)


    Callback function for preg_replace_callback that applies HTML Attribute
    escaping to all matches.

    :param array $matches: 

    :rtype: string 



jsMatcher
---------

.. function:: jsMatcher($matches)


    Callback function for preg_replace_callback that applies Javascript
    escaping to all matches.

    :param array $matches: 

    :rtype: string 



cssMatcher
----------

.. function:: cssMatcher($matches)


    Callback function for preg_replace_callback that applies CSS
    escaping to all matches.

    :param array $matches: 

    :rtype: string 



toUtf8
------

.. function:: toUtf8($string)


    Converts a string to UTF-8 from the base encoding. The base encoding is set via this
    class' constructor.

    :param string $string: 

    :throws Exception\RuntimeException: 

    :rtype: string 



fromUtf8
--------

.. function:: fromUtf8($string)


    Converts a string from UTF-8 to the base encoding. The base encoding is set via this
    class' constructor.

    :param string $string: 

    :rtype: string 



isUtf8
------

.. function:: isUtf8($string)


    Checks if a given string appears to be valid UTF-8 or not.

    :param string $string: 

    :rtype: bool 



convertEncoding
---------------

.. function:: convertEncoding($string, $to, $from)


    Encoding conversion helper which wraps iconv and mbstring where they exist or throws
    and exception where neither is available.

    :param string $string: 
    :param string $to: 
    :param array|string $from: 

    :throws Exception\RuntimeException: 

    :rtype: string 




