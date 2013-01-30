.. Form/View/Helper/Captcha/ReCaptcha.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha
============================================

Methods
+++++++

render
------

.. function:: render()


    Render ReCaptcha form elements

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



renderHiddenInput
-----------------

.. function:: renderHiddenInput()


    Render hidden input elements for the challenge and response

    :param string: 
    :param string: 
    :param string: 
    :param string: 

    :rtype: string 



renderJsEvents
--------------

.. function:: renderJsEvents()


    Create the JS events used to bind the challenge and response values to the submitted form.

    :param string: 
    :param string: 

    :rtype: string 



