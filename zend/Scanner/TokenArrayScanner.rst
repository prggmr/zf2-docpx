.. Code/Scanner/TokenArrayScanner.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Code\\Scanner\\TokenArrayScanner
======================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param null|array $tokens

    :param null|AnnotationManager: 



getAnnotationManager
++++++++++++++++++++

.. function:: getAnnotationManager()


    @return AnnotationManager



getDocComment
+++++++++++++

.. function:: getDocComment()


    Get doc comment


    :rtype: string 



getNamespaces
+++++++++++++

.. function:: getNamespaces()


    @return array



getUses
+++++++

.. function:: getUses()


    @param  null|string $namespace

    :rtype: array|null 



getIncludes
+++++++++++

.. function:: getIncludes()


    @return array



getClassNames
+++++++++++++

.. function:: getClassNames()


    @return array



getClasses
++++++++++

.. function:: getClasses()


    @return ClassScanner[]



getClass
++++++++

.. function:: getClass()


    Return the class object from this scanner

    :param string|int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassScanner 



getClassNameInformation
+++++++++++++++++++++++

.. function:: getClassNameInformation()


    @param  string $className

    :rtype: bool|null|NameInformation 



getFunctionNames
++++++++++++++++

.. function:: getFunctionNames()


    @return array



getFunctions
++++++++++++

.. function:: getFunctions()


    @return array



export
++++++

.. function:: export()


    Export

    :param $tokens: 



__toString
++++++++++

.. function:: __toString()



scan
++++

.. function:: scan()


    Scan





hasNamespace
++++++++++++

.. function:: hasNamespace()


    Check for namespace

    :param string: 

    :rtype: bool 



getUsesNoScan
+++++++++++++

.. function:: getUsesNoScan()


    @param  string $namespace

    :rtype: null|array 

    :throws: Exception\InvalidArgumentException 



