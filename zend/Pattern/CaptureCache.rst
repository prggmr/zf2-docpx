.. Cache/Pattern/CaptureCache.php generated using docpx on 01/30/13 03:32am


Zend\\Cache\\Pattern\\CaptureCache
==================================

Methods
+++++++

start
-----

.. function:: start()


    Start the cache

    :param string: Page identifier

    :rtype: void 



set
---

.. function:: set()


    Write content to page identity

    :param string: 
    :param null|string: 

    :throws Exception\LogicException: 



get
---

.. function:: get()


    Get from cache

    :param null|string: 

    :rtype: bool|string 

    :throws: Exception\LogicException 
    :throws: Exception\RuntimeException 



has
---

.. function:: has()


    Checks if a cache with given id exists

    :param null|string: 

    :throws Exception\LogicException: 

    :rtype: bool 



remove
------

.. function:: remove()


    Remove from cache

    :param null|string: 

    :throws Exception\LogicException: 
    :throws Exception\RuntimeException: 

    :rtype: bool 



clearByGlob
-----------

.. function:: clearByGlob()


    Clear cached pages matching glob pattern

    :param string: 

    :throws Exception\LogicException: 



detectPageId
------------

.. function:: detectPageId()


    Determine the page to save from the request


    :rtype: string 



pageId2Filename
---------------

.. function:: pageId2Filename()


    Get filename for page id

    :param string: 

    :rtype: string 



pageId2Path
-----------

.. function:: pageId2Path()


    Get path for page id

    :param string: 

    :rtype: string 



putFileContent
--------------

.. function:: putFileContent()


    Write content to a file

    :param string: File complete path
    :param string: Data to write

    :rtype: void 

    :throws: Exception\RuntimeException 



createDirectoryStructure
------------------------

.. function:: createDirectoryStructure()


    Creates directory if not already done.

    :param string: 

    :rtype: void 

    :throws: Exception\RuntimeException 



