dizi = [2,4,1,6,4,0,0]
xSayisi = 0
for x in dizi:
	if x == 0:
		xSayisi = xSayisi + 1
index = 0
yeniDizi = []
for y in range(xSayisi):
    yeniDizi.append(0)
for v in dizi:
    index = index+1
    if v != 0:
        yeniDizi.append(v)
print(yeniDizi)