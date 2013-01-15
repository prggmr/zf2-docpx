.. /Feed/Writer/Renderer/RendererInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\Renderer\\render
====================================

.. function:: Zend\Feed\Writer\Renderer\render()


    Render feed/entry

    :rtype: void 



Zend\\Feed\\Writer\\Renderer\\saveXml
=====================================

.. function:: Zend\Feed\Writer\Renderer\saveXml()


    Save feed and/or entry to XML and return string

    :rtype: string 



Zend\\Feed\\Writer\\Renderer\\getDomDocument
============================================

.. function:: Zend\Feed\Writer\Renderer\getDomDocument()


    Get DOM document

    :rtype: DOMDocument 



Zend\\Feed\\Writer\\Renderer\\getElement
========================================

.. function:: Zend\Feed\Writer\Renderer\getElement()


    Get document element from DOM

    :rtype: DOMElement 



Zend\\Feed\\Writer\\Renderer\\getDataContainer
==============================================

.. function:: Zend\Feed\Writer\Renderer\getDataContainer()


    Get data container containing feed items

    :rtype: mixed 



Zend\\Feed\\Writer\\Renderer\\ignoreExceptions
==============================================

.. function:: Zend\Feed\Writer\Renderer\ignoreExceptions()


    Should exceptions be ignored?

    :rtype: mixed 



Zend\\Feed\\Writer\\Renderer\\getExceptions
===========================================

.. function:: Zend\Feed\Writer\Renderer\getExceptions()


    Get list of thrown exceptions

    :rtype: array 



Zend\\Feed\\Writer\\Renderer\\setType
=====================================

.. function:: Zend\Feed\Writer\Renderer\setType()


    Set the current feed type being exported to "rss" or "atom". This allows
    other objects to gracefully choose whether to execute or not, depending
    on their appropriateness for the current type, e.g. renderers.

    :param string $type: 



Zend\\Feed\\Writer\\Renderer\\getType
=====================================

.. function:: Zend\Feed\Writer\Renderer\getType()


    Retrieve the current or last feed type exported.

    :rtype: string Value will be "rss" or "atom"



Zend\\Feed\\Writer\\Renderer\\setRootElement
============================================

.. function:: Zend\Feed\Writer\Renderer\setRootElement()


    Sets the absolute root element for the XML feed being generated. This
    helps simplify the appending of namespace declarations, but also ensures
    namespaces are added to the root element - not scattered across the entire
    XML file - may assist namespace unsafe parsers and looks pretty ;).

    :param DOMElement $root: 



Zend\\Feed\\Writer\\Renderer\\getRootElement
============================================

.. function:: Zend\Feed\Writer\Renderer\getRootElement()


    Retrieve the absolute root element for the XML feed being generated.

    :rtype: DOMElement 



