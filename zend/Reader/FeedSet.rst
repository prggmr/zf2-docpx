.. /Feed/Reader/FeedSet.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Reader\\FeedSet
***************************


@category Zend



Methods
=======

addLinks
--------

.. function:: addLinks($links, $uri)


    Import a DOMNodeList from any document containing a set of links
    for alternate versions of a document, which will normally refer to
    RSS/RDF/Atom feeds for the current document.
    
    All such links are stored internally, however the first instance of
    each RSS, RDF or Atom type has its URI stored as a public property
    as a shortcut where the use case is simply to get a quick feed ref.
    
    Note that feeds are not loaded at this point, but will be lazy
    loaded automatically when each links 'feed' array key is accessed.

    :param DOMNodeList $links: 
    :param string $uri: 

    :rtype: void 



absolutiseUri
-------------

.. function:: absolutiseUri($link, [$uri = false])


    Attempt to turn a relative URI into an absolute URI



canonicalizePath
----------------

.. function:: canonicalizePath($path)


    Canonicalize relative path



offsetGet
---------

.. function:: offsetGet($offset)


    Supports lazy loading of feeds using Reader::import() but
    delegates any other operations to the parent class.

    :param string $offset: 

    :rtype: mixed 





