.. /Code/Reflection/FunctionReflection.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Reflection\\FunctionReflection
******************************************


@category   Zend



Methods
=======

getDocBlock
-----------

.. function:: getDocBlock()


    Get function DocBlock


    :rtype: DocBlockReflection 



getStartLine
------------

.. function:: getStartLine([$includeDocComment = false])


    Get start line (position) of function

    :param bool $includeDocComment: 

    :rtype: int 



getContents
-----------

.. function:: getContents([$includeDocBlock = true])


    Get contents of function

    :param bool $includeDocBlock: 

    :rtype: string 



getParameters
-------------

.. function:: getParameters()


    Get function parameters

    :rtype: ReflectionParameter[] 



getReturn
---------

.. function:: getReturn()


    Get return type tag


    :rtype: DocBlock\Tag\ReturnTag 



toString
--------

.. function:: toString()



__toString
----------

.. function:: __toString()


    Required due to bug in php

    :rtype: string 





