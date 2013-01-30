.. Db/Adapter/Driver/Pdo/Feature/OracleRowCounter.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Pdo\\Feature\\OracleRowCounter
=========================================================

OracleRowCounter

Methods
-------

getName
+++++++

.. function:: getName()


    @return string



getCountForStatement
++++++++++++++++++++

.. function:: getCountForStatement()


    @param \Zend\Db\Adapter\Driver\Pdo\Statement $statement

    :rtype: int 



getCountForSql
++++++++++++++

.. function:: getCountForSql()


    @param $sql

    :rtype: null|int 



getRowCountClosure
++++++++++++++++++

.. function:: getRowCountClosure()


    @param $context

    :rtype: closure 



