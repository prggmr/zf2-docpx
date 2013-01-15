.. /Code/Reflection/FileReflection.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Reflection\\FileReflection
**************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($filename)


    Constructor

    :param string $filename: 

    :throws Exception\RuntimeException: 

    :rtype: FileReflection 



export
------

.. function:: export()


    Export
    
    Required by the Reflector interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: null 



getFileName
-----------

.. function:: getFileName()


    Return the file name of the reflected file

    :rtype: string 



getStartLine
------------

.. function:: getStartLine()


    Get the start line - Always 1, staying consistent with the Reflection API

    :rtype: int 



getEndLine
----------

.. function:: getEndLine()


    Get the end line / number of lines

    :rtype: int 



getDocComment
-------------

.. function:: getDocComment()


    Return the doc comment

    :rtype: string 



getDocBlock
-----------

.. function:: getDocBlock()


    Return the DocBlock

    :rtype: DocBlockReflection 



getNamespaces
-------------

.. function:: getNamespaces()



getNamespace
------------

.. function:: getNamespace()


    getNamespace()

    :rtype: string 



getUses
-------

.. function:: getUses()


    getUses()

    :rtype: string[] 



getClasses
----------

.. function:: getClasses()


    Return the reflection classes of the classes found inside this file

    :rtype: array Array of \Zend\Code\Reflection\ReflectionClass instances



getFunctions
------------

.. function:: getFunctions()


    Return the reflection functions of the functions found inside this file

    :rtype: array Array of Zend_Reflection_Functions



getClass
--------

.. function:: getClass([$name = false])


    Retrieve the reflection class of a given class found in this file

    :param null|string $name: 

    :rtype: ClassReflection 

    :throws: Exception\InvalidArgumentException for invalid class name or invalid reflection class



getContents
-----------

.. function:: getContents()


    Return the full contents of file

    :rtype: string 



toString
--------

.. function:: toString()



__toString
----------

.. function:: __toString()


    Serialize to string
    
    Required by the Reflector interface


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: string 



reflect
-------

.. function:: reflect()


    This method does the work of "reflecting" the file
    
    Uses Zend\Code\Scanner\FileScanner to gather file information

    :rtype: void 



checkFileDocBlock
-----------------

.. function:: checkFileDocBlock($tokens)


    Validate / check a file level DocBlock

    :param array $tokens: Array of tokenizer tokens

    :rtype: void 





