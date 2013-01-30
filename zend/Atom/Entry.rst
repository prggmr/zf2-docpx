.. Feed/Reader/Extension/Atom/Entry.php generated using docpx on 01/30/13 03:32am


Zend\\Feed\\Reader\\Extension\\Atom\\Entry
==========================================

Methods
+++++++

getAuthor
---------

.. function:: getAuthor()


    Get the specified author

    :param int: 

    :rtype: string|null 



getAuthors
----------

.. function:: getAuthors()


    Get an array with feed authors

    :rtype: Collection\Author 



getContent
----------

.. function:: getContent()


    Get the entry content

    :rtype: string 



collectXhtml
------------

.. function:: collectXhtml()


    Parse out XHTML to remove the namespacing

    :param $xhtml: 
    :param $prefix: 

    :rtype: mixed 



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



getEnclosure
------------

.. function:: getEnclosure()


    Get the entry enclosure

    :rtype: string 



getId
-----

.. function:: getId()


    Get the entry ID

    :rtype: string 



getBaseUrl
----------

.. function:: getBaseUrl()


    Get the base URI of the feed (if set).

    :rtype: string|null 



getLink
-------

.. function:: getLink()


    Get a specific link

    :param int: 

    :rtype: string 



getLinks
--------

.. function:: getLinks()


    Get all links

    :rtype: array 



getPermalink
------------

.. function:: getPermalink()


    Get a permalink to the entry

    :rtype: string 



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



getCommentFeedLink
------------------

.. function:: getCommentFeedLink()


    Returns a URI pointing to a feed of all comments for this entry

    :param string: 

    :rtype: string 



getCategories
-------------

.. function:: getCategories()


    Get all categories

    :rtype: Collection\Category 



getSource
---------

.. function:: getSource()


    Get source feed metadata from the entry

    :rtype: Reader\Feed\Atom\Source|null 



absolutiseUri
-------------

.. function:: absolutiseUri()


    Attempt to absolutise the URI, i.e. if a relative URI apply the
     xml:base value as a prefix to turn into an absolute URI.

    :param $link: 

    :rtype: string 



getAuthorFromElement
--------------------

.. function:: getAuthorFromElement()


    Get an author entry

    :param DOMElement: 

    :rtype: string 



registerNamespaces
------------------

.. function:: registerNamespaces()


    Register the default namespaces for the current feed format



getAtomType
-----------

.. function:: getAtomType()


    Detect the presence of any Atom namespaces in use

    :rtype: string 



