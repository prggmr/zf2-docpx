.. Form/View/Helper/File/FormFileUploadProgress.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress
======================================================

A view helper to render the hidden input with a UploadProgress id
for file uploads progress tracking.

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface|null: 

    :rtype: string 



renderHiddenId
++++++++++++++

.. function:: renderHiddenId()


    Render a hidden form <input> element with the progress id

    :rtype: string 



getName
+++++++

.. function:: getName()


    @return string



getValue
++++++++

.. function:: getValue()


    @return string



