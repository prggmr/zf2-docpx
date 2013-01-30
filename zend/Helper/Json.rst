.. View/Helper/Json.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Json
========================

Helper for simplifying JSON responses

Methods
+++++++

setResponse
-----------

.. function:: setResponse()


    Set the response object

    :param Response: 

    :rtype: Json 



__invoke
--------

.. function:: __invoke()


    Encode data as JSON and set response header

    :param mixed: 
    :param array: Options to pass to JsonFormatter::encode()

    :rtype: string|void 



