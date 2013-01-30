.. Validator/ValidatorInterface.php generated using docpx on 01/30/13 03:27pm


Function
********

Zend\\Validator\\isValid
========================

.. function:: Zend\Validator\isValid()


    Returns true if and only if $value meets the validation requirements
    
    If $value fails validation, then this method returns false, and
    getMessages() will return an array of messages that explain why the
    validation failed.

    :param mixed: 

    :rtype: bool 

    :throws: Exception\RuntimeException If validation of $value is impossible



Function
********

Zend\\Validator\\getMessages
============================

.. function:: Zend\Validator\getMessages()


    Returns an array of messages that explain why the most recent isValid()
    call returned false. The array keys are validation failure message identifiers,
    and the array values are the corresponding human-readable message strings.
    
    If isValid() was never called or if the most recent isValid() call
    returned true, then this method returns an empty array.

    :rtype: array 



