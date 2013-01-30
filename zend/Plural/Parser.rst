.. I18n/Translator/Plural/Parser.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\I18n\\Translator\\Plural\\Parser
======================================

Plural rule parser.

This plural rule parser is implemented after the article "Top Down Operator
Precedence" described in <http://javascript.crockford.com/tdop/tdop.html>.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new plural parser.



populateSymbolTable
+++++++++++++++++++

.. function:: populateSymbolTable()


    Populate the symbol table.

    :rtype: void 



Symbol
++++++

.. function:: Symbol()



Symbol
++++++

.. function:: Symbol()



Symbol
++++++

.. function:: Symbol()



Symbol
++++++

.. function:: Symbol()



registerLeftInfixSymbol
+++++++++++++++++++++++

.. function:: registerLeftInfixSymbol()


    Register a left infix symbol.

    :param string: 
    :param integer: 

    :rtype: void 



Symbol
++++++

.. function:: Symbol()



registerRightInfixSymbol
++++++++++++++++++++++++

.. function:: registerRightInfixSymbol()


    Register a right infix symbol.

    :param string: 
    :param integer: 

    :rtype: void 



Symbol
++++++

.. function:: Symbol()



registerPrefixSymbol
++++++++++++++++++++

.. function:: registerPrefixSymbol()


    Register a prefix symbol.

    :param string: 
    :param integer: 

    :rtype: void 



Symbol
++++++

.. function:: Symbol()



registerSymbol
++++++++++++++

.. function:: registerSymbol()


    Register a symbol.

    :param string: 
    :param integer: 

    :rtype: Symbol 



getSymbol
+++++++++

.. function:: getSymbol()


    Get a new symbol.

    :param string: 



parse
+++++

.. function:: parse()


    Parse a string.

    :param string: 

    :rtype: array 



expression
++++++++++

.. function:: expression()


    Parse an expression.

    :param integer: 

    :rtype: Symbol 



advance
+++++++

.. function:: advance()


    Advance the current token and optionally check the old token id.

    :param string: 

    :rtype: void 

    :throws: Exception\ParseException 



getNextToken
++++++++++++

.. function:: getNextToken()


    Get the next token.

    :rtype: array 

    :throws: Exception\ParseException 



