.. /Filter/PregReplace.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\PregReplace
*************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor
    Supported options are
        'pattern'     => matching pattern
        'replacement' => replace with this

    :param array|Traversable|string|null $options: 



setPattern
----------

.. function:: setPattern($pattern)


    Set the regex pattern to search for


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string|array $pattern: - same as the first argument of preg_replace

    :rtype: PregReplace 

    :throws: Exception\InvalidArgumentException 



getPattern
----------

.. function:: getPattern()


    Get currently set match pattern

    :rtype: string|array 



setReplacement
--------------

.. function:: setReplacement($replacement)


    Set the replacement array/string


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param array|string $replacement: - same as the second argument of preg_replace

    :rtype: PregReplace 

    :throws: Exception\InvalidArgumentException 



getReplacement
--------------

.. function:: getReplacement()


    Get currently set replacement value

    :rtype: string|array 



filter
------

.. function:: filter($value)


    Perform regexp replacement as filter

    :param mixed $value: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 





