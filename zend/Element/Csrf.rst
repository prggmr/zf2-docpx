.. Form/Element/Csrf.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\Element\\Csrf
=========================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Accepted options for Csrf:
    - csrf_options: an array used in the Csrf

    :param array|\Traversable: 

    :rtype: Csrf 



getCsrfValidatorOptions
+++++++++++++++++++++++

.. function:: getCsrfValidatorOptions()


    @return array



setCsrfValidatorOptions
+++++++++++++++++++++++

.. function:: setCsrfValidatorOptions()


    @param  array $options

    :rtype: Csrf 



getCsrfValidator
++++++++++++++++

.. function:: getCsrfValidator()


    Get CSRF validator

    :rtype: CsrfValidator 



setCsrfValidator
++++++++++++++++

.. function:: setCsrfValidator()


    @param  \Zend\Validator\Csrf $validator

    :rtype: Csrf 



getValue
++++++++

.. function:: getValue()


    Retrieve value
    
    Retrieves the hash from the validator

    :rtype: string 



getAttributes
+++++++++++++

.. function:: getAttributes()


    Override: get attributes
    
    Seeds 'value' attribute with validator hash

    :rtype: array 



getInputSpecification
+++++++++++++++++++++

.. function:: getInputSpecification()


    Provide default input rules for this element
    
    Attaches the captcha as a validator.

    :rtype: array 



prepareElement
++++++++++++++

.. function:: prepareElement()


    Prepare the form element



