USE treinamento

UPDATE REQUEST
SET DTDELIVER=DATEADD(DAY, +30, DTREQUEST)
WHERE DATEDIFF(DAY, DTREQUEST, DTDELIVER)<=10
AND VLTOTAL<10000