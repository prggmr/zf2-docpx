.. /Feed/Writer/Renderer/Entry/Atom.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\Renderer\\Entry\\Atom
*****************************************


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


    Render atom entry

    :rtype: Atom 



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



_setDateModified
----------------

.. function:: _setDateModified($dom, $root)


    Set date entry was modified

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



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



_setLink
--------

.. function:: _setLink($dom, $root)



_setId
------

.. function:: _setId($dom, $root)


    Set entry identifier

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



_validateTagUri
---------------

.. function:: _validateTagUri($id)


    Validate a URI using the tag scheme (RFC 4151)

    :param string $id: 

    :rtype: bool 



_setContent
-----------

.. function:: _setContent($dom, $root)


    Set entry content

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



_loadXhtml
----------

.. function:: _loadXhtml($content)


    Load a HTML string and attempt to normalise to XML



_setCategories
--------------

.. function:: _setCategories($dom, $root)


    Set entry categories

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 



_setSource
----------

.. function:: _setSource($dom, $root)


    Append Source element (Atom 1.0 Feed Metadata)

    :param DOMDocument $dom: 
    :param DOMElement $root: 

    :rtype: void 





