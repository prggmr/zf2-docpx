.. Mvc/View/Http/DefaultRenderingStrategy.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\View\\Http\\DefaultRenderingStrategy
===============================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Set view

    :param View: 

    :rtype: DefaultRenderingStrategy 



attach
------

.. function:: attach()


    Attach the aggregate to the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



detach
------

.. function:: detach()


    Detach aggregate listeners from the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



setLayoutTemplate
-----------------

.. function:: setLayoutTemplate()


    Set layout template value

    :param string: 

    :rtype: DefaultRenderingStrategy 



getLayoutTemplate
-----------------

.. function:: getLayoutTemplate()


    Get layout template value

    :rtype: string 



render
------

.. function:: render()


    Render the view

    :param MvcEvent: 

    :rtype: Response 



