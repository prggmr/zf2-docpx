.. Code/Generator/DocBlockGenerator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Code\\Generator\\DocBlockGenerator
========================================

Methods
-------

fromReflection
++++++++++++++

.. function:: fromReflection()


    Build a DocBlock generator object from a reflection object

    :param DocBlockReflection: 

    :rtype: DocBlockGenerator 



fromArray
+++++++++

.. function:: fromArray()


    Generate from array


    :param array: 

    :rtype: DocBlockGenerator 



__construct
+++++++++++

.. function:: __construct()


    @param  string $shortDescription

    :param string: 
    :param array: 



setShortDescription
+++++++++++++++++++

.. function:: setShortDescription()


    @param  string $shortDescription

    :rtype: DocBlockGenerator 



getShortDescription
+++++++++++++++++++

.. function:: getShortDescription()


    @return string



setLongDescription
++++++++++++++++++

.. function:: setLongDescription()


    @param  string $longDescription

    :rtype: DocBlockGenerator 



getLongDescription
++++++++++++++++++

.. function:: getLongDescription()


    @return string



setTags
+++++++

.. function:: setTags()


    @param  array $tags

    :rtype: DocBlockGenerator 



setTag
++++++

.. function:: setTag()


    @param  array|DockBlockTag $tag


    :rtype: DocBlockGenerator 



getTags
+++++++

.. function:: getTags()


    @return DockBlockTag[]



generate
++++++++

.. function:: generate()


    @return string



docCommentize
+++++++++++++

.. function:: docCommentize()


    @param  string $content

    :rtype: string 



