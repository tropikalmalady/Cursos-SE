USE treinamento

SELECT NMSUPPLIER AS 'Nome fornecedor', IDFONE AS 'Telefone'
FROM SUPPLIER
WHERE IDFONE NOT LIKE '(___)%'