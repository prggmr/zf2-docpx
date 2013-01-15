.. /Cache/Storage/Adapter/Dba.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\Dba
**********************************



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param null|array|Traversable|DbaOptions $options: 

    :throws Exception\ExceptionInterface: 



__destruct
----------

.. function:: __destruct()


    Destructor
    
    Closes an open dba resource


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: void 



setOptions
----------

.. function:: setOptions($options)


    Set options.

    :param array|Traversable|DbaOptions $options: 

    :rtype: Apc 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: g g



getOptions
----------

.. function:: getOptions()


    Get options.

    :rtype: DbaOptions 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s



getTotalSpace
-------------

.. function:: getTotalSpace()


    Get total space in bytes

    :rtype: int|float 



$event
------

.. function:: $event()



getAvailableSpace
-----------------

.. function:: getAvailableSpace()


    Get available space in bytes

    :rtype: int|float 



flush
-----

.. function:: flush()


    Flush the whole storage

    :rtype: bool 



clearByNamespace
----------------

.. function:: clearByNamespace($namespace)


    Remove items by given namespace

    :param string $namespace: 

    :rtype: bool 



clearByPrefix
-------------

.. function:: clearByPrefix($prefix)


    Remove items matching given prefix

    :param string $prefix: 

    :rtype: bool 



getIterator
-----------

.. function:: getIterator()


    Get the storage iterator

    :rtype: ApcIterator 



optimize
--------

.. function:: optimize()


    Optimize the storage

    :rtype: bool 
    :rtype: Exception\RuntimeException 



internalGetItem
---------------

.. function:: internalGetItem($normalizedKey, [$success = false, [$casToken = false]])


    Internal method to get an item.

    :param string $normalizedKey: 
    :param bool $success: 
    :param mixed $casToken: 

    :rtype: mixed Data on success, null on failure

    :throws: Exception\ExceptionInterface 



internalHasItem
---------------

.. function:: internalHasItem($normalizedKey)


    Internal method to test if an item exists.

    :param string $normalizedKey: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalSetItem
---------------

.. function:: internalSetItem($normalizedKey, $value)


    Internal method to store an item.

    :param string $normalizedKey: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalAddItem
---------------

.. function:: internalAddItem($normalizedKey, $value)


    Add an item.

    :param string $normalizedKey: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalRemoveItem
------------------

.. function:: internalRemoveItem($normalizedKey)


    Internal method to remove an item.

    :param string $normalizedKey: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalGetCapabilities
-----------------------

.. function:: internalGetCapabilities()


    Internal method to get capabilities of this adapter

    :rtype: Capabilities 



$event
------

.. function:: $event()



_open
-----

.. function:: _open()


    Open the database if not already done.

    :rtype: void 

    :throws: Exception\LogicException 
    :throws: Exception\RuntimeException 



_close
------

.. function:: _close()


    Close database file if opened

    :rtype: void 





