.. Db/Sql/ExpressionInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Db\\Sql\\getExpressionData
================================

.. function:: Zend\Db\Sql\getExpressionData()


    @abstract

    :rtype: array of array|string should return an array in the format:

array (
   // a sprintf formatted string
   string $specification,

   // the values for the above sprintf formatted string
   array $values,

   // an array of equal length of the $values array, with either TYPE_IDENTIFIER or TYPE_VALUE for each value
   array $types,
)



TYPE_IDENTIFIER
+++++++++++++++

TYPE_VALUE
++++++++++

TYPE_LITERAL
++++++++++++

TYPE_SELECT
+++++++++++

@deprecated This will go away in 2.1

