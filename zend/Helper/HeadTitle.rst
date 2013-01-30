.. View/Helper/HeadTitle.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\HeadTitle
=============================

Helper for setting and retrieving title element for HTML head

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Retrieve placeholder for title element and optionally set state

    :param string: 
    :param string: 

    :rtype: \Zend\View\Helper\HeadTitle 



setDefaultAttachOrder
+++++++++++++++++++++

.. function:: setDefaultAttachOrder()


    Set a default order to add titles

    :param string: 

    :rtype: HeadTitle 

    :throws: Exception\DomainException 



getDefaultAttachOrder
+++++++++++++++++++++

.. function:: getDefaultAttachOrder()


    Get the default attach order, if any.

    :rtype: mixed 



toString
++++++++

.. function:: toString()


    Turn helper into string

    :param string|null: 

    :rtype: string 



setTranslator
+++++++++++++

.. function:: setTranslator()


    Sets translator to use in helper

    :param Translator: [optional] translator.
                                Default is null, which sets no translator.
    :param string: [optional] text domain
                                Default is null, which skips setTranslatorTextDomain

    :rtype: HeadTitle 



getTranslator
+++++++++++++

.. function:: getTranslator()


    Returns translator used in helper

    :rtype: Translator|null 



hasTranslator
+++++++++++++

.. function:: hasTranslator()


    Checks if the helper has a translator

    :rtype: bool 



setTranslatorEnabled
++++++++++++++++++++

.. function:: setTranslatorEnabled()


    Sets whether translator is enabled and should be used

    :param bool: [optional] whether translator should be used.
                      Default is true.

    :rtype: HeadTitle 



isTranslatorEnabled
+++++++++++++++++++

.. function:: isTranslatorEnabled()


    Returns whether translator is enabled and should be used

    :rtype: bool 



setTranslatorTextDomain
+++++++++++++++++++++++

.. function:: setTranslatorTextDomain()


    Set translation text domain

    :param string: 

    :rtype: HeadTitle 



getTranslatorTextDomain
+++++++++++++++++++++++

.. function:: getTranslatorTextDomain()


    Return the translation text domain

    :rtype: string 



