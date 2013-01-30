.. Feed/Writer/AbstractFeed.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\Writer\\AbstractFeed
================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor: Primarily triggers the registration of core extensions and
    loads those appropriate to this data container.



addAuthor
+++++++++

.. function:: addAuthor()


    Set a single author
    
    The following option keys are supported:
    'name'  => (string) The name
    'email' => (string) An optional email
    'uri'   => (string) An optional and valid URI

    :param array: 

    :throws Exception\InvalidArgumentException: If any value of $author not follow the format.

    :rtype: AbstractFeed 



addAuthors
++++++++++

.. function:: addAuthors()


    Set an array with feed authors


    :param array: 

    :rtype: AbstractFeed 



setCopyright
++++++++++++

.. function:: setCopyright()


    Set the copyright entry

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setDateCreated
++++++++++++++

.. function:: setDateCreated()


    Set the feed creation date

    :param null|integer|DateTime: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setDateModified
+++++++++++++++

.. function:: setDateModified()


    Set the feed modification date

    :param null|integer|DateTime: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setLastBuildDate
++++++++++++++++

.. function:: setLastBuildDate()


    Set the feed last-build date. Ignored for Atom 1.0.

    :param null|integer|DateTime: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setDescription
++++++++++++++

.. function:: setDescription()


    Set the feed description

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setGenerator
++++++++++++

.. function:: setGenerator()


    Set the feed generator entry

    :param array|string: 
    :param null|string: 
    :param null|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setId
+++++

.. function:: setId()


    Set the feed ID - URI or URN (via PCRE pattern) supported

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



_validateTagUri
+++++++++++++++

.. function:: _validateTagUri()


    Validate a URI using the tag scheme (RFC 4151)

    :param string: 

    :rtype: bool 



setImage
++++++++

.. function:: setImage()


    Set a feed image (URI at minimum). Parameter is a single array with the
    required key 'uri'. When rendering as RSS, the required keys are 'uri',
    'title' and 'link'. RSS also specifies three optional parameters 'width',
    'height' and 'description'. Only 'uri' is required and used for Atom rendering.

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setLanguage
+++++++++++

.. function:: setLanguage()


    Set the feed language

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setLink
+++++++

.. function:: setLink()


    Set a link to the HTML source

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setFeedLink
+++++++++++

.. function:: setFeedLink()


    Set a link to an XML feed for any feed type/version

    :param string: 
    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setTitle
++++++++

.. function:: setTitle()


    Set the feed title

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set the feed character encoding

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



setBaseUrl
++++++++++

.. function:: setBaseUrl()


    Set the feed's base URL

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



addHub
++++++

.. function:: addHub()


    Add a Pubsubhubbub hub endpoint URL

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



addHubs
+++++++

.. function:: addHubs()


    Add Pubsubhubbub hub endpoint URLs

    :param array: 

    :rtype: AbstractFeed 



addCategory
+++++++++++

.. function:: addCategory()


    Add a feed category

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractFeed 



addCategories
+++++++++++++

.. function:: addCategories()


    Set an array of feed categories

    :param array: 

    :rtype: AbstractFeed 



getAuthor
+++++++++

.. function:: getAuthor()


    Get a single author

    :param int: 

    :rtype: string|null 



getAuthors
++++++++++

.. function:: getAuthors()


    Get an array with feed authors

    :rtype: array 



getCopyright
++++++++++++

.. function:: getCopyright()


    Get the copyright entry

    :rtype: string|null 



getDateCreated
++++++++++++++

.. function:: getDateCreated()


    Get the feed creation date

    :rtype: string|null 



getDateModified
+++++++++++++++

.. function:: getDateModified()


    Get the feed modification date

    :rtype: string|null 



getLastBuildDate
++++++++++++++++

.. function:: getLastBuildDate()


    Get the feed last-build date

    :rtype: string|null 



getDescription
++++++++++++++

.. function:: getDescription()


    Get the feed description

    :rtype: string|null 



getGenerator
++++++++++++

.. function:: getGenerator()


    Get the feed generator entry

    :rtype: string|null 



getId
+++++

.. function:: getId()


    Get the feed ID

    :rtype: string|null 



getImage
++++++++

.. function:: getImage()


    Get the feed image URI

    :rtype: array 



getLanguage
+++++++++++

.. function:: getLanguage()


    Get the feed language

    :rtype: string|null 



getLink
+++++++

.. function:: getLink()


    Get a link to the HTML source

    :rtype: string|null 



getFeedLinks
++++++++++++

.. function:: getFeedLinks()


    Get a link to the XML feed

    :rtype: string|null 



getTitle
++++++++

.. function:: getTitle()


    Get the feed title

    :rtype: string|null 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get the feed character encoding

    :rtype: string|null 



getBaseUrl
++++++++++

.. function:: getBaseUrl()


    Get the feed's base url

    :rtype: string|null 



getHubs
+++++++

.. function:: getHubs()


    Get the URLs used as Pubsubhubbub hubs endpoints

    :rtype: string|null 



getCategories
+++++++++++++

.. function:: getCategories()


    Get the feed categories

    :rtype: string|null 



reset
+++++

.. function:: reset()


    Resets the instance and deletes all data

    :rtype: void 



setType
+++++++

.. function:: setType()


    Set the current feed type being exported to "rss" or "atom". This allows
    other objects to gracefully choose whether to execute or not, depending
    on their appropriateness for the current type, e.g. renderers.

    :param string: 

    :rtype: AbstractFeed 



getType
+++++++

.. function:: getType()


    Retrieve the current or last feed type exported.

    :rtype: string Value will be "rss" or "atom"



remove
++++++

.. function:: remove()


    Unset a specific data point

    :param string: 

    :rtype: AbstractFeed 



__call
++++++

.. function:: __call()


    Method overloading: call given method on first extension implementing it

    :param string: 
    :param array: 

    :rtype: mixed 

    :throws: Exception\BadMethodCallException if no extensions implements the method



_loadExtensions
+++++++++++++++

.. function:: _loadExtensions()


    Load extensions from Zend_Feed_Writer


    :rtype: void 



