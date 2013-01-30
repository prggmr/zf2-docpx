.. Di/Definition/BuilderDefinition.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Di\\Definition\\BuilderDefinition
=======================================

Class definitions based on a configuration array

Methods
-------

createClassesFromArray
++++++++++++++++++++++

.. function:: createClassesFromArray()


    Create classes from array

    :param array: 

    :rtype: void 



addClass
++++++++

.. function:: addClass()


    Add class

    :param Builder\PhpClass: 

    :rtype: BuilderDefinition 



createClass
+++++++++++

.. function:: createClass()


    Create a class builder object using default class builder class
    
    This method is a factory that can be used in place of addClass().

    :param null|string: Optional name of class to assign

    :rtype: Builder\PhpClass 



setClassBuilder
+++++++++++++++

.. function:: setClassBuilder()


    Set the class to use with {@link createClass()}

    :param string: 

    :rtype: BuilderDefinition 



getClassBuilder
+++++++++++++++

.. function:: getClassBuilder()


    Get the class used for {@link createClass()}
    
    This is primarily to allow developers to temporarily override
    the builder strategy.

    :rtype: string 



getClasses
++++++++++

.. function:: getClasses()


    {@inheritDoc}



hasClass
++++++++

.. function:: hasClass()


    {@inheritDoc}



getClass
++++++++

.. function:: getClass()


    @param  string                $name

    :rtype: bool|Builder\PhpClass 



getClassSupertypes
++++++++++++++++++

.. function:: getClassSupertypes()


    {@inheritDoc}




getInstantiator
+++++++++++++++

.. function:: getInstantiator()


    {@inheritDoc}




hasMethods
++++++++++

.. function:: hasMethods()


    {@inheritDoc}




getMethods
++++++++++

.. function:: getMethods()


    {@inheritDoc}




hasMethod
+++++++++

.. function:: hasMethod()


    {@inheritDoc}




hasMethodParameters
+++++++++++++++++++

.. function:: hasMethodParameters()


    {@inheritDoc}



getMethodParameters
+++++++++++++++++++

.. function:: getMethodParameters()


    {@inheritDoc}




