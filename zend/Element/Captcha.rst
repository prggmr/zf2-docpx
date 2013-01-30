.. Form/Element/Captcha.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\Element\\Captcha
============================

Methods
+++++++

setOptions
----------

.. function:: setOptions()


    Accepted options for Captcha:
    - captcha: a valid Zend\Captcha\AdapterInterface

    :param array|\Traversable: 

    :rtype: Captcha 



setCaptcha
----------

.. function:: setCaptcha()


    Set captcha

    :param array|ZendCaptcha\AdapterInterface: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Captcha 



getCaptcha
----------

.. function:: getCaptcha()


    Retrieve captcha (if any)

    :rtype: null|ZendCaptcha\AdapterInterface 



getInputSpecification
---------------------

.. function:: getInputSpecification()


    Provide default input rules for this element
    
    Attaches the captcha as a validator.

    :rtype: array 



