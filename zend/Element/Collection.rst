.. Form/Element/Collection.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\Element\\Collection
===============================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Accepted options for Collection:
    - target_element: an array or element used in the collection
    - count: number of times the element is added initially
    - allow_add: if set to true, elements can be added to the form dynamically (using JavaScript)
    - allow_remove: if set to true, elements can be removed to the form
    - should_create_template: if set to true, a template is generated (inside a <span>)
    - template_placeholder: placeholder used in the data template

    :param array|\Traversable: 

    :rtype: Collection 



allowObjectBinding
++++++++++++++++++

.. function:: allowObjectBinding()


    Checks if the object can be set in this fieldset

    :param object: 

    :rtype: bool 



setObject
+++++++++

.. function:: setObject()


    Set the object used by the hydrator
    In this case the "object" is a collection of objects

    :param array|\Traversable: 

    :rtype: Fieldset|FieldsetInterface 

    :throws: Exception\InvalidArgumentException 



populateValues
++++++++++++++

.. function:: populateValues()


    Populate values

    :param array|\Traversable: 

    :throws \Zend\Form\Exception\InvalidArgumentException: 
    :throws \Zend\Form\Exception\DomainException: 

    :rtype: void 



allowValueBinding
+++++++++++++++++

.. function:: allowValueBinding()


    Checks if this fieldset can bind data

    :rtype: bool 



bindValues
++++++++++

.. function:: bindValues()


    Bind values to the object

    :param array: 

    :rtype: array|mixed|void 



setCount
++++++++

.. function:: setCount()


    Set the initial count of target element

    :param $count: 

    :rtype: Collection 



getCount
++++++++

.. function:: getCount()


    Get the initial count of target element

    :rtype: int 



setTargetElement
++++++++++++++++

.. function:: setTargetElement()


    Set the target element

    :param ElementInterface|array|Traversable: 

    :rtype: Collection 

    :throws: \Zend\Form\Exception\InvalidArgumentException 



getTargetElement
++++++++++++++++

.. function:: getTargetElement()


    Get target element

    :rtype: ElementInterface|null 



setAllowAdd
+++++++++++

.. function:: setAllowAdd()


    Get allow add

    :param bool: 

    :rtype: Collection 



allowAdd
++++++++

.. function:: allowAdd()


    Get allow add

    :rtype: bool 



setAllowRemove
++++++++++++++

.. function:: setAllowRemove()


    @param bool $allowRemove

    :rtype: Collection 



allowRemove
+++++++++++

.. function:: allowRemove()


    @return bool



setShouldCreateTemplate
+++++++++++++++++++++++

.. function:: setShouldCreateTemplate()


    If set to true, a template prototype is automatically added to the form to ease the creation of dynamic elements through JavaScript

    :param bool: 

    :rtype: Collection 



shouldCreateTemplate
++++++++++++++++++++

.. function:: shouldCreateTemplate()


    Get if the collection should create a template

    :rtype: bool 



setTemplatePlaceholder
++++++++++++++++++++++

.. function:: setTemplatePlaceholder()


    Set the placeholder used in the template generated to help create new elements in JavaScript

    :param string: 

    :rtype: Collection 



getTemplatePlaceholder
++++++++++++++++++++++

.. function:: getTemplatePlaceholder()


    Get the template placeholder

    :rtype: string 



getTemplateElement
++++++++++++++++++

.. function:: getTemplateElement()


    Get a template element used for rendering purposes only

    :rtype: null|ElementInterface|FieldsetInterface 



prepareElement
++++++++++++++

.. function:: prepareElement()


    Prepare the collection by adding a dummy template element if the user want one

    :param FormInterface: 

    :rtype: mixed|void 



extract
+++++++

.. function:: extract()


    @return array



prepareFieldset
+++++++++++++++

.. function:: prepareFieldset()


    If both count and targetElement are set, add them to the fieldset

    :rtype: void 



createNewTargetElementInstance
++++++++++++++++++++++++++++++

.. function:: createNewTargetElementInstance()


    Create a new instance of the target element

    :rtype: ElementInterface 



createTemplateElement
+++++++++++++++++++++

.. function:: createTemplateElement()


    Create a dummy template element

    :rtype: null|ElementInterface|FieldsetInterface 





Constants
---------

DEFAULT_TEMPLATE_PLACEHOLDER
++++++++++++++++++++++++++++

Default template placeholder

