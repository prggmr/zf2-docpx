.. /Config/Reader/Yaml.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Reader\\Yaml
**************************


YAML config reader.



Methods
=======

__construct
-----------

.. function:: __construct([$yamlDecoder = false])


    Constructor

    :param callable $yamlDecoder: 



setYamlDecoder
--------------

.. function:: setYamlDecoder($yamlDecoder)


    Set callback for decoding YAML

    :param string|callable $yamlDecoder: the decoder to set

    :rtype: Yaml 

    :throws: Exception\RuntimeException 



getYamlDecoder
--------------

.. function:: getYamlDecoder()


    Get callback for decoding YAML

    :rtype: callable 



fromFile
--------

.. function:: fromFile($filename)


    fromFile(): defined by Reader interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $filename: 

    :rtype: array 

    :throws: Exception\RuntimeException 



fromString
----------

.. function:: fromString($string)


    fromString(): defined by Reader interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $string: 

    :rtype: array|bool 

    :throws: Exception\RuntimeException 



process
-------

.. function:: process($data)


    Process the array for @include

    :param array $data: 

    :rtype: array 

    :throws: Exception\RuntimeException 





