
/*
Materiales(Clave,Descripción,Costo)
Proveedores(RFC,RazonSocial)
Proyectos(Numero,Denominacion)
Entregan(Clave,RFC,Numero,Fecha,Cantidad)
*/
CREATE TABLE Materiales
(
  Clave numeric(5),
  Descripcion varchar(50),
  Costo numeric(8,2)
)

CREATE TABLE Proovedores
(
  RFC char(13),
  RazonSocial varchar(50),

)

CREATE TABLE Proyectos
(
  Numero numeric(5),
  Denominacion varchar(50)
)

CREATE TABLE Entregan
(
  Clave numeric(5),
  RFC char(13),
  Numero numeric(5),
  Fecha datetime,
  Cantidad numeric(8,2)
)

insert into materiales values(1000,'xxx',1000)



delete from materiales where Clave = 1000 and costo=1000

ALTER TABLE Materiales add constraint llaveMateriales PRIMARY KEY (Clave)

sp_helpconstraint materiales

