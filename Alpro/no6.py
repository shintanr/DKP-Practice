#mengecek bilangan bulat positif atau negatif

i = int(input("Masukkan nilai yang ingin dicek: "))

if i < 0:
    print("Bilangan bulat negatif")
elif i == 0:
    print("nol")
else: 
    print("Bilangan bulat positif")