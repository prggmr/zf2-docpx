.. Console/Prompt/Confirm.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Console\\Prompt\\Confirm
==============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Ask the user for a single key stroke

    :param string: The prompt text to display in console
    :param string: The "yes" key (defaults to Y)
    :param string: The "no" key (defaults to N)



show
++++

.. function:: show()


    Show the confirmation message and return result.

    :rtype: bool 



setNoChar
+++++++++

.. function:: setNoChar()


    @param string $noChar



getNoChar
+++++++++

.. function:: getNoChar()


    @return string



setYesChar
++++++++++

.. function:: setYesChar()


    @param string $yesChar



getYesChar
++++++++++

.. function:: getYesChar()


    @return string



