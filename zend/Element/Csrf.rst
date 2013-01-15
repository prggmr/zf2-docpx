.. /Form/Element/Csrf.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Element\\Csrf
*************************


@category   Zend



Methods
=======

setOptions
----------

.. function:: setOptions($options)


    Accepted options for Csrf:
    - csrf_options: an array used in the Csrf

    :param array|\Traversable $options: 

    :rtype: Csrf 



getCsrfValidatorOptions
-----------------------

.. function:: getCsrfValidatorOptions()


    @return array



setCsrfValidatorOptions
-----------------------

.. function:: setCsrfValidatorOptions($options)


    @param  array $options

    :rtype: Csrf 



getCsrfValidator
----------------

.. function:: getCsrfValidator()


    Get CSRF validator

    :rtype: CsrfValidator 



setCsrfValidator
----------------

.. function:: setCsrfValidator($validator)


    @param  \Zend\Validator\Csrf $validator

    :rtype: Csrf 



getValue
--------

.. function:: getValue()


    Retrieve value
    
    Retrieves the hash from the validator

    :rtype: string 



getAttributes
-------------

.. function:: getAttributes()


    Override: get attributes
    
    Seeds 'value' attribute with validator hash

    :rtype: array 



getInputSpecification
---------------------

.. function:: getInputSpecification()


    Provide default input rules for this element
    
    Attaches the captcha as a validator.

    :rtype: array 



prepareElement
--------------

.. function:: prepareElement($form)


    Prepare the form element





