USE treinamento

SELECT S.NMSUPPLIER AS 'Nome fornecedor',
--P.NMPRODUCT AS 'Nome produto',
SUM(P.QTSTOCK) AS 'Total em estoque',
AVG(P.VLPRICE) AS 'Média de preço dos produtos',
COUNT(P.CDSUPPLIER) AS 'Total de produtos fornecidos'
FROM PRODUCT AS P
INNER JOIN SUPPLIER AS S
ON P.CDSUPPLIER=S.CDSUPPLIER
GROUP BY S.NMSUPPLIER