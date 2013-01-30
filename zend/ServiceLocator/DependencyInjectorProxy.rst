.. Di/ServiceLocator/DependencyInjectorProxy.php generated using docpx on 01/30/13 03:32am


Zend\\Di\\ServiceLocator\\DependencyInjectorProxy
=================================================

Proxy used to analyze how instances are created by a given Di. Overrides Zend\Di\Di to produce artifacts that
represent the process used to instantiate a particular instance

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param Di $di



get
---

.. function:: get()


    {@inheritDoc}

    :rtype: GeneratorInstance 



newInstance
-----------

.. function:: newInstance()


    {@inheritDoc}

    :rtype: GeneratorInstance 



createInstanceViaConstructor
----------------------------

.. function:: createInstanceViaConstructor()


    {@inheritDoc}

    :rtype: GeneratorInstance 



createInstanceViaCallback
-------------------------

.. function:: createInstanceViaCallback()


    {@inheritDoc}


    :rtype: GeneratorInstance 



handleInjectionMethodForObject
------------------------------

.. function:: handleInjectionMethodForObject()


    {@inheritDoc}



resolveAndCallInjectionMethodForInstance
----------------------------------------

.. function:: resolveAndCallInjectionMethodForInstance()


    {@inheritDoc}



getClass
--------

.. function:: getClass()


    {@inheritDoc}



