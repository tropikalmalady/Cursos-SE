USE treinamento

SELECT S.NMSUPPLIER AS 'Nome fornecedor',
COUNT(P.CDSUPPLIER) AS 'Produtos forncecidos'
FROM PRODUCT AS P
INNER JOIN SUPPLIER AS S
ON P.CDSUPPLIER=S.CDSUPPLIER
GROUP BY S.NMSUPPLIER
HAVING COUNT(P.CDSUPPLIER)>1