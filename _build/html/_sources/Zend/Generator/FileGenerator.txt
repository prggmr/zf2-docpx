.. /Code/Generator/FileGenerator.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Generator\\FileGenerator
************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor
    
    Passes $options to {@link setOptions()}.

    :param array|\Traversable $options: 



fromReflectedFileName
---------------------

.. function:: fromReflectedFileName($filePath, [$includeIfNotAlreadyIncluded = true])


    fromReflectedFilePath() - use this if you intend on generating code generation objects based on the same file.
    This will keep previous changes to the file in tact during the same PHP process

    :param string $filePath: 
    :param bool $includeIfNotAlreadyIncluded: 

    :throws Exception\InvalidArgumentException: 

    :rtype: FileGenerator 



fromReflection
--------------

.. function:: fromReflection($fileReflection)


    fromReflection()

    :param FileReflection $fileReflection: 

    :rtype: FileGenerator 



fromArray
---------

.. function:: fromArray($values)



setDocBlock
-----------

.. function:: setDocBlock($docBlock)


    setDocBlock() Set the DocBlock

    :param DocBlockGenerator|string $docBlock: 

    :throws Exception\InvalidArgumentException: 

    :rtype: FileGenerator 



getDocBlock
-----------

.. function:: getDocBlock()


    Get DocBlock

    :rtype: DocBlockGenerator 



setRequiredFiles
----------------

.. function:: setRequiredFiles($requiredFiles)


    setRequiredFiles

    :param array $requiredFiles: 

    :rtype: FileGenerator 



getRequiredFiles
----------------

.. function:: getRequiredFiles()


    getRequiredFiles()

    :rtype: array 



setClasses
----------

.. function:: setClasses($classes)


    setClasses()

    :param array $classes: 

    :rtype: FileGenerator 



getNamespace
------------

.. function:: getNamespace()


    getNamespace()

    :rtype: string 



setNamespace
------------

.. function:: setNamespace($namespace)


    setNamespace()

    :param $namespace: 

    :rtype: FileGenerator 



getUses
-------

.. function:: getUses([$withResolvedAs = false])


    getUses()
    
    Returns an array with the first element the use statement, second is the as part.
    If $withResolvedAs is set to true, there will be a third element that is the
    "resolved" as statement, as the second part is not required in use statements

    :param bool $withResolvedAs: 

    :rtype: array 



setUses
-------

.. function:: setUses($uses)


    setUses()

    :param array $uses: 

    :rtype: FileGenerator 



setUse
------

.. function:: setUse($use, [$as = false])


    setUse()

    :param string $use: 
    :param string $as: 

    :rtype: FileGenerator 



getClass
--------

.. function:: getClass([$name = false])


    getClass()

    :param string $name: 

    :rtype: ClassGenerator 



setClass
--------

.. function:: setClass($class)


    setClass()

    :param array|string|ClassGenerator $class: 

    :throws Exception\InvalidArgumentException: 

    :rtype: FileGenerator 



setFilename
-----------

.. function:: setFilename($filename)


    setFilename()

    :param string $filename: 

    :rtype: FileGenerator 



getFilename
-----------

.. function:: getFilename()


    getFilename()

    :rtype: string 



getClasses
----------

.. function:: getClasses()


    getClasses()

    :rtype: ClassGenerator[] Array of ClassGenerators



setBody
-------

.. function:: setBody($body)


    setBody()

    :param string $body: 

    :rtype: FileGenerator 



getBody
-------

.. function:: getBody()


    getBody()

    :rtype: string 



isSourceDirty
-------------

.. function:: isSourceDirty()


    isSourceDirty()

    :rtype: bool 



generate
--------

.. function:: generate()


    generate()

    :rtype: string 



write
-----

.. function:: write()





