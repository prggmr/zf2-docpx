.. View/Model/ViewModel.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Model\\ViewModel
============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array|Traversable: 
    :param array|Traversable: 



__set
+++++

.. function:: __set()


    Property overloading: set variable value

    :param string: 
    :param mixed: 

    :rtype: void 



__get
+++++

.. function:: __get()


    Property overloading: get variable value

    :param string: 

    :rtype: mixed 



__isset
+++++++

.. function:: __isset()


    Property overloading: do we have the requested variable value?

    :param string: 

    :rtype: bool 



__unset
+++++++

.. function:: __unset()


    Property overloading: unset the requested variable

    :param string: 

    :rtype: void 



setOption
+++++++++

.. function:: setOption()


    Set a single option

    :param string: 
    :param mixed: 

    :rtype: ViewModel 



getOption
+++++++++

.. function:: getOption()


    Get a single option

    :param string: The option to get.
    :param mixed|null: (optional) A default value if the option is not yet set.

    :rtype: mixed 



setOptions
++++++++++

.. function:: setOptions()


    Set renderer options/hints en masse

    :param array|\Traversable: 

    :throws \Zend\View\Exception\InvalidArgumentException: 

    :rtype: ViewModel 



getOptions
++++++++++

.. function:: getOptions()


    Get renderer options/hints

    :rtype: array 



clearOptions
++++++++++++

.. function:: clearOptions()


    Clear any existing renderer options/hints

    :rtype: ViewModel 



getVariable
+++++++++++

.. function:: getVariable()


    Get a single view variable

    :param string: 
    :param mixed|null: (optional) default value if the variable is not present.

    :rtype: mixed 



setVariable
+++++++++++

.. function:: setVariable()


    Set view variable

    :param string: 
    :param mixed: 

    :rtype: ViewModel 



setVariables
++++++++++++

.. function:: setVariables()


    Set view variables en masse
    
    Can be an array or a Traversable + ArrayAccess object.

    :param array|ArrayAccess|Traversable: 
    :param bool: Whether or not to overwrite the internal container with $variables

    :throws Exception\InvalidArgumentException: 

    :rtype: ViewModel 



getVariables
++++++++++++

.. function:: getVariables()


    Get view variables

    :rtype: array|ArrayAccess|Traversable 



clearVariables
++++++++++++++

.. function:: clearVariables()


    Clear all variables
    
    Resets the internal variable container to an empty container.

    :rtype: ViewModel 



setTemplate
+++++++++++

.. function:: setTemplate()


    Set the template to be used by this model

    :param string: 

    :rtype: ViewModel 



getTemplate
+++++++++++

.. function:: getTemplate()


    Get the template to be used by this model

    :rtype: string 



addChild
++++++++

.. function:: addChild()


    Add a child model

    :param ModelInterface: 
    :param null|string: Optional; if specified, the "capture to" value to set on the child
    :param null|bool: Optional; if specified, append to child  with the same capture

    :rtype: ViewModel 



getChildren
+++++++++++

.. function:: getChildren()


    Return all children.
    
    Return specifies an array, but may be any iterable object.

    :rtype: array 



hasChildren
+++++++++++

.. function:: hasChildren()


    Does the model have any children?

    :rtype: bool 



clearChildren
+++++++++++++

.. function:: clearChildren()


    Clears out all child models

    :rtype: ViewModel 



setCaptureTo
++++++++++++

.. function:: setCaptureTo()


    Set the name of the variable to capture this model to, if it is a child model

    :param string: 

    :rtype: ViewModel 



captureTo
+++++++++

.. function:: captureTo()


    Get the name of the variable to which to capture this model

    :rtype: string 



setTerminal
+++++++++++

.. function:: setTerminal()


    Set flag indicating whether or not this is considered a terminal or standalone model

    :param bool: 

    :rtype: ViewModel 



terminate
+++++++++

.. function:: terminate()


    Is this considered a terminal or standalone model?

    :rtype: bool 



setAppend
+++++++++

.. function:: setAppend()


    Set flag indicating whether or not append to child  with the same capture

    :param bool: 

    :rtype: ViewModel 



isAppend
++++++++

.. function:: isAppend()


    Is this append to child  with the same capture?

    :rtype: bool 



count
+++++

.. function:: count()


    Return count of children

    :rtype: int 



getIterator
+++++++++++

.. function:: getIterator()


    Get iterator of children

    :rtype: ArrayIterator 



