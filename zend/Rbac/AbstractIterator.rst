.. Permissions/Rbac/AbstractIterator.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Permissions\\Rbac\\AbstractIterator
=========================================

Methods
-------

current
+++++++

.. function:: current()


    (PHP 5 &gt;= 5.0.0)<br/>
    Return the current element


    :rtype: mixed Can return any type.



next
++++

.. function:: next()


    (PHP 5 &gt;= 5.0.0)<br/>
    Move forward to next element


    :rtype: void Any returned value is ignored.



key
+++

.. function:: key()


    (PHP 5 &gt;= 5.0.0)<br/>
    Return the key of the current element


    :rtype: scalar scalar on success, or null on failure.



valid
+++++

.. function:: valid()


    (PHP 5 &gt;= 5.0.0)<br/>
    Checks if current position is valid


    :rtype: boolean The return value will be casted to boolean and then evaluated.
Returns true on success or false on failure.



rewind
++++++

.. function:: rewind()


    (PHP 5 &gt;= 5.0.0)<br/>
    Rewind the Iterator to the first element


    :rtype: void Any returned value is ignored.



hasChildren
+++++++++++

.. function:: hasChildren()


    (PHP 5 &gt;= 5.1.0)<br/>
    Returns if an iterator can be created fot the current entry.


    :rtype: bool true if the current entry can be iterated over, otherwise returns false.



getChildren
+++++++++++

.. function:: getChildren()


    (PHP 5 &gt;= 5.1.0)<br/>
    Returns an iterator for the current entry.


    :rtype: RecursiveIterator An iterator for the current entry.



