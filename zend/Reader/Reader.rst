.. /Feed/Reader/Reader.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Reader\\Reader
**************************


@category Zend



Methods
=======

getCache
--------

.. function:: getCache()


    Get the Feed cache

    :rtype: CacheStorage 



setCache
--------

.. function:: setCache($cache)


    Set the feed cache

    :param CacheStorage $cache: 

    :rtype: void 



setHttpClient
-------------

.. function:: setHttpClient($httpClient)


    Set the HTTP client instance
    
    Sets the HTTP client object to use for retrieving the feeds.

    :param \Zend\Http\Client $httpClient: 

    :rtype: void 



getHttpClient
-------------

.. function:: getHttpClient()


    Gets the HTTP client object. If none is set, a new \Zend\Http\Client will be used.

    :rtype: \Zend\Http\Client 



setHttpMethodOverride
---------------------

.. function:: setHttpMethodOverride([$override = true])


    Toggle using POST instead of PUT and DELETE HTTP methods
    
    Some feed implementations do not accept PUT and DELETE HTTP
    methods, or they can't be used because of proxies or other
    measures. This allows turning on using POST where PUT and
    DELETE would normally be used; in addition, an
    X-Method-Override header will be sent with a value of PUT or
    DELETE as appropriate.

    :param bool $override: Whether to override PUT and DELETE.

    :rtype: void 



getHttpMethodOverride
---------------------

.. function:: getHttpMethodOverride()


    Get the HTTP override state

    :rtype: bool 



useHttpConditionalGet
---------------------

.. function:: useHttpConditionalGet([$bool = true])


    Set the flag indicating whether or not to use HTTP conditional GET

    :param bool $bool: 

    :rtype: void 



import
------

.. function:: import($uri, [$etag = false, [$lastModified = false]])


    Import a feed by providing a URI

    :param string $uri: The URI to the feed
    :param string $etag: OPTIONAL Last received ETag for this resource
    :param string $lastModified: OPTIONAL Last-Modified value for this resource

    :rtype: Feed\FeedInterface 

    :throws: Exception\RuntimeException 



importString
------------

.. function:: importString($string)


    Import a feed from a string

    :param string $string: 

    :rtype: Feed\FeedInterface 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



importFile
----------

.. function:: importFile($filename)


    Imports a feed from a file located at $filename.

    :param string $filename: 

    :throws Exception\RuntimeException: 

    :rtype: Feed\FeedInterface 



findFeedLinks
-------------

.. function:: findFeedLinks($uri)


    Find feed links

    :param $uri: 

    :rtype: FeedSet 

    :throws: Exception\RuntimeException 



detectType
----------

.. function:: detectType($feed, [$specOnly = false])


    Detect the feed type of the provided feed

    :param Feed\AbstractFeed|DOMDocument|string $feed: 
    :param bool $specOnly: 

    :rtype: string 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



setExtensionManager
-------------------

.. function:: setExtensionManager($extensionManager)


    Set plugin manager for use with Extensions

    :param ExtensionManager $extensionManager: 



getExtensionManager
-------------------

.. function:: getExtensionManager()


    Get plugin manager for use with Extensions

    :rtype: ExtensionManager 



registerExtension
-----------------

.. function:: registerExtension($name)


    Register an Extension by name

    :param string $name: 

    :rtype: void 

    :throws: Exception\RuntimeException if unable to resolve Extension class



isRegistered
------------

.. function:: isRegistered($extensionName)


    Is a given named Extension registered?

    :param string $extensionName: 

    :rtype: bool 



getExtensions
-------------

.. function:: getExtensions()


    Get a list of extensions

    :rtype: array 



reset
-----

.. function:: reset()


    Reset class state to defaults

    :rtype: void 



registerCoreExtensions
----------------------

.. function:: registerCoreExtensions()


    Register core (default) extensions

    :rtype: void 



arrayUnique
-----------

.. function:: arrayUnique($array)


    Utility method to apply array_unique operation to a multidimensional
    array.

    :param array: 

    :rtype: array 





Constants
---------

NAMESPACE_ATOM_03
+++++++++++++++++

Namespace constants

NAMESPACE_ATOM_10
+++++++++++++++++

NAMESPACE_RDF
+++++++++++++

NAMESPACE_RSS_090
+++++++++++++++++

NAMESPACE_RSS_10
++++++++++++++++

TYPE_ANY
++++++++

Feed type constants

TYPE_ATOM_03
++++++++++++

TYPE_ATOM_10
++++++++++++

TYPE_ATOM_10_ENTRY
++++++++++++++++++

TYPE_ATOM_ANY
+++++++++++++

TYPE_RSS_090
++++++++++++

TYPE_RSS_091
++++++++++++

TYPE_RSS_091_NETSCAPE
+++++++++++++++++++++

TYPE_RSS_091_USERLAND
+++++++++++++++++++++

TYPE_RSS_092
++++++++++++

TYPE_RSS_093
++++++++++++

TYPE_RSS_094
++++++++++++

TYPE_RSS_10
+++++++++++

TYPE_RSS_20
+++++++++++

TYPE_RSS_ANY
++++++++++++

