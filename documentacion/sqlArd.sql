CREATE DATABASE bdddistribuidoraard;
USE bdddistribuidoraard;


CREATE TABLE login_ard(
	IdUsuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Nombre_Usuario_Ard varchar(20),
	Usuario_Ard varchar(20),
	Clave_Ard varchar(20),
	Permiso_Ard varchar(20)
);

INSERT INTO login_ard(Nombre_Usuario_Ard, Usuario_Ard, Clave_Ard, Permiso_Ard) VALUES ('Daniel Rivas', 'drivas', '123', 'admin');



CREATE TABLE empresa(
	IdEmpresa INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Empresa_Nombre varchar(50) not null,
	Empresa_NIT varchar(50) not null,
	Empresa_Direccion varchar(250) not null,
	Empresa_Email varchar(50),
	Empresa_Telefono int(11)
);




CREATE TABLE planilla_ard(
	IdEmpleado INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Empleado_PrimerNombre varchar(50) not null,
	Empleado_SegundoNombre varchar(50) not null,
	Empleado_TercerNombre varchar(50),
	Empleado_PrimerApellido varchar(50) not null,
	Empleado_SegundoApellido varchar(50) not null,
	Empleado_DPI numeric(20) not null,
	Empleado_FechaNacimiento varchar(50) not null,
	Empleado_Direccion varchar(250) not null,
	Empleado_Telefono numeric(15) not null,
	Empleado_Puesto varchar(25) not null,
	Empleado_SueldoInicial numeric(30,2) not null,
	Empleado_SueldoFinal numeric(30,2),
	Empleado_JornadaLaboral varchar(50) not null,
	Empleado_FechaContratacion varchar(25) not null,
	Empleado_FechaRetiro varchar(25),
	Empleado_MotivoRetiro varchar(25),
	Empleado_Beneficios varchar(25) not null
);


CREATE TABLE proveedores_ard(
	IdProveedor INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Prov_Nombre varchar(50) not null,
	Prov_Direccion varchar(250) not null,
	Prov_NIT varchar(20) not null,
	Prov_Telefono numeric(15) not null,
	Prov_Email varchar(25),
	Prov_Presentaciones varchar(25)
);


CREATE TABLE categoria_productos_ard(
	IdCategoriaProducto INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	CategoriaP_Nombre varchar(50) not null,
	CategoriaP_Descripcion varchar(250)
);


CREATE TABLE inventario_ard(
	IdProducto int primary key not null AUTO_INCREMENT,
	Producto_Nombre varchar(50) not null,
	Producto_Descripcion varchar(250) not null,
	Producto_PrecioCompra numeric(30,2) not null,
	Producto_PrecioVenta numeric(30,2) not null,
	Producto_Cantidad int not null,
	Producto_Observaciones varchar(250),
	Producto_FechaIngreso varchar(25),
	Producto_FechaVencimiento varchar(25),
	Producto_IdProveedor int,
	Producto_IdCategoria int,
    FOREIGN KEY (Producto_IdProveedor) REFERENCES proveedores_ard(IdProveedor),
	FOREIGN KEY (Producto_IdCategoria) REFERENCES categoria_productos_ard(IdCategoriaProducto)
);



CREATE TABLE inventario_aux_ard(
	IdProducto int primary key not null AUTO_INCREMENT,
	Producto_Nombre varchar(50) not null,
	Producto_Descripcion varchar(250) not null,
	Producto_PrecioCompra numeric(30,2) not null,
	Producto_PrecioVenta numeric(30,2) not null,
	Producto_Cantidad int not null,
	Producto_Observaciones varchar(250),
	Producto_FechaIngreso varchar(25),
	Producto_FechaVencimiento varchar(25),
	Producto_IdProveedor int,
	Producto_IdCategoria int,
    FOREIGN KEY (Producto_IdProveedor) REFERENCES proveedores_ard(IdProveedor),
	FOREIGN KEY (Producto_IdCategoria) REFERENCES categoria_productos_ard(IdCategoriaProducto)
);



CREATE TABLE sectorizacion_clientes_ard(
	IdSector int primary key not null AUTO_INCREMENT,
	Sector_Nombre_Ruta varchar(50) NOT NULL,
	Sector_DesdeOrigen varchar(50) NOT NULL,
	Sector_HastaOrigen varchar(50) NOT NULL,
	Sector_PilotoAsignado varchar(50),
	Sector_TipoDeVehiculo varchar(50),
	Sector_YearVehiculo varchar(50),
	Sector_ModeloVehiculo varchar(50),
	Sector_ColorVehiculo varchar(50),
	Sector_PlacaVehiculo varchar(50),
	Sector_ExplicacionRuta varchar(250)
);



CREATE TABLE clientes_ard(
	IdCliente int primary key not null AUTO_INCREMENT,
	Cliente_Nombres varchar(80) not null,
	Cliente_NIT varchar(20) not null,
	Cliente_Apellidos varchar(80) not null,
	Cliente_Direccion varchar(250) not null,
	Cliente_Telefono numeric(15) not null,
	Cliente_Email varchar(50),
	Cliente_Beneficios varchar(50),
	Cliente_IdSector int,
	FOREIGN KEY (Cliente_IdSector) REFERENCES sectorizacion_clientes_ard(IdSector)
);



CREATE TABLE metodo_pago_ard(
	IdMetodoPago int primary key not null AUTO_INCREMENT,
	MetodoPago_Tipo varchar(50),
	MetodoPago_Recargo numeric(30)
);



CREATE TABLE ventas_detalle_ard(
	IdVentaCorrelativo int primary key not null AUTO_INCREMENT,
	IdCorrelativoVenta int,
	VentaDetalle_Cantidad int,
    VentaDetalle_PrecioVenta numeric(35,2),
	VentaDetalle_TotalProducto numeric(35,2),
    VentaDetalle_IdProducto int,
    FOREIGN KEY (VentaDetalle_IdProducto) REFERENCES inventario_ard(IdProducto)
);



CREATE TABLE ventas_auxiliar_ard(
	IdVentaCorrelativo int primary key not null AUTO_INCREMENT,
	IdCorrelativoVenta int,
	VentaDetalle_Cantidad int,
    VentaDetalle_PrecioVenta numeric(35,2),
	VentaDetalle_TotalProducto numeric(35,2),
    VentaDetalle_IdProducto int,
    FOREIGN KEY (VentaDetalle_IdProducto) REFERENCES inventario_ard(IdProducto)
);




CREATE TABLE ventas_ard(
	IdVenta int primary key not null AUTO_INCREMENT,
	IdCorrelativoVenta int,
	Venta_FechaVenta varchar(25) not null,
	Venta_Total numeric(35,2) NOT NULL,
	Venta_NITCliente varchar(18),
	Venta_UsuarioVenta varchar(25),
    Venta_IdTipoPago int,
    FOREIGN KEY (Venta_IdTipoPago) REFERENCES metodo_pago_ard(IdMetodoPago)
);



CREATE TABLE reporte_ventas_ard(
	IdReporteVentas int primary key not null AUTO_INCREMENT,
	ReporteVentas_IdVenta int,
	FOREIGN KEY (ReporteVentas_IdVenta) REFERENCES ventas_ard(IdVenta)
);




CREATE TABLE credito_clientes_ard(
	IdCreditoCliente int primary key not null AUTO_INCREMENT,
	CreditoCliente_IdCliente int,
	CreditoCliente_IdVenta int,
	FOREIGN KEY (CreditoCliente_IdVenta) REFERENCES ventas_ard(IdVenta),
	FOREIGN KEY (CreditoCliente_IdCliente) REFERENCES clientes_ard(IdCliente)
);




CREATE TABLE reporte_cliente_ard(
	IdReporteCliente int primary key not null AUTO_INCREMENT,
	ClienteReporte_IdCliente int,
	ClienteReporte_IdVenta int,
	FOREIGN KEY (ClienteReporte_IdVenta) REFERENCES ventas_ard(IdVenta),
	FOREIGN KEY (ClienteReporte_IdCliente) REFERENCES clientes_ard(IdCliente)
);