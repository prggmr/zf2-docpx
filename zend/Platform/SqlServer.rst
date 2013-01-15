.. /Db/Adapter/Platform/SqlServer.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Platform\\SqlServer
**************************************


@category   Zend



Methods
=======

getName
-------

.. function:: getName()


    Get name

    :rtype: string 



getQuoteIdentifierSymbol
------------------------

.. function:: getQuoteIdentifierSymbol()


    Get quote identifier symbol

    :rtype: string 



quoteIdentifier
---------------

.. function:: quoteIdentifier($identifier)


    Quote identifier

    :param string $identifier: 

    :rtype: string 



quoteIdentifierChain
--------------------

.. function:: quoteIdentifierChain($identifierChain)


    Quote identifier chain

    :param string|string[] $identifierChain: 

    :rtype: string 



getQuoteValueSymbol
-------------------

.. function:: getQuoteValueSymbol()


    Get quote value symbol

    :rtype: string 



quoteValue
----------

.. function:: quoteValue($value)


    Quote value

    :param string $value: 

    :rtype: string 



quoteValueList
--------------

.. function:: quoteValueList($valueList)


    Quote value list

    :param string|string[] $valueList: 

    :rtype: string 



getIdentifierSeparator
----------------------

.. function:: getIdentifierSeparator()


    Get identifier separator

    :rtype: string 



quoteIdentifierInFragment
-------------------------

.. function:: quoteIdentifierInFragment($identifier, [$safeWords = false])


    Quote identifier in fragment

    :param string $identifier: 
    :param array $safeWords: 

    :rtype: string 





