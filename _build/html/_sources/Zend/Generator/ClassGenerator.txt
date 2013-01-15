.. /Code/Generator/ClassGenerator.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Generator\\ClassGenerator
*************************************


@category   Zend



Methods
=======

fromReflection
--------------

.. function:: fromReflection($classReflection)


    Build a Code Generation Php Object from a Class Reflection

    :param ClassReflection $classReflection: 

    :rtype: ClassGenerator 



fromArray
---------

.. function:: fromArray($array)


    Generate from array


    :param array $array: 

    :rtype: ClassGenerator 



__construct
-----------

.. function:: __construct([$name = false, [$namespaceName = false, [$flags = false, [$extends = false, [$interfaces = false, [$properties = false, [$methods = false, [$docBlock = false]]]]]]]])


    @param string            $name

    :param string $namespaceName: 
    :param array|string $flags: 
    :param string $extends: 
    :param array $interfaces: 
    :param array $properties: 
    :param array $methods: 
    :param DocBlockGenerator $docBlock: 



setName
-------

.. function:: setName($name)


    @param  string         $name

    :rtype: ClassGenerator 



getName
-------

.. function:: getName()


    @return string



getNamespaceName
----------------

.. function:: getNamespaceName()


    @return string



setNamespaceName
----------------

.. function:: setNamespaceName($namespaceName)


    @param  string         $namespaceName

    :rtype: ClassGenerator 



setContainingFileGenerator
--------------------------

.. function:: setContainingFileGenerator($fileGenerator)


    @param  FileGenerator  $fileGenerator

    :rtype: ClassGenerator 



getContainingFileGenerator
--------------------------

.. function:: getContainingFileGenerator()


    @return FileGenerator



setDocBlock
-----------

.. function:: setDocBlock($docBlock)


    @param  DocBlockGenerator $docBlock

    :rtype: ClassGenerator 



getDocBlock
-----------

.. function:: getDocBlock()


    @return DocBlockGenerator



setFlags
--------

.. function:: setFlags($flags)


    @param  array|string                        $flags

    :rtype: \Zend\Code\Generator\ClassGenerator 



addFlag
-------

.. function:: addFlag($flag)


    @param  string         $flag

    :rtype: ClassGenerator 



removeFlag
----------

.. function:: removeFlag($flag)


    @param  string         $flag

    :rtype: ClassGenerator 



setAbstract
-----------

.. function:: setAbstract($isAbstract)


    @param  bool                    $isAbstract

    :rtype: AbstractMemberGenerator 



isAbstract
----------

.. function:: isAbstract()


    @return bool



setFinal
--------

.. function:: setFinal($isFinal)


    @param  bool                    $isFinal

    :rtype: AbstractMemberGenerator 



isFinal
-------

.. function:: isFinal()


    @return bool



setExtendedClass
----------------

.. function:: setExtendedClass($extendedClass)


    @param  string         $extendedClass

    :rtype: ClassGenerator 



getExtendedClass
----------------

.. function:: getExtendedClass()


    @return string



setImplementedInterfaces
------------------------

.. function:: setImplementedInterfaces($implementedInterfaces)


    @param  array          $implementedInterfaces

    :rtype: ClassGenerator 



getImplementedInterfaces
------------------------

.. function:: getImplementedInterfaces()


    @return array



addProperties
-------------

.. function:: addProperties($properties)


    @param  array          $properties

    :rtype: ClassGenerator 



addProperty
-----------

.. function:: addProperty($name, [$defaultValue = false, [$flags = 16]])


    Add Property from scalars

    :param string $name: 
    :param string|array $defaultValue: 
    :param int $flags: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassGenerator 



addPropertyFromGenerator
------------------------

.. function:: addPropertyFromGenerator($property)


    Add property from PropertyGenerator

    :param string|PropertyGenerator $property: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassGenerator 



getProperties
-------------

.. function:: getProperties()


    @return PropertyGenerator[]



getProperty
-----------

.. function:: getProperty($propertyName)


    @param  string                  $propertyName

    :rtype: PropertyGenerator|false 



hasProperty
-----------

.. function:: hasProperty($propertyName)


    @param  string $propertyName

    :rtype: bool 



addMethods
----------

.. function:: addMethods($methods)


    @param  array          $methods

    :rtype: ClassGenerator 



addMethod
---------

.. function:: addMethod([$name = false, [$parameters = false, [$flags = 16, [$body = false, [$docBlock = false]]]]])


    Add Method from scalars

    :param string $name: 
    :param array $parameters: 
    :param int $flags: 
    :param string $body: 
    :param string $docBlock: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassGenerator 



addMethodFromGenerator
----------------------

.. function:: addMethodFromGenerator($method)


    Add Method from MethodGenerator

    :param MethodGenerator $method: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassGenerator 



getMethods
----------

.. function:: getMethods()


    @return MethodGenerator[]



getMethod
---------

.. function:: getMethod($methodName)


    @param  string                $methodName

    :rtype: MethodGenerator|false 



hasMethod
---------

.. function:: hasMethod($methodName)


    @param  string $methodName

    :rtype: bool 



isSourceDirty
-------------

.. function:: isSourceDirty()


    @return bool



generate
--------

.. function:: generate()


    @return string





Constants
---------

FLAG_ABSTRACT
+++++++++++++

FLAG_FINAL
++++++++++

