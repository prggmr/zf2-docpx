.. Validator/Identical.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\Identical
==========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options

    :param mixed: 



getToken
++++++++

.. function:: getToken()


    Retrieve token

    :rtype: string 



setToken
++++++++

.. function:: setToken()


    Set token against which to compare

    :param mixed: 

    :rtype: Identical 



getStrict
+++++++++

.. function:: getStrict()


    Returns the strict parameter

    :rtype: bool 



setStrict
+++++++++

.. function:: setStrict()


    Sets the strict parameter

    :param Zend\Validator\Identical: 

    :rtype: Identical 



isValid
+++++++

.. function:: isValid()


    Returns true if and only if a token has been set and the provided value
    matches that token.

    :param mixed: 
    :param array: 

    :rtype: bool 





Constants
---------

NOT_SAME
++++++++

Error codes

MISSING_TOKEN
+++++++++++++

