#consulta de agrupamiento#
SELECT COUNT(titulo) as 'NRO DE ENTRADAS',categoria_id FROM entradas GROUP by categoria_id;