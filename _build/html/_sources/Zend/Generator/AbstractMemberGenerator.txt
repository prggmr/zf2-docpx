.. /Code/Generator/AbstractMemberGenerator.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Generator\\AbstractMemberGenerator
**********************************************


@category   Zend



Methods
=======

setFlags
--------

.. function:: setFlags($flags)


    Set flags

    :param int|array $flags: 

    :rtype: AbstractMemberGenerator 



addFlag
-------

.. function:: addFlag($flag)


    Add flag

    :param int $flag: 

    :rtype: AbstractMemberGenerator 



removeFlag
----------

.. function:: removeFlag($flag)


    Remove flag

    :param int $flag: 

    :rtype: AbstractMemberGenerator 



setDocBlock
-----------

.. function:: setDocBlock($docBlock)


    Set the DocBlock

    :param DocBlockGenerator|string $docBlock: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractMemberGenerator 



getDocBlock
-----------

.. function:: getDocBlock()


    getDocBlock()

    :rtype: DocBlockGenerator 



setAbstract
-----------

.. function:: setAbstract($isAbstract)


    setAbstract()

    :param bool $isAbstract: 

    :rtype: AbstractMemberGenerator 



isAbstract
----------

.. function:: isAbstract()


    isAbstract()

    :rtype: bool 



setFinal
--------

.. function:: setFinal($isFinal)


    setFinal()

    :param bool $isFinal: 

    :rtype: AbstractMemberGenerator 



isFinal
-------

.. function:: isFinal()


    isFinal()

    :rtype: bool 



setStatic
---------

.. function:: setStatic($isStatic)


    setStatic()

    :param bool $isStatic: 

    :rtype: AbstractMemberGenerator 



isStatic
--------

.. function:: isStatic()


    isStatic()

    :rtype: bool 



setVisibility
-------------

.. function:: setVisibility($visibility)


    setVisibility()

    :param string $visibility: 

    :rtype: AbstractMemberGenerator 



getVisibility
-------------

.. function:: getVisibility()


    getVisibility()

    :rtype: string 



setName
-------

.. function:: setName($name)


    setName()

    :param string $name: 

    :rtype: AbstractMemberGenerator 



getName
-------

.. function:: getName()


    getName()

    :rtype: string 





Constants
---------

FLAG_ABSTRACT
+++++++++++++

FLAG_FINAL
++++++++++

FLAG_STATIC
+++++++++++

FLAG_PUBLIC
+++++++++++

FLAG_PROTECTED
++++++++++++++

FLAG_PRIVATE
++++++++++++

VISIBILITY_PUBLIC
+++++++++++++++++

VISIBILITY_PROTECTED
++++++++++++++++++++

VISIBILITY_PRIVATE
++++++++++++++++++

