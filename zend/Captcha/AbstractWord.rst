.. /Form/View/Helper/Captcha/AbstractWord.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\Captcha\\AbstractWord
***********************************************


@category   Zend



Methods
=======

setCaptchaPosition
------------------

.. function:: setCaptchaPosition($captchaPosition)


    Set value for captchaPosition

    :param mixed $captchaPosition: 

    :throws Exception\InvalidArgumentException: 

    :rtype: self 



getCaptchaPosition
------------------

.. function:: getCaptchaPosition()


    Get position of captcha

    :rtype: string 



setSeparator
------------

.. function:: setSeparator($separator)


    Set separator string for captcha and inputs

    :param string $separator: 

    :rtype: AbstractWord 



getSeparator
------------

.. function:: getSeparator()


    Get separator for captcha and inputs

    :rtype: string 



renderCaptchaInputs
-------------------

.. function:: renderCaptchaInputs($element)


    Render captcha form elements for the given element
    
    Creates and returns:
    - Hidden input with captcha identifier (name[id])
    - Text input for entering captcha value (name[input])
    
    More specific renderers will consume this and render it.

    :param ElementInterface $element: 

    :throws Exception\DomainException: 

    :rtype: string 



__invoke
--------

.. function:: __invoke([$element = false])


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface $element: 

    :rtype: string 



renderCaptchaHidden
-------------------

.. function:: renderCaptchaHidden($captcha, $attributes)


    Render the hidden input with the captcha identifier

    :param CaptchaAdapter $captcha: 
    :param array $attributes: 

    :rtype: string 



renderCaptchaInput
------------------

.. function:: renderCaptchaInput($captcha, $attributes)


    Render the input for capturing the captcha value from the client

    :param CaptchaAdapter $captcha: 
    :param array $attributes: 

    :rtype: string 





Constants
---------

CAPTCHA_APPEND
++++++++++++++

CAPTCHA_PREPEND
+++++++++++++++

