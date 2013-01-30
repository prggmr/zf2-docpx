.. Feed/Reader/Extension/Atom/Feed.php generated using docpx on 01/30/13 03:32am


Zend\\Feed\\Reader\\Extension\\Atom\\Feed
=========================================

Methods
+++++++

getAuthor
---------

.. function:: getAuthor()


    Get a single author

    :param int: 

    :rtype: string|null 



getAuthors
----------

.. function:: getAuthors()


    Get an array with feed authors

    :rtype: Collection\Author 



getCopyright
------------

.. function:: getCopyright()


    Get the copyright entry

    :rtype: string|null 



getDateCreated
--------------

.. function:: getDateCreated()


    Get the feed creation date

    :rtype: DateTime|null 



getDateModified
---------------

.. function:: getDateModified()


    Get the feed modification date

    :rtype: DateTime|null 



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



getLanguage
-----------

.. function:: getLanguage()


    Get the feed language

    :rtype: string|null 



getImage
--------

.. function:: getImage()


    Get the feed image

    :rtype: array|null 



getBaseUrl
----------

.. function:: getBaseUrl()


    Get the base URI of the feed (if set).

    :rtype: string|null 



getLink
-------

.. function:: getLink()


    Get a link to the source website

    :rtype: string|null 



getFeedLink
-----------

.. function:: getFeedLink()


    Get a link to the feed's XML Url

    :rtype: string|null 



getHubs
-------

.. function:: getHubs()


    Get an array of any supported Pusubhubbub endpoints

    :rtype: array|null 



getTitle
--------

.. function:: getTitle()


    Get the feed title

    :rtype: string|null 



getCategories
-------------

.. function:: getCategories()


    Get all categories

    :rtype: Collection\Category 



getAuthorFromElement
--------------------

.. function:: getAuthorFromElement()


    Get an author entry in RSS format

    :param DOMElement: 

    :rtype: string 



absolutiseUri
-------------

.. function:: absolutiseUri()


    Attempt to absolutise the URI, i.e. if a relative URI apply the
     xml:base value as a prefix to turn into an absolute URI.



registerNamespaces
------------------

.. function:: registerNamespaces()


    Register the default namespaces for the current feed format



getAtomType
-----------

.. function:: getAtomType()


    Detect the presence of any Atom namespaces in use



