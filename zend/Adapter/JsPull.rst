.. ProgressBar/Adapter/JsPull.php generated using docpx on 01/30/13 03:32am


Zend\\ProgressBar\\Adapter\\JsPull
==================================

Zend_ProgressBar_Adapter_JsPull offers a simple method for updating a
progressbar in a browser.

Methods
+++++++

setExitAfterSend
----------------

.. function:: setExitAfterSend()


    Set whether to exit after json data send or not

    :param bool: 

    :rtype: \Zend\ProgressBar\Adapter\JsPull 



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



_outputData
-----------

.. function:: _outputData()


    Outputs given data the user agent.
    
    This split-off is required for unit-testing.

    :param string: 

    :rtype: void 



