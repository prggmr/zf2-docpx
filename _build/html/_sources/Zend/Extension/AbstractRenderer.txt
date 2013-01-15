.. /Feed/Writer/Extension/AbstractRenderer.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\Extension\\AbstractRenderer
***********************************************


@category Zend



Methods
=======

setDataContainer
----------------

.. function:: setDataContainer($container)


    Set the data container

    :param mixed $container: 

    :rtype: AbstractRenderer 



setEncoding
-----------

.. function:: setEncoding($enc)


    Set feed encoding

    :param string $enc: 

    :rtype: AbstractRenderer 



getEncoding
-----------

.. function:: getEncoding()


    Get feed encoding

    :rtype: string 



setDomDocument
--------------

.. function:: setDomDocument($dom, $base)


    Set DOMDocument and DOMElement on which to operate

    :param DOMDocument $dom: 
    :param DOMElement $base: 

    :rtype: AbstractRenderer 



getDataContainer
----------------

.. function:: getDataContainer()


    Get data container being rendered

    :rtype: mixed 



setType
-------

.. function:: setType($type)


    Set feed type

    :param string $type: 

    :rtype: AbstractRenderer 



getType
-------

.. function:: getType()


    Get feedtype

    :rtype: string 



setRootElement
--------------

.. function:: setRootElement($root)


    Set root element of document

    :param DOMElement $root: 

    :rtype: AbstractRenderer 



getRootElement
--------------

.. function:: getRootElement()


    Get root element

    :rtype: DOMElement 



_appendNamespaces
-----------------

.. function:: _appendNamespaces()


    Append namespaces to feed

    :rtype: void 





