.. /Form/Fieldset.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Fieldset
********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$name = false, [$options = false]])


    @param  null|int|string  $name    Optional name for the element

    :param array $options: Optional options for the element



setOptions
----------

.. function:: setOptions($options)


    Set options for a fieldset. Accepted options are:
    - use_as_base_fieldset: is this fieldset use as the base fieldset?

    :param array|\Traversable $options: 

    :rtype: Element|ElementInterface 

    :throws: Exception\InvalidArgumentException 



setFormFactory
--------------

.. function:: setFormFactory($factory)


    Compose a form factory to use when calling add() with a non-element/fieldset

    :param Factory $factory: 

    :rtype: Form 



getFormFactory
--------------

.. function:: getFormFactory()


    Retrieve composed form factory
    
    Lazy-loads one if none present.

    :rtype: Factory 



add
---

.. function:: add($elementOrFieldset, [$flags = false])


    Add an element or fieldset
    
    $flags could contain metadata such as the alias under which to register
    the element or fieldset, order in which to prioritize it, etc.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param array|Traversable|ElementInterface $elementOrFieldset: 
    :param array $flags: 

    :rtype: Fieldset|FieldsetInterface 

    :throws: Exception\InvalidArgumentException 



has
---

.. function:: has($elementOrFieldset)


    Does the fieldset have an element/fieldset by the given name?

    :param string $elementOrFieldset: 

    :rtype: bool 



get
---

.. function:: get($elementOrFieldset)


    Retrieve a named element or fieldset


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $elementOrFieldset: 

    :rtype: ElementInterface 



remove
------

.. function:: remove($elementOrFieldset)


    Remove a named element or fieldset

    :param string $elementOrFieldset: 

    :rtype: FieldsetInterface 



setPriority
-----------

.. function:: setPriority($elementOrFieldset, $priority)


    Set/change the priority of an element or fieldset

    :param string $elementOrFieldset: 
    :param int $priority: 

    :rtype: FieldsetInterface 



getElements
-----------

.. function:: getElements()


    Retrieve all attached elements
    
    Storage is an implementation detail of the concrete class.

    :rtype: array|Traversable 



getFieldsets
------------

.. function:: getFieldsets()


    Retrieve all attached fieldsets
    
    Storage is an implementation detail of the concrete class.

    :rtype: array|Traversable 



setMessages
-----------

.. function:: setMessages($messages)


    Set a hash of element names/messages to use when validation fails

    :param array|Traversable $messages: 

    :rtype: Element|ElementInterface|FieldsetInterface 

    :throws: Exception\InvalidArgumentException 



getMessages
-----------

.. function:: getMessages([$elementName = false])


    Get validation error messages, if any
    
    Returns a hash of element names/messages for all elements failing
    validation, or, if $elementName is provided, messages for that element
    only.

    :param null|string $elementName: 

    :rtype: array|Traversable 

    :throws: Exception\InvalidArgumentException 



prepareElement
--------------

.. function:: prepareElement($form)


    Ensures state is ready for use. Here, we append the name of the fieldsets to every elements in order to avoid
    name clashes if the same fieldset is used multiple times

    :param Form $form: 

    :rtype: mixed|void 



populateValues
--------------

.. function:: populateValues($data)


    Recursively populate values of attached elements and fieldsets

    :param array|Traversable $data: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



count
-----

.. function:: count()


    Countable: return count of attached elements/fieldsets

    :rtype: int 



getIterator
-----------

.. function:: getIterator()


    IteratorAggregate: return internal iterator

    :rtype: PriorityQueue 



setObject
---------

.. function:: setObject($object)


    Set the object used by the hydrator

    :param object $object: 

    :rtype: Fieldset|FieldsetInterface 

    :throws: Exception\InvalidArgumentException 



getObject
---------

.. function:: getObject()


    Get the object used by the hydrator

    :rtype: mixed 



allowObjectBinding
------------------

.. function:: allowObjectBinding($object)


    Checks if the object can be set in this fieldset

    :param object $object: 

    :rtype: bool 



setHydrator
-----------

.. function:: setHydrator($hydrator)


    Set the hydrator to use when binding an object to the element

    :param HydratorInterface $hydrator: 

    :rtype: FieldsetInterface 



getHydrator
-----------

.. function:: getHydrator()


    Get the hydrator used when binding an object to the fieldset
    
    Will lazy-load Hydrator\ArraySerializable if none is present.

    :rtype: HydratorInterface 



allowValueBinding
-----------------

.. function:: allowValueBinding()


    Checks if this fieldset can bind data

    :rtype: bool 



bindValues
----------

.. function:: bindValues([$values = false])


    Bind values to the bound object

    :param array $values: 

    :rtype: mixed|void 



setUseAsBaseFieldset
--------------------

.. function:: setUseAsBaseFieldset($useAsBaseFieldset)


    Set if this fieldset is used as a base fieldset

    :param bool $useAsBaseFieldset: 

    :rtype: Fieldset 



useAsBaseFieldset
-----------------

.. function:: useAsBaseFieldset()


    Is this fieldset use as a base fieldset for a form ?

    :rtype: bool 



extract
-------

.. function:: extract()


    Extract values from the bound object

    :rtype: array 



__clone
-------

.. function:: __clone()


    Make a deep clone of a fieldset

    :rtype: void 





