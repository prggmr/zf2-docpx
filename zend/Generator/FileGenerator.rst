.. Code/Generator/FileGenerator.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Code\\Generator\\FileGenerator
====================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Passes $options to {@link setOptions()}.

    :param array|\Traversable: 



fromReflectedFileName
+++++++++++++++++++++

.. function:: fromReflectedFileName()


    Use this if you intend on generating code generation objects based on the same file.
    This will keep previous changes to the file in tact during the same PHP process

    :param string: 
    :param bool: 

    :throws Exception\InvalidArgumentException: 

    :rtype: FileGenerator 



fromReflection
++++++++++++++

.. function:: fromReflection()


    @param  FileReflection $fileReflection

    :rtype: FileGenerator 



fromArray
+++++++++

.. function:: fromArray()


    @param  array $values

    :rtype: FileGenerator 



setDocBlock
+++++++++++

.. function:: setDocBlock()


    @param  DocBlockGenerator|string $docBlock


    :rtype: FileGenerator 



getDocBlock
+++++++++++

.. function:: getDocBlock()


    @return DocBlockGenerator



setRequiredFiles
++++++++++++++++

.. function:: setRequiredFiles()


    @param  array $requiredFiles

    :rtype: FileGenerator 



getRequiredFiles
++++++++++++++++

.. function:: getRequiredFiles()


    @return array



setClasses
++++++++++

.. function:: setClasses()


    @param  array $classes

    :rtype: FileGenerator 



getNamespace
++++++++++++

.. function:: getNamespace()


    @return string



setNamespace
++++++++++++

.. function:: setNamespace()


    @param  string $namespace

    :rtype: FileGenerator 



getUses
+++++++

.. function:: getUses()


    Returns an array with the first element the use statement, second is the as part.
    If $withResolvedAs is set to true, there will be a third element that is the
    "resolved" as statement, as the second part is not required in use statements

    :param bool: 

    :rtype: array 



setUses
+++++++

.. function:: setUses()


    @param  array $uses

    :rtype: FileGenerator 



setUse
++++++

.. function:: setUse()


    @param  string $use

    :param null|string: 

    :rtype: FileGenerator 



getClass
++++++++

.. function:: getClass()


    @param  string $name

    :rtype: ClassGenerator 



setClass
++++++++

.. function:: setClass()


    @param  array|string|ClassGenerator $class


    :rtype: FileGenerator 



setFilename
+++++++++++

.. function:: setFilename()


    @param  string $filename

    :rtype: FileGenerator 



getFilename
+++++++++++

.. function:: getFilename()


    @return string



getClasses
++++++++++

.. function:: getClasses()


    @return ClassGenerator[]



setBody
+++++++

.. function:: setBody()


    @param  string $body

    :rtype: FileGenerator 



getBody
+++++++

.. function:: getBody()


    @return string



isSourceDirty
+++++++++++++

.. function:: isSourceDirty()


    @return bool



generate
++++++++

.. function:: generate()


    @return string



write
+++++

.. function:: write()


    @return FileGenerator




