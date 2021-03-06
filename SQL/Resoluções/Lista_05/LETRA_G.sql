USE treinamento

SELECT P.NMPRODUCT AS 'Nome produto',
S.NMSUPPLIER AS 'Nome fornecedor'
FROM PRODUCTREQUEST AS PR
INNER JOIN PRODUCT AS P
ON PR.CDPRODUCT=P.CDPRODUCT
INNER JOIN SUPPLIER AS S
ON P.CDSUPPLIER=S.CDSUPPLIER
GROUP BY P.NMPRODUCT, S.NMSUPPLIER
HAVING COUNT(PR.CDPRODUCT)>3