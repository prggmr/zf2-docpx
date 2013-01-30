.. I18n/Translator/TranslatorAwareInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\I18n\\Translator\\setTranslator
=====================================

.. function:: Zend\I18n\Translator\setTranslator()


    Sets translator to use in helper

    :param Translator: [optional] translator.
                                Default is null, which sets no translator.
    :param string: [optional] text domain
                                Default is null, which skips setTranslatorTextDomain

    :rtype: TranslatorAwareInterface 



Function
********

Zend\\I18n\\Translator\\getTranslator
=====================================

.. function:: Zend\I18n\Translator\getTranslator()


    Returns translator used in object

    :rtype: Translator|null 



Function
********

Zend\\I18n\\Translator\\hasTranslator
=====================================

.. function:: Zend\I18n\Translator\hasTranslator()


    Checks if the object has a translator

    :rtype: bool 



Function
********

Zend\\I18n\\Translator\\setTranslatorEnabled
============================================

.. function:: Zend\I18n\Translator\setTranslatorEnabled()


    Sets whether translator is enabled and should be used

    :param bool: [optional] whether translator should be used.
                      Default is true.

    :rtype: TranslatorAwareInterface 



Function
********

Zend\\I18n\\Translator\\isTranslatorEnabled
===========================================

.. function:: Zend\I18n\Translator\isTranslatorEnabled()


    Returns whether translator is enabled and should be used

    :rtype: bool 



Function
********

Zend\\I18n\\Translator\\setTranslatorTextDomain
===============================================

.. function:: Zend\I18n\Translator\setTranslatorTextDomain()


    Set translation text domain

    :param string: 

    :rtype: TranslatorAwareInterface 



Function
********

Zend\\I18n\\Translator\\getTranslatorTextDomain
===============================================

.. function:: Zend\I18n\Translator\getTranslatorTextDomain()


    Return the translation text domain

    :rtype: string 



