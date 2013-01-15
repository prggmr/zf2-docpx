.. /Form/Element.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Element
*******************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$name = false, [$options = false]])


    @param  null|int|string  $name    Optional name for the element

    :param array $options: Optional options for the element

    :throws Exception\InvalidArgumentException: 



setName
-------

.. function:: setName($name)


    Set value for name

    :param string $name: 

    :rtype: Element|ElementInterface 



getName
-------

.. function:: getName()


    Get value for name

    :rtype: string|int 



setOptions
----------

.. function:: setOptions($options)


    Set options for an element. Accepted options are:
    - label: label to associate with the element
    - label_attributes: attributes to use when the label is rendered

    :param array|\Traversable $options: 

    :rtype: Element|ElementInterface 

    :throws: Exception\InvalidArgumentException 



getOptions
----------

.. function:: getOptions()


    Get defined options

    :rtype: array 



getOption
---------

.. function:: getOption($option)


    Return the specified option

    :param string $option: 

    :rtype: NULL|mixed 



setAttribute
------------

.. function:: setAttribute($key, $value)


    Set a single element attribute

    :param string $key: 
    :param mixed $value: 

    :rtype: Element|ElementInterface 



getAttribute
------------

.. function:: getAttribute($key)


    Retrieve a single element attribute

    :param $key: 

    :rtype: mixed|null 



hasAttribute
------------

.. function:: hasAttribute($key)


    Does the element has a specific attribute ?

    :param string $key: 

    :rtype: bool 



setAttributes
-------------

.. function:: setAttributes($arrayOrTraversable)


    Set many attributes at once
    
    Implementation will decide if this will overwrite or merge.

    :param array|Traversable $arrayOrTraversable: 

    :rtype: Element|ElementInterface 

    :throws: Exception\InvalidArgumentException 



getAttributes
-------------

.. function:: getAttributes()


    Retrieve all attributes at once

    :rtype: array|Traversable 



clearAttributes
---------------

.. function:: clearAttributes()


    Clear all attributes

    :rtype: Element|ElementInterface 



setValue
--------

.. function:: setValue($value)


    Set the element value

    :param mixed $value: 

    :rtype: Element 



getValue
--------

.. function:: getValue()


    Retrieve the element value

    :rtype: mixed 



setLabel
--------

.. function:: setLabel($label)


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

.. function:: setLabelAttributes($labelAttributes)


    Set the attributes to use with the label

    :param array $labelAttributes: 

    :rtype: Element|ElementInterface 



getLabelAttributes
------------------

.. function:: getLabelAttributes()


    Get the attributes to use with the label

    :rtype: array 



setMessages
-----------

.. function:: setMessages($messages)


    Set a list of messages to report when validation fails

    :param array|Traversable $messages: 

    :rtype: Element|ElementInterface 

    :throws: Exception\InvalidArgumentException 



getMessages
-----------

.. function:: getMessages()


    Get validation error messages, if any.
    
    Returns a list of validation failure messages, if any.

    :rtype: array|Traversable 





