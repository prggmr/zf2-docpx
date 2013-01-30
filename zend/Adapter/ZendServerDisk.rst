.. Cache/Storage/Adapter/ZendServerDisk.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\ZendServerDisk
=============================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array|\Traversable|AdapterOptions: 

    :throws Exception\ExtensionNotLoadedException: 



flush
+++++

.. function:: flush()


    Flush the whole storage

    :rtype: bool 



clearByNamespace
++++++++++++++++

.. function:: clearByNamespace()


    Remove items of given namespace

    :param string: 

    :rtype: bool 



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



zdcStore
++++++++

.. function:: zdcStore()


    Store data into Zend Data Disk Cache

    :param string: 
    :param mixed: 
    :param int: 

    :rtype: void 

    :throws: Exception\RuntimeException 



zdcFetch
++++++++

.. function:: zdcFetch()


    Fetch a single item from Zend Data Disk Cache

    :param string: 

    :rtype: mixed The stored value or FALSE if item wasn't found

    :throws: Exception\RuntimeException 



zdcFetchMulti
+++++++++++++

.. function:: zdcFetchMulti()


    Fetch multiple items from Zend Data Disk Cache

    :param array: 

    :rtype: array All found items

    :throws: Exception\RuntimeException 



zdcDelete
+++++++++

.. function:: zdcDelete()


    Delete data from Zend Data Disk Cache

    :param string: 

    :rtype: bool 

    :throws: Exception\RuntimeException 



