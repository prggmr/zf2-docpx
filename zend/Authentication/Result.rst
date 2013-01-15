.. /Authentication/Result.php generated using docpx on 01/15/13 05:29pm


Zend\\Authentication\\Result
****************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($code, $identity, [$messages = false])


    Sets the result code, identity, and failure messages

    :param int $code: 
    :param mixed $identity: 
    :param array $messages: 



isValid
-------

.. function:: isValid()


    Returns whether the result represents a successful authentication attempt

    :rtype: bool 



getCode
-------

.. function:: getCode()


    getCode() - Get the result code for this authentication attempt

    :rtype: int 



getIdentity
-----------

.. function:: getIdentity()


    Returns the identity used in the authentication attempt

    :rtype: mixed 



getMessages
-----------

.. function:: getMessages()


    Returns an array of string reasons why the authentication attempt was unsuccessful
    
    If authentication was successful, this method returns an empty array.

    :rtype: array 





Constants
---------

FAILURE
+++++++

General Failure

FAILURE_IDENTITY_NOT_FOUND
++++++++++++++++++++++++++

Failure due to identity not being found.

FAILURE_IDENTITY_AMBIGUOUS
++++++++++++++++++++++++++

Failure due to identity being ambiguous.

FAILURE_CREDENTIAL_INVALID
++++++++++++++++++++++++++

Failure due to invalid credential being supplied.

FAILURE_UNCATEGORIZED
+++++++++++++++++++++

Failure due to uncategorized reasons.

SUCCESS
+++++++

Authentication success.
