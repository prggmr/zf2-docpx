.. Paginator/Paginator.php generated using docpx on 01/30/13 03:32am


Zend\\Paginator\\Paginator
==========================

Methods
+++++++

setGlobalConfig
---------------

.. function:: setGlobalConfig()


    Set a global config

    :param array|\Traversable: 

    :throws Exception\InvalidArgumentException: 



getDefaultScrollingStyle
------------------------

.. function:: getDefaultScrollingStyle()


    Returns the default scrolling style.

    :rtype: string 



getDefaultItemCountPerPage
--------------------------

.. function:: getDefaultItemCountPerPage()


    Get the default item count per page

    :rtype: int 



setDefaultItemCountPerPage
--------------------------

.. function:: setDefaultItemCountPerPage()


    Set the default item count per page

    :param int: 



setCache
--------

.. function:: setCache()


    Sets a cache object

    :param CacheStorage: 



setDefaultScrollingStyle
------------------------

.. function:: setDefaultScrollingStyle()


    Sets the default scrolling style.

    :param string: 



setScrollingStylePluginManager
------------------------------

.. function:: setScrollingStylePluginManager()



getScrollingStylePluginManager
------------------------------

.. function:: getScrollingStylePluginManager()


    Returns the scrolling style manager.  If it doesn't exist it's
    created.

    :rtype: ScrollingStylePluginManager 



__construct
-----------

.. function:: __construct()


    Constructor.

    :param AdapterInterface|AdapterAggregateInterface: 

    :throws Exception\InvalidArgumentException: 



__toString
----------

.. function:: __toString()


    Serializes the object as a string.  Proxies to {@link render()}.

    :rtype: string 



setCacheEnabled
---------------

.. function:: setCacheEnabled()


    Enables/Disables the cache for this instance

    :param bool: 

    :rtype: Paginator 



count
-----

.. function:: count()


    Returns the number of pages.

    :rtype: integer 



getTotalItemCount
-----------------

.. function:: getTotalItemCount()


    Returns the total number of items available.

    :rtype: integer 



clearPageItemCache
------------------

.. function:: clearPageItemCache()


    Clear the page item cache.

    :param int: 

    :rtype: Paginator 



getAbsoluteItemNumber
---------------------

.. function:: getAbsoluteItemNumber()


    Returns the absolute item number for the specified item.

    :param integer: Relative item number
    :param integer: Page number

    :rtype: integer 



getAdapter
----------

.. function:: getAdapter()


    Returns the adapter.

    :rtype: AdapterInterface 



getCurrentItemCount
-------------------

.. function:: getCurrentItemCount()


    Returns the number of items for the current page.

    :rtype: integer 



getCurrentItems
---------------

.. function:: getCurrentItems()


    Returns the items for the current page.

    :rtype: Traversable 



getCurrentPageNumber
--------------------

.. function:: getCurrentPageNumber()


    Returns the current page number.

    :rtype: integer 



setCurrentPageNumber
--------------------

.. function:: setCurrentPageNumber()


    Sets the current page number.

    :param integer: Page number

    :rtype: Paginator $this



getFilter
---------

.. function:: getFilter()


    Get the filter

    :rtype: FilterInterface 



setFilter
---------

.. function:: setFilter()


    Set a filter chain

    :param FilterInterface: 

    :rtype: Paginator 



getItem
-------

.. function:: getItem()


    Returns an item from a page.  The current page is used if there's no
    page specified.

    :param integer: Item number (1 to itemCountPerPage)
    :param integer: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



getItemCountPerPage
-------------------

.. function:: getItemCountPerPage()


    Returns the number of items per page.

    :rtype: integer 



setItemCountPerPage
-------------------

.. function:: setItemCountPerPage()


    Sets the number of items per page.

    :param integer: 

    :rtype: Paginator $this



getItemCount
------------

.. function:: getItemCount()


    Returns the number of items in a collection.

    :param mixed: Items

    :rtype: integer 



getItemsByPage
--------------

.. function:: getItemsByPage()


    Returns the items for a given page.

    :param integer: 

    :rtype: mixed 



getIterator
-----------

.. function:: getIterator()


    Returns a foreach-compatible iterator.


    :rtype: Traversable 



getPageRange
------------

.. function:: getPageRange()


    Returns the page range (see property declaration above).

    :rtype: integer 



setPageRange
------------

.. function:: setPageRange()


    Sets the page range (see property declaration above).

    :param integer: 

    :rtype: Paginator $this



getPages
--------

.. function:: getPages()


    Returns the page collection.

    :param string: Scrolling style

    :rtype: array 



getPagesInRange
---------------

.. function:: getPagesInRange()


    Returns a subset of pages within a given range.

    :param integer: Lower bound of the range
    :param integer: Upper bound of the range

    :rtype: array 



getPageItemCache
----------------

.. function:: getPageItemCache()


    Returns the page item cache.

    :rtype: array 



getView
-------

.. function:: getView()


    Retrieves the view instance.
    
    If none registered, instantiates a PhpRenderer instance.

    :rtype: \Zend\View\Renderer\RendererInterface|null 



setView
-------

.. function:: setView()


    Sets the view object.

    :param \Zend\View\Renderer\RendererInterface: 

    :rtype: Paginator 



normalizeItemNumber
-------------------

.. function:: normalizeItemNumber()


    Brings the item number in range of the page.

    :param integer: 

    :rtype: integer 



normalizePageNumber
-------------------

.. function:: normalizePageNumber()


    Brings the page number in range of the paginator.

    :param integer: 

    :rtype: integer 



render
------

.. function:: render()


    Renders the paginator.

    :param \Zend\View\Renderer\RendererInterface: 

    :rtype: string 



toJson
------

.. function:: toJson()


    Returns the items of the current page as JSON.

    :rtype: string 



cacheEnabled
------------

.. function:: cacheEnabled()


    Tells if there is an active cache object
    and if the cache has not been disabled

    :rtype: bool 



_getCacheId
-----------

.. function:: _getCacheId()


    Makes an Id for the cache
    Depends on the adapter object and the page number
    
    Used to store item in cache from that Paginator instance
     and that current page

    :param int: 

    :rtype: string 



_getCacheInternalId
-------------------

.. function:: _getCacheInternalId()


    Get the internal cache id
    Depends on the adapter and the item count per page
    
    Used to tag that unique Paginator instance in cache

    :rtype: string 



_calculatePageCount
-------------------

.. function:: _calculatePageCount()


    Calculates the page count.

    :rtype: integer 



_createPages
------------

.. function:: _createPages()


    Creates the page collection.

    :param string: Scrolling style

    :rtype: \stdClass 



_loadScrollingStyle
-------------------

.. function:: _loadScrollingStyle()


    Loads a scrolling style.

    :param string: 

    :rtype: ScrollingStyleInterface 

    :throws: Exception\InvalidArgumentException 





Constants
+++++++++

CACHE_TAG_PREFIX
================

The cache tag prefix used to namespace Paginator results in the cache

