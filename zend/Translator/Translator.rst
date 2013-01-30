.. I18n/Translator/Translator.php generated using docpx on 01/30/13 03:32am


Zend\\I18n\\Translator\\Translator
==================================

Translator.

Methods
+++++++

factory
-------

.. function:: factory()


    Instantiate a translator

    :param array|Traversable: 

    :rtype: Translator 

    :throws: Exception\InvalidArgumentException 



setLocale
---------

.. function:: setLocale()


    Set the default locale.

    :param string: 

    :rtype: Translator 



getLocale
---------

.. function:: getLocale()


    Get the default locale.

    :rtype: string 



setFallbackLocale
-----------------

.. function:: setFallbackLocale()


    Set the fallback locale.

    :param string: 

    :rtype: Translator 



getFallbackLocale
-----------------

.. function:: getFallbackLocale()


    Get the fallback locale.

    :rtype: string 



setCache
--------

.. function:: setCache()


    Sets a cache

    :param CacheStorage: 

    :rtype: Translator 



getCache
--------

.. function:: getCache()


    Returns the set cache

    :rtype: CacheStorage The set cache



setPluginManager
----------------

.. function:: setPluginManager()


    Set the plugin manager for translation loaders

    :param LoaderPluginManager: 

    :rtype: Translator 



getPluginManager
----------------

.. function:: getPluginManager()


    Retrieve the plugin manager for translation loaders.
    
    Lazy loads an instance if none currently set.

    :rtype: LoaderPluginManager 



translate
---------

.. function:: translate()


    Translate a message.

    :param string: 
    :param string: 
    :param string: 

    :rtype: string 



translatePlural
---------------

.. function:: translatePlural()


    Translate a plural message.

    :param string: 
    :param string: 
    :param int: 
    :param string: 
    :param string|null: 

    :rtype: string 

    :throws: Exception\OutOfBoundsException 



getTranslatedMessage
--------------------

.. function:: getTranslatedMessage()


    Get a translated message.

    :param string: 
    :param string: 
    :param string: 

    :rtype: string|null 



addTranslationFile
------------------

.. function:: addTranslationFile()


    Add a translation file.

    :param string: 
    :param string: 
    :param string: 
    :param string: 

    :rtype: Translator 



addTranslationFilePattern
-------------------------

.. function:: addTranslationFilePattern()


    Add multiple translations with a file pattern.

    :param string: 
    :param string: 
    :param string: 
    :param string: 

    :rtype: Translator 



addRemoteTranslations
---------------------

.. function:: addRemoteTranslations()


    Add remote translations.

    :param string: 
    :param string: 

    :rtype: Translator 



loadMessages
------------

.. function:: loadMessages()


    Load messages for a given language and domain.

    :param string: 
    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: void 



