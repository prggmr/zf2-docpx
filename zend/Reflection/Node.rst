.. Server/Reflection/Node.php generated using docpx on 01/30/13 03:32am


Zend\\Server\\Reflection\\Node
==============================

Node Tree class for Zend_Server reflection operations

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param mixed: 
    :param \Zend\Server\Reflection\Node: Optional

    :rtype: \Zend\Server\Reflection\Node 



setParent
---------

.. function:: setParent()


    Set parent node

    :param \Zend\Server\Reflection\Node: 
    :param bool: Whether or not the child node is newly created
and should always be attached

    :rtype: void 



createChild
-----------

.. function:: createChild()


    Create and attach a new child node

    :param mixed: 

    :access : 

    :rtype: \Zend\Server\Reflection\Node New child node



attachChild
-----------

.. function:: attachChild()


    Attach a child node

    :param \Zend\Server\Reflection\Node: 

    :rtype: void 



getChildren
-----------

.. function:: getChildren()


    Return an array of all child nodes

    :rtype: array 



hasChildren
-----------

.. function:: hasChildren()


    Does this node have children?

    :rtype: bool 



getParent
---------

.. function:: getParent()


    Return the parent node

    :rtype: null|\Zend\Server\Reflection\Node 



getValue
--------

.. function:: getValue()


    Return the node's current value

    :rtype: mixed 



setValue
--------

.. function:: setValue()


    Set the node value

    :param mixed: 

    :rtype: void 



getEndPoints
------------

.. function:: getEndPoints()


    Retrieve the bottommost nodes of this node's tree
    
    Retrieves the bottommost nodes of the tree by recursively calling
    getEndPoints() on all children. If a child is null, it returns the parent
    as an end point.

    :rtype: array 



