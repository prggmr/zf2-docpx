.. Json/Expr.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Json\\Expr
================

Class for Zend_Json encode method.

This class simply holds a string with a native Javascript Expression,
so objects | arrays to be encoded with Zend_Json can contain native
Javascript Expressions.

Example:
<code>
$foo = array(
    'integer'  =>9,
    'string'   =>'test string',
    'function' => Zend_Json_Expr(
        'function() { window.alert("javascript function encoded by Zend_Json") }'
    ),
);

Zend_Json::encode($foo, false, array('enableJsonExprFinder' => true));
// it will returns json encoded string:
// {"integer":9,"string":"test string","function":function() {window.alert("javascript function encoded by Zend_Json")}}
</code>

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: the expression to hold.



__toString
++++++++++

.. function:: __toString()


    Cast to string

    :rtype: string holded javascript expression.



