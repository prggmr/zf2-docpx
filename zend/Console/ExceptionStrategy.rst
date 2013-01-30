.. Mvc/View/Console/ExceptionStrategy.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\View\\Console\\ExceptionStrategy
===========================================

Methods
-------

attach
++++++

.. function:: attach()


    Attach the aggregate to the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



detach
++++++

.. function:: detach()


    Detach aggregate listeners from the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



setDisplayExceptions
++++++++++++++++++++

.. function:: setDisplayExceptions()


    Flag: display exceptions in error pages?

    :param bool: 

    :rtype: ExceptionStrategy 



displayExceptions
+++++++++++++++++

.. function:: displayExceptions()


    Should we display exceptions in error pages?

    :rtype: bool 



getMessage
++++++++++

.. function:: getMessage()


    Get current template for message that will be shown in Console.

    :rtype: string 



setMessage
++++++++++

.. function:: setMessage()


    Set template for message that will be shown in Console.
    The message can be a string (template) or a callable (i.e. a closure).
    
    The closure is expected to return a string and will be called with 2 parameters:
           Exception $exception           - the exception being thrown
           boolean   $displayExceptions   - whether to display exceptions or not
    
    If the message is a string, one can use the following template params:
    
      :className   - full class name of exception instance
      :message     - exception message
      :code        - exception code
      :file        - the file where the exception has been thrown
      :line        - the line where the exception has been thrown
      :stack       - full exception stack

    :param string|callable: 

    :rtype: ExceptionStrategy 



prepareExceptionViewModel
+++++++++++++++++++++++++

.. function:: prepareExceptionViewModel()


    Create an exception view model, and set the HTTP status code


    :param MvcEvent: 

    :rtype: void 



