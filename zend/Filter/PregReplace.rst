.. Filter/PregReplace.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\PregReplace
=========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    Supported options are
        'pattern'     => matching pattern
        'replacement' => replace with this

    :param array|Traversable|string|null: 



setPattern
----------

.. function:: setPattern()


    Set the regex pattern to search for


    :param string|array: - same as the first argument of preg_replace

    :rtype: PregReplace 

    :throws: Exception\InvalidArgumentException 



getPattern
----------

.. function:: getPattern()


    Get currently set match pattern

    :rtype: string|array 



setReplacement
--------------

.. function:: setReplacement()


    Set the replacement array/string


    :param array|string: - same as the second argument of preg_replace

    :rtype: PregReplace 

    :throws: Exception\InvalidArgumentException 



getReplacement
--------------

.. function:: getReplacement()


    Get currently set replacement value

    :rtype: string|array 



filter
------

.. function:: filter()


    Perform regexp replacement as filter

    :param mixed: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



validatePattern
---------------

.. function:: validatePattern()


    Validate a pattern and ensure it does not contain the "e" modifier

    :param string: 

    :throws Exception\InvalidArgumentException: 



