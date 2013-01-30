.. Cache/Storage/Adapter/Dba.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\Dba
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array|Traversable|DbaOptions: 

    :throws Exception\ExceptionInterface: 



__destruct
++++++++++

.. function:: __destruct()


    Destructor
    
    Closes an open dba resource


    :rtype: void 



setOptions
++++++++++

.. function:: setOptions()


    Set options.

    :param array|Traversable|DbaOptions: 

    :rtype: Apc 

    :see:  



getOptions
++++++++++

.. function:: getOptions()


    Get options.

    :rtype: DbaOptions 

    :see:  



getTotalSpace
+++++++++++++

.. function:: getTotalSpace()


    Get total space in bytes

    :rtype: int|float 



getAvailableSpace
+++++++++++++++++

.. function:: getAvailableSpace()


    Get available space in bytes

    :rtype: int|float 



flush
+++++

.. function:: flush()


    Flush the whole storage

    :rtype: bool 



clearByNamespace
++++++++++++++++

.. function:: clearByNamespace()


    Remove items by given namespace

    :param string: 

    :rtype: bool 



clearByPrefix
+++++++++++++

.. function:: clearByPrefix()


    Remove items matching given prefix

    :param string: 

    :rtype: bool 



getIterator
+++++++++++

.. function:: getIterator()


    Get the storage iterator

    :rtype: ApcIterator 



optimize
++++++++

.. function:: optimize()


    Optimize the storage

    :rtype: bool 
    :rtype: Exception\RuntimeException 



internalGetItem
+++++++++++++++

.. function:: internalGetItem()


    Internal method to get an item.

    :param string: 
    :param bool: 
    :param mixed: 

    :rtype: mixed Data on success, null on failure

    :throws: Exception\ExceptionInterface 



internalHasItem
+++++++++++++++

.. function:: internalHasItem()


    Internal method to test if an item exists.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalSetItem
+++++++++++++++

.. function:: internalSetItem()


    Internal method to store an item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalAddItem
+++++++++++++++

.. function:: internalAddItem()


    Add an item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalRemoveItem
++++++++++++++++++

.. function:: internalRemoveItem()


    Internal method to remove an item.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalGetCapabilities
+++++++++++++++++++++++

.. function:: internalGetCapabilities()


    Internal method to get capabilities of this adapter

    :rtype: Capabilities 



_open
+++++

.. function:: _open()


    Open the database if not already done.

    :rtype: void 

    :throws: Exception\LogicException 
    :throws: Exception\RuntimeException 



_close
++++++

.. function:: _close()


    Close database file if opened

    :rtype: void 



