USE treinamento

SELECT C.NMCUSTOMER AS 'Nome cliente',
P.NMPRODUCT AS 'Nome produto',
S.NMSUPPLIER AS 'Nome fornecedor',
R.DTREQUEST AS 'Data do pedido',
R.DTDELIVER AS 'Data de entrega',
P.VLPRICE AS 'Pre�o produto'
FROM PRODUCTREQUEST AS PR
INNER JOIN REQUEST AS R
ON PR.CDREQUEST=R.CDREQUEST
INNER JOIN PRODUCT AS P
ON PR.CDPRODUCT=P.CDPRODUCT
INNER JOIN CUSTOMER AS C
ON R.CDCUSTOMER=C.CDCUSTOMER
INNER JOIN SUPPLIER AS S
ON P.CDSUPPLIER=S.CDSUPPLIER
WHERE S.IDFONE LIKE '(011)%'
AND P.VLPRICE>20