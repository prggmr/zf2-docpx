.. XmlRpc/Generator/DomDocument.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\XmlRpc\\Generator\\DomDocument
====================================

DOMDocument based implementation of a XML/RPC generator

Methods
-------

_openElement
++++++++++++

.. function:: _openElement()


    Start XML element

    :param string: 

    :rtype: void 



_writeTextData
++++++++++++++

.. function:: _writeTextData()


    Write XML text data into the currently opened XML element

    :param string: 



_closeElement
+++++++++++++

.. function:: _closeElement()


    Close an previously opened XML element
    
    Resets $currentElement to the next parent node in the hierarchy

    :param string: 

    :rtype: void 



saveXml
+++++++

.. function:: saveXml()


    Save XML as a string

    :rtype: string 



_init
+++++

.. function:: _init()


    Initializes internal objects

    :rtype: void 



