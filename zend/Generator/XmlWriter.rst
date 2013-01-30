.. XmlRpc/Generator/XmlWriter.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\XmlRpc\\Generator\\XmlWriter
==================================

XML generator adapter based on XMLWriter

Methods
-------

_init
+++++

.. function:: _init()


    Initialized XMLWriter instance

    :rtype: void 



_openElement
++++++++++++

.. function:: _openElement()


    Open a new XML element

    :param string: XML element name

    :rtype: void 



_writeTextData
++++++++++++++

.. function:: _writeTextData()


    Write XML text data into the currently opened XML element

    :param string: XML text data

    :rtype: void 



_closeElement
+++++++++++++

.. function:: _closeElement()


    Close an previously opened XML element

    :param string: 

    :rtype: XmlWriter 



saveXml
+++++++

.. function:: saveXml()


    Emit XML document

    :rtype: string 



