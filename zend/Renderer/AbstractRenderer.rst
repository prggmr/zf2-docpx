.. Feed/Writer/Renderer/AbstractRenderer.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\Writer\\Renderer\\AbstractRenderer
==============================================



Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param Writer\AbstractFeed: 



saveXml
+++++++

.. function:: saveXml()


    Save XML to string

    :rtype: string 



getDomDocument
++++++++++++++

.. function:: getDomDocument()


    Get DOM document

    :rtype: DOMDocument 



getElement
++++++++++

.. function:: getElement()


    Get document element from DOM

    :rtype: DOMElement 



getDataContainer
++++++++++++++++

.. function:: getDataContainer()


    Get data container of items being rendered

    :rtype: Writer\AbstractFeed 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set feed encoding

    :param string: 

    :rtype: AbstractRenderer 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get feed encoding

    :rtype: string 



ignoreExceptions
++++++++++++++++

.. function:: ignoreExceptions()


    Indicate whether or not to ignore exceptions

    :param bool: 

    :rtype: AbstractRenderer 

    :throws: Writer\Exception\InvalidArgumentException 



getExceptions
+++++++++++++

.. function:: getExceptions()


    Get exception list

    :rtype: array 



setType
+++++++

.. function:: setType()


    Set the current feed type being exported to "rss" or "atom". This allows
    other objects to gracefully choose whether to execute or not, depending
    on their appropriateness for the current type, e.g. renderers.

    :param string: 



getType
+++++++

.. function:: getType()


    Retrieve the current or last feed type exported.

    :rtype: string Value will be "rss" or "atom"



setRootElement
++++++++++++++

.. function:: setRootElement()


    Sets the absolute root element for the XML feed being generated. This
    helps simplify the appending of namespace declarations, but also ensures
    namespaces are added to the root element - not scattered across the entire
    XML file - may assist namespace unsafe parsers and looks pretty ;).

    :param DOMElement: 



getRootElement
++++++++++++++

.. function:: getRootElement()


    Retrieve the absolute root element for the XML feed being generated.

    :rtype: DOMElement 



_loadExtensions
+++++++++++++++

.. function:: _loadExtensions()


    Load extensions from Zend_Feed_Writer

    :rtype: void 



