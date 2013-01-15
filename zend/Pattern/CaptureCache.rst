.. /Cache/Pattern/CaptureCache.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Pattern\\CaptureCache
**********************************


@category   Zend



Methods
=======

start
-----

.. function:: start([$pageId = false])


    Start the cache

    :param string $pageId: Page identifier

    :rtype: void 



$content
--------

.. function:: $content()



set
---

.. function:: set($content, [$pageId = false])


    Write content to page identity

    :param string $content: 
    :param null|string $pageId: 

    :throws Exception\LogicException: 



get
---

.. function:: get([$pageId = false])


    Get from cache

    :param null|string $pageId: 

    :rtype: bool|string 

    :throws: Exception\LogicException 
    :throws: Exception\RuntimeException 



has
---

.. function:: has([$pageId = false])


    Checks if a cache with given id exists

    :param null|string $pageId: 

    :throws Exception\LogicException: 

    :rtype: bool 



remove
------

.. function:: remove([$pageId = false])


    Remove from cache

    :param null|string $pageId: 

    :throws Exception\LogicException: 
    :throws Exception\RuntimeException: 

    :rtype: bool 



clearByGlob
-----------

.. function:: clearByGlob([$pattern = "**"])


    Clear cached pages matching glob pattern

    :param string $pattern: 

    :throws Exception\LogicException: 



detectPageId
------------

.. function:: detectPageId()


    Determine the page to save from the request


    :rtype: string 



pageId2Filename
---------------

.. function:: pageId2Filename($pageId)


    Get filename for page id

    :param string $pageId: 

    :rtype: string 



pageId2Path
-----------

.. function:: pageId2Path($pageId)


    Get path for page id

    :param string $pageId: 

    :rtype: string 



putFileContent
--------------

.. function:: putFileContent($file, $data)


    Write content to a file

    :param string $file: File complete path
    :param string $data: Data to write

    :rtype: void 

    :throws: Exception\RuntimeException 



createDirectoryStructure
------------------------

.. function:: createDirectoryStructure($pathname)


    Creates directory if not already done.

    :param string $pathname: 

    :rtype: void 

    :throws: Exception\RuntimeException 





