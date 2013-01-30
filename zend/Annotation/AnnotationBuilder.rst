.. Form/Annotation/AnnotationBuilder.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\Annotation\\AnnotationBuilder
=========================================

Parses a class' properties for annotations in order to create a form and
input filter definition.

Methods
-------

setFormFactory
++++++++++++++

.. function:: setFormFactory()


    Set form factory to use when building form from annotations

    :param Factory: 

    :rtype: AnnotationBuilder 



setAnnotationManager
++++++++++++++++++++

.. function:: setAnnotationManager()


    Set annotation manager to use when building form from annotations

    :param AnnotationManager: 

    :rtype: AnnotationBuilder 



setEventManager
+++++++++++++++

.. function:: setEventManager()


    Set event manager instance

    :param EventManagerInterface: 

    :rtype: AnnotationBuilder 



getFormFactory
++++++++++++++

.. function:: getFormFactory()


    Retrieve form factory
    
    Lazy-loads the default form factory if none is currently set.

    :rtype: Factory 



getAnnotationManager
++++++++++++++++++++

.. function:: getAnnotationManager()


    Retrieve annotation manager
    
    If none is currently set, creates one with default annotations.

    :rtype: AnnotationManager 



getEventManager
+++++++++++++++

.. function:: getEventManager()


    Get event manager

    :rtype: EventManagerInterface 



getFormSpecification
++++++++++++++++++++

.. function:: getFormSpecification()


    Creates and returns a form specification for use with a factory
    
    Parses the object provided, and processes annotations for the class and
    all properties. Information from annotations is then used to create
    specifications for a form, its elements, and its input filter.

    :param string|object: Either an instance or a valid class name for an entity

    :throws Exception\InvalidArgumentException: if $entity is not an object or class name

    :rtype: ArrayObject 



createForm
++++++++++

.. function:: createForm()


    Create a form from an object.

    :param string|object: 

    :rtype: \Zend\Form\Form 



getEntity
+++++++++

.. function:: getEntity()


    Get the entity used to construct the form.

    :rtype: object 



configureForm
+++++++++++++

.. function:: configureForm()


    Configure the form specification from annotations

    :param AnnotationCollection: 
    :param ClassReflection: 
    :param ArrayObject: 
    :param ArrayObject: 

    :rtype: void @triggers discoverName
@triggers configureForm



configureElement
++++++++++++++++

.. function:: configureElement()


    Configure an element from annotations

    :param AnnotationCollection: 
    :param \Zend\Code\Reflection\PropertyReflection: 
    :param ArrayObject: 
    :param ArrayObject: 

    :rtype: void @triggers checkForExclude
@triggers discoverName
@triggers configureElement



discoverName
++++++++++++

.. function:: discoverName()


    Discover the name of the given form or element

    :param AnnotationCollection: 
    :param \Reflector: 

    :rtype: string 



checkForExclude
+++++++++++++++

.. function:: checkForExclude()


    Determine if an element is marked to exclude from the definitions

    :param AnnotationCollection: 

    :rtype: true|false 



isSubclassOf
++++++++++++

.. function:: isSubclassOf()


    Checks if the object has this class as one of its parents


    :param string: 
    :param string: 

    :rtype: bool 



