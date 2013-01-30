.. Form/Element.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\Element
===================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param  null|int|string  $name    Optional name for the element

    :param array: Optional options for the element

    :throws Exception\InvalidArgumentException: 



init
----

.. function:: init()


    This function is automatically called when creating element with factory. It
    allows to perform various operations (add elements...)

    :rtype: void 



setName
-------

.. function:: setName()


    Set value for name

    :param string: 

    :rtype: Element|ElementInterface 



getName
-------

.. function:: getName()


    Get value for name

    :rtype: string|int 



setOptions
----------

.. function:: setOptions()


    Set options for an element. Accepted options are:
    - label: label to associate with the element
    - label_attributes: attributes to use when the label is rendered

    :param array|\Traversable: 

    :rtype: Element|ElementInterface 

    :throws: Exception\InvalidArgumentException 



getOptions
----------

.. function:: getOptions()


    Get defined options

    :rtype: array 



getOption
---------

.. function:: getOption()


    Return the specified option

    :param string: 

    :rtype: NULL|mixed 



setAttribute
------------

.. function:: setAttribute()


    Set a single element attribute

    :param string: 
    :param mixed: 

    :rtype: Element|ElementInterface 



getAttribute
------------

.. function:: getAttribute()


    Retrieve a single element attribute

    :param $key: 

    :rtype: mixed|null 



removeAttribute
---------------

.. function:: removeAttribute()


    Remove a single attribute

    :param string: 

    :rtype: ElementInterface 



hasAttribute
------------

.. function:: hasAttribute()


    Does the element has a specific attribute ?

    :param string: 

    :rtype: bool 



setAttributes
-------------

.. function:: setAttributes()


    Set many attributes at once
    
    Implementation will decide if this will overwrite or merge.

    :param array|Traversable: 

    :rtype: Element|ElementInterface 

    :throws: Exception\InvalidArgumentException 



getAttributes
-------------

.. function:: getAttributes()


    Retrieve all attributes at once

    :rtype: array|Traversable 



removeAttributes
----------------

.. function:: removeAttributes()


    Remove many attributes at once

    :param array: 

    :rtype: ElementInterface 



clearAttributes
---------------

.. function:: clearAttributes()


    Clear all attributes

    :rtype: Element|ElementInterface 



setValue
--------

.. function:: setValue()


    Set the element value

    :param mixed: 

    :rtype: Element 



getValue
--------

.. function:: getValue()


    Retrieve the element value

    :rtype: mixed 



setLabel
--------

.. function:: setLabel()


    Set the label used for this element

    :param $label: 

    :rtype: Element|ElementInterface 



getLabel
--------

.. function:: getLabel()


    Retrieve the label used for this element

    :rtype: string 



setLabelAttributes
------------------

.. function:: setLabelAttributes()


    Set the attributes to use with the label

    :param array: 

    :rtype: Element|ElementInterface 



getLabelAttributes
------------------

.. function:: getLabelAttributes()


    Get the attributes to use with the label

    :rtype: array 



setMessages
-----------

.. function:: setMessages()


    Set a list of messages to report when validation fails

    :param array|Traversable: 

    :rtype: Element|ElementInterface 

    :throws: Exception\InvalidArgumentException 



getMessages
-----------

.. function:: getMessages()


    Get validation error messages, if any.
    
    Returns a list of validation failure messages, if any.

    :rtype: array|Traversable 



