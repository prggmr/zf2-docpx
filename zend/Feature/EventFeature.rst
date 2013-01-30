.. Db/TableGateway/Feature/EventFeature.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\TableGateway\\Feature\\EventFeature
=============================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param EventManagerInterface $eventManager

    :param EventFeature\TableGatewayEvent: 



getEventManager
+++++++++++++++

.. function:: getEventManager()


    Retrieve composed event manager instance

    :rtype: EventManagerInterface 



getEvent
++++++++

.. function:: getEvent()


    Retrieve composed event instance

    :rtype: EventFeature\TableGatewayEvent 



preInitialize
+++++++++++++

.. function:: preInitialize()


    Initialize feature and trigger "preInitialize" event
    
    Ensures that the composed TableGateway has identifiers based on the
    class name, and that the event target is set to the TableGateway
    instance. It then triggers the "preInitialize" event.

    :rtype: void 



postInitialize
++++++++++++++

.. function:: postInitialize()


    Trigger the "postInitialize" event

    :rtype: void 



preSelect
+++++++++

.. function:: preSelect()


    Trigger the "preSelect" event
    
    Triggers the "preSelect" event mapping the following parameters:
    - $select as "select"

    :param Select: 

    :rtype: void 



postSelect
++++++++++

.. function:: postSelect()


    Trigger the "postSelect" event
    
    Triggers the "postSelect" event mapping the following parameters:
    - $statement as "statement"
    - $result as "result"
    - $resultSet as "result_set"

    :param StatementInterface: 
    :param ResultInterface: 
    :param ResultSetInterface: 

    :rtype: void 



preInsert
+++++++++

.. function:: preInsert()


    Trigger the "preInsert" event
    
    Triggers the "preInsert" event mapping the following parameters:
    - $insert as "insert"

    :param Insert: 

    :rtype: void 



postInsert
++++++++++

.. function:: postInsert()


    Trigger the "postInsert" event
    
    Triggers the "postInsert" event mapping the following parameters:
    - $statement as "statement"
    - $result as "result"

    :param StatementInterface: 
    :param ResultInterface: 

    :rtype: void 



preUpdate
+++++++++

.. function:: preUpdate()


    Trigger the "preUpdate" event
    
    Triggers the "preUpdate" event mapping the following parameters:
    - $update as "update"

    :param Update: 

    :rtype: void 



postUpdate
++++++++++

.. function:: postUpdate()


    Trigger the "postUpdate" event
    
    Triggers the "postUpdate" event mapping the following parameters:
    - $statement as "statement"
    - $result as "result"

    :param StatementInterface: 
    :param ResultInterface: 

    :rtype: void 



preDelete
+++++++++

.. function:: preDelete()


    Trigger the "preDelete" event
    
    Triggers the "preDelete" event mapping the following parameters:
    - $delete as "delete"

    :param Delete: 

    :rtype: void 



postDelete
++++++++++

.. function:: postDelete()


    Trigger the "postDelete" event
    
    Triggers the "postDelete" event mapping the following parameters:
    - $statement as "statement"
    - $result as "result"

    :param StatementInterface: 
    :param ResultInterface: 

    :rtype: void 



