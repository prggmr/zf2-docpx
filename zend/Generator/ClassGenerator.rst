.. Code/Generator/ClassGenerator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Code\\Generator\\ClassGenerator
=====================================

Methods
-------

fromReflection
++++++++++++++

.. function:: fromReflection()


    Build a Code Generation Php Object from a Class Reflection

    :param ClassReflection: 

    :rtype: ClassGenerator 



fromArray
+++++++++

.. function:: fromArray()


    Generate from array


    :param array: 

    :rtype: ClassGenerator 



__construct
+++++++++++

.. function:: __construct()


    @param  string $name

    :param string: 
    :param array|string: 
    :param string: 
    :param array: 
    :param array: 
    :param array: 
    :param DocBlockGenerator: 



setName
+++++++

.. function:: setName()


    @param  string $name

    :rtype: ClassGenerator 



getName
+++++++

.. function:: getName()


    @return string



setNamespaceName
++++++++++++++++

.. function:: setNamespaceName()


    @param  string $namespaceName

    :rtype: ClassGenerator 



getNamespaceName
++++++++++++++++

.. function:: getNamespaceName()


    @return string



setContainingFileGenerator
++++++++++++++++++++++++++

.. function:: setContainingFileGenerator()


    @param  FileGenerator $fileGenerator

    :rtype: ClassGenerator 



getContainingFileGenerator
++++++++++++++++++++++++++

.. function:: getContainingFileGenerator()


    @return FileGenerator



setDocBlock
+++++++++++

.. function:: setDocBlock()


    @param  DocBlockGenerator $docBlock

    :rtype: ClassGenerator 



getDocBlock
+++++++++++

.. function:: getDocBlock()


    @return DocBlockGenerator



setFlags
++++++++

.. function:: setFlags()


    @param  array|string $flags

    :rtype: ClassGenerator 



addFlag
+++++++

.. function:: addFlag()


    @param  string $flag

    :rtype: ClassGenerator 



removeFlag
++++++++++

.. function:: removeFlag()


    @param  string $flag

    :rtype: ClassGenerator 



setAbstract
+++++++++++

.. function:: setAbstract()


    @param  bool $isAbstract

    :rtype: ClassGenerator 



isAbstract
++++++++++

.. function:: isAbstract()


    @return bool



setFinal
++++++++

.. function:: setFinal()


    @param  bool $isFinal

    :rtype: ClassGenerator 



isFinal
+++++++

.. function:: isFinal()


    @return bool



setExtendedClass
++++++++++++++++

.. function:: setExtendedClass()


    @param  string $extendedClass

    :rtype: ClassGenerator 



getExtendedClass
++++++++++++++++

.. function:: getExtendedClass()


    @return string



setImplementedInterfaces
++++++++++++++++++++++++

.. function:: setImplementedInterfaces()


    @param  array $implementedInterfaces

    :rtype: ClassGenerator 



getImplementedInterfaces
++++++++++++++++++++++++

.. function:: getImplementedInterfaces()


    @return array



addProperties
+++++++++++++

.. function:: addProperties()


    @param  array $properties

    :rtype: ClassGenerator 



addProperty
+++++++++++

.. function:: addProperty()


    Add Property from scalars

    :param string: 
    :param string|array: 
    :param int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassGenerator 



addPropertyFromGenerator
++++++++++++++++++++++++

.. function:: addPropertyFromGenerator()


    Add property from PropertyGenerator

    :param string|PropertyGenerator: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassGenerator 



addUse
++++++

.. function:: addUse()


    Add a class to "use" classes

    :param string: 



getProperties
+++++++++++++

.. function:: getProperties()


    @return PropertyGenerator[]



getProperty
+++++++++++

.. function:: getProperty()


    @param  string $propertyName

    :rtype: PropertyGenerator|false 



getUses
+++++++

.. function:: getUses()


    Returns the "use" classes

    :rtype: array 



hasProperty
+++++++++++

.. function:: hasProperty()


    @param  string $propertyName

    :rtype: bool 



addMethods
++++++++++

.. function:: addMethods()


    @param  array $methods

    :rtype: ClassGenerator 



addMethod
+++++++++

.. function:: addMethod()


    Add Method from scalars

    :param string: 
    :param array: 
    :param int: 
    :param string: 
    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassGenerator 



addMethodFromGenerator
++++++++++++++++++++++

.. function:: addMethodFromGenerator()


    Add Method from MethodGenerator

    :param MethodGenerator: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassGenerator 



getMethods
++++++++++

.. function:: getMethods()


    @return MethodGenerator[]



getMethod
+++++++++

.. function:: getMethod()


    @param  string $methodName

    :rtype: MethodGenerator|false 



hasMethod
+++++++++

.. function:: hasMethod()


    @param  string $methodName

    :rtype: bool 



isSourceDirty
+++++++++++++

.. function:: isSourceDirty()


    @return bool



generate
++++++++

.. function:: generate()


    @return string





Constants
---------

FLAG_ABSTRACT
+++++++++++++

FLAG_FINAL
++++++++++

