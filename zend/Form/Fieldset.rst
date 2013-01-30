.. Form/Fieldset.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\Fieldset
====================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param  null|int|string  $name    Optional name for the element

    :param array: Optional options for the element



setOptions
++++++++++

.. function:: setOptions()


    Set options for a fieldset. Accepted options are:
    - use_as_base_fieldset: is this fieldset use as the base fieldset?

    :param array|\Traversable: 

    :rtype: Element|ElementInterface 

    :throws: Exception\InvalidArgumentException 



setFormFactory
++++++++++++++

.. function:: setFormFactory()


    Compose a form factory to use when calling add() with a non-element/fieldset

    :param Factory: 

    :rtype: Form 



getFormFactory
++++++++++++++

.. function:: getFormFactory()


    Retrieve composed form factory
    
    Lazy-loads one if none present.

    :rtype: Factory 



add
+++

.. function:: add()


    Add an element or fieldset
    
    $flags could contain metadata such as the alias under which to register
    the element or fieldset, order in which to prioritize it, etc.


    :param array|Traversable|ElementInterface: 
    :param array: 

    :rtype: Fieldset|FieldsetInterface 

    :throws: Exception\InvalidArgumentException 



has
+++

.. function:: has()


    Does the fieldset have an element/fieldset by the given name?

    :param string: 

    :rtype: bool 



get
+++

.. function:: get()


    Retrieve a named element or fieldset


    :param string: 

    :rtype: ElementInterface 



remove
++++++

.. function:: remove()


    Remove a named element or fieldset

    :param string: 

    :rtype: FieldsetInterface 



setPriority
+++++++++++

.. function:: setPriority()


    Set/change the priority of an element or fieldset

    :param string: 
    :param int: 

    :rtype: FieldsetInterface 



getElements
+++++++++++

.. function:: getElements()


    Retrieve all attached elements
    
    Storage is an implementation detail of the concrete class.

    :rtype: array|Traversable 



getFieldsets
++++++++++++

.. function:: getFieldsets()


    Retrieve all attached fieldsets
    
    Storage is an implementation detail of the concrete class.

    :rtype: array|Traversable 



setMessages
+++++++++++

.. function:: setMessages()


    Set a hash of element names/messages to use when validation fails

    :param array|Traversable: 

    :rtype: Element|ElementInterface|FieldsetInterface 

    :throws: Exception\InvalidArgumentException 



getMessages
+++++++++++

.. function:: getMessages()


    Get validation error messages, if any
    
    Returns a hash of element names/messages for all elements failing
    validation, or, if $elementName is provided, messages for that element
    only.

    :param null|string: 

    :rtype: array|Traversable 

    :throws: Exception\InvalidArgumentException 



prepareElement
++++++++++++++

.. function:: prepareElement()


    Ensures state is ready for use. Here, we append the name of the fieldsets to every elements in order to avoid
    name clashes if the same fieldset is used multiple times

    :param FormInterface: 

    :rtype: mixed|void 



populateValues
++++++++++++++

.. function:: populateValues()


    Recursively populate values of attached elements and fieldsets

    :param array|Traversable: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



count
+++++

.. function:: count()


    Countable: return count of attached elements/fieldsets

    :rtype: int 



getIterator
+++++++++++

.. function:: getIterator()


    IteratorAggregate: return internal iterator

    :rtype: PriorityQueue 



setObject
+++++++++

.. function:: setObject()


    Set the object used by the hydrator

    :param object: 

    :rtype: Fieldset|FieldsetInterface 

    :throws: Exception\InvalidArgumentException 



getObject
+++++++++

.. function:: getObject()


    Get the object used by the hydrator

    :rtype: mixed 



allowObjectBinding
++++++++++++++++++

.. function:: allowObjectBinding()


    Checks if the object can be set in this fieldset

    :param object: 

    :rtype: bool 



setHydrator
+++++++++++

.. function:: setHydrator()


    Set the hydrator to use when binding an object to the element

    :param HydratorInterface: 

    :rtype: FieldsetInterface 



getHydrator
+++++++++++

.. function:: getHydrator()


    Get the hydrator used when binding an object to the fieldset
    
    Will lazy-load Hydrator\ArraySerializable if none is present.

    :rtype: HydratorInterface 



allowValueBinding
+++++++++++++++++

.. function:: allowValueBinding()


    Checks if this fieldset can bind data

    :rtype: bool 



bindValues
++++++++++

.. function:: bindValues()


    Bind values to the bound object

    :param array: 

    :rtype: mixed|void 



setUseAsBaseFieldset
++++++++++++++++++++

.. function:: setUseAsBaseFieldset()


    Set if this fieldset is used as a base fieldset

    :param bool: 

    :rtype: Fieldset 



useAsBaseFieldset
+++++++++++++++++

.. function:: useAsBaseFieldset()


    Is this fieldset use as a base fieldset for a form ?

    :rtype: bool 



extract
+++++++

.. function:: extract()


    Extract values from the bound object

    :rtype: array 



__clone
+++++++

.. function:: __clone()


    Make a deep clone of a fieldset

    :rtype: void 



