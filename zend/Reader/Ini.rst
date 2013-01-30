.. Config/Reader/Ini.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Config\\Reader\\Ini
=========================

XML config reader.

Methods
-------

setNestSeparator
++++++++++++++++

.. function:: setNestSeparator()


    Set nest separator.

    :param string: 

    :rtype: self 



getNestSeparator
++++++++++++++++

.. function:: getNestSeparator()


    Get nest separator.

    :rtype: string 



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


    Process data from the parsed ini file.

    :param array: 

    :rtype: array 



buildNestedSection
++++++++++++++++++

.. function:: buildNestedSection()


    Process a nested section

    :param array: 
    :param mixed: 

    :rtype: array 



processSection
++++++++++++++

.. function:: processSection()


    Process a section.

    :param array: 

    :rtype: array 



processKey
++++++++++

.. function:: processKey()


    Process a key.

    :param string: 
    :param string: 
    :param array: 

    :rtype: array 

    :throws: Exception\RuntimeException 



