.. I18n/View/Helper/AbstractTranslatorHelper.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\I18n\\View\\Helper\\AbstractTranslatorHelper
==================================================

Methods
-------

setTranslator
+++++++++++++

.. function:: setTranslator()


    Sets translator to use in helper

    :param Translator: [optional] translator.
                                Default is null, which sets no translator.
    :param string: [optional] text domain
                                Default is null, which skips setTranslatorTextDomain

    :rtype: AbstractTranslatorHelper 



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

    :rtype: AbstractTranslatorHelper 



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

    :rtype: AbstractTranslatorHelper 



getTranslatorTextDomain
+++++++++++++++++++++++

.. function:: getTranslatorTextDomain()


    Return the translation text domain

    :rtype: string 



