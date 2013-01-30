.. Filter/StripTags.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Filter\\StripTags
=======================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets the filter options
    Allowed options are
        'allowTags'     => Tags which are allowed
        'allowAttribs'  => Attributes which are allowed
        'allowComments' => Are comments allowed ?

    :param string|array|Traversable: 



getTagsAllowed
++++++++++++++

.. function:: getTagsAllowed()


    Returns the tagsAllowed option

    :rtype: array 



setTagsAllowed
++++++++++++++

.. function:: setTagsAllowed()


    Sets the tagsAllowed option

    :param array|string: 

    :rtype: StripTags Provides a fluent interface



getAttributesAllowed
++++++++++++++++++++

.. function:: getAttributesAllowed()


    Returns the attributesAllowed option

    :rtype: array 



setAttributesAllowed
++++++++++++++++++++

.. function:: setAttributesAllowed()


    Sets the attributesAllowed option

    :param array|string: 

    :rtype: StripTags Provides a fluent interface



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\FilterInterface


    :param string: 

    :rtype: string 



_filterTag
++++++++++

.. function:: _filterTag()


    Filters a single tag against the current option settings

    :param string: 

    :rtype: string 





Constants
---------

UNIQUE_ID_PREFIX
++++++++++++++++

Unique ID prefix used for allowing comments

