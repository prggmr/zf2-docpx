.. View/Strategy/PhpRendererStrategy.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Strategy\\PhpRendererStrategy
=========================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param PhpRenderer: 



getRenderer
-----------

.. function:: getRenderer()


    Retrieve the composed renderer

    :rtype: PhpRenderer 



setContentPlaceholders
----------------------

.. function:: setContentPlaceholders()


    Set list of possible content placeholders

    :param array: 

    :rtype: PhpRendererStrategy 



getContentPlaceholders
----------------------

.. function:: getContentPlaceholders()


    Get list of possible content placeholders

    :rtype: array 



attach
------

.. function:: attach()


    Attach the aggregate to the specified event manager

    :param EventManagerInterface: 
    :param int: 

    :rtype: void 



detach
------

.. function:: detach()


    Detach aggregate listeners from the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



selectRenderer
--------------

.. function:: selectRenderer()


    Select the PhpRenderer; typically, this will be registered last or at
    low priority.

    :param ViewEvent: 

    :rtype: PhpRenderer 



injectResponse
--------------

.. function:: injectResponse()


    Populate the response object from the View
    
    Populates the content of the response object from the view rendering
    results.

    :param ViewEvent: 

    :rtype: void 



