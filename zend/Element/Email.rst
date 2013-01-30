.. Form/Element/Email.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\Element\\Email
==========================

Methods
+++++++

getValidator
------------

.. function:: getValidator()


    Get primary validator

    :rtype: ValidatorInterface 



setValidator
------------

.. function:: setValidator()


    Sets the primary validator to use for this element

    :param ValidatorInterface: 

    :rtype: Email 



getEmailValidator
-----------------

.. function:: getEmailValidator()


    Get the email validator to use for multiple or single
    email addresses.
    
    Note from the HTML5 Specs regarding the regex:
    
    "This requirement is a *willful* violation of RFC 5322, which
    defines a syntax for e-mail addresses that is simultaneously
    too strict (before the "@" character), too vague
    (after the "@" character), and too lax (allowing comments,
    whitespace characters, and quoted strings in manners
    unfamiliar to most users) to be of practical use here."
    
    The default Regex validator is in use to match that of the
    browser validation, but you are free to set a different
    (more strict) email validator such as Zend\Validator\Email
    if you wish.

    :rtype: ValidatorInterface 



setEmailValidator
-----------------

.. function:: setEmailValidator()


    Sets the email validator to use for multiple or single
    email addresses.

    :param ValidatorInterface: 

    :rtype: Email 



getInputSpecification
---------------------

.. function:: getInputSpecification()


    Provide default input rules for this element
    
    Attaches an email validator.

    :rtype: array 



