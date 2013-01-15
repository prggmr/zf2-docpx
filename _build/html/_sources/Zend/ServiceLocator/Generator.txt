.. /Di/ServiceLocator/Generator.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\ServiceLocator\\Generator
***********************************


Generator that creates the body of a service locator that can emulate the logic of the given Zend\Di\Di instance
without class definitions



Methods
=======

__construct
-----------

.. function:: __construct($injector)


    Constructor
    
    Requires a DependencyInjection manager on which to operate.

    :param Di $injector: 



setContainerClass
-----------------

.. function:: setContainerClass($name)


    Set the class name for the generated service locator container

    :param string $name: 

    :rtype: Generator 



setNamespace
------------

.. function:: setNamespace($namespace)


    Set the namespace to use for the generated class file

    :param string $namespace: 

    :rtype: Generator 



getCodeGenerator
----------------

.. function:: getCodeGenerator([$filename = false])


    Construct, configure, and return a PHP class file code generation object
    
    Creates a Zend\Code\Generator\FileGenerator object that has
    created the specified class and service locator methods.

    :param null|string $filename: 

    :throws \Zend\Di\Exception\RuntimeException: 

    :rtype: FileGenerator 



reduceAliases
-------------

.. function:: reduceAliases($aliasList)


    Reduces aliases
    
    Takes alias list and reduces it to a 2-dimensional array of
    class names pointing to an array of aliases that resolve to
    it.

    :param array $aliasList: 

    :rtype: array 



getCodeGenMethodFromAlias
-------------------------

.. function:: getCodeGenMethodFromAlias($alias, $class)


    Create a PhpMethod code generation object named after a given alias

    :param string $alias: 
    :param string $class: Class to which alias refers

    :rtype: MethodGenerator 



normalizeAlias
--------------

.. function:: normalizeAlias($alias)


    Normalize an alias to a getter method name

    :param string $alias: 

    :rtype: string 





