.. Session/Validator/HttpUserAgent.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Session\\Validator\\HttpUserAgent
=======================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    get the current user agent and store it in the session as 'valid data'

    :param string|null: 



isValid
+++++++

.. function:: isValid()


    isValid() - this method will determine if the current user agent matches the
    user agent we stored when we initialized this variable.

    :rtype: bool 



getData
+++++++

.. function:: getData()


    Retrieve token for validating call

    :rtype: string 



getName
+++++++

.. function:: getName()


    Return validator name

    :rtype: string 



