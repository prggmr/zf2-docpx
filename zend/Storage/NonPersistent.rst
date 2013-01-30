.. Authentication/Storage/NonPersistent.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Authentication\\Storage\\NonPersistent
============================================

Non-Persistent Authentication Storage

Since HTTP Authentication happens again on each request, this will always be
re-populated. So there's no need to use sessions, this simple value class
will hold the data for rest of the current request.

Methods
-------

isEmpty
+++++++

.. function:: isEmpty()


    Returns true if and only if storage is empty

    :rtype: bool 



read
++++

.. function:: read()


    Returns the contents of storage
    Behavior is undefined when storage is empty.

    :rtype: mixed 



write
+++++

.. function:: write()


    Writes $contents to storage

    :param mixed: 

    :rtype: void 



clear
+++++

.. function:: clear()


    Clears contents from storage

    :rtype: void 



