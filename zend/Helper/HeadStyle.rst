.. View/Helper/HeadStyle.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\HeadStyle
=============================

Helper for setting and retrieving stylesheets

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Set separator to PHP_EOL.



__invoke
++++++++

.. function:: __invoke()


    Return headStyle object
    
    Returns headStyle helper object; optionally, allows specifying

    :param string: Stylesheet contents
    :param string: Append, prepend, or set
    :param string|array: Optional attributes to utilize

    :rtype: \Zend\View\Helper\HeadStyle 



__call
++++++

.. function:: __call()


    Overload method calls
    
    Allows the following method calls:
    - appendStyle($content, $attributes = array())
    - offsetSetStyle($index, $content, $attributes = array())
    - prependStyle($content, $attributes = array())
    - setStyle($content, $attributes = array())

    :param string: 
    :param array: 

    :rtype: void 

    :throws: Exception\BadMethodCallException When no $content provided or invalid method



isValid
+++++++

.. function:: isValid()


    Determine if a value is a valid style tag

    :param mixed: 

    :rtype: bool 



append
++++++

.. function:: append()


    Override append to enforce style creation

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



offsetSet
+++++++++

.. function:: offsetSet()


    Override offsetSet to enforce style creation

    :param string|int: 
    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



prepend
+++++++

.. function:: prepend()


    Override prepend to enforce style creation

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



set
+++

.. function:: set()


    Override set to enforce style creation

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



captureStart
++++++++++++

.. function:: captureStart()


    Start capture action

    :param string: 
    :param string: 

    :rtype: void 

    :throws: Exception\RuntimeException 



captureEnd
++++++++++

.. function:: captureEnd()


    End capture action and store

    :rtype: void 



itemToString
++++++++++++

.. function:: itemToString()


    Convert content and attributes into valid style tag

    :param stdClass: Item to render
    :param string: Indentation to use

    :rtype: string 



toString
++++++++

.. function:: toString()


    Create string representation of placeholder

    :param string|int: 

    :rtype: string 



createData
++++++++++

.. function:: createData()


    Create data item for use in stack

    :param string: 
    :param array: 

    :rtype: stdClass 



