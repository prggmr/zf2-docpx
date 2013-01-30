.. Feed/Reader/Feed/AbstractFeed.php generated using docpx on 01/30/13 03:32am


Zend\\Feed\\Reader\\Feed\\AbstractFeed
======================================



Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param DOMDocument: The DOM object for the feed's XML
    :param string: Feed type



setOriginalSourceUri
--------------------

.. function:: setOriginalSourceUri()


    Set an original source URI for the feed being parsed. This value
    is returned from getFeedLink() method if the feed does not carry
    a self-referencing URI.

    :param string: 



getOriginalSourceUri
--------------------

.. function:: getOriginalSourceUri()


    Get an original source URI for the feed being parsed. Returns null if
    unset or the feed was not imported from a URI.

    :rtype: string|null 



count
-----

.. function:: count()


    Get the number of feed entries.
    Required by the Iterator interface.

    :rtype: int 



current
-------

.. function:: current()


    Return the current entry

    :rtype: \Zend\Feed\Reader\Entry\EntryInterface 



getDomDocument
--------------

.. function:: getDomDocument()


    Get the DOM

    :rtype: DOMDocument 



getEncoding
-----------

.. function:: getEncoding()


    Get the Feed's encoding

    :rtype: string 



saveXml
-------

.. function:: saveXml()


    Get feed as xml

    :rtype: string 



getElement
----------

.. function:: getElement()


    Get the DOMElement representing the items/feed element

    :rtype: DOMElement 



getXpath
--------

.. function:: getXpath()


    Get the DOMXPath object for this feed

    :rtype: DOMXPath 



getType
-------

.. function:: getType()


    Get the feed type

    :rtype: string 



key
---

.. function:: key()


    Return the current feed key

    :rtype: int 



next
----

.. function:: next()


    Move the feed pointer forward



rewind
------

.. function:: rewind()


    Reset the pointer in the feed object



valid
-----

.. function:: valid()


    Check to see if the iterator is still valid

    :rtype: bool 



getExtensions
-------------

.. function:: getExtensions()



__call
------

.. function:: __call()



getExtension
------------

.. function:: getExtension()


    Return an Extension object with the matching name (postfixed with _Feed)

    :param string: 

    :rtype: \Zend\Feed\Reader\Extension\AbstractFeed 



loadExtensions
--------------

.. function:: loadExtensions()



indexEntries
------------

.. function:: indexEntries()


    Read all entries to the internal entries array



registerNamespaces
------------------

.. function:: registerNamespaces()


    Register the default namespaces for the current feed format



