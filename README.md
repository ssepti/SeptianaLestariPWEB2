<h1>Jobsheet 1</h1>

<h3>Instruksi Kerja</h3>
1.	Membuat Class dan Object
Kelas adalah Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki
oleh objek.
-	Class
Membuat class adalah dengan menuliskan class dan diikuti dengan nama class yang akan dibuat.
-	Atribut
Membuat atribut adalah dengan menuliskan aksebilitasi atribut disertai dengan nama atribut. Di atribut memiliki 3 aksebilitasi yaitu ;
• Public: Dapat diakses dari mana saja.
• Private: Hanya dapat diakses dalam kelas itu sendiri.
• Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.
-	Method
Membuat method adalah dengan menuliskan public function disertai fungsi yang sesuai, karena fungsi tersebut akan dipanggil saat pembuatan objek

![image](https://github.com/user-attachments/assets/b29029cf-6024-4117-a24a-0a5b7d5e1b12)

![image](https://github.com/user-attachments/assets/f7b65054-bc78-4461-93cf-87af54dd0d53)

Penjelasan :
Class Mahasiswa : Kelas Mahasiswa memiiki 3 atribut denan aksebilitas public yaitu nama, nim, dan mahasiswa. Serta memiliki method dengan function tampilkanData().
Object $mahasiswa1 : $mahasiswa adalah objek yang merupakan instance dari kelas Mahasiswa.
New dalam code tersebut digunakan untuk membuat sebuah objek dari class Mahasiswa dengan memanggil konstruktor class tersebut (dengan parameter "Septiana", "230202089", dan "Komputer Dan Bisnis").
Metode tampilkanData() digunakan untuk menampilkan informasi tentang objek
tersebut.
2.	Implementasi Constructor
Constructor digunakan untuk menginisialisasi nilai-nilai properti dari objek tersebut. Jika tidak menggunakan constructor, Maka harus menginisialisasi setiap properti secara manual setelah membuat objek. Namun jika menggunakan constructor dapat langsung mengisi data saat membuat objek:

![image](https://github.com/user-attachments/assets/9a9d58b5-8d6e-40cc-8a9c-b034decbfe54)

Penjelasan :
Membuat construct yaitu diawali dengan public function kemudian dengan perintah __construct disertai parameter seperti __cosntruct($nama,$nim,$jurusan).
Sintaks $this->nama = $nama; digunakan untuk menetapkan nilai dari parameter $nama ke properti nama milik objek yang diinstansiasi.
3.	Membuat metode tambahan
Membuat metode tambahan dengan nama updateJurusan dalam class. Metode ini akan menerima parameter berupa nama jurusan baru dan mengupdate properti jurusan.setelah itu memanggil metode updateJurusan setelah objek dibuat untuk mengubah nama jurusan.

![image](https://github.com/user-attachments/assets/e9b09da9-256a-4c4f-a025-abef0a38cf62)

![image](https://github.com/user-attachments/assets/8b87e53d-e529-4448-b11a-3c31a15bae6c)

Penjelasan ;
Sebelum ditambahkan metode updateJurusan value yang akan ditampilkan berupa Septiana, 230202089, Komputer dan Bisnis. Namun setelah ditambahkan metode baru berupa updateJurusan value pada atributr jurusan akan berubah menjadi Teknik Mesin.
4.	Penggunaan Atribut dan Metode
5.	Metode setNim($nim) adalah metode setter yang digunakan untuk mengubah nilai dari properti nim. Sehingga nim lama akan diupdate dengan nim baru dengan value yang sudah ditambahkan di parameter. Untuk menampilkannya digunakan cara memanggil method tampilkanData();

![image](https://github.com/user-attachments/assets/437d0f2d-4db0-4ae4-9423-1f44e2a714e6)

![image](https://github.com/user-attachments/assets/7dca1931-3d98-46ed-a9fd-2d6270915467)

Penjelasan :
Sebelum ditambahkan metode setter setNim value yang akan ditampilkan berupa Septiana, 230202089, Teknik Mesin. Namun setelah ditambahkan metode baru berupa setNim value pada atributr nim akan berubah menjadi 230303089.

Output :

![output1](https://github.com/user-attachments/assets/e9bca6ab-ccff-447d-8575-fdb431184575)

<h3>Tugas</h3>
1.	Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.

![image](https://github.com/user-attachments/assets/a2c3c324-b0a4-4b24-9520-6d044475240f)

Penjelasan :
-	Membuat Class dengan nama Dosen dengan atribut nama, nip, mataKuliah.
-	Membuat constructor dengan parameter $nama, $nip, $mataKuliah contoh : $this->nama = $nama


2.	Buat metode tampilkanDosen() untuk menampilkan informasi dosen.

![image](https://github.com/user-attachments/assets/68c2e3f0-28f3-46c3-9adb-c2b6260e5aab)

Penjelasan :
Membuat metode TampilkanDosen(). Diawali public function dengan nama tampilkanDosen() kemudian diisi dengan return yang mengembalikan string hasil ke pemanggil fungsi. $this->nama: Menunjukkan bahwa nama adalah atribut dari kelas dosen
3.	Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.

![image](https://github.com/user-attachments/assets/e83ad2a0-ab13-4bf3-b9f4-c8c55d93c261)

Penjelasan : membuat sebuah objek baru bernama $dosen1 dengan memanggil constructor dari kelas Dosen dan memasukkan parameter atau value yang berkaitan dengan nama, nip, dan mata kuliah

Output :

![output2](https://github.com/user-attachments/assets/3cb7a009-8e9e-4d7e-8e5f-d51b4c5fbcc3)


<h1>Jobsheet2</h1>
<h3>Instruksi Kerja</h3>

1.	Membuat class dan object

![js2](https://github.com/user-attachments/assets/65484310-7a6d-411c-b9c7-f25f5496b707)

Penjelasan :
-	Membuat class dengan nama mahasiswa disertai dengan atribut nama, nim, dan jurusan
-	Membuat metode tampilkanData() untuk menampilkan data mahasiswa.
  
Hasil :

![output3](https://github.com/user-attachments/assets/94b0cc92-41d7-4463-9eaf-3368b4f9055e)


2. Encapsulation

![js3](https://github.com/user-attachments/assets/a7374876-364e-4c96-b7ff-3ece23b1fdcb)
![js4](https://github.com/user-attachments/assets/8f4a3678-4dfd-41ea-a8d9-03c61654bce3)

Penjelasan :
- Mengubah Atribut dalam class Mahasiswa dari public menjadi private.yang berarti atribut tersebut hanya bisa diakses dan dimodifikasi melalui metode khusus (getter dan setter), sehingga menjaga enkapsulasi.
- Getter: Digunakan untuk mengambil (mengakses) nilai dari atribut privat.sehingga menggunakan metode getNama().
Setter: Digunakan untuk mengubah (memodifikasi) nilai dari atribut privat.sehingga menggunakan metode setNama($nama).

Hasil :

![output4](https://github.com/user-attachments/assets/fd2db5f8-9efe-4ef4-bbad-b138ac2c137f)


3. Inheritance

![js5](https://github.com/user-attachments/assets/20bd909e-a406-4e77-8583-24d8201a07b5)

Penjelasan :
- Membuat Class Pengguna dengan atribut nama disertai metode getName()
- Membuat Class Dosen yang mewarisi class Pengguna menggunakan konsep inheritance.Yang berarti class Dosen dapat mengakses metode dan atribut dari class Pengguna.
- Ketika objek Dosen diinstansiasi, atribut nama diinisialisasi melalui constructor dari class Pengguna, dan atribut mataKuliah diatur melalui constructor dari class Dosen.
Metode getter (getNama(), getMataKuliah()) digunakan untuk mengakses dan menampilkan nilai atribut nama dan mataKuliah.
- Setelah objek Dosen dibuat, metode getNama() dari class Pengguna dan getMataKuliah() dari class Dosen digunakan untuk mengambil dan menampilkan data dosen.
- Metode setMataKuliah() untuk mengubah nilai dari atribut mataKuliah setelah objek Dosen dibuat.

Hasil :

![output5](https://github.com/user-attachments/assets/368f7182-d472-40bf-bc1b-2a452f8fa6c6)


4. Polymorphism

![js6](https://github.com/user-attachments/assets/18374f80-2215-4f3d-b04e-4ef2e4355199)

Penjelasan :
- membuat sebuah class Pengguna yang berfungsi sebagai parent class (kelas induk), dan dari kelas ini akan dibuat dua kelas turunan, yaitu Dosen dan Mahasiswa.
- memanggil metode aksesFitur() dari objek Dosen dan Mahasiswa menggunakan cara yang sama, tetapi dengan hasil yang berbeda.
- memanggil metode aksesFitur() yang diimplementasikan sesuai dengan peran pengguna (dosen atau mahasiswa).

Hasil :

![output6](https://github.com/user-attachments/assets/0f131f9c-9596-4b4f-8a23-58250e293f4b)


5. Abstraction

![js7](https://github.com/user-attachments/assets/7a8be7f0-728f-4f31-9a0d-7d8d7c691d51)

Penjelasan :
- membuat sebuah kelas abstrak Pengguna yang berfungsi sebagai kerangka dasar untuk kelas-kelas lain seperti Mahasiswa dan Dosen. Kelas abstrak ini berisi metode abstrak aksesFitur() yang harus diimplementasikan oleh setiap kelas turunan.
- Setelah kelas Mahasiswa dan Dosen diimplementasikan, objek dari kedua kelas tersebut diinstansiasi, kemudian metode aksesFitur() dipanggil untuk menunjukkan fitur yang dapat diakses oleh masing-masing peran.

Hasil :

![output7](https://github.com/user-attachments/assets/5ff1960b-ce39-4a81-8b47-6cdf3d1b8f7b)

<h1>Jobsheet 3</h1>

<h3>Instruksi Kerja</h3>

1. Inheritance

![js8](https://github.com/user-attachments/assets/c0b0a5f6-332b-4f66-8ff3-658f6999f97f)

Penjelasan :

- Membuat kelas Person dengan mendefinisikan atribut name di dalam kelas ini. dan menambahkan metode getName() untuk mengembalikan nilai dari atribut name
- membuat kelas Student yang mewarisi dari Person dengan sintaks extends Person.
- menambahkan atribut baru studentID untuk menyimpan ID mahasiswa.
- membuat metode getStudentID() untuk mengembalikan nilai dari atribut studentID
- menginstansiasi objek Student dengan memasukkan nilai untuk name dan studentID. menggunakan metode getName() dan getStudentID() untuk menampilkan data.

Hasil :

![js13](https://github.com/user-attachments/assets/dc3b0db0-e37e-4959-8535-e52fba60ef75)


2. Polymorphism

![js9](https://github.com/user-attachments/assets/3a48db9e-eb5f-4360-8376-eb79a7acb580)

Penjelasan :

- membuat kelas dasar Person yang akan menjadi parent yang memiliki atribut dasar seperti name dan metode seperti getName()
- Buat Kelas Teacher yang Mewarisi dari Person. dan menambahkan atribut tambahan seperti teacherID.
- membuat override metode getName() untuk mengubah format output sesuai kebutuhan.

Hasil :

![js14](https://github.com/user-attachments/assets/31306978-0daa-4479-b4dd-a9adf0887d5a)


3. Encapsulation

![js10](https://github.com/user-attachments/assets/4f7d1442-05e2-49a1-9559-dae810400836)
![js11](https://github.com/user-attachments/assets/1df1648b-46e8-44a0-8a11-72f5d25734b5)

Penjelasan :

- Dalam kelas Student, ubah atribut name dan studentID dari public menjadi private.
- menambahkan metode getter untuk mengambil nilai dari atribut privat. dengan nama getName
- menambahkan metode setter untuk mengubah nilai atribut privat. dengan nama setName

Hasil :

![js15](https://github.com/user-attachments/assets/165c55f1-ed07-4c08-9f7d-273e503adb22)


4. Abstraction

![js11](https://github.com/user-attachments/assets/ed7e7da7-0ecb-45cb-8656-b97b1ab088c9)

Penjelasan :

- membuat Kelas Abstrak Course
- menambahkan metode abstrak getCourseDetails() yang harus diimplementasikan oleh kelas-kelas yang mewarisinya.
- membuat Kelas OnlineCourse yang akan mewarisi Course dan mengimplementasikan metode getCourseDetails().
- membuat Kelas OfflineCourse yang akan mewarisi Course dan mengimplementasikan metode getCourseDetails().

Hasil :

![js16](https://github.com/user-attachments/assets/69d2304e-57fb-4ddf-89e0-32946bbc961a)

<h3>Tugas</h3>

![js20](https://github.com/user-attachments/assets/26cbbe76-face-450d-9c01-d3e3b3e57770)

![js21](https://github.com/user-attachments/assets/f55db0f3-68af-48eb-a6c9-400d6e34b84d)

![js22](https://github.com/user-attachments/assets/dbaa06d4-4ade-4a58-be63-6fd7b8aa8c8c)

Penjelasan :

- Kelas Person akan menjadi kelas dasar untuk Dosen dan Mahasiswa. dan menambahkan metode getRole() yang akan di-override oleh kelas turunannya.
- membuat Atribut name untuk menyimpan nama dari Person dan diatur sebagai protected sehingga dapat diakses oleh kelas-kelas turunan.
- membuat metode GetRole()  untuk menentukan peran Dosen atau Mahasiswa.
- membuat metode getName() untuk mendapatkan nama dari Person.
- membuat Kelas Dosen dan Mahasiswa akan mewarisi dari Person dan mengimplementasikan metode getRole()
- membuat Kelas Abstrak Jurnal dan membuat kelas turunan JurnalDosen dan JurnalMahasiswa.

Hasil :

![output8](https://github.com/user-attachments/assets/8426f4b7-b223-4b93-8f2c-3eab357d61e8)
