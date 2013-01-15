.. /Http/ClientStatic.php generated using docpx on 01/15/13 05:29pm


Zend\\Http\\ClientStatic
************************


Http static client



Methods
=======

getStaticClient
---------------

.. function:: getStaticClient()


    Get the static HTTP client

    :rtype: Client 



get
---

.. function:: get($url, [$query = false, [$headers = false, [$body = false]]])


    HTTP GET METHOD (static)

    :param string $url: 
    :param array $query: 
    :param array $headers: 
    :param mixed $body: 

    :rtype: Response|bool 



post
----

.. function:: post($url, $params, [$headers = false, [$body = false]])


    HTTP POST METHOD (static)

    :param string $url: 
    :param array $params: 
    :param array $headers: 
    :param mixed $body: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Response|bool 





