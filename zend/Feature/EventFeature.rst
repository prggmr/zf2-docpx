.. /Db/TableGateway/Feature/EventFeature.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\TableGateway\\Feature\\EventFeature
*********************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$eventManager = false, [$tableGatewayEvent = false]])


    @param EventManagerInterface $eventManager

    :param EventFeature\TableGatewayEvent $tableGatewayEvent: 



getEventManager
---------------

.. function:: getEventManager()


    Retrieve composed event manager instance

    :rtype: EventManagerInterface 



getEvent
--------

.. function:: getEvent()


    Retrieve composed event instance

    :rtype: EventFeature\TableGatewayEvent 



preInitialize
-------------

.. function:: preInitialize()


    Initialize feature and trigger "preInitialize" event
    
    Ensures that the composed TableGateway has identifiers based on the
    class name, and that the event target is set to the TableGateway
    instance. It then triggers the "preInitialize" event.

    :rtype: void 



postInitialize
--------------

.. function:: postInitialize()


    Trigger the "postInitialize" event

    :rtype: void 



preSelect
---------

.. function:: preSelect($select)


    Trigger the "preSelect" event
    
    Triggers the "preSelect" event mapping the following parameters:
    - $select as "select"

    :param Select $select: 

    :rtype: void 



postSelect
----------

.. function:: postSelect($statement, $result, $resultSet)


    Trigger the "postSelect" event
    
    Triggers the "postSelect" event mapping the following parameters:
    - $statement as "statement"
    - $result as "result"
    - $resultSet as "result_set"

    :param StatementInterface $statement: 
    :param ResultInterface $result: 
    :param ResultSetInterface $resultSet: 

    :rtype: void 



preInsert
---------

.. function:: preInsert($insert)


    Trigger the "preInsert" event
    
    Triggers the "preInsert" event mapping the following parameters:
    - $insert as "insert"

    :param Insert $insert: 

    :rtype: void 



postInsert
----------

.. function:: postInsert($statement, $result)


    Trigger the "postInsert" event
    
    Triggers the "postInsert" event mapping the following parameters:
    - $statement as "statement"
    - $result as "result"

    :param StatementInterface $statement: 
    :param ResultInterface $result: 

    :rtype: void 



preUpdate
---------

.. function:: preUpdate($update)


    Trigger the "preUpdate" event
    
    Triggers the "preUpdate" event mapping the following parameters:
    - $update as "update"

    :param Update $update: 

    :rtype: void 



postUpdate
----------

.. function:: postUpdate($statement, $result)


    Trigger the "postUpdate" event
    
    Triggers the "postUpdate" event mapping the following parameters:
    - $statement as "statement"
    - $result as "result"

    :param StatementInterface $statement: 
    :param ResultInterface $result: 

    :rtype: void 



preDelete
---------

.. function:: preDelete($delete)


    Trigger the "preDelete" event
    
    Triggers the "preDelete" event mapping the following parameters:
    - $delete as "delete"

    :param Delete $delete: 

    :rtype: void 



postDelete
----------

.. function:: postDelete($statement, $result)


    Trigger the "postDelete" event
    
    Triggers the "postDelete" event mapping the following parameters:
    - $statement as "statement"
    - $result as "result"

    :param StatementInterface $statement: 
    :param ResultInterface $result: 

    :rtype: void 





