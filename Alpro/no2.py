#menghitung jarakparabola 

v0 = int(input("Masukkan nilai v0: "))
t = int(input("Masukkan nilai t: "))
g = 9.8;

#mencari jarak yang ditempuh gerak parabola
y = v0 * t - 1/2 * (g * t * t)
print(y)
