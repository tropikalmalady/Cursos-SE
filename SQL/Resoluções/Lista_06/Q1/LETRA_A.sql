USE treinamento

DELETE CUSTOMER
WHERE CDCUSTOMER IN
(
SELECT C.CDCUSTOMER
FROM CUSTOMER AS C
LEFT JOIN REQUEST AS R
ON C.CDCUSTOMER=R.CDCUSTOMER
WHERE R.CDREQUEST IS NULL
)