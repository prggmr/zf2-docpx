.. /Feed/Writer/Entry.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\Entry
*************************


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

    :rtype: Entry 



addAuthors
----------

.. function:: addAuthors($authors)


    Set an array with feed authors


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param array $authors: 

    :rtype: Entry 



setEncoding
-----------

.. function:: setEncoding($encoding)


    Set the feed character encoding

    :param string $encoding: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



getEncoding
-----------

.. function:: getEncoding()


    Get the feed character encoding

    :rtype: string|null 



setCopyright
------------

.. function:: setCopyright($copyright)


    Set the copyright entry

    :param string $copyright: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setContent
----------

.. function:: setContent($content)


    Set the entry's content

    :param string $content: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setDateCreated
--------------

.. function:: setDateCreated([$date = false])


    Set the feed creation date

    :param string|null|DateTime $date: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setDateModified
---------------

.. function:: setDateModified([$date = false])


    Set the feed modification date

    :param string|null|DateTime $date: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setDescription
--------------

.. function:: setDescription($description)


    Set the feed description

    :param string $description: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setId
-----

.. function:: setId($id)


    Set the feed ID

    :param string $id: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setLink
-------

.. function:: setLink($link)


    Set a link to the HTML source of this entry

    :param string $link: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setCommentCount
---------------

.. function:: setCommentCount($count)


    Set the number of comments associated with this entry

    :param int $count: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setCommentLink
--------------

.. function:: setCommentLink($link)


    Set a link to a HTML page containing comments associated with this entry

    :param string $link: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setCommentFeedLink
------------------

.. function:: setCommentFeedLink($link)


    Set a link to an XML feed for any comments associated with this entry

    :param array $link: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setCommentFeedLinks
-------------------

.. function:: setCommentFeedLinks($links)


    Set a links to an XML feed for any comments associated with this entry.
    Each link is an array with keys "uri" and "type", where type is one of:
    "atom", "rss" or "rdf".

    :param array $links: 

    :rtype: Entry 



setTitle
--------

.. function:: setTitle($title)


    Set the feed title

    :param string $title: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



getAuthors
----------

.. function:: getAuthors()


    Get an array with feed authors

    :rtype: array 



getContent
----------

.. function:: getContent()


    Get the entry content

    :rtype: string 



getCopyright
------------

.. function:: getCopyright()


    Get the entry copyright information

    :rtype: string 



getDateCreated
--------------

.. function:: getDateCreated()


    Get the entry creation date

    :rtype: string 



getDateModified
---------------

.. function:: getDateModified()


    Get the entry modification date

    :rtype: string 



getDescription
--------------

.. function:: getDescription()


    Get the entry description

    :rtype: string 



getId
-----

.. function:: getId()


    Get the entry ID

    :rtype: string 



getLink
-------

.. function:: getLink()


    Get a link to the HTML source

    :rtype: string|null 



getLinks
--------

.. function:: getLinks()


    Get all links

    :rtype: array 



getTitle
--------

.. function:: getTitle()


    Get the entry title

    :rtype: string 



getCommentCount
---------------

.. function:: getCommentCount()


    Get the number of comments/replies for current entry

    :rtype: integer 



getCommentLink
--------------

.. function:: getCommentLink()


    Returns a URI pointing to the HTML page where comments can be made on this entry

    :rtype: string 



getCommentFeedLinks
-------------------

.. function:: getCommentFeedLinks()


    Returns an array of URIs pointing to a feed of all comments for this entry
    where the array keys indicate the feed type (atom, rss or rdf).

    :rtype: string 



addCategory
-----------

.. function:: addCategory($category)


    Add a entry category

    :param array $category: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



addCategories
-------------

.. function:: addCategories($categories)


    Set an array of entry categories

    :param array $categories: 

    :rtype: Entry 



getCategories
-------------

.. function:: getCategories()


    Get the entry categories

    :rtype: string|null 



setEnclosure
------------

.. function:: setEnclosure($enclosure)


    Adds an enclosure to the entry. The array parameter may contain the
    keys 'uri', 'type' and 'length'. Only 'uri' is required for Atom, though the
    others must also be provided or RSS rendering (where they are required)
    will throw an Exception.

    :param array $enclosure: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



getEnclosure
------------

.. function:: getEnclosure()


    Retrieve an array of all enclosures to be added to entry.

    :rtype: array 



remove
------

.. function:: remove($name)


    Unset a specific data point

    :param string $name: 

    :rtype: Entry 



getExtensions
-------------

.. function:: getExtensions()


    Get registered extensions

    :rtype: array 



getExtension
------------

.. function:: getExtension($name)


    Return an Extension object with the matching name (postfixed with _Entry)

    :param string $name: 

    :rtype: object 



setType
-------

.. function:: setType($type)


    Set the current feed type being exported to "rss" or "atom". This allows
    other objects to gracefully choose whether to execute or not, depending
    on their appropriateness for the current type, e.g. renderers.

    :param string $type: 

    :rtype: Entry 



getType
-------

.. function:: getType()


    Retrieve the current or last feed type exported.

    :rtype: string Value will be "rss" or "atom"



__call
------

.. function:: __call($method, $args)


    Method overloading: call given method on first extension implementing it

    :param string $method: 
    :param array $args: 

    :rtype: mixed 

    :throws: Exception\BadMethodCallException if no extensions implements the method



createSource
------------

.. function:: createSource()


    Creates a new Zend_Feed_Writer_Source data container for use. This is NOT
    added to the current feed automatically, but is necessary to create a
    container with some initial values preset based on the current feed data.

    :rtype: Source 



setSource
---------

.. function:: setSource($source)


    Appends a Zend_Feed_Writer_Entry object representing a new entry/item
    the feed data container's internal group of entries.

    :param Source $source: 

    :rtype: Entry 



getSource
---------

.. function:: getSource()


    @return Source



_loadExtensions
---------------

.. function:: _loadExtensions()


    Load extensions from Zend_Feed_Writer

    :rtype: void 





