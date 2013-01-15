.. /Feed/Writer/Renderer/Feed/Atom/AbstractAtom.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\Renderer\\Feed\\Atom\\AbstractAtom
******************************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($container)


    Constructor

    :param \Zend\Feed\Writer\Feed $container: 



_setLanguage
------------

.. function:: _setLanguage($dom, $root)


    Set feed language

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setTitle
---------

.. function:: _setTitle($dom, $root)


    Set feed title

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Feed\Exception\InvalidArgumentException 



_setDescription
---------------

.. function:: _setDescription($dom, $root)


    Set feed description

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setDateModified
----------------

.. function:: _setDateModified($dom, $root)


    Set date feed was last modified

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Feed\Exception\InvalidArgumentException 



_setGenerator
-------------

.. function:: _setGenerator($dom, $root)


    Set feed generator string

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setLink
--------

.. function:: _setLink($dom, $root)


    Set link to feed

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setFeedLinks
-------------

.. function:: _setFeedLinks($dom, $root)


    Set feed links

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Feed\Exception\InvalidArgumentException 



_setAuthors
-----------

.. function:: _setAuthors($dom, $root)


    Set feed authors

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setId
------

.. function:: _setId($dom, $root)


    Set feed identifier

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Feed\Exception\InvalidArgumentException 



_setCopyright
-------------

.. function:: _setCopyright($dom, $root)


    Set feed copyright

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setImage
---------

.. function:: _setImage($dom, $root)


    Set feed level logo (image)

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setDateCreated
---------------

.. function:: _setDateCreated($dom, $root)


    Set date feed was created

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setBaseUrl
-----------

.. function:: _setBaseUrl($dom, $root)


    Set base URL to feed links

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setHubs
--------

.. function:: _setHubs($dom, $root)


    Set hubs to which this feed pushes

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setCategories
--------------

.. function:: _setCategories($dom, $root)


    Set feed categories

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 





