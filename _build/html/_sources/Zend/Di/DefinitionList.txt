.. /Di/DefinitionList.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\DefinitionList
************************


Class definition based on multiple definitions



Methods
=======

__construct
-----------

.. function:: __construct($definitions)


    @param Definition\DefinitionInterface|Definition\DefinitionInterface[] $definitions



addDefinition
-------------

.. function:: addDefinition($definition, [$addToBackOfList = true])


    Add definitions

    :param Definition\DefinitionInterface $definition: 
    :param bool $addToBackOfList: 

    :rtype: void 



getDefinitionsByType
--------------------

.. function:: getDefinitionsByType($type)


    @param  string       $type

    :rtype: Definition\DefinitionInterface[] 



getDefinitionByType
-------------------

.. function:: getDefinitionByType($type)


    Get definition by type

    :param string $type: 

    :rtype: Definition\DefinitionInterface 



getDefinitionForClass
---------------------

.. function:: getDefinitionForClass($class)


    @param  string                              $class

    :rtype: bool|Definition\DefinitionInterface 



forClass
--------

.. function:: forClass($class)


    @param  string                              $class

    :rtype: bool|Definition\DefinitionInterface 



getClasses
----------

.. function:: getClasses()


    {@inheritDoc}



hasClass
--------

.. function:: hasClass($class)


    {@inheritDoc}



getClassSupertypes
------------------

.. function:: getClassSupertypes($class)


    {@inheritDoc}



getInstantiator
---------------

.. function:: getInstantiator($class)


    {@inheritDoc}



hasMethods
----------

.. function:: hasMethods($class)


    {@inheritDoc}



hasMethod
---------

.. function:: hasMethod($class, $method)


    {@inheritDoc}



getMethods
----------

.. function:: getMethods($class)


    {@inheritDoc}



hasMethodParameters
-------------------

.. function:: hasMethodParameters($class, $method)


    {@inheritDoc}



getMethodParameters
-------------------

.. function:: getMethodParameters($class, $method)


    {@inheritDoc}





