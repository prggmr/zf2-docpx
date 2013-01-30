.. Form/View/Helper/Captcha/AbstractWord.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\View\\Helper\\Captcha\\AbstractWord
===============================================

Methods
+++++++

setCaptchaPosition
------------------

.. function:: setCaptchaPosition()


    Set value for captchaPosition

    :param mixed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: self 



getCaptchaPosition
------------------

.. function:: getCaptchaPosition()


    Get position of captcha

    :rtype: string 



setSeparator
------------

.. function:: setSeparator()


    Set separator string for captcha and inputs

    :param string: 

    :rtype: AbstractWord 



getSeparator
------------

.. function:: getSeparator()


    Get separator for captcha and inputs

    :rtype: string 



renderCaptchaInputs
-------------------

.. function:: renderCaptchaInputs()


    Render captcha form elements for the given element
    
    Creates and returns:
    - Hidden input with captcha identifier (name[id])
    - Text input for entering captcha value (name[input])
    
    More specific renderers will consume this and render it.

    :param ElementInterface: 

    :throws Exception\DomainException: 

    :rtype: string 



__invoke
--------

.. function:: __invoke()


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface: 

    :rtype: string 



renderCaptchaHidden
-------------------

.. function:: renderCaptchaHidden()


    Render the hidden input with the captcha identifier

    :param CaptchaAdapter: 
    :param array: 

    :rtype: string 



renderCaptchaInput
------------------

.. function:: renderCaptchaInput()


    Render the input for capturing the captcha value from the client

    :param CaptchaAdapter: 
    :param array: 

    :rtype: string 





Constants
+++++++++

CAPTCHA_APPEND
==============

CAPTCHA_PREPEND
===============

