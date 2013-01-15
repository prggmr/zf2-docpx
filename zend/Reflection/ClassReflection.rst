.. /Code/Reflection/ClassReflection.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Reflection\\ClassReflection
***************************************


@category   Zend



Methods
=======

getDeclaringFile
----------------

.. function:: getDeclaringFile()


    Return the reflection file of the declaring file.

    :rtype: FileReflection 



getDocBlock
-----------

.. function:: getDocBlock()


    Return the classes DocBlock reflection object

    :rtype: DocBlockReflection 

    :throws: \Zend\Code\Reflection\Exception\ExceptionInterface for missing DocBock or invalid reflection class



getAnnotations
--------------

.. function:: getAnnotations($annotationManager)


    @param  Annotation\AnnotationManager $annotationManager

    :rtype: Annotation\AnnotationCollection 



getStartLine
------------

.. function:: getStartLine([$includeDocComment = false])


    Return the start line of the class

    :param bool $includeDocComment: 

    :rtype: int 



getContents
-----------

.. function:: getContents([$includeDocBlock = true])


    Return the contents of the class

    :param bool $includeDocBlock: 

    :rtype: string 



getInterfaces
-------------

.. function:: getInterfaces()


    Get all reflection objects of implemented interfaces

    :rtype: ClassReflection[] 



getMethod
---------

.. function:: getMethod($name)


    Return method reflection by name

    :param string $name: 

    :rtype: MethodReflection 



getMethods
----------

.. function:: getMethods([$filter = -1])


    Get reflection objects of all methods

    :param string $filter: 

    :rtype: MethodReflection[] 



getParentClass
--------------

.. function:: getParentClass()


    Get parent reflection class of reflected class

    :rtype: \Zend\Code\Reflection\ClassReflection|bool 



getProperty
-----------

.. function:: getProperty($name)


    Return reflection property of this class by name

    :param string $name: 

    :rtype: PropertyReflection 



getProperties
-------------

.. function:: getProperties([$filter = -1])


    Return reflection properties of this class

    :param int $filter: 

    :rtype: PropertyReflection[] 



toString
--------

.. function:: toString()



__toString
----------

.. function:: __toString()





