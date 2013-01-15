.. /Form/View/Helper/FormCollection.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormCollection
****************************************


@category   Zend



Methods
=======

render
------

.. function:: render($element)


    Render a collection by iterating through all fieldsets and elements

    :param ElementInterface $element: 

    :rtype: string 



__invoke
--------

.. function:: __invoke([$element = false, [$wrap = true]])


    Invoke helper as function
    
    Proxies to {@link render()}.

    :param ElementInterface|null $element: 
    :param bool $wrap: 

    :rtype: string|FormCollection 



setShouldWrap
-------------

.. function:: setShouldWrap($wrap)


    If set to true, collections are automatically wrapped around a fieldset

    :param bool $wrap: 

    :rtype: FormCollection 



shouldWrap
----------

.. function:: shouldWrap()


    Get wrapped

    :rtype: bool 



getDefaultElementHelper
-----------------------

.. function:: getDefaultElementHelper()


    Gets the name of the view helper that should be used to render sub elements.

    :rtype: string 



setDefaultElementHelper
-----------------------

.. function:: setDefaultElementHelper($defaultSubHelper)


    Sets the name of the view helper that should be used to render sub elements.

    :param string $defaultSubHelper: The name of the view helper to set.

    :rtype: FormCollection 



getElementHelper
----------------

.. function:: getElementHelper()


    Retrieve the element helper.


    :rtype: AbstractHelper 



setElementHelper
----------------

.. function:: setElementHelper($elementHelper)


    Sets the element helper that should be used by this collection.

    :param AbstractHelper $elementHelper: The element helper to use.

    :rtype: FormCollection 





