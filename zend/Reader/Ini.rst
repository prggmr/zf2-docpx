.. /Config/Reader/Ini.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Reader\\Ini
*************************


XML config reader.



Methods
=======

setNestSeparator
----------------

.. function:: setNestSeparator($separator)


    Set nest separator.

    :param string $separator: 

    :rtype: self 



getNestSeparator
----------------

.. function:: getNestSeparator()


    Get nest separator.

    :rtype: string 



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

    :param string $string: 

    :rtype: array|bool 

    :throws: Exception\RuntimeException 



$error
------

.. function:: $error()



process
-------

.. function:: process($data)


    Process data from the parsed ini file.

    :param array $data: 

    :rtype: array 



buildNestedSection
------------------

.. function:: buildNestedSection($sections, $value)


    Process a nested section

    :param array $sections: 
    :param mixed $value: 

    :rtype: array 



processSection
--------------

.. function:: processSection($section)


    Process a section.

    :param array $section: 

    :rtype: array 



processKey
----------

.. function:: processKey($key, $value, $config)


    Process a key.

    :param string $key: 
    :param string $value: 
    :param array $config: 

    :rtype: array 

    :throws: Exception\RuntimeException 





