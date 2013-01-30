.. Di/ServiceLocator/Generator.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Di\\ServiceLocator\\Generator
===================================

Generator that creates the body of a service locator that can emulate the logic of the given Zend\Di\Di instance
without class definitions

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Requires a DependencyInjection manager on which to operate.

    :param Di: 



setContainerClass
+++++++++++++++++

.. function:: setContainerClass()


    Set the class name for the generated service locator container

    :param string: 

    :rtype: Generator 



setNamespace
++++++++++++

.. function:: setNamespace()


    Set the namespace to use for the generated class file

    :param string: 

    :rtype: Generator 



getCodeGenerator
++++++++++++++++

.. function:: getCodeGenerator()


    Construct, configure, and return a PHP class file code generation object
    
    Creates a Zend\Code\Generator\FileGenerator object that has
    created the specified class and service locator methods.

    :param null|string: 

    :throws \Zend\Di\Exception\RuntimeException: 

    :rtype: FileGenerator 



reduceAliases
+++++++++++++

.. function:: reduceAliases()


    Reduces aliases
    
    Takes alias list and reduces it to a 2-dimensional array of
    class names pointing to an array of aliases that resolve to
    it.

    :param array: 

    :rtype: array 



getCodeGenMethodFromAlias
+++++++++++++++++++++++++

.. function:: getCodeGenMethodFromAlias()


    Create a PhpMethod code generation object named after a given alias

    :param string: 
    :param string: Class to which alias refers

    :rtype: MethodGenerator 



normalizeAlias
++++++++++++++

.. function:: normalizeAlias()


    Normalize an alias to a getter method name

    :param string: 

    :rtype: string 



