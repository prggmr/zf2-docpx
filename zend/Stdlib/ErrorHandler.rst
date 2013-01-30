.. Stdlib/ErrorHandler.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Stdlib\\ErrorHandler
==========================

ErrorHandler that can be used to catch internal PHP errors
and convert to a ErrorException instance.

Methods
-------

started
+++++++

.. function:: started()


    Check if this error handler is active

    :rtype: boolean 



getNestedLevel
++++++++++++++

.. function:: getNestedLevel()


    Get the current nested level

    :rtype: int 



start
+++++

.. function:: start()


    Starting the error handler

    :param int: 



stop
++++

.. function:: stop()


    Stopping the error handler

    :param bool: Throw the ErrorException if any

    :rtype: null|ErrorException 

    :throws: ErrorException If an error has been catched and $throw is true



clean
+++++

.. function:: clean()


    Stop all active handler

    :rtype: void 



addError
++++++++

.. function:: addError()


    Add an error to the stack

    :param int: 
    :param string: 
    :param string: 
    :param int: 

    :rtype: void 



