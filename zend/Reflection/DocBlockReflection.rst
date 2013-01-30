.. Code/Reflection/DocBlockReflection.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Code\\Reflection\\DocBlockReflection
==========================================

Methods
-------

export
++++++

.. function:: export()


    Export reflection
    
    Required by the Reflector interface.


    :rtype: void 



__construct
+++++++++++

.. function:: __construct()


    @param  Reflector|string $commentOrReflector

    :param null|DocBlockTagManager: 

    :throws Exception\InvalidArgumentException: 

    :rtype: DocBlockReflection 



getContents
+++++++++++

.. function:: getContents()


    Retrieve contents of DocBlock

    :rtype: string 



getStartLine
++++++++++++

.. function:: getStartLine()


    Get start line (position) of DocBlock

    :rtype: int 



getEndLine
++++++++++

.. function:: getEndLine()


    Get last line (position) of DocBlock

    :rtype: int 



getShortDescription
+++++++++++++++++++

.. function:: getShortDescription()


    Get DocBlock short description

    :rtype: string 



getLongDescription
++++++++++++++++++

.. function:: getLongDescription()


    Get DocBlock long description

    :rtype: string 



hasTag
++++++

.. function:: hasTag()


    Does the DocBlock contain the given annotation tag?

    :param string: 

    :rtype: bool 



getTag
++++++

.. function:: getTag()


    Retrieve the given DocBlock tag

    :param string: 

    :rtype: DocBlockTagInterface|false 



getTags
+++++++

.. function:: getTags()


    Get all DocBlock annotation tags

    :param string: 

    :rtype: DocBlockTagInterface[] 



reflect
+++++++

.. function:: reflect()


    Parse the DocBlock

    :rtype: void 



toString
++++++++

.. function:: toString()



__toString
++++++++++

.. function:: __toString()


    Serialize to string
    
    Required by the Reflector interface

    :rtype: string 



