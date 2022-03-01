USE treinamento

SELECT NMPRODUCT AS 'Nome produto',
QTSTOCK AS 'Quantidade em estoque',
VLPRICE*0.9 AS 'Valor (10% OFF)'
FROM PRODUCT
WHERE QTSTOCK>2000
