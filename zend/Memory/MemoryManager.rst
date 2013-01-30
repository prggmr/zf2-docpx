.. Memory/MemoryManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Memory\\MemoryManager
===========================

Memory manager

This class encapsulates memory menagement operations, when PHP works
in limited memory mode.

Methods
-------

_generateMemManagerId
+++++++++++++++++++++

.. function:: _generateMemManagerId()


    This function is intended to generate unique id, used by memory manager



__construct
+++++++++++

.. function:: __construct()


    Memory manager constructor
    
    If cache is not specified, then memory objects are never swapped

    :param CacheStorage: 



__destruct
++++++++++

.. function:: __destruct()


    Object destructor
    
    Clean up cache storage



setMemoryLimit
++++++++++++++

.. function:: setMemoryLimit()


    Set memory grow limit

    :param integer: 



getMemoryLimit
++++++++++++++

.. function:: getMemoryLimit()


    Get memory grow limit

    :rtype: integer 



setMinSize
++++++++++

.. function:: setMinSize()


    Set minimum size of values, which may be swapped

    :param integer: 



getMinSize
++++++++++

.. function:: getMinSize()


    Get minimum size of values, which may be swapped

    :rtype: integer 



create
++++++

.. function:: create()


    Create new Zend_Memory value container

    :param string: 

    :rtype: Container\ContainerInterface 

    :throws: Exception\ExceptionInterface 



createLocked
++++++++++++

.. function:: createLocked()


    Create new Zend_Memory value container, which has value always
    locked in memory

    :param string: 

    :rtype: Container\ContainerInterface 

    :throws: Exception\ExceptionInterface 



_create
+++++++

.. function:: _create()


    Create new Zend_Memory object

    :param string: 
    :param bool: 

    :rtype: \Zend\Memory\Container\ContainerInterface 

    :throws: \Zend\Memory\Exception\ExceptionInterface 



unlink
++++++

.. function:: unlink()


    Unlink value container from memory manager
    
    Used by Memory container destroy() method


    :param Container\Movable: 
    :param integer: 

    :rtype: null 



processUpdate
+++++++++++++

.. function:: processUpdate()


    Process value update


    :param \Zend\Memory\Container\Movable: 
    :param integer: 



_commit
+++++++

.. function:: _commit()


    Commit modified object and put it back to the loaded objects list



_swapCheck
++++++++++

.. function:: _swapCheck()


    Check and swap objects if necessary




_swap
+++++

.. function:: _swap()


    Swap object data to disk
    Actually swaps data or only unloads it from memory,
    if object is not changed since last swap

    :param \Zend\Memory\Container\Movable: 
    :param integer: 



load
++++

.. function:: load()


    Load value from swap file.


    :param \Zend\Memory\Container\Movable: 
    :param integer: 



