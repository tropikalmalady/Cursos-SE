USE treinamento

SELECT NMPRODUCT AS 'Nome produto',
VLPRICE AS 'Pre�o unit�rio',
VLPRICE*QTSTOCK AS 'Pre�o total do estoque'
FROM PRODUCT
WHERE VLPRICE>=50