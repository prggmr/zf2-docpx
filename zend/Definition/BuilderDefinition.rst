.. /Di/Definition/BuilderDefinition.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\Definition\\BuilderDefinition
***************************************


Class definitions based on a configuration array



Methods
=======

createClassesFromArray
----------------------

.. function:: createClassesFromArray($builderData)


    Create classes from array

    :param array $builderData: 

    :rtype: void 



addClass
--------

.. function:: addClass($phpClass)


    Add class

    :param Builder\PhpClass $phpClass: 

    :rtype: BuilderDefinition 



createClass
-----------

.. function:: createClass([$name = false])


    Create a class builder object using default class builder class
    
    This method is a factory that can be used in place of addClass().

    :param null|string $name: Optional name of class to assign

    :rtype: Builder\PhpClass 



setClassBuilder
---------------

.. function:: setClassBuilder($class)


    Set the class to use with {@link createClass()}

    :param string $class: 

    :rtype: BuilderDefinition 



getClassBuilder
---------------

.. function:: getClassBuilder()


    Get the class used for {@link createClass()}
    
    This is primarily to allow developers to temporarily override
    the builder strategy.

    :rtype: string 



getClasses
----------

.. function:: getClasses()


    {@inheritDoc}



hasClass
--------

.. function:: hasClass($class)


    {@inheritDoc}



getClass
--------

.. function:: getClass($name)


    @param  string                $name

    :rtype: bool|Builder\PhpClass 



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




getMethods
----------

.. function:: getMethods($class)


    {@inheritDoc}




hasMethod
---------

.. function:: hasMethod($class, $method)


    {@inheritDoc}




hasMethodParameters
-------------------

.. function:: hasMethodParameters($class, $method)


    {@inheritDoc}



getMethodParameters
-------------------

.. function:: getMethodParameters($class, $method)


    {@inheritDoc}






