.. Log/Writer/Db.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Log\\Writer\\Db
=====================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    We used the Adapter instead of Zend\Db for a performance reason.

    :param Adapter|array|Traversable: 
    :param string: 
    :param array: 
    :param string: 

    :throws Exception\InvalidArgumentException: 



shutdown
++++++++

.. function:: shutdown()


    Remove reference to database adapter

    :rtype: void 



doWrite
+++++++

.. function:: doWrite()


    Write a message to the log.

    :param array: event data

    :rtype: void 

    :throws: Exception\RuntimeException 



prepareInsert
+++++++++++++

.. function:: prepareInsert()


    Prepare the INSERT SQL statement

    :param Adapter: 
    :param string: 
    :param array: 

    :rtype: string 



mapEventIntoColumn
++++++++++++++++++

.. function:: mapEventIntoColumn()


    Map event into column using the $columnMap array

    :param array: 
    :param array: 

    :rtype: array 



eventIntoColumn
+++++++++++++++

.. function:: eventIntoColumn()


    Transform event into column for the db table

    :param array: 

    :rtype: array 



