.. /Cache/Storage/Adapter/MemoryOptions.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\MemoryOptions
********************************************


These are options specific to the APC adapter



Methods
=======

setMemoryLimit
--------------

.. function:: setMemoryLimit($memoryLimit)


    Set memory limit
    
    - A number less or equal 0 will disable the memory limit
    - When a number is used, the value is measured in bytes. Shorthand notation may also be used.
    - If the used memory of PHP exceeds this limit an OutOfSpaceException
      will be thrown.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string|int $memoryLimit: 

    :rtype: MemoryOptions 



getMemoryLimit
--------------

.. function:: getMemoryLimit()


    Get memory limit
    
    If the used memory of PHP exceeds this limit an OutOfSpaceException
    will be thrown.

    :rtype: int 



normalizeMemoryLimit
--------------------

.. function:: normalizeMemoryLimit($value)


    Normalized a given value of memory limit into the number of bytes

    :param string|int $value: 

    :throws Exception\InvalidArgumentException: 

    :rtype: int 





