.. Config/Processor/Token.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Config\\Processor\\Token
==============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Token Processor walks through a Config structure and replaces all
    occurrences of tokens with supplied values.

    :param array|Config|Traversable: Associative array of TOKEN => value
                                            to replace it with
    :param string: 
    :param string: 

    :internal : 

    :rtype: Token 



setPrefix
+++++++++

.. function:: setPrefix()


    @param  string $prefix

    :rtype: Token 



getPrefix
+++++++++

.. function:: getPrefix()


    @return string



setSuffix
+++++++++

.. function:: setSuffix()


    @param  string $suffix

    :rtype: Token 



getSuffix
+++++++++

.. function:: getSuffix()


    @return string



setTokens
+++++++++

.. function:: setTokens()


    Set token registry.

    :param array|Config|Traversable: Associative array of TOKEN => value
                                           to replace it with

    :rtype: Token 

    :throws: Exception\InvalidArgumentException 



getTokens
+++++++++

.. function:: getTokens()


    Get current token registry.

    :rtype: array 



addToken
++++++++

.. function:: addToken()


    Add new token.

    :param string: 
    :param mixed: 

    :rtype: Token 

    :throws: Exception\InvalidArgumentException 



setToken
++++++++

.. function:: setToken()


    Add new token.

    :param string: 
    :param mixed: 

    :rtype: Token 



buildMap
++++++++

.. function:: buildMap()


    Build replacement map



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

    :param $value: 

    :rtype: mixed 



