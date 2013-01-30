.. Code/Scanner/MethodScanner.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Code\\Scanner\\MethodScanner
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param  array $methodTokens

    :param NameInformation: 



setClass
++++++++

.. function:: setClass()


    @param  string $class

    :rtype: MethodScanner 



setScannerClass
+++++++++++++++

.. function:: setScannerClass()


    @param  ClassScanner  $scannerClass

    :rtype: MethodScanner 



getClassScanner
+++++++++++++++

.. function:: getClassScanner()


    @return MethodScanner



getName
+++++++

.. function:: getName()


    @return string



getLineStart
++++++++++++

.. function:: getLineStart()


    @return int



getLineEnd
++++++++++

.. function:: getLineEnd()


    @return int



getDocComment
+++++++++++++

.. function:: getDocComment()


    @return string



getAnnotations
++++++++++++++

.. function:: getAnnotations()


    @param  AnnotationManager $annotationManager

    :rtype: AnnotationScanner 



isFinal
+++++++

.. function:: isFinal()


    @return bool



isAbstract
++++++++++

.. function:: isAbstract()


    @return bool



isPublic
++++++++

.. function:: isPublic()


    @return bool



isProtected
+++++++++++

.. function:: isProtected()


    @return bool



isPrivate
+++++++++

.. function:: isPrivate()


    @return bool



isStatic
++++++++

.. function:: isStatic()


    @return bool



getNumberOfParameters
+++++++++++++++++++++

.. function:: getNumberOfParameters()


    @return int



getParameters
+++++++++++++

.. function:: getParameters()


    @param  bool $returnScanner

    :rtype: array 



getParameter
++++++++++++

.. function:: getParameter()


    @param  int|string $parameterNameOrInfoIndex

    :rtype: ParameterScanner 

    :throws: Exception\InvalidArgumentException 



getBody
+++++++

.. function:: getBody()


    @return string



export
++++++

.. function:: export()



__toString
++++++++++

.. function:: __toString()



scan
++++

.. function:: scan()



