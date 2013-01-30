.. Uri/Mailto.php generated using docpx on 01/30/13 03:32am


Zend\\Uri\\Mailto
=================

"Mailto" URI handler

The 'mailto:...' scheme is loosely defined in RFC-1738

Methods
+++++++

isValid
-------

.. function:: isValid()


    Check if the URI is a valid Mailto URI
    
    This applies additional specific validation rules beyond the ones
    required by the generic URI syntax

    :rtype: bool 

    :see:  



setEmail
--------

.. function:: setEmail()


    Set the email address
    
    This is in fact equivalent to setPath() - but provides a more clear interface

    :param string: 

    :rtype: Mailto 



getEmail
--------

.. function:: getEmail()


    Get the email address
    
    This is infact equivalent to getPath() - but provides a more clear interface

    :rtype: string 



setValidator
------------

.. function:: setValidator()


    Set validator to use when validating email address

    :param ValidatorInterface: 

    :rtype: Mailto 



getValidator
------------

.. function:: getValidator()


    Retrieve validator for use with validating email address
    
    If none is currently set, an EmailValidator instance with default options
    will be used.

    :rtype: ValidatorInterface 



