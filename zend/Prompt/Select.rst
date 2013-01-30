.. Console/Prompt/Select.php generated using docpx on 01/30/13 03:32am


Zend\\Console\\Prompt\\Select
=============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Ask the user to select one of pre-defined options

    :param string: The prompt text to display in console
    :param array: Allowed options
    :param bool: Allow empty (no) selection?
    :param bool: True to display selected option?

    :throws Exception\BadMethodCallException: if no options available



show
----

.. function:: show()


    Show a list of options and prompt the user to select one of them.

    :rtype: string Selected option



setOptions
----------

.. function:: setOptions()


    Set allowed options

    :param array|\Traversable: 

    :throws Exception\BadMethodCallException: 



getOptions
----------

.. function:: getOptions()


    @return array



