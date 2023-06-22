CREATE DATABASE FacturArtemis2;
/* DROP DATABASE FacturArtemis2; */
Use FacturArtemis2;

CREATE TABLE Categorias (
    IdCategoria BIGINT PRIMARY KEY,
    Nombre VARCHAR(20) NOT NULL,
    Descripcion VARCHAR(100) NOT NULL,
    Imagen VARCHAR(100)
);

CREATE TABLE Proveedores(
    IdProveedor BIGINT PRIMARY KEY,
    Company VARCHAR(40) NOT NULL,
    Contacto VARCHAR(60),
    Titulo VARCHAR(30),
    Direccion VARCHAR(60),
    Cuidad VARCHAR(15),
    Region VARCHAR(20),
    CodigoPosta VARCHAR(10),
    Pais VARCHAR(20),
    Telefono BIGINT  NOT NULL,
    Fax VARCHAR(25),
    Pagina VARCHAR(40)
);

Create Table Productos(
    IdProducto BIGINT PRIMARY KEY,
    Nombre VARCHAR(20) NOT NULL,
    IdProveedor BIGINT NOT NULL,
    IdCategoria BIGINT NOT NULL,
    CantidadPorUnidad BIGINT,
    PrecioUnitario BIGINT,
    UnidadesStock BIGINT,
    UnidadesPedidas BIGINT,
    NivelReorden VARCHAR(20),
    Discontinado BOOLEAN,
    FOREIGN KEY (IdProveedor) REFERENCES Proveedores(IdProveedor),
    FOREIGN KEY (IdCategoria) REFERENCES Categorias(IdCategoria)
);