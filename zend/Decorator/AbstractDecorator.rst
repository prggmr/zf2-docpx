.. Tag/Cloud/Decorator/AbstractDecorator.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Tag\\Cloud\\Decorator\\AbstractDecorator
==============================================

Abstract class for decorators

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new decorator with options

    :param array|Traversable: 



setOptions
++++++++++

.. function:: setOptions()


    Set options from array

    :param array: Configuration for the decorator

    :rtype: AbstractTag 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get encoding

    :rtype: string 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set encoding

    :param string: 

    :rtype: HTMLCloud 



setEscaper
++++++++++

.. function:: setEscaper()


    Set Escaper instance

    :param Escaper: 

    :rtype: HtmlCloud 



getEscaper
++++++++++

.. function:: getEscaper()


    Retrieve Escaper instance
    
    If none registered, instantiates and registers one using current encoding.

    :rtype: Escaper 



validateElementName
+++++++++++++++++++

.. function:: validateElementName()


    Validate an HTML element name

    :param string: 

    :throws Exception\InvalidElementNameException: 



validateAttributeName
+++++++++++++++++++++

.. function:: validateAttributeName()


    Validate an HTML attribute name

    :param string: 

    :throws Exception\InvalidAttributeNameException: 



wrapTag
+++++++

.. function:: wrapTag()



