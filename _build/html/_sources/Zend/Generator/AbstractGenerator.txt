.. /Code/Generator/AbstractGenerator.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Generator\\AbstractGenerator
****************************************


@category   Zend



Methods
=======

setSourceDirty
--------------

.. function:: setSourceDirty([$isSourceDirty = true])


    setSourceDirty()

    :param bool $isSourceDirty: 

    :rtype: AbstractGenerator 



isSourceDirty
-------------

.. function:: isSourceDirty()


    isSourceDirty()

    :rtype: bool 



setIndentation
--------------

.. function:: setIndentation($indentation)


    setIndentation()

    :param string|int $indentation: 

    :rtype: AbstractGenerator 



getIndentation
--------------

.. function:: getIndentation()


    getIndentation()

    :rtype: string|int 



setSourceContent
----------------

.. function:: setSourceContent($sourceContent)


    setSourceContent()

    :param string $sourceContent: 

    :rtype: AbstractGenerator 



getSourceContent
----------------

.. function:: getSourceContent()


    getSourceContent()

    :rtype: string 



setOptions
----------

.. function:: setOptions($options)


    setOptions()

    :param array|Traversable $options: 

    :throws Exception\InvalidArgumentException: 

    :rtype: self 





Constants
---------

LINE_FEED
+++++++++

Line feed to use in place of EOL

