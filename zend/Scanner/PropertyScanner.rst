.. Code/Scanner/PropertyScanner.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Code\\Scanner\\PropertyScanner
====================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array: 
    :param NameInformation: 



setClass
++++++++

.. function:: setClass()


    @param string $class



setScannerClass
+++++++++++++++

.. function:: setScannerClass()


    @param ClassScanner $scannerClass



getClassScanner
+++++++++++++++

.. function:: getClassScanner()


    @return ClassScanner



getName
+++++++

.. function:: getName()


    @return string



isPublic
++++++++

.. function:: isPublic()


    @return bool



isPrivate
+++++++++

.. function:: isPrivate()


    @return bool



isProtected
+++++++++++

.. function:: isProtected()


    @return bool



isStatic
++++++++

.. function:: isStatic()


    @return bool



getValue
++++++++

.. function:: getValue()


    @return string



getDocComment
+++++++++++++

.. function:: getDocComment()


    @return string



getAnnotations
++++++++++++++

.. function:: getAnnotations()


    @param Annotation\AnnotationManager $annotationManager

    :rtype: AnnotationScanner 



__toString
++++++++++

.. function:: __toString()


    @return string



scan
++++

.. function:: scan()


    Scan tokens




