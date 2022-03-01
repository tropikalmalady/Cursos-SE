USE treinamento

SELECT S.NMSUPPLIER AS 'Nome fornecedor',
S.IDFONE AS 'Telefone',
P.NMPRODUCT AS 'Nome produto',
P.VLPRICE AS 'Preço produto',
P.QTSTOCK AS 'Quantidade em estoque'
FROM PRODUCT AS P
RIGHT JOIN SUPPLIER AS S
ON P.CDSUPPLIER=S.CDSUPPLIER