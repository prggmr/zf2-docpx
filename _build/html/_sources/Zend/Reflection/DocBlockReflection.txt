.. /Code/Reflection/DocBlockReflection.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Reflection\\DocBlockReflection
******************************************


@category   Zend



Methods
=======

export
------

.. function:: export()


    Export reflection
    
    Required by the Reflector interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: void 



__construct
-----------

.. function:: __construct($commentOrReflector, [$tagManager = false])


    Constructor

    :param Reflector|string $commentOrReflector: 
    :param null|\Zend\Code\Reflection\DocBlock\TagManager $tagManager: 

    :throws Exception\InvalidArgumentException: 

    :rtype: DocBlockReflection 



getContents
-----------

.. function:: getContents()


    Retrieve contents of DocBlock

    :rtype: string 



getStartLine
------------

.. function:: getStartLine()


    Get start line (position) of DocBlock

    :rtype: int 



getEndLine
----------

.. function:: getEndLine()


    Get last line (position) of DocBlock

    :rtype: int 



getShortDescription
-------------------

.. function:: getShortDescription()


    Get DocBlock short description

    :rtype: string 



getLongDescription
------------------

.. function:: getLongDescription()


    Get DocBlock long description

    :rtype: string 



hasTag
------

.. function:: hasTag($name)


    Does the DocBlock contain the given annotation tag?

    :param string $name: 

    :rtype: bool 



getTag
------

.. function:: getTag($name)


    Retrieve the given DocBlock tag

    :param string $name: 

    :rtype: DocBlock\Tag\TagInterface|false 



getTags
-------

.. function:: getTags([$filter = false])


    Get all DocBlock annotation tags

    :param string $filter: 

    :rtype: array Array of \Zend\Code\Reflection\ReflectionDocBlockTag



reflect
-------

.. function:: reflect()


    Parse the DocBlock

    :rtype: void 



toString
--------

.. function:: toString()



__toString
----------

.. function:: __toString()


    Serialize to string
    
    Required by the Reflector interface

    :rtype: string 





