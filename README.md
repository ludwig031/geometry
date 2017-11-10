Symfony task
========================

Framework
--------------

Symfony 3.1 or higher (preferably 3.3)

Task
--------------

* Create 2 models/classes: Circle and Triangle
* Implement 2 methods: circumference and surface calculator
* Define routes:
    - [GET] /triangle/{a}/{b}/{c} 
    - [GET] /circle/{radius}
* Routes return JSON with objects, calculated circumference and surface
```
{
  "type": "circle", 
  "radius": 2.0,
  "surface": 12.56,
  "circumference": 12.56,
}
```

or

```
{
  "type": "triangle",
  "a": 3.0,
  "b": 4.0,
  "c": 5.0,
  "surface": 6.0,
  "circumference": 12.0,
}
```
* Create service (e.g. app.geometry_calculator)
    - implement method for two objects circumferences addition
    - implement method for two objects surface addition
