.. Code/Reflection/FileReflection.php generated using docpx on 01/30/13 03:32am


Zend\\Code\\Reflection\\FileReflection
======================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param  string $filename




export
------

.. function:: export()


    Required by the Reflector interface.


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


    @return string



getDocBlock
-----------

.. function:: getDocBlock()


    @return DocBlockReflection



getNamespaces
-------------

.. function:: getNamespaces()


    @return array



getNamespace
------------

.. function:: getNamespace()


    @return string



getUses
-------

.. function:: getUses()


    @return array



getClasses
----------

.. function:: getClasses()


    Return the reflection classes of the classes found inside this file

    :rtype: ClassReflection[] 



getFunctions
------------

.. function:: getFunctions()


    Return the reflection functions of the functions found inside this file

    :rtype: FunctionReflection[] 



getClass
--------

.. function:: getClass()


    Retrieve the reflection class of a given class found in this file

    :param null|string: 

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


    :rtype: string 



reflect
-------

.. function:: reflect()


    This method does the work of "reflecting" the file
    
    Uses Zend\Code\Scanner\FileScanner to gather file information

    :rtype: void 



checkFileDocBlock
-----------------

.. function:: checkFileDocBlock()


    Validate / check a file level DocBlock

    :param array: Array of tokenizer tokens

    :rtype: void 



