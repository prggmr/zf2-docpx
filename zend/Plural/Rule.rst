.. I18n/Translator/Plural/Rule.php generated using docpx on 01/30/13 03:32am


Zend\\I18n\\Translator\\Plural\\Rule
====================================

Plural rule evaluator.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create a new plural rule.

    :param integer: 
    :param array: 

    :rtype: Rule 



evaluate
--------

.. function:: evaluate()


    Evaluate a number and return the plural index.

    :param integer: 

    :rtype: integer 

    :throws: Exception\RangeException 



evaluateAstPart
---------------

.. function:: evaluateAstPart()


    Evaluate a part of an ast.

    :param array: 
    :param integer: 

    :rtype: integer 

    :throws: Exception\ParseException 



fromString
----------

.. function:: fromString()


    Create a new rule from a string.

    :param string: 

    :throws Exception\ParseException: 

    :rtype: Rule 



createAst
---------

.. function:: createAst()


    Create an AST from a tree.
    
    Theoretically we could just use the given Symbol, but that one is not
    so easy to serialize and also takes up more memory.

    :param Symbol: 

    :rtype: array 



