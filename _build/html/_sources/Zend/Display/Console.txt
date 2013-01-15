.. /Di/Display/Console.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\Display\\Console
**************************


Exporter for class definitions



Methods
=======

export
------

.. function:: export($di, [$runtimeClasses = false])


    Export

    :param Di $di: 
    :param array $runtimeClasses: 

    :rtype: void 



__construct
-----------

.. function:: __construct([$di = false])


    Constructor

    :param null|Di $di: 



addRuntimeClasses
-----------------

.. function:: addRuntimeClasses($runtimeClasses)


    @param string[] $runtimeClasses



addRuntimeClass
---------------

.. function:: addRuntimeClass($runtimeClass)


    @param string $runtimeClass



render
------

.. function:: render()



renderDefinition
----------------

.. function:: renderDefinition($definition)


    @param object $definition



renderClassDefinition
---------------------

.. function:: renderClassDefinition($definition, $class)


    @param \Zend\Di\Definition\DefinitionInterface $definition

    :param string $class: 





