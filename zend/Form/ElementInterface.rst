.. Form/ElementInterface.php generated using docpx on 01/30/13 03:26pm


Function
********

Zend\\Form\\setName
===================

.. function:: Zend\Form\setName()


    Set the name of this element
    
    In most cases, this will proxy to the attributes for storage, but is
    present to indicate that elements are generally named.

    :param string: 

    :rtype: ElementInterface 



Function
********

Zend\\Form\\getName
===================

.. function:: Zend\Form\getName()


    Retrieve the element name

    :rtype: string 



Function
********

Zend\\Form\\setOptions
======================

.. function:: Zend\Form\setOptions()


    Set options for an element

    :param array|\Traversable: 

    :rtype: ElementInterface 



Function
********

Zend\\Form\\getOptions
======================

.. function:: Zend\Form\getOptions()


    get the defined options

    :rtype: array 



Function
********

Zend\\Form\\getOption
=====================

.. function:: Zend\Form\getOption()


    return the specified option

    :param string: 

    :rtype: null|mixed 



Function
********

Zend\\Form\\setAttribute
========================

.. function:: Zend\Form\setAttribute()


    Set a single element attribute

    :param string: 
    :param mixed: 

    :rtype: ElementInterface 



Function
********

Zend\\Form\\getAttribute
========================

.. function:: Zend\Form\getAttribute()


    Retrieve a single element attribute

    :param string: 

    :rtype: mixed 



Function
********

Zend\\Form\\hasAttribute
========================

.. function:: Zend\Form\hasAttribute()


    Return true if a specific attribute is set

    :param string: 

    :rtype: bool 



Function
********

Zend\\Form\\setAttributes
=========================

.. function:: Zend\Form\setAttributes()


    Set many attributes at once
    
    Implementation will decide if this will overwrite or merge.

    :param array|\Traversable: 

    :rtype: ElementInterface 



Function
********

Zend\\Form\\getAttributes
=========================

.. function:: Zend\Form\getAttributes()


    Retrieve all attributes at once

    :rtype: array|\Traversable 



Function
********

Zend\\Form\\setValue
====================

.. function:: Zend\Form\setValue()


    Set the value of the element

    :param mixed: 

    :rtype: ElementInterface 



Function
********

Zend\\Form\\getValue
====================

.. function:: Zend\Form\getValue()


    Retrieve the element value

    :rtype: mixed 



Function
********

Zend\\Form\\setLabel
====================

.. function:: Zend\Form\setLabel()


    Set the label (if any) used for this element

    :param $label: 

    :rtype: ElementInterface 



Function
********

Zend\\Form\\getLabel
====================

.. function:: Zend\Form\getLabel()


    Retrieve the label (if any) used for this element

    :rtype: string 



Function
********

Zend\\Form\\setMessages
=======================

.. function:: Zend\Form\setMessages()


    Set a list of messages to report when validation fails

    :param array|\Traversable: 

    :rtype: ElementInterface 



Function
********

Zend\\Form\\getMessages
=======================

.. function:: Zend\Form\getMessages()


    Get validation error messages, if any
    
    Returns a list of validation failure messages, if any.

    :rtype: array|\Traversable 



