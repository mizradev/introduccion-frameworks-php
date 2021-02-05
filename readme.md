# Introducción a Frameworks PHP

### Flujo basico
El cliente hace una peticion al servidor, esta peticion llega al index.php, luego este lo redirecciona a la clase Request que detecta cual es el recurso que desea el cliente y lo redirecciona a la clase Response con la ruta indicada, la clase Response se encarga de buscar la vista que la clase Request le indicó mostrar.