.. /Cache/Storage/ExceptionEvent.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\ExceptionEvent
************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($name, $storage, $params, $result, $exception)


    Constructor
    
    Accept a target and its parameters.

    :param string $name: 
    :param StorageInterface $storage: 
    :param ArrayObject $params: 
    :param mixed $result: 
    :param Exception $exception: 



setException
------------

.. function:: setException($exception)


    Set the exception to be thrown

    :param Exception $exception: 

    :rtype: ExceptionEvent 



getException
------------

.. function:: getException()


    Get the exception to be thrown

    :rtype: Exception 



setThrowException
-----------------

.. function:: setThrowException($flag)


    Throw the exception or use the result

    :param bool $flag: 

    :rtype: ExceptionEvent 



getThrowException
-----------------

.. function:: getThrowException()


    Throw the exception or use the result

    :rtype: bool 





