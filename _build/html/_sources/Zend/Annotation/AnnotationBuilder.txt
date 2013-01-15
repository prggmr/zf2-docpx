.. /Form/Annotation/AnnotationBuilder.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Annotation\\AnnotationBuilder
*****************************************


Parses a class' properties for annotations in order to create a form and
input filter definition.



Methods
=======

setFormFactory
--------------

.. function:: setFormFactory($formFactory)


    Set form factory to use when building form from annotations

    :param Factory $formFactory: 

    :rtype: AnnotationBuilder 



setAnnotationManager
--------------------

.. function:: setAnnotationManager($annotationManager)


    Set annotation manager to use when building form from annotations

    :param AnnotationManager $annotationManager: 

    :rtype: AnnotationBuilder 



setEventManager
---------------

.. function:: setEventManager($events)


    Set event manager instance

    :param EventManagerInterface $events: 

    :rtype: AnnotationBuilder 



getFormFactory
--------------

.. function:: getFormFactory()


    Retrieve form factory
    
    Lazy-loads the default form factory if none is currently set.

    :rtype: Factory 



getAnnotationManager
--------------------

.. function:: getAnnotationManager()


    Retrieve annotation manager
    
    If none is currently set, creates one with default annotations.

    :rtype: AnnotationManager 



getEventManager
---------------

.. function:: getEventManager()


    Get event manager

    :rtype: EventManagerInterface 



getFormSpecification
--------------------

.. function:: getFormSpecification($entity)


    Creates and returns a form specification for use with a factory
    
    Parses the object provided, and processes annotations for the class and
    all properties. Information from annotations is then used to create
    specifications for a form, its elements, and its input filter.

    :param string|object $entity: Either an instance or a valid class name for an entity

    :throws Exception\InvalidArgumentException: if $entity is not an object or class name

    :rtype: ArrayObject 



createForm
----------

.. function:: createForm($entity)


    Create a form from an object.

    :param string|object $entity: 

    :rtype: \Zend\Form\Form 



getEntity
---------

.. function:: getEntity()


    Get the entity used to construct the form.

    :rtype: object 



configureForm
-------------

.. function:: configureForm($annotations, $reflection, $formSpec, $filterSpec)


    Configure the form specification from annotations

    :param AnnotationCollection $annotations: 
    :param ClassReflection $reflection: 
    :param ArrayObject $formSpec: 
    :param ArrayObject $filterSpec: 

    :rtype: void @triggers discoverName
@triggers configureForm



configureElement
----------------

.. function:: configureElement($annotations, $reflection, $formSpec, $filterSpec)


    Configure an element from annotations

    :param AnnotationCollection $annotations: 
    :param \Zend\Code\Reflection\PropertyReflection $reflection: 
    :param ArrayObject $formSpec: 
    :param ArrayObject $filterSpec: 

    :rtype: void @triggers checkForExclude
@triggers discoverName
@triggers configureElement



discoverName
------------

.. function:: discoverName($annotations, $reflection)


    Discover the name of the given form or element

    :param AnnotationCollection $annotations: 
    :param \Reflector $reflection: 

    :rtype: string 



$r
--

.. function:: $r()



checkForExclude
---------------

.. function:: checkForExclude($annotations)


    Determine if an element is marked to exclude from the definitions

    :param AnnotationCollection $annotations: 

    :rtype: true|false 



$r
--

.. function:: $r()



isSubclassOf
------------

.. function:: isSubclassOf($className, $type)


    Checks if the object has this class as one of its parents


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $className: 
    :param string $type: 

    :rtype: bool 





