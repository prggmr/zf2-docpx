.. /Filter/StripTags.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\StripTags
***********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Sets the filter options
    Allowed options are
        'allowTags'     => Tags which are allowed
        'allowAttribs'  => Attributes which are allowed
        'allowComments' => Are comments allowed ?

    :param string|array|Traversable $options: 



getTagsAllowed
--------------

.. function:: getTagsAllowed()


    Returns the tagsAllowed option

    :rtype: array 



setTagsAllowed
--------------

.. function:: setTagsAllowed($tagsAllowed)


    Sets the tagsAllowed option

    :param array|string $tagsAllowed: 

    :rtype: StripTags Provides a fluent interface



getAttributesAllowed
--------------------

.. function:: getAttributesAllowed()


    Returns the attributesAllowed option

    :rtype: array 



setAttributesAllowed
--------------------

.. function:: setAttributesAllowed($attributesAllowed)


    Sets the attributesAllowed option

    :param array|string $attributesAllowed: 

    :rtype: StripTags Provides a fluent interface



filter
------

.. function:: filter($value)


    Defined by Zend\Filter\FilterInterface


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $value: 

    :rtype: string 



_filterTag
----------

.. function:: _filterTag($tag)


    Filters a single tag against the current option settings

    :param string $tag: 

    :rtype: string 





Constants
---------

UNIQUE_ID_PREFIX
++++++++++++++++

Unique ID prefix used for allowing comments

