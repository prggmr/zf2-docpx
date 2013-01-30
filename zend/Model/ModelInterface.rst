.. View/Model/ModelInterface.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Model\\setOption
============================

.. function:: Zend\View\Model\setOption()


    Set renderer option/hint

    :param string: 
    :param mixed: 

    :rtype: ModelInterface 



Zend\\View\\Model\\setOptions
=============================

.. function:: Zend\View\Model\setOptions()


    Set renderer options/hints en masse

    :param array|\Traversable: 

    :rtype: ModelInterface 



Zend\\View\\Model\\getOptions
=============================

.. function:: Zend\View\Model\getOptions()


    Get renderer options/hints

    :rtype: array|\Traversable 



Zend\\View\\Model\\getVariable
==============================

.. function:: Zend\View\Model\getVariable()


    Get a single view variable

    :param string: 
    :param mixed|null: (optional) default value if the variable is not present.

    :rtype: mixed 



Zend\\View\\Model\\setVariable
==============================

.. function:: Zend\View\Model\setVariable()


    Set view variable

    :param string: 
    :param mixed: 

    :rtype: ModelInterface 



Zend\\View\\Model\\setVariables
===============================

.. function:: Zend\View\Model\setVariables()


    Set view variables en masse

    :param array|\ArrayAccess: 

    :rtype: ModelInterface 



Zend\\View\\Model\\getVariables
===============================

.. function:: Zend\View\Model\getVariables()


    Get view variables

    :rtype: array|\ArrayAccess 



Zend\\View\\Model\\setTemplate
==============================

.. function:: Zend\View\Model\setTemplate()


    Set the template to be used by this model

    :param string: 

    :rtype: ModelInterface 



Zend\\View\\Model\\getTemplate
==============================

.. function:: Zend\View\Model\getTemplate()


    Get the template to be used by this model

    :rtype: string 



Zend\\View\\Model\\addChild
===========================

.. function:: Zend\View\Model\addChild()


    Add a child model

    :param ModelInterface: 
    :param null|string: Optional; if specified, the "capture to" value to set on the child
    :param null|bool: Optional; if specified, append to child  with the same capture

    :rtype: ModelInterface 



Zend\\View\\Model\\getChildren
==============================

.. function:: Zend\View\Model\getChildren()


    Return all children.
    
    Return specifies an array, but may be any iterable object.

    :rtype: array 



Zend\\View\\Model\\hasChildren
==============================

.. function:: Zend\View\Model\hasChildren()


    Does the model have any children?

    :rtype: bool 



Zend\\View\\Model\\setCaptureTo
===============================

.. function:: Zend\View\Model\setCaptureTo()


    Set the name of the variable to capture this model to, if it is a child model

    :param string: 

    :rtype: ModelInterface 



Zend\\View\\Model\\captureTo
============================

.. function:: Zend\View\Model\captureTo()


    Get the name of the variable to which to capture this model

    :rtype: string 



Zend\\View\\Model\\setTerminal
==============================

.. function:: Zend\View\Model\setTerminal()


    Set flag indicating whether or not this is considered a terminal or standalone model

    :param bool: 

    :rtype: ModelInterface 



Zend\\View\\Model\\terminate
============================

.. function:: Zend\View\Model\terminate()


    Is this considered a terminal or standalone model?

    :rtype: bool 



Zend\\View\\Model\\setAppend
============================

.. function:: Zend\View\Model\setAppend()


    Set flag indicating whether or not append to child  with the same capture

    :param bool: 

    :rtype: ModelInterface 



Zend\\View\\Model\\isAppend
===========================

.. function:: Zend\View\Model\isAppend()


    Is this append to child  with the same capture?

    :rtype: bool 



