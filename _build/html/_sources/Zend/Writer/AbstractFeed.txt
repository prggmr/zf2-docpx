.. /Feed/Writer/AbstractFeed.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\AbstractFeed
********************************


@category Zend



Methods
=======

__construct
-----------

.. function:: __construct()


    Constructor: Primarily triggers the registration of core extensions and
    loads those appropriate to this data container.



addAuthor
---------

.. function:: addAuthor($author)


    Set a single author
    
    The following option keys are supported:
    'name'  => (string) The name
    'email' => (string) An optional email
    'uri'   => (string) An optional and valid URI

    :param array $author: 

    :throws Exception\InvalidArgumentException: If any value of $author not follow the format.

    :rtype: AbstractFeed 



addAuthors
----------

.. function:: addAuthors($authors)


    Set an array with feed authors


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param array $authors: 

    :rtype: AbstractFeed 



setCopyright
------------

.. function:: setCopyright($copyright)


    Set the copyright entry

    :param string $copyright: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setDateCreated
--------------

.. function:: setDateCreated([$date = false])


    Set the feed creation date

    :param null|integer|DateTime: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setDateModified
---------------

.. function:: setDateModified([$date = false])


    Set the feed modification date

    :param null|integer|DateTime: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setLastBuildDate
----------------

.. function:: setLastBuildDate([$date = false])


    Set the feed last-build date. Ignored for Atom 1.0.

    :param null|integer|DateTime: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setDescription
--------------

.. function:: setDescription($description)


    Set the feed description

    :param string $description: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setGenerator
------------

.. function:: setGenerator($name, [$version = false, [$uri = false]])


    Set the feed generator entry

    :param array|string $name: 
    :param null|string $version: 
    :param null|string $uri: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setId
-----

.. function:: setId($id)


    Set the feed ID - URI or URN (via PCRE pattern) supported

    :param string $id: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



_validateTagUri
---------------

.. function:: _validateTagUri($id)


    Validate a URI using the tag scheme (RFC 4151)

    :param string $id: 

    :rtype: bool 



setImage
--------

.. function:: setImage($data)


    Set a feed image (URI at minimum). Parameter is a single array with the
    required key 'uri'. When rendering as RSS, the required keys are 'uri',
    'title' and 'link'. RSS also specifies three optional parameters 'width',
    'height' and 'description'. Only 'uri' is required and used for Atom rendering.

    :param array $data: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setLanguage
-----------

.. function:: setLanguage($language)


    Set the feed language

    :param string $language: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setLink
-------

.. function:: setLink($link)


    Set a link to the HTML source

    :param string $link: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setFeedLink
-----------

.. function:: setFeedLink($link, $type)


    Set a link to an XML feed for any feed type/version

    :param string $link: 
    :param string $type: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setTitle
--------

.. function:: setTitle($title)


    Set the feed title

    :param string $title: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setEncoding
-----------

.. function:: setEncoding($encoding)


    Set the feed character encoding

    :param string $encoding: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setBaseUrl
----------

.. function:: setBaseUrl($url)


    Set the feed's base URL

    :param string $url: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



addHub
------

.. function:: addHub($url)


    Add a Pubsubhubbub hub endpoint URL

    :param string $url: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



addHubs
-------

.. function:: addHubs($urls)


    Add Pubsubhubbub hub endpoint URLs

    :param array $urls: 

    :rtype: AbstractFeed 



addCategory
-----------

.. function:: addCategory($category)


    Add a feed category

    :param array $category: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



addCategories
-------------

.. function:: addCategories($categories)


    Set an array of feed categories

    :param array $categories: 

    :rtype: AbstractFeed 



getAuthor
---------

.. function:: getAuthor([$index = false])


    Get a single author

    :param int $index: 

    :rtype: string|null 



getAuthors
----------

.. function:: getAuthors()


    Get an array with feed authors

    :rtype: array 



getCopyright
------------

.. function:: getCopyright()


    Get the copyright entry

    :rtype: string|null 



getDateCreated
--------------

.. function:: getDateCreated()


    Get the feed creation date

    :rtype: string|null 



getDateModified
---------------

.. function:: getDateModified()


    Get the feed modification date

    :rtype: string|null 



getLastBuildDate
----------------

.. function:: getLastBuildDate()


    Get the feed last-build date

    :rtype: string|null 



getDescription
--------------

.. function:: getDescription()


    Get the feed description

    :rtype: string|null 



getGenerator
------------

.. function:: getGenerator()


    Get the feed generator entry

    :rtype: string|null 



getId
-----

.. function:: getId()


    Get the feed ID

    :rtype: string|null 



getImage
--------

.. function:: getImage()


    Get the feed image URI

    :rtype: array 



getLanguage
-----------

.. function:: getLanguage()


    Get the feed language

    :rtype: string|null 



getLink
-------

.. function:: getLink()


    Get a link to the HTML source

    :rtype: string|null 



getFeedLinks
------------

.. function:: getFeedLinks()


    Get a link to the XML feed

    :rtype: string|null 



getTitle
--------

.. function:: getTitle()


    Get the feed title

    :rtype: string|null 



getEncoding
-----------

.. function:: getEncoding()


    Get the feed character encoding

    :rtype: string|null 



getBaseUrl
----------

.. function:: getBaseUrl()


    Get the feed's base url

    :rtype: string|null 



getHubs
-------

.. function:: getHubs()


    Get the URLs used as Pubsubhubbub hubs endpoints

    :rtype: string|null 



getCategories
-------------

.. function:: getCategories()


    Get the feed categories

    :rtype: string|null 



reset
-----

.. function:: reset()


    Resets the instance and deletes all data

    :rtype: void 



setType
-------

.. function:: setType($type)


    Set the current feed type being exported to "rss" or "atom". This allows
    other objects to gracefully choose whether to execute or not, depending
    on their appropriateness for the current type, e.g. renderers.

    :param string $type: 

    :rtype: AbstractFeed 



getType
-------

.. function:: getType()


    Retrieve the current or last feed type exported.

    :rtype: string Value will be "rss" or "atom"



remove
------

.. function:: remove($name)


    Unset a specific data point

    :param string $name: 

    :rtype: AbstractFeed 



__call
------

.. function:: __call($method, $args)


    Method overloading: call given method on first extension implementing it

    :param string $method: 
    :param array $args: 

    :rtype: mixed 

    :throws: Exception\BadMethodCallException if no extensions implements the method



_loadExtensions
---------------

.. function:: _loadExtensions()


    Load extensions from Zend_Feed_Writer


    :rtype: void 





