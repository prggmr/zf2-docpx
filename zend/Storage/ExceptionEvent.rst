.. Cache/Storage/ExceptionEvent.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\ExceptionEvent
====================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Accept a target and its parameters.

    :param string: 
    :param StorageInterface: 
    :param ArrayObject: 
    :param mixed: 
    :param Exception: 



setException
++++++++++++

.. function:: setException()


    Set the exception to be thrown

    :param Exception: 

    :rtype: ExceptionEvent 



getException
++++++++++++

.. function:: getException()


    Get the exception to be thrown

    :rtype: Exception 



setThrowException
+++++++++++++++++

.. function:: setThrowException()


    Throw the exception or use the result

    :param bool: 

    :rtype: ExceptionEvent 



getThrowException
+++++++++++++++++

.. function:: getThrowException()


    Throw the exception or use the result

    :rtype: bool 



