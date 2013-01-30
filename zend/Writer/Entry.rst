.. Feed/Writer/Entry.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Feed\\Writer\\Entry
=========================



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

    :rtype: Entry 



addAuthors
++++++++++

.. function:: addAuthors()


    Set an array with feed authors


    :param array: 

    :rtype: Entry 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set the feed character encoding

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get the feed character encoding

    :rtype: string|null 



setCopyright
++++++++++++

.. function:: setCopyright()


    Set the copyright entry

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setContent
++++++++++

.. function:: setContent()


    Set the entry's content

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setDateCreated
++++++++++++++

.. function:: setDateCreated()


    Set the feed creation date

    :param string|null|DateTime: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setDateModified
+++++++++++++++

.. function:: setDateModified()


    Set the feed modification date

    :param string|null|DateTime: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setDescription
++++++++++++++

.. function:: setDescription()


    Set the feed description

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setId
+++++

.. function:: setId()


    Set the feed ID

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setLink
+++++++

.. function:: setLink()


    Set a link to the HTML source of this entry

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setCommentCount
+++++++++++++++

.. function:: setCommentCount()


    Set the number of comments associated with this entry

    :param int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setCommentLink
++++++++++++++

.. function:: setCommentLink()


    Set a link to a HTML page containing comments associated with this entry

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setCommentFeedLink
++++++++++++++++++

.. function:: setCommentFeedLink()


    Set a link to an XML feed for any comments associated with this entry

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



setCommentFeedLinks
+++++++++++++++++++

.. function:: setCommentFeedLinks()


    Set a links to an XML feed for any comments associated with this entry.
    Each link is an array with keys "uri" and "type", where type is one of:
    "atom", "rss" or "rdf".

    :param array: 

    :rtype: Entry 



setTitle
++++++++

.. function:: setTitle()


    Set the feed title

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



getAuthors
++++++++++

.. function:: getAuthors()


    Get an array with feed authors

    :rtype: array 



getContent
++++++++++

.. function:: getContent()


    Get the entry content

    :rtype: string 



getCopyright
++++++++++++

.. function:: getCopyright()


    Get the entry copyright information

    :rtype: string 



getDateCreated
++++++++++++++

.. function:: getDateCreated()


    Get the entry creation date

    :rtype: string 



getDateModified
+++++++++++++++

.. function:: getDateModified()


    Get the entry modification date

    :rtype: string 



getDescription
++++++++++++++

.. function:: getDescription()


    Get the entry description

    :rtype: string 



getId
+++++

.. function:: getId()


    Get the entry ID

    :rtype: string 



getLink
+++++++

.. function:: getLink()


    Get a link to the HTML source

    :rtype: string|null 



getLinks
++++++++

.. function:: getLinks()


    Get all links

    :rtype: array 



getTitle
++++++++

.. function:: getTitle()


    Get the entry title

    :rtype: string 



getCommentCount
+++++++++++++++

.. function:: getCommentCount()


    Get the number of comments/replies for current entry

    :rtype: integer 



getCommentLink
++++++++++++++

.. function:: getCommentLink()


    Returns a URI pointing to the HTML page where comments can be made on this entry

    :rtype: string 



getCommentFeedLinks
+++++++++++++++++++

.. function:: getCommentFeedLinks()


    Returns an array of URIs pointing to a feed of all comments for this entry
    where the array keys indicate the feed type (atom, rss or rdf).

    :rtype: string 



addCategory
+++++++++++

.. function:: addCategory()


    Add a entry category

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



addCategories
+++++++++++++

.. function:: addCategories()


    Set an array of entry categories

    :param array: 

    :rtype: Entry 



getCategories
+++++++++++++

.. function:: getCategories()


    Get the entry categories

    :rtype: string|null 



setEnclosure
++++++++++++

.. function:: setEnclosure()


    Adds an enclosure to the entry. The array parameter may contain the
    keys 'uri', 'type' and 'length'. Only 'uri' is required for Atom, though the
    others must also be provided or RSS rendering (where they are required)
    will throw an Exception.

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Entry 



getEnclosure
++++++++++++

.. function:: getEnclosure()


    Retrieve an array of all enclosures to be added to entry.

    :rtype: array 



remove
++++++

.. function:: remove()


    Unset a specific data point

    :param string: 

    :rtype: Entry 



getExtensions
+++++++++++++

.. function:: getExtensions()


    Get registered extensions

    :rtype: array 



getExtension
++++++++++++

.. function:: getExtension()


    Return an Extension object with the matching name (postfixed with _Entry)

    :param string: 

    :rtype: object 



setType
+++++++

.. function:: setType()


    Set the current feed type being exported to "rss" or "atom". This allows
    other objects to gracefully choose whether to execute or not, depending
    on their appropriateness for the current type, e.g. renderers.

    :param string: 

    :rtype: Entry 



getType
+++++++

.. function:: getType()


    Retrieve the current or last feed type exported.

    :rtype: string Value will be "rss" or "atom"



__call
++++++

.. function:: __call()


    Method overloading: call given method on first extension implementing it

    :param string: 
    :param array: 

    :rtype: mixed 

    :throws: Exception\BadMethodCallException if no extensions implements the method



createSource
++++++++++++

.. function:: createSource()


    Creates a new Zend_Feed_Writer_Source data container for use. This is NOT
    added to the current feed automatically, but is necessary to create a
    container with some initial values preset based on the current feed data.

    :rtype: Source 



setSource
+++++++++

.. function:: setSource()


    Appends a Zend_Feed_Writer_Entry object representing a new entry/item
    the feed data container's internal group of entries.

    :param Source: 

    :rtype: Entry 



getSource
+++++++++

.. function:: getSource()


    @return Source



_loadExtensions
+++++++++++++++

.. function:: _loadExtensions()


    Load extensions from Zend_Feed_Writer

    :rtype: void 



