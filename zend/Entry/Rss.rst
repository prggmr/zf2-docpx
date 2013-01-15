.. /Feed/Writer/Renderer/Entry/Rss.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\Renderer\\Entry\\Rss
****************************************


@category Zend



Methods
=======

__construct
-----------

.. function:: __construct($container)


    Constructor

    :param Writer\Entry $container: 



render
------

.. function:: render()


    Render RSS entry

    :rtype: Rss 



_setTitle
---------

.. function:: _setTitle($dom, $root)


    Set entry title

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



_setDescription
---------------

.. function:: _setDescription($dom, $root)


    Set entry description

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



_setDateModified
----------------

.. function:: _setDateModified($dom, $root)


    Set date entry was last modified

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setDateCreated
---------------

.. function:: _setDateCreated($dom, $root)


    Set date entry was created

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setAuthors
-----------

.. function:: _setAuthors($dom, $root)


    Set entry authors

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setEnclosure
-------------

.. function:: _setEnclosure($dom, $root)


    Set entry enclosure

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



_setLink
--------

.. function:: _setLink($dom, $root)


    Set link to entry

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setId
------

.. function:: _setId($dom, $root)


    Set entry identifier

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setCommentLink
---------------

.. function:: _setCommentLink($dom, $root)


    Set link to entry comments

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setCategories
--------------

.. function:: _setCategories($dom, $root)


    Set entry categories

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 





