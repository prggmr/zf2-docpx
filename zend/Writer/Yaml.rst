.. Config/Writer/Yaml.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Config\\Writer\\Yaml
==========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param callable|string|null: 



getYamlEncoder
++++++++++++++

.. function:: getYamlEncoder()


    Get callback for decoding YAML

    :rtype: callable 



setYamlEncoder
++++++++++++++

.. function:: setYamlEncoder()


    Set callback for decoding YAML

    :param callable: the decoder to set

    :rtype: Yaml 

    :throws: Exception\InvalidArgumentException 



processConfig
+++++++++++++

.. function:: processConfig()


    processConfig(): defined by AbstractWriter.

    :param array: 

    :rtype: string 

    :throws: Exception\RuntimeException 



