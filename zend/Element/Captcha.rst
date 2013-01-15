.. /Form/Element/Captcha.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Element\\Captcha
****************************


@category   Zend



Methods
=======

setOptions
----------

.. function:: setOptions($options)


    Accepted options for Captcha:
    - captcha: a valid Zend\Captcha\AdapterInterface

    :param array|\Traversable $options: 

    :rtype: Captcha 



setCaptcha
----------

.. function:: setCaptcha($captcha)


    Set captcha

    :param array|ZendCaptcha\AdapterInterface $captcha: 

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





