.. /Form/View/Helper/Captcha/ReCaptcha.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha
********************************************


@category   Zend



Methods
=======

render
------

.. function:: render($element)


    Render ReCaptcha form elements

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



renderHiddenInput
-----------------

.. function:: renderHiddenInput($challengeName, $challengeId, $responseName, $responseId)


    Render hidden input elements for the challenge and response

    :param string $challengeName: 
    :param string $challengeId: 
    :param string $responseName: 
    :param string $responseId: 

    :rtype: string 



renderJsEvents
--------------

.. function:: renderJsEvents($challengeId, $responseId)


    Create the JS events used to bind the challenge and response values to the submitted form.

    :param string $challengeId: 
    :param string $responseId: 

    :rtype: string 





