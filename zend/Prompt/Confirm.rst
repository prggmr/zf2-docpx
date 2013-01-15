.. /Console/Prompt/Confirm.php generated using docpx on 01/15/13 05:29pm


Zend\\Console\\Prompt\\Confirm
******************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$promptText = "Are you sure?", [$yesChar = "y", [$noChar = "n"]]])


    Ask the user for a single key stroke

    :param string $promptText: The prompt text to display in console
    :param string $yesChar: The "yes" key (defaults to Y)
    :param string $noChar: The "no" key (defaults to N)



show
----

.. function:: show()


    Show the confirmation message and return result.

    :rtype: bool 



setNoChar
---------

.. function:: setNoChar($noChar)


    @param string $noChar



getNoChar
---------

.. function:: getNoChar()


    @return string



setYesChar
----------

.. function:: setYesChar($yesChar)


    @param string $yesChar



getYesChar
----------

.. function:: getYesChar()


    @return string





