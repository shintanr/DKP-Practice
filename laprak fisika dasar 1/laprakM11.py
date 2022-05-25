import math

ralatPanjang = float(input("Masukkan ralat panjang: "))
ralatPeriode = float(input("Masukkan ralat periode: "))
deltaL = 0.0005
deltaT = 0.005


deltaG = math.sqrt((ralatPanjang * deltaL)* (ralatPanjang * deltaL) + (ralatPeriode * deltaT)*(ralatPeriode * deltaT)) 
print (deltaG)