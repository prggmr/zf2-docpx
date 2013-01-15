.. /Config/Processor/Token.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Processor\\Token
******************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$tokens = false, [$prefix = false, [$suffix = false]]])


    Token Processor walks through a Config structure and replaces all
    occurrences of tokens with supplied values.

    :param array|Config|Traversable $tokens: Associative array of TOKEN => value
                                            to replace it with
    :param string $prefix: 
    :param string $suffix: 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :internal p: p

    :rtype: Token 



setPrefix
---------

.. function:: setPrefix($prefix)


    @param  string $prefix

    :rtype: Token 



getPrefix
---------

.. function:: getPrefix()


    @return string



setSuffix
---------

.. function:: setSuffix($suffix)


    @param  string $suffix

    :rtype: Token 



getSuffix
---------

.. function:: getSuffix()


    @return string



setTokens
---------

.. function:: setTokens($tokens)


    Set token registry.

    :param array|Config|Traversable $tokens: Associative array of TOKEN => value
                                           to replace it with

    :rtype: Token 

    :throws: Exception\InvalidArgumentException 



getTokens
---------

.. function:: getTokens()


    Get current token registry.

    :rtype: array 



addToken
--------

.. function:: addToken($token, $value)


    Add new token.

    :param string $token: 
    :param mixed $value: 

    :rtype: Token 

    :throws: Exception\InvalidArgumentException 



setToken
--------

.. function:: setToken($token, $value)


    Add new token.

    :param string $token: 
    :param mixed $value: 

    :rtype: Token 



buildMap
--------

.. function:: buildMap()


    Build replacement map



process
-------

.. function:: process($config)


    Process

    :param Config $config: 

    :rtype: Config 

    :throws: Exception\InvalidArgumentException 



processValue
------------

.. function:: processValue($value)


    Process a single value

    :param $value: 

    :rtype: mixed 





