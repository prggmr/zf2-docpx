.. Di/DefinitionList.php generated using docpx on 01/30/13 03:32am


Zend\\Di\\DefinitionList
========================

Class definition based on multiple definitions

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param Definition\DefinitionInterface|Definition\DefinitionInterface[] $definitions



addDefinition
-------------

.. function:: addDefinition()


    Add definitions

    :param Definition\DefinitionInterface: 
    :param bool: 

    :rtype: void 



getDefinitionsByType
--------------------

.. function:: getDefinitionsByType()


    @param  string       $type

    :rtype: Definition\DefinitionInterface[] 



getDefinitionByType
-------------------

.. function:: getDefinitionByType()


    Get definition by type

    :param string: 

    :rtype: Definition\DefinitionInterface 



getDefinitionForClass
---------------------

.. function:: getDefinitionForClass()


    @param  string                              $class

    :rtype: bool|Definition\DefinitionInterface 



forClass
--------

.. function:: forClass()


    @param  string                              $class

    :rtype: bool|Definition\DefinitionInterface 



getClasses
----------

.. function:: getClasses()


    {@inheritDoc}



hasClass
--------

.. function:: hasClass()


    {@inheritDoc}



getClassSupertypes
------------------

.. function:: getClassSupertypes()


    {@inheritDoc}



getInstantiator
---------------

.. function:: getInstantiator()


    {@inheritDoc}



hasMethods
----------

.. function:: hasMethods()


    {@inheritDoc}



hasMethod
---------

.. function:: hasMethod()


    {@inheritDoc}



getMethods
----------

.. function:: getMethods()


    {@inheritDoc}



hasMethodParameters
-------------------

.. function:: hasMethodParameters()


    {@inheritDoc}



getMethodParameters
-------------------

.. function:: getMethodParameters()


    {@inheritDoc}



