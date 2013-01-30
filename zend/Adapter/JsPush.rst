.. ProgressBar/Adapter/JsPush.php generated using docpx on 01/30/13 03:32am


Zend\\ProgressBar\\Adapter\\JsPush
==================================

Zend_ProgressBar_Adapter_JsPush offers a simple method for updating a
progressbar in a browser.

Methods
+++++++

setUpdateMethodName
-------------------

.. function:: setUpdateMethodName()


    Set the update method name

    :param string: 

    :rtype: \Zend\ProgressBar\Adapter\JsPush 



setFinishMethodName
-------------------

.. function:: setFinishMethodName()


    Set the finish method name

    :param string: 

    :rtype: \Zend\ProgressBar\Adapter\JsPush 



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



