.. I18n/Translator/Plural/Symbol.php generated using docpx on 01/30/13 03:32am


Zend\\I18n\\Translator\\Plural\\Symbol
======================================

Parser symbol.

All properties in the symbol are defined as public for easier and faster
access from the applied closures. An exception are the closure properties
themselves, as they have to be accessed via the appropriate getter and
setter methods.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create a new symbol.

    :param Parser: 
    :param string: 
    :param integer: 



setNullDenotationGetter
-----------------------

.. function:: setNullDenotationGetter()


    Set the null denotation getter.

    :param Closure: 

    :rtype: Symbol 



setLeftDenotationGetter
-----------------------

.. function:: setLeftDenotationGetter()


    Set the left denotation getter.

    :param Closure: 

    :rtype: Symbol 



getNullDenotation
-----------------

.. function:: getNullDenotation()


    Get null denotation.


    :rtype: Symbol 



getLeftDenotation
-----------------

.. function:: getLeftDenotation()


    Get left denotation.

    :param Symbol: 

    :throws Exception\ParseException: 

    :rtype: Symbol 



