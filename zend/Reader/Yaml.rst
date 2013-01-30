.. Config/Reader/Yaml.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Config\\Reader\\Yaml
==========================

YAML config reader.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param callable: 



setYamlDecoder
++++++++++++++

.. function:: setYamlDecoder()


    Set callback for decoding YAML

    :param string|callable: the decoder to set

    :rtype: Yaml 

    :throws: Exception\RuntimeException 



getYamlDecoder
++++++++++++++

.. function:: getYamlDecoder()


    Get callback for decoding YAML

    :rtype: callable 



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


    Process the array for @include

    :param array: 

    :rtype: array 

    :throws: Exception\RuntimeException 



