USE treinamento

DELETE REQUEST
WHERE CDREQUEST IN
(
SELECT R.CDREQUEST
FROM PRODUCTREQUEST AS PR
INNER JOIN REQUEST AS R
ON PR.CDREQUEST=R.CDREQUEST
INNER JOIN PRODUCT AS P
ON PR.CDPRODUCT=P.CDPRODUCT
WHERE R.VLTOTAL<1000
AND PR.CDPRODUCT IS NULL
AND R.DTREQUEST>='2003/06/01' AND R.DTREQUEST<'2003/07/01'
)