.. /Code/Scanner/TokenArrayScanner.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Scanner\\TokenArrayScanner
**************************************



Methods
=======

__construct
-----------

.. function:: __construct($tokens, [$annotationManager = false])


    @param null|array             $tokens

    :param null|AnnotationManager $annotationManager: 



getAnnotationManager
--------------------

.. function:: getAnnotationManager()



getDocComment
-------------

.. function:: getDocComment()


    @todo Assignment of $this->docComment should probably be done in scan()
          and then $this->getDocComment() just retrieves it.



getNamespaces
-------------

.. function:: getNamespaces()



getUses
-------

.. function:: getUses([$namespace = false])


    Get uses

    :param null|string $namespace: 

    :rtype: array|null 



getIncludes
-----------

.. function:: getIncludes()



getClassNames
-------------

.. function:: getClassNames()


    Get class names

    :rtype: string[] 



getClasses
----------

.. function:: getClasses()


    Get classes

    :rtype: ClassScanner[] 



getClass
--------

.. function:: getClass($name)


    Return the class object from this scanner

    :param string|int $name: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassScanner 



getClassNameInformation
-----------------------

.. function:: getClassNameInformation($className)


    Get class name information

    :param string $className: 

    :rtype: bool|null|NameInformation 



getFunctionNames
----------------

.. function:: getFunctionNames()


    Get function names

    :rtype: string[] 



getFunctions
------------

.. function:: getFunctions()



export
------

.. function:: export($tokens)



__toString
----------

.. function:: __toString()



scan
----

.. function:: scan()


    @todo: $this->docComment should be assigned for valid docblock during
           the scan instead of $this->getDocComment() (starting with
           T_DOC_COMMENT case)



use
---

.. function:: use()


    Variables & Setup



use
---

.. function:: use()



use
---

.. function:: use()



use
---

.. function:: use()



use
---

.. function:: use()



getUsesNoScan
-------------

.. function:: getUsesNoScan($namespace)


    END FINITE STATE MACHINE FOR SCANNING TOKENS





