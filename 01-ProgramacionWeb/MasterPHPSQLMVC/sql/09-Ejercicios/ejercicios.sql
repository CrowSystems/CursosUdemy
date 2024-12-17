CREATE TABLE COCHES INSERT INTO (
    id,
    modelo,
    marca,
    precio,
    stock
);

CREATE TABLE CLASE INSERT INTO(
    id,
    nombre,
    ciduad
);

CREATE TABLE VENDEDORES INSERT INTO(
    id,
    nombre,
    apellidos,
    cargo,
    fehcaAlta,
    sueldo,
    comision,
    jefe
);

CREATE TABLE CLIENTES INSERT INTO(
    id,
    vendedor_id,
    nombre,
    ciudad,
    gastado
);

CREATE TABLE ENCARGOS INSERT INTO(
    id,
    cliente_id,
    coche_id,
    cantidad,
    fecha
);