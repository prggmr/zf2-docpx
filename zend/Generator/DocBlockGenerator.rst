.. /Code/Generator/DocBlockGenerator.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Generator\\DocBlockGenerator
****************************************


@category   Zend



Methods
=======

fromReflection
--------------

.. function:: fromReflection($reflectionDocBlock)


    Build a DocBlock generator object from a reflection object

    :param DocBlockReflection $reflectionDocBlock: 

    :rtype: DocBlockGenerator 



fromArray
---------

.. function:: fromArray($array)


    Generate from array


    :param array $array: 

    :rtype: DocBlockGenerator 



__construct
-----------

.. function:: __construct([$shortDescription = false, [$longDescription = false, [$tags = false]]])


    @param string $shortDescription

    :param string $longDescription: 
    :param array $tags: 



setShortDescription
-------------------

.. function:: setShortDescription($shortDescription)


    @param  string            $shortDescription

    :rtype: DocBlockGenerator 



getShortDescription
-------------------

.. function:: getShortDescription()


    @return string



setLongDescription
------------------

.. function:: setLongDescription($longDescription)


    @param  string            $longDescription

    :rtype: DocBlockGenerator 



getLongDescription
------------------

.. function:: getLongDescription()


    @return string



setTags
-------

.. function:: setTags($tags)


    @param  array             $tags

    :rtype: DocBlockGenerator 



setTag
------

.. function:: setTag($tag)


    @param  array|DocBlock\Tag                 $tag


    :rtype: DocBlockGenerator 



getTags
-------

.. function:: getTags()


    @return DocBlock\Tag[]



generate
--------

.. function:: generate()


    @return string



docCommentize
-------------

.. function:: docCommentize($content)


    @param  string $content

    :rtype: string 





