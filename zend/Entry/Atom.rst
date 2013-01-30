.. Feed/Writer/Renderer/Entry/Atom.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Feed\\Writer\\Renderer\\Entry\\Atom
=========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param Writer\Entry: 



render
++++++

.. function:: render()


    Render atom entry

    :rtype: Atom 



_setTitle
+++++++++

.. function:: _setTitle()


    Set entry title

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



_setDescription
+++++++++++++++

.. function:: _setDescription()


    Set entry description

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 



_setDateModified
++++++++++++++++

.. function:: _setDateModified()


    Set date entry was modified

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



_setDateCreated
+++++++++++++++

.. function:: _setDateCreated()


    Set date entry was created

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 



_setAuthors
+++++++++++

.. function:: _setAuthors()


    Set entry authors

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 



_setEnclosure
+++++++++++++

.. function:: _setEnclosure()


    Set entry enclosure

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 



_setLink
++++++++

.. function:: _setLink()



_setId
++++++

.. function:: _setId()


    Set entry identifier

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



_validateTagUri
+++++++++++++++

.. function:: _validateTagUri()


    Validate a URI using the tag scheme (RFC 4151)

    :param string: 

    :rtype: bool 



_setContent
+++++++++++

.. function:: _setContent()


    Set entry content

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 

    :throws: Writer\Exception\InvalidArgumentException 



_loadXhtml
++++++++++

.. function:: _loadXhtml()


    Load a HTML string and attempt to normalise to XML



_setCategories
++++++++++++++

.. function:: _setCategories()


    Set entry categories

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 



_setSource
++++++++++

.. function:: _setSource()


    Append Source element (Atom 1.0 Feed Metadata)

    :param DOMDocument: 
    :param DOMElement: 

    :rtype: void 



