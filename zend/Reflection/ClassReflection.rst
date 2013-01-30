.. Code/Reflection/ClassReflection.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Code\\Reflection\\ClassReflection
=======================================

Methods
-------

getDeclaringFile
++++++++++++++++

.. function:: getDeclaringFile()


    Return the reflection file of the declaring file.

    :rtype: FileReflection 



getDocBlock
+++++++++++

.. function:: getDocBlock()


    Return the classes DocBlock reflection object

    :rtype: DocBlockReflection 

    :throws: Exception\ExceptionInterface for missing DocBock or invalid reflection class



getAnnotations
++++++++++++++

.. function:: getAnnotations()


    @param  AnnotationManager $annotationManager

    :rtype: AnnotationCollection 



getStartLine
++++++++++++

.. function:: getStartLine()


    Return the start line of the class

    :param bool: 

    :rtype: int 



getContents
+++++++++++

.. function:: getContents()


    Return the contents of the class

    :param bool: 

    :rtype: string 



getInterfaces
+++++++++++++

.. function:: getInterfaces()


    Get all reflection objects of implemented interfaces

    :rtype: ClassReflection[] 



getMethod
+++++++++

.. function:: getMethod()


    Return method reflection by name

    :param string: 

    :rtype: MethodReflection 



getMethods
++++++++++

.. function:: getMethods()


    Get reflection objects of all methods

    :param string: 

    :rtype: MethodReflection[] 



getParentClass
++++++++++++++

.. function:: getParentClass()


    Get parent reflection class of reflected class

    :rtype: ClassReflection|bool 



getProperty
+++++++++++

.. function:: getProperty()


    Return reflection property of this class by name

    :param string: 

    :rtype: PropertyReflection 



getProperties
+++++++++++++

.. function:: getProperties()


    Return reflection properties of this class

    :param int: 

    :rtype: PropertyReflection[] 



toString
++++++++

.. function:: toString()



__toString
++++++++++

.. function:: __toString()



