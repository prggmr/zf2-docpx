.. XmlRpc/Generator/AbstractGenerator.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\XmlRpc\\Generator\\AbstractGenerator
==========================================

Abstract XML generator adapter

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Construct new instance of the generator

    :param string: XML encoding, default UTF-8



_init
+++++

.. function:: _init()


    Initialize internal objects

    :rtype: void 



openElement
+++++++++++

.. function:: openElement()


    Start XML element
    
    Method opens a new XML element with an element name and an optional value

    :param string: XML tag name
    :param string: Optional value of the XML tag

    :rtype: AbstractGenerator Fluent interface



closeElement
++++++++++++

.. function:: closeElement()


    End of an XML element
    
    Method marks the end of an XML element

    :param string: XML tag name

    :rtype: AbstractGenerator Fluent interface



getEncoding
+++++++++++

.. function:: getEncoding()


    Return encoding

    :rtype: string 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set XML encoding

    :param string: 

    :rtype: AbstractGenerator 



flush
+++++

.. function:: flush()


    Returns the XML as a string and flushes all internal buffers

    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    Returns XML without document declaration

    :rtype: string 



stripDeclaration
++++++++++++++++

.. function:: stripDeclaration()


    Removes XML declaration from a string

    :param string: 

    :rtype: string 



_openElement
++++++++++++

.. function:: _openElement()


    Start XML element

    :param string: XML element name



_writeTextData
++++++++++++++

.. function:: _writeTextData()


    Write XML text data into the currently opened XML element

    :param string: 



_closeElement
+++++++++++++

.. function:: _closeElement()


    End XML element

    :param string: 



