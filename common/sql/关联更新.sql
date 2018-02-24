UPDATE a SET WtNo=b.NO
from WT_Task a
INNER JOIN WT_BasicInformation b ON a.WtId=b.ID;

UPDATE a SET a.WtNo=b.NO
FROM WT_Task a,WT_BasicInformation b
WHERE a.WtId=b.ID;