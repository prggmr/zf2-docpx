.. Mail/Storage/AbstractStorage.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Storage\\AbstractStorage
====================================

Methods
-------

__get
+++++

.. function:: __get()


    Getter for has-properties. The standard has properties
    are: hasFolder, hasUniqueid, hasDelete, hasCreate, hasTop
    
    The valid values for the has-properties are:
      - true if a feature is supported
      - false if a feature is not supported
      - null is it's not yet known or it can't be know if a feature is supported

    :param string: property name

    :throws Exception\InvalidArgumentException: 

    :rtype: bool supported or not



getCapabilities
+++++++++++++++

.. function:: getCapabilities()


    Get a full list of features supported by the specific mail lib and the server

    :rtype: array list of features as array(feature_name => true|false[|null])



countMessages
+++++++++++++

.. function:: countMessages()


    Count messages messages in current box/folder

    :rtype: int number of messages

    :throws: Exception\ExceptionInterface 



getSize
+++++++

.. function:: getSize()


    Get a list of messages with number and size

    :param int: number of message

    :rtype: int|array size of given message of list with all messages as array(num => size)



getMessage
++++++++++

.. function:: getMessage()


    Get a message with headers and body

    :param $id: number of message

    :rtype: Message 



getRawHeader
++++++++++++

.. function:: getRawHeader()


    Get raw header of message or part

    :param int: number of message
    :param null|array|string: path to part or null for message header
    :param int: include this many lines with header (after an empty line)

    :rtype: string raw header



getRawContent
+++++++++++++

.. function:: getRawContent()


    Get raw content of message or part

    :param int: number of message
    :param null|array|string: path to part or null for message content

    :rtype: string raw content



__construct
+++++++++++

.. function:: __construct()


    Create instance with parameters

    :param array: mail reader specific parameters

    :throws Exception\ExceptionInterface: 



__destruct
++++++++++

.. function:: __destruct()


    Destructor calls close() and therefore closes the resource.



close
+++++

.. function:: close()


    Close resource for mail lib. If you need to control, when the resource
    is closed. Otherwise the destructor would call this.



noop
++++

.. function:: noop()


    Keep the resource alive.



removeMessage
+++++++++++++

.. function:: removeMessage()


    delete a message from current box/folder

    :param $id: 



getUniqueId
+++++++++++

.. function:: getUniqueId()


    get unique id for one or all messages
    
    if storage does not support unique ids it's the same as the message number

    :param int|null: message number

    :rtype: array|string message number for given message or all messages as array

    :throws: Exception\ExceptionInterface 



getNumberByUniqueId
+++++++++++++++++++

.. function:: getNumberByUniqueId()


    get a message number from a unique id
    
    I.e. if you have a webmailer that supports deleting messages you should use unique ids
    as parameter and use this method to translate it to message number right before calling removeMessage()

    :param string: unique id

    :rtype: int message number

    :throws: Exception\ExceptionInterface 



count
+++++

.. function:: count()


    Countable::count()

    :rtype: int 



offsetExists
++++++++++++

.. function:: offsetExists()


    ArrayAccess::offsetExists()

    :param int: 

    :rtype: boolean 



offsetGet
+++++++++

.. function:: offsetGet()


    ArrayAccess::offsetGet()

    :param int: 

    :rtype: \Zend\Mail\Storage\Message message object



offsetSet
+++++++++

.. function:: offsetSet()


    ArrayAccess::offsetSet()

    :param mixed: 
    :param mixed: 

    :throws Exception\RuntimeException: 



offsetUnset
+++++++++++

.. function:: offsetUnset()


    ArrayAccess::offsetUnset()

    :param int: 

    :rtype: boolean success



rewind
++++++

.. function:: rewind()


    Iterator::rewind()
    
    Rewind always gets the new count from the storage. Thus if you use
    the interfaces and your scripts take long you should use reset()
    from time to time.



current
+++++++

.. function:: current()


    Iterator::current()

    :rtype: Message current message



key
+++

.. function:: key()


    Iterator::key()

    :rtype: int id of current position



next
++++

.. function:: next()


    Iterator::next()



valid
+++++

.. function:: valid()


    Iterator::valid()

    :rtype: bool 



seek
++++

.. function:: seek()


    SeekableIterator::seek()

    :param int: 

    :throws Exception\OutOfBoundsException: 



