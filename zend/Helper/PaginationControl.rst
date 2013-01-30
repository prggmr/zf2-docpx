.. View/Helper/PaginationControl.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Helper\\PaginationControl
=====================================

Methods
-------

setDefaultViewPartial
+++++++++++++++++++++

.. function:: setDefaultViewPartial()


    Sets the default view partial.

    :param string|array: View partial



getDefaultViewPartial
+++++++++++++++++++++

.. function:: getDefaultViewPartial()


    Gets the default view partial

    :rtype: string|array 



getDefaultScrollingStyle
++++++++++++++++++++++++

.. function:: getDefaultScrollingStyle()


    Gets the default scrolling style

    :rtype: string 



setDefaultScrollingStyle
++++++++++++++++++++++++

.. function:: setDefaultScrollingStyle()


    Sets the default Scrolling Style

    :param string: string 'all' | 'elastic' | 'sliding' | 'jumping'



__invoke
++++++++

.. function:: __invoke()


    Render the provided pages.  This checks if $view->paginator is set and,
    if so, uses that.  Also, if no scrolling style or partial are specified,
    the defaults will be used (if set).

    :param \Zend\Paginator\Paginator: $paginator
    :param string: (Optional) Scrolling style
    :param string: (Optional) View partial
    :param array|string: (Optional) params to pass to the partial

    :rtype: string 

    :throws: Exception\RuntimeException if no paginator or no view partial provided
    :throws: Exception\InvalidArgumentException if partial is invalid array



