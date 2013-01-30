.. Tag/ItemList.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Tag\\ItemList
===================

Methods
-------

count
+++++

.. function:: count()


    Count all items

    :rtype: integer 



spreadWeightValues
++++++++++++++++++

.. function:: spreadWeightValues()


    Spread values in the items relative to their weight

    :param array: 

    :throws InvalidArgumentException: When value list is empty

    :rtype: void 



seek
++++

.. function:: seek()


    Seek to an absolute position

    :param integer: 

    :throws OutOfBoundsException: When the seek position is invalid

    :rtype: void 



current
+++++++

.. function:: current()


    Return the current element

    :rtype: mixed 



next
++++

.. function:: next()


    Move forward to next element

    :rtype: mixed 



key
+++

.. function:: key()


    Return the key of the current element

    :rtype: mixed 



valid
+++++

.. function:: valid()


    Check if there is a current element after calls to rewind() or next()

    :rtype: bool 



rewind
++++++

.. function:: rewind()


    Rewind the Iterator to the first element

    :rtype: void 



offsetExists
++++++++++++

.. function:: offsetExists()


    Check if an offset exists

    :param mixed: 

    :rtype: bool 



offsetGet
+++++++++

.. function:: offsetGet()


    Get the value of an offset

    :param mixed: 

    :rtype: TaggableInterface 



offsetSet
+++++++++

.. function:: offsetSet()


    Append a new item

    :param mixed: 
    :param TaggableInterface: 

    :throws OutOfBoundsException: When item does not implement Zend\Tag\TaggableInterface

    :rtype: void 



offsetUnset
+++++++++++

.. function:: offsetUnset()


    Unset an item

    :param mixed: 

    :rtype: void 



