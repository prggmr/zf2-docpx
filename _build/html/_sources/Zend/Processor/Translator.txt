.. /Config/Processor/Translator.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Processor\\Translator
***********************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($translator, [$textDomain = "default", [$locale = false]])


    Translator uses the supplied Zend\I18n\Translator\Translator to find
    and translate language strings in config.

    :param ZendTranslator $translator: 
    :param string $textDomain: 
    :param string|null $locale: 



setTranslator
-------------

.. function:: setTranslator($translator)


    @param  ZendTranslator $translator

    :rtype: Translator 



getTranslator
-------------

.. function:: getTranslator()


    @return ZendTranslator



setLocale
---------

.. function:: setLocale($locale)


    @param  string|null $locale

    :rtype: Translator 



getLocale
---------

.. function:: getLocale()


    @return string|null



setTextDomain
-------------

.. function:: setTextDomain($textDomain)


    @param  string $textDomain

    :rtype: Translator 



getTextDomain
-------------

.. function:: getTextDomain()


    @return string



process
-------

.. function:: process($config)


    Process

    :param Config $config: 

    :rtype: Config 

    :throws: Exception\InvalidArgumentException 



processValue
------------

.. function:: processValue($value)


    Process a single value

    :param $value: 

    :rtype: mixed 





