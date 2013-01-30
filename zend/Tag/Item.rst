.. Tag/Item.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Tag\\Item
===============

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new tag according to the options

    :param array|Traversable: 

    :throws \Zend\Tag\Exception\InvalidArgumentException: When invalid options are provided
    :throws \Zend\Tag\Exception\InvalidArgumentException: When title was not set
    :throws \Zend\Tag\Exception\InvalidArgumentException: When weight was not set



setOptions
++++++++++

.. function:: setOptions()


    Set options of the tag

    :param array: 

    :rtype: \Zend\Tag\Item 



getTitle
++++++++

.. function:: getTitle()


    Defined by Zend\Tag\TaggableInterface

    :rtype: string 



setTitle
++++++++

.. function:: setTitle()


    Set the title

    :param string: 

    :throws \Zend\Tag\Exception\InvalidArgumentException: When title is no string

    :rtype: \Zend\Tag\Item 



getWeight
+++++++++

.. function:: getWeight()


    Defined by Zend\Tag\TaggableInterface

    :rtype: float 



setWeight
+++++++++

.. function:: setWeight()


    Set the weight

    :param float: 

    :throws \Zend\Tag\Exception\InvalidArgumentException: When weight is not numeric

    :rtype: \Zend\Tag\Item 



setParams
+++++++++

.. function:: setParams()


    Set multiple params at once

    :param array: 

    :rtype: \Zend\Tag\Item 



setParam
++++++++

.. function:: setParam()


    Defined by Zend\Tag\TaggableInterface

    :param string: 
    :param mixed: 

    :rtype: \Zend\Tag\Item 



getParam
++++++++

.. function:: getParam()


    Defined by Zend\Tag\TaggableInterface

    :param string: 

    :rtype: mixed 



