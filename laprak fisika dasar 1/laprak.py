
# s1= int(input("Masukkan nilai s1: "))
# s2= int(input("Masukkan nilai s1: "))
# d1= int(input("Masukkan nilai s1: "))
# d2= int(input("Masukkan nilai s1: "))

# luas = 1/2 * d1 * d2
# kell = 2 * (s1 + s2)
# print(luas)
# print(kell)

import math



#deklarasi variabel

t = float(input("Masukkan t: "))
s = float(input("Masukkan s: "))
rho1 = 188.16
rho2 = 800
g = 10
deltaS = 0.0005
deltaR = 0.0005
deltaT = 0.005
r = 0.0275


#menghitung ralat rambat terhadap jarak
ralatJarak = -2/9 * r * r * g *t * (rho1 - rho2)/( s * s)
print ("ralat jarak:" +str(ralatJarak))


#menghitung ralat rambat terhadap waktu
ralatWaktu = 2 * r * r * g * (rho1 - rho2)/(9 * s)
print ("ralat waktu: " +str(ralatWaktu))


#menghitung ralat rambat terhadap jari-jari
ralatJari = 4 * r * g * t * (rho1 - rho2)/(9 * s)
print ("ralat jari-jari: " +str(ralatJari))


#menghitung ralat perambatan
ralatPerambatan = math.sqrt(((ralatJarak * deltaS)* (ralatJarak * deltaS)) + ((ralatJari * deltaR) *(ralatJari * deltaR)) + ((ralatWaktu * deltaT)*(ralatWaktu * deltaT)))

print ("jiakh nemu jawaban: " + str(ralatPerambatan))



