.. /Console/Prompt/Select.php generated using docpx on 01/15/13 05:29pm


Zend\\Console\\Prompt\\Select
*****************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$promptText = "Please select one option", [$options = false, [$allowEmpty = false, [$echo = false]]]])


    Ask the user to select one of pre-defined options

    :param string $promptText: The prompt text to display in console
    :param array $options: Allowed options
    :param bool $allowEmpty: Allow empty (no) selection?
    :param bool $echo: True to display selected option?

    :throws Exception\BadMethodCallException: if no options available



show
----

.. function:: show()


    Show a list of options and prompt the user to select one of them.

    :rtype: string Selected option



setOptions
----------

.. function:: setOptions($options)


    Set allowed options

    :param array|\Traversable $options: 

    :throws Exception\BadMethodCallException: 



getOptions
----------

.. function:: getOptions()


    @return array





