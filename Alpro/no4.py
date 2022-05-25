#menghitung volume bola dan volume kerucut

from turtle import clear


r = int(input("Masukkan nilai r: "))
pi = 3.14159
volumeBola = 4/3 * pi*r*r*r
print(int(volumeBola))
volumeKerucut = 1/2 * volumeBola
print(int(volumeKerucut)) 