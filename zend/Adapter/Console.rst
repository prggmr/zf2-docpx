.. ProgressBar/Adapter/Console.php generated using docpx on 01/30/13 03:32am


Zend\\ProgressBar\\Adapter\\Console
===================================

Zend_ProgressBar_Adapter_Console offers a text-based progressbar for console
applications

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Defined by Zend_ProgressBar_Adapter

    :param array|\Traversable: 



__destruct
----------

.. function:: __destruct()


    Close local stdout, when open



setOutputStream
---------------

.. function:: setOutputStream()


    Set a different output-stream

    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: \Zend\ProgressBar\Adapter\Console 



getOutputStream
---------------

.. function:: getOutputStream()


    Get the current output stream

    :rtype: resource 



setWidth
--------

.. function:: setWidth()


    Set the width of the progressbar

    :param integer: 

    :rtype: \Zend\ProgressBar\Adapter\Console 



setElements
-----------

.. function:: setElements()


    Set the elements to display with the progressbar

    :param array: 

    :throws \Zend\ProgressBar\Adapter\Exception\InvalidArgumentException: When an invalid element is found in the array

    :rtype: \Zend\ProgressBar\Adapter\Console 



setBarLeftChar
--------------

.. function:: setBarLeftChar()


    Set the left-hand character for the bar

    :param string: 

    :throws \Zend\ProgressBar\Adapter\Exception\InvalidArgumentException: When character is empty

    :rtype: \Zend\ProgressBar\Adapter\Console 



setBarRightChar
---------------

.. function:: setBarRightChar()


    Set the right-hand character for the bar

    :param string: 

    :throws \Zend\ProgressBar\Adapter\Exception\InvalidArgumentException: When character is empty

    :rtype: \Zend\ProgressBar\Adapter\Console 



setBarIndicatorChar
-------------------

.. function:: setBarIndicatorChar()


    Set the indicator character for the bar

    :param string: 

    :rtype: \Zend\ProgressBar\Adapter\Console 



setTextWidth
------------

.. function:: setTextWidth()


    Set the width of the text element

    :param integer: 

    :rtype: \Zend\ProgressBar\Adapter\Console 



setCharset
----------

.. function:: setCharset()


    Set the charset of the text element

    :param string: 



setFinishAction
---------------

.. function:: setFinishAction()


    Set the finish action

    :param string: 

    :throws \Zend\ProgressBar\Adapter\Exception\InvalidArgumentException: When an invalid action is specified

    :rtype: \Zend\ProgressBar\Adapter\Console 



notify
------

.. function:: notify()


    Defined by Zend\ProgressBar\Adapter\AbstractAdapter

    :param float: Current progress value
    :param float: Max progress value
    :param float: Current percent value
    :param integer: Taken time in seconds
    :param integer: Remaining time in seconds
    :param string: Status text

    :rtype: void 



finish
------

.. function:: finish()


    Defined by Zend\ProgressBar\Adapter\AbstractAdapter

    :rtype: void 



_calculateBarWidth
------------------

.. function:: _calculateBarWidth()


    Calculate the bar width when other elements changed

    :rtype: void 



_outputData
-----------

.. function:: _outputData()


    Outputs given data to STDOUT.
    
    This split-off is required for unit-testing.

    :param string: 

    :rtype: void 





Constants
+++++++++

ELEMENT_PERCENT
===============

Percentage value of the progress

ELEMENT_BAR
===========

Visual value of the progress

ELEMENT_ETA
===========

ETA of the progress

ELEMENT_TEXT
============

Text part of the progress

FINISH_ACTION_EOL
=================

Finish action: End of Line

FINISH_ACTION_CLEAR_LINE
========================

Finish action: Clear Line

FINISH_ACTION_NONE
==================

Finish action: None

