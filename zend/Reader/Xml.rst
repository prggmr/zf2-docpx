.. /Config/Reader/Xml.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Reader\\Xml
*************************


XML config reader.



Methods
=======

fromFile
--------

.. function:: fromFile($filename)


    fromFile(): defined by Reader interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $filename: 

    :rtype: array 

    :throws: Exception\RuntimeException 



$error
------

.. function:: $error()



fromString
----------

.. function:: fromString($string)


    fromString(): defined by Reader interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $string: 

    :rtype: array|bool 

    :throws: Exception\RuntimeException 



$error
------

.. function:: $error()



process
-------

.. function:: process()


    Process data from the created XMLReader.

    :rtype: array 



processNextElement
------------------

.. function:: processNextElement()


    Process the next inner element.

    :rtype: mixed 



getAttributes
-------------

.. function:: getAttributes()


    Get all attributes on the current node.

    :rtype: array 





