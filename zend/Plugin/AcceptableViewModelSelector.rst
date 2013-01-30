.. Mvc/Controller/Plugin/AcceptableViewModelSelector.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Controller\\Plugin\\AcceptableViewModelSelector
==========================================================

Controller Plugin to assist in selecting an appropriate View Model type based on the
User Agent's accept header.

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Detects an appropriate viewmodel for request.

    :param array: (optional) The Array to match against
    :param bool: (optional) If no match is available. Return default instead
    :param AbstractFieldValuePart|null: (optional) The object that was matched

    :throws InvalidArgumentException: If the supplied and matched View Model could not be found

    :rtype: ModelInterface|null 



getViewModel
++++++++++++

.. function:: getViewModel()


    Detects an appropriate viewmodel for request.

    :param array: (optional) The Array to match against
    :param bool: (optional) If no match is available. Return default instead
    :param AbstractFieldValuePart|null: (optional) The object that was matched

    :throws InvalidArgumentException: If the supplied and matched View Model could not be found

    :rtype: ModelInterface|null 



getViewModelName
++++++++++++++++

.. function:: getViewModelName()


    Detects an appropriate viewmodel name for request.

    :param array: (optional) The Array to match against
    :param bool: (optional) If no match is available. Return default instead
    :param AbstractFieldValuePart|null: (optional) The object that was matched.

    :rtype: ModelInterface|null Returns null if $returnDefault = false and no match could be made



match
+++++

.. function:: match()


    Detects an appropriate viewmodel name for request.

    :param array: (optional) The Array to match against

    :rtype: AbstractFieldValuePart|null The object that was matched



setDefaultViewModelName
+++++++++++++++++++++++

.. function:: setDefaultViewModelName()


    Set the default View Model (name) to return if no match could be made

    :param string: The default View Model name

    :rtype: AcceptableViewModelSelector provides fluent interface



getDefaultViewModelName
+++++++++++++++++++++++

.. function:: getDefaultViewModelName()


    Set the default View Model (name) to return if no match could be made

    :rtype: string 



setDefaultMatchAgainst
++++++++++++++++++++++

.. function:: setDefaultMatchAgainst()


    Set the default Accept Types and View Model combinations to match against if none are specified.

    :param array: (optional) The Array to match against

    :rtype: AcceptableViewModelSelector provides fluent interface



getDefaultMatchAgainst
++++++++++++++++++++++

.. function:: getDefaultMatchAgainst()


    Get the default Accept Types and View Model combinations to match against if none are specified.

    :rtype: array|null 



injectViewModelName
+++++++++++++++++++

.. function:: injectViewModelName()


    Inject the viewmodel name into the accept header string

    :param string: 
    :param string: 

    :rtype: string 



extractViewModelName
++++++++++++++++++++

.. function:: extractViewModelName()


    Extract the viewmodel name from a match

    :param AbstractFieldValuePart: 

    :rtype: string 



getRequest
++++++++++

.. function:: getRequest()


    Get the request

    :rtype: Request 

    :throws: DomainException if unable to find request



getEvent
++++++++

.. function:: getEvent()


    Get the event

    :rtype: MvcEvent 

    :throws: DomainException if unable to find event





Constants
---------

INJECT_VIEWMODEL_NAME
+++++++++++++++++++++

@var string the Key to inject the name of a viewmodel with in an Accept Header

