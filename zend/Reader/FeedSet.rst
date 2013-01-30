.. Feed/Reader/FeedSet.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\Reader\\FeedSet
===========================



Methods
-------

addLinks
++++++++

.. function:: addLinks()


    Import a DOMNodeList from any document containing a set of links
    for alternate versions of a document, which will normally refer to
    RSS/RDF/Atom feeds for the current document.
    
    All such links are stored internally, however the first instance of
    each RSS, RDF or Atom type has its URI stored as a public property
    as a shortcut where the use case is simply to get a quick feed ref.
    
    Note that feeds are not loaded at this point, but will be lazy
    loaded automatically when each links 'feed' array key is accessed.

    :param DOMNodeList: 
    :param string: 

    :rtype: void 



absolutiseUri
+++++++++++++

.. function:: absolutiseUri()


    Attempt to turn a relative URI into an absolute URI



canonicalizePath
++++++++++++++++

.. function:: canonicalizePath()


    Canonicalize relative path



offsetGet
+++++++++

.. function:: offsetGet()


    Supports lazy loading of feeds using Reader::import() but
    delegates any other operations to the parent class.

    :param string: 

    :rtype: mixed 



