#Insertar Datos en la tabla BANCO
INSERT INTO banco(nombre,email)
VALUES ('BANCOLOMBIA','bancolombia1@gmail.com');
INSERT INTO banco(nombre,email)
VALUES ('BBVA','num1bbva@gmail.com');

#Insertar Datos en la tabla sucursales
INSERT INTO sucursal(nombre,direccion,telefono,fknitBanco)
VALUES ('Bancolombia','Av.Santander # 59-109','01-800-0712345'1);
INSERT INTO sucursal(nombre,direccion,telefono,fknitBanco)
VALUES ('Bancolombia','Cra 27A # 66-30','01-800-0712345'1);
INSERT INTO sucursal(nombre,direccion,telefono,fknitBanco)
VALUES ('Bancolombia','Cra. 22 #21-14','01-800-0712345'1);
INSERT INTO sucursal(nombre,direccion,telefono,fknitBanco)
VALUES ('BBVA','Av.Santander #64B-33','68756157'2);
INSERT INTO sucursal(nombre,direccion,telefono,fknitBanco)
VALUES ('BBVA','Cl. 100b','01-800-0935777'2);

#Insertar Datos en la tabla cuenta
INSERT INTO cuenta(tipoCuenta,saldo,fechaCreacion,fkidSucursal,fkcodCliente)
VALUES ('Ahorros',2500000,'2018-04-18 12:00:00',1,1);
INSERT INTO cuenta(tipoCuenta,saldo,fechaCreacion,fkidSucursal,fkcodCliente)
VALUES ('Corriente',1800000,'2018-04-18 12:00:00',4,1);
INSERT INTO cuenta(tipoCuenta,saldo,fechaCreacion,fkidSucursal,fkcodCliente)
VALUES ('Nomina',7000000,'2018-04-18 12:00:00',2,3);
INSERT INTO cuenta(tipoCuenta,saldo,fechaCreacion,fkidSucursal,fkcodCliente)
VALUES ('Exprés',6250000,'2018-04-18 12:00:00',3,4);
INSERT INTO cuenta(tipoCuenta,saldo,fechaCreacion,fkidSucursal,fkcodCliente)
VALUES ('Ahorros',15000500,'2018-04-18 12:00:00',5,2);