.. /Code/Reflection/MethodReflection.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Reflection\\MethodReflection
****************************************


@category   Zend



Methods
=======

getDocBlock
-----------

.. function:: getDocBlock()


    Retrieve method DocBlock reflection

    :rtype: DocBlockReflection|false 



getAnnotations
--------------

.. function:: getAnnotations($annotationManager)


    @param AnnotationManager $annotationManager

    :rtype: AnnotationCollection 



getStartLine
------------

.. function:: getStartLine([$includeDocComment = false])


    Get start line (position) of method

    :param bool $includeDocComment: 

    :rtype: int 



getDeclaringClass
-----------------

.. function:: getDeclaringClass()


    Get reflection of declaring class

    :rtype: ClassReflection 



getParameters
-------------

.. function:: getParameters()


    Get all method parameter reflection objects

    :rtype: ReflectionParameter[] 



getContents
-----------

.. function:: getContents([$includeDocBlock = true])


    Get method contents

    :param bool $includeDocBlock: 

    :rtype: string 



getBody
-------

.. function:: getBody()


    Get method body

    :rtype: string 



toString
--------

.. function:: toString()



__toString
----------

.. function:: __toString()





