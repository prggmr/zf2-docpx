.. Form/View/Helper/FormCollection.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\View\\Helper\\FormCollection
========================================

Methods
-------

render
++++++

.. function:: render()


    Render a collection by iterating through all fieldsets and elements

    :param ElementInterface: 

    :rtype: string 



renderTemplate
++++++++++++++

.. function:: renderTemplate()


    Only render a template

    :param CollectionElement: 

    :rtype: string 



__invoke
++++++++

.. function:: __invoke()


    Invoke helper as function
    
    Proxies to {@link render()}.

    :param ElementInterface|null: 
    :param bool: 

    :rtype: string|FormCollection 



setShouldWrap
+++++++++++++

.. function:: setShouldWrap()


    If set to true, collections are automatically wrapped around a fieldset

    :param bool: 

    :rtype: FormCollection 



shouldWrap
++++++++++

.. function:: shouldWrap()


    Get wrapped

    :rtype: bool 



getDefaultElementHelper
+++++++++++++++++++++++

.. function:: getDefaultElementHelper()


    Gets the name of the view helper that should be used to render sub elements.

    :rtype: string 



setDefaultElementHelper
+++++++++++++++++++++++

.. function:: setDefaultElementHelper()


    Sets the name of the view helper that should be used to render sub elements.

    :param string: The name of the view helper to set.

    :rtype: FormCollection 



getElementHelper
++++++++++++++++

.. function:: getElementHelper()


    Retrieve the element helper.


    :rtype: AbstractHelper 



setElementHelper
++++++++++++++++

.. function:: setElementHelper()


    Sets the element helper that should be used by this collection.

    :param AbstractHelper: The element helper to use.

    :rtype: FormCollection 



getFieldsetHelper
+++++++++++++++++

.. function:: getFieldsetHelper()


    Retrieve the fieldset helper.

    :rtype: AbstractHelper 



setFieldsetHelper
+++++++++++++++++

.. function:: setFieldsetHelper()


    Sets the fieldset helper that should be used by this collection.

    :param AbstractHelper: The fieldset helper to use.

    :rtype: FormCollection 



