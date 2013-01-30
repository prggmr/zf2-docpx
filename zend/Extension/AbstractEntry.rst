.. Feed/Reader/Extension/AbstractEntry.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Feed\\Reader\\Extension\\AbstractEntry
============================================

Methods
-------

setEntryElement
+++++++++++++++

.. function:: setEntryElement()


    Set the entry DOMElement
    
    Has side effect of setting the DOMDocument for the entry.

    :param DOMElement: 

    :rtype: AbstractEntry 



getEntryElement
+++++++++++++++

.. function:: getEntryElement()


    Get the entry DOMElement

    :rtype: DOMElement 



setEntryKey
+++++++++++

.. function:: setEntryKey()


    Set the entry key

    :param string: 

    :rtype: AbstractEntry 



getDomDocument
++++++++++++++

.. function:: getDomDocument()


    Get the DOM

    :rtype: DOMDocument 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get the Entry's encoding

    :rtype: string 



setType
+++++++

.. function:: setType()


    Set the entry type
    
    Has side effect of setting xpath prefix

    :param string: 

    :rtype: AbstractEntry 



getType
+++++++

.. function:: getType()


    Get the entry type

    :rtype: string 



setXpath
++++++++

.. function:: setXpath()


    Set the XPath query

    :param DOMXPath: 

    :rtype: AbstractEntry 



getXpath
++++++++

.. function:: getXpath()


    Get the XPath query object

    :rtype: DOMXPath 



toArray
+++++++

.. function:: toArray()


    Serialize the entry to an array

    :rtype: array 



getXpathPrefix
++++++++++++++

.. function:: getXpathPrefix()


    Get the XPath prefix

    :rtype: string 



setXpathPrefix
++++++++++++++

.. function:: setXpathPrefix()


    Set the XPath prefix

    :param string: 

    :rtype: AbstractEntry 



registerNamespaces
++++++++++++++++++

.. function:: registerNamespaces()


    Register XML namespaces

    :rtype: void 



