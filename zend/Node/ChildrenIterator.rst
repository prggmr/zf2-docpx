.. Ldap/Node/ChildrenIterator.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Ldap\\Node\\ChildrenIterator
==================================

Zend\Ldap\Node\ChildrenIterator provides an iterator to a collection of children nodes.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.

    :param array: 

    :rtype: \Zend\Ldap\Node\ChildrenIterator 



count
+++++

.. function:: count()


    Returns the number of child nodes.
    Implements Countable

    :rtype: int 



current
+++++++

.. function:: current()


    Return the current child.
    Implements Iterator

    :rtype: \Zend\Ldap\Node 



key
+++

.. function:: key()


    Return the child'd RDN.
    Implements Iterator

    :rtype: string 



next
++++

.. function:: next()


    Move forward to next child.
    Implements Iterator



rewind
++++++

.. function:: rewind()


    Rewind the Iterator to the first child.
    Implements Iterator



valid
+++++

.. function:: valid()


    Check if there is a current child
    after calls to rewind() or next().
    Implements Iterator

    :rtype: bool 



hasChildren
+++++++++++

.. function:: hasChildren()


    Checks if current node has children.
    Returns whether the current element has children.

    :rtype: bool 



getChildren
+++++++++++

.. function:: getChildren()


    Returns the children for the current node.

    :rtype: ChildrenIterator 



offsetGet
+++++++++

.. function:: offsetGet()


    Returns a child with a given RDN.
    Implements ArrayAccess.

    :param string: 

    :rtype: array|null 



offsetExists
++++++++++++

.. function:: offsetExists()


    Checks whether a given rdn exists.
    Implements ArrayAccess.

    :param string: 

    :rtype: bool 



offsetUnset
+++++++++++

.. function:: offsetUnset()


    Does nothing.
    Implements ArrayAccess.

    :param $name: 



offsetSet
+++++++++

.. function:: offsetSet()


    Does nothing.
    Implements ArrayAccess.

    :param string: 
    :param $value: 



toArray
+++++++

.. function:: toArray()


    Get all children as an array

    :rtype: array 



