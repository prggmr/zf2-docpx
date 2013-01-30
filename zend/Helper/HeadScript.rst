.. View/Helper/HeadScript.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Helper\\HeadScript
==============================

Helper for setting and retrieving script elements for HTML head section

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


    Return headScript object
    
    Returns headScript helper object; optionally, allows specifying a script
    or script file to include.

    :param string: Script or file
    :param string: Script/url
    :param string: Append, prepend, or set
    :param array: Array of script attributes
    :param string: Script type and/or array of script attributes

    :rtype: \Zend\View\Helper\HeadScript 



captureStart
++++++++++++

.. function:: captureStart()


    Start capture action

    :param mixed: Type of capture
    :param string: Type of script
    :param array: Attributes of capture

    :rtype: void 

    :throws: Exception\RuntimeException 



captureEnd
++++++++++

.. function:: captureEnd()


    End capture action and store

    :rtype: void 



__call
++++++

.. function:: __call()


    Overload method access
    
    Allows the following method calls:
    - appendFile($src, $type = 'text/javascript', $attrs = array())
    - offsetSetFile($index, $src, $type = 'text/javascript', $attrs = array())
    - prependFile($src, $type = 'text/javascript', $attrs = array())
    - setFile($src, $type = 'text/javascript', $attrs = array())
    - appendScript($script, $type = 'text/javascript', $attrs = array())
    - offsetSetScript($index, $src, $type = 'text/javascript', $attrs = array())
    - prependScript($script, $type = 'text/javascript', $attrs = array())
    - setScript($script, $type = 'text/javascript', $attrs = array())

    :param string: Method to call
    :param array: Arguments of method

    :rtype: \Zend\View\Helper\HeadScript 

    :throws: Exception\BadMethodCallException if too few arguments or invalid method



isDuplicate
+++++++++++

.. function:: isDuplicate()


    Is the file specified a duplicate?

    :param string: Name of file to check

    :rtype: bool 



isValid
+++++++

.. function:: isValid()


    Is the script provided valid?

    :param mixed: Is the given script valid?

    :rtype: bool 



append
++++++

.. function:: append()


    Override append

    :param string: Append script or file

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



prepend
+++++++

.. function:: prepend()


    Override prepend

    :param string: Prepend script or file

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



set
+++

.. function:: set()


    Override set

    :param string: Set script or file

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



offsetSet
+++++++++

.. function:: offsetSet()


    Override offsetSet

    :param string|int: Set script of file offset
    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



setAllowArbitraryAttributes
+++++++++++++++++++++++++++

.. function:: setAllowArbitraryAttributes()


    Set flag indicating if arbitrary attributes are allowed

    :param bool: Set flag

    :rtype: \Zend\View\Helper\HeadScript 



arbitraryAttributesAllowed
++++++++++++++++++++++++++

.. function:: arbitraryAttributesAllowed()


    Are arbitrary attributes allowed?

    :rtype: bool 



itemToString
++++++++++++

.. function:: itemToString()


    Create script HTML

    :param mixed: Item to convert
    :param string: String to add before the item
    :param string: Starting sequence
    :param string: Ending sequence

    :rtype: string 



toString
++++++++

.. function:: toString()


    Retrieve string representation

    :param string|int: Amount of whitespaces or string to use for indention

    :rtype: string 



createData
++++++++++

.. function:: createData()


    Create data item containing all necessary components of script

    :param string: Type of data
    :param array: Attributes of data
    :param string: Content of data

    :rtype: stdClass 





Constants
---------

FILE
++++

SCRIPT
++++++

