USE treinamento

SELECT NMPRODUCT AS 'Nome produto',
VLPRICE AS 'Preço unitário',
VLPRICE*QTSTOCK AS 'Preço total do estoque'
FROM PRODUCT
WHERE VLPRICE>=50