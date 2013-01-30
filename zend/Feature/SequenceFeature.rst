.. Db/TableGateway/Feature/SequenceFeature.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\TableGateway\\Feature\\SequenceFeature
================================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param null $sequence



preInsert
+++++++++

.. function:: preInsert()



postInsert
++++++++++

.. function:: postInsert()



nextSequenceId
++++++++++++++

.. function:: nextSequenceId()


    Generate a new value from the specified sequence in the database, and return it.

    :rtype: int 



lastSequenceId
++++++++++++++

.. function:: lastSequenceId()


    Return the most recent value from the specified sequence in the database.

    :rtype: int 



