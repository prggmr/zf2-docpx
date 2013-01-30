.. Config/Processor/Translator.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Config\\Processor\\Translator
===================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Translator uses the supplied Zend\I18n\Translator\Translator to find
    and translate language strings in config.

    :param ZendTranslator: 
    :param string: 
    :param string|null: 



setTranslator
+++++++++++++

.. function:: setTranslator()


    @param  ZendTranslator $translator

    :rtype: Translator 



getTranslator
+++++++++++++

.. function:: getTranslator()


    @return ZendTranslator



setLocale
+++++++++

.. function:: setLocale()


    @param  string|null $locale

    :rtype: Translator 



getLocale
+++++++++

.. function:: getLocale()


    @return string|null



setTextDomain
+++++++++++++

.. function:: setTextDomain()


    @param  string $textDomain

    :rtype: Translator 



getTextDomain
+++++++++++++

.. function:: getTextDomain()


    @return string



process
+++++++

.. function:: process()


    Process

    :param Config: 

    :rtype: Config 

    :throws: Exception\InvalidArgumentException 



processValue
++++++++++++

.. function:: processValue()


    Process a single value

    :param $value: 

    :rtype: mixed 



