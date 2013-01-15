.. /Config/Writer/Yaml.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Writer\\Yaml
**************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$yamlEncoder = false])


    Constructor

    :param callable|string|null $yamlEncoder: 



getYamlEncoder
--------------

.. function:: getYamlEncoder()


    Get callback for decoding YAML

    :rtype: callable 



setYamlEncoder
--------------

.. function:: setYamlEncoder($yamlEncoder)


    Set callback for decoding YAML

    :param callable $yamlEncoder: the decoder to set

    :rtype: Yaml 

    :throws: Exception\InvalidArgumentException 



processConfig
-------------

.. function:: processConfig($config)


    processConfig(): defined by AbstractWriter.

    :param array $config: 

    :rtype: string 

    :throws: Exception\RuntimeException 





