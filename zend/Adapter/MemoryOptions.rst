.. Cache/Storage/Adapter/MemoryOptions.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\MemoryOptions
============================================

These are options specific to the APC adapter

Methods
-------

setMemoryLimit
++++++++++++++

.. function:: setMemoryLimit()


    Set memory limit
    
    - A number less or equal 0 will disable the memory limit
    - When a number is used, the value is measured in bytes. Shorthand notation may also be used.
    - If the used memory of PHP exceeds this limit an OutOfSpaceException
      will be thrown.


    :param string|int: 

    :rtype: MemoryOptions 



getMemoryLimit
++++++++++++++

.. function:: getMemoryLimit()


    Get memory limit
    
    If the used memory of PHP exceeds this limit an OutOfSpaceException
    will be thrown.

    :rtype: int 



normalizeMemoryLimit
++++++++++++++++++++

.. function:: normalizeMemoryLimit()


    Normalized a given value of memory limit into the number of bytes

    :param string|int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: int 



