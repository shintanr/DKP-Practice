#jarak GLBB
#menghitung jarak yang ditempuh jika diketahui v0, a dan t nya

v0 = int(input("Masukkan v0: "))
t = int(input("Masukkan t: "))
a = int(input("Masukkan a: "))

S = v0 * t + 1/2 *(a * t )
print(S)