.. /Cache/Storage/Event.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Event
***************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($name, $storage, $params)


    Constructor
    
    Accept a storage adapter and its parameters.

    :param string $name: Event name
    :param StorageInterface $storage: 
    :param ArrayObject $params: 



setTarget
---------

.. function:: setTarget($target)


    Set the event target/context

    :param StorageInterface $target: 

    :rtype: Event 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: Z Z



setStorage
----------

.. function:: setStorage($storage)


    Alias of setTarget

    :param StorageInterface $storage: 

    :rtype: Event 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: Z Z



getStorage
----------

.. function:: getStorage()


    Alias of getTarget

    :rtype: StorageInterface 





