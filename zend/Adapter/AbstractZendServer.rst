.. Cache/Storage/Adapter/AbstractZendServer.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\AbstractZendServer
=================================================

Methods
-------

internalGetItem
+++++++++++++++

.. function:: internalGetItem()


    Internal method to get an item.

    :param string: 
    :param bool: 
    :param mixed: 

    :rtype: mixed Data on success, null on failure

    :throws: Exception\ExceptionInterface 



internalGetItems
++++++++++++++++

.. function:: internalGetItems()


    Internal method to get multiple items.

    :param array: 

    :rtype: array Associative array of keys and values

    :throws: Exception\ExceptionInterface 



internalHasItem
+++++++++++++++

.. function:: internalHasItem()


    Internal method to test if an item exists.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalHasItems
++++++++++++++++

.. function:: internalHasItems()


    Internal method to test multiple items.

    :param array: 

    :rtype: array Array of found keys

    :throws: Exception\ExceptionInterface 



internalGetMetadatas
++++++++++++++++++++

.. function:: internalGetMetadatas()


    Get metadata for multiple items

    :param array: 

    :rtype: array Associative array of keys and metadata

@triggers getMetadatas.pre(PreEvent)
@triggers getMetadatas.post(PostEvent)
@triggers getMetadatas.exception(ExceptionEvent)



internalSetItem
+++++++++++++++

.. function:: internalSetItem()


    Internal method to store an item.

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



zdcStore
++++++++

.. function:: zdcStore()


    Store data into Zend Data Cache (zdc)

    :param string: 
    :param mixed: 
    :param int: 

    :rtype: void 

    :throws: Exception\RuntimeException 



zdcFetch
++++++++

.. function:: zdcFetch()


    Fetch a single item from Zend Data Cache (zdc)

    :param string: 

    :rtype: mixed The stored value or FALSE if item wasn't found

    :throws: Exception\RuntimeException 



zdcFetchMulti
+++++++++++++

.. function:: zdcFetchMulti()


    Fetch multiple items from Zend Data Cache (zdc)

    :param array: 

    :rtype: array All found items

    :throws: Exception\RuntimeException 



zdcDelete
+++++++++

.. function:: zdcDelete()


    Delete data from Zend Data Cache (zdc)

    :param string: 

    :rtype: bool 

    :throws: Exception\RuntimeException 





Constants
---------

NAMESPACE_SEPARATOR
+++++++++++++++++++

The namespace separator used on Zend Data Cache functions

