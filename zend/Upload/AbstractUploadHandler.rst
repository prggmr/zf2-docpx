.. ProgressBar/Upload/AbstractUploadHandler.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\ProgressBar\\Upload\\AbstractUploadHandler
================================================

Abstract class for Upload Progress Handlers

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param  array|\Traversable $options Optional options




setOptions
++++++++++

.. function:: setOptions()


    Set options for a upload handler. Accepted options are:
    - session_namespace: session namespace for upload progress
    - progress_adapter: progressbar adapter to use for updating progress

    :param array|\Traversable: 

    :rtype: AbstractUploadHandler 

    :throws: Exception\InvalidArgumentException 



setSessionNamespace
+++++++++++++++++++

.. function:: setSessionNamespace()


    @param  string $sessionNamespace

    :rtype: AbstractUploadHandler|UploadHandlerInterface 



getSessionNamespace
+++++++++++++++++++

.. function:: getSessionNamespace()


    @return string



setProgressAdapter
++++++++++++++++++

.. function:: setProgressAdapter()


    @param  AbstractProgressAdapter|ProgressBar $progressAdapter

    :rtype: AbstractUploadHandler|UploadHandlerInterface 



getProgressAdapter
++++++++++++++++++

.. function:: getProgressAdapter()


    @return AbstractProgressAdapter|ProgressBar



getProgress
+++++++++++

.. function:: getProgress()


    @param  string $id

    :rtype: array 



getUploadProgress
+++++++++++++++++

.. function:: getUploadProgress()


    @param  string $id

    :rtype: array|boolean 



toByteString
++++++++++++

.. function:: toByteString()


    Returns the formatted size

    :param integer: 

    :rtype: string 



