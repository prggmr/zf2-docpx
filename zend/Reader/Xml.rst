.. Config/Reader/Xml.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Config\\Reader\\Xml
=========================

XML config reader.

Methods
-------

fromFile
++++++++

.. function:: fromFile()


    fromFile(): defined by Reader interface.


    :param string: 

    :rtype: array 

    :throws: Exception\RuntimeException 



fromString
++++++++++

.. function:: fromString()


    fromString(): defined by Reader interface.


    :param string: 

    :rtype: array|bool 

    :throws: Exception\RuntimeException 



process
+++++++

.. function:: process()


    Process data from the created XMLReader.

    :rtype: array 



processNextElement
++++++++++++++++++

.. function:: processNextElement()


    Process the next inner element.

    :rtype: mixed 



getAttributes
+++++++++++++

.. function:: getAttributes()


    Get all attributes on the current node.

    :rtype: array 



