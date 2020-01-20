<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">PHYTON</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.PHP">Login</a>
          <a class="dropdown-item" href="register.PHP">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="materi.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Materi PHYTON</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

       

       

      </div>
      <!-- /.container-fluid -->
      <br>

<center> <b>PYTHON</b> <br><br>
<p>Python adalah bahasa pemrograman yang populer. Bahasa pemrograman ini dibuat oleh Guido van Rossum dan dikenalkan sejak tahun 1991. Sebelum memulai untuk belajar Python dasar, akan lebih baik untuk memahami dulu apa itu Python dan bagaimana cara kerjanya.

Python termasuk bahasa pemrograman yang mudah untuk dipelajari. Sampai saat ini bahasa pemrograman Python hampir dipakai di segala bidang seperti game, sistem berbasis web, dan bahkan dapat membuat mesin pencari sendiri. Jadi secara umum, bahasa pemrograman ini dipakai dalam pengembangan website, pengembangan software, matematika, dan system scripting.
</p>

<b>Manfaat Belajar Python</b><br>

Meskipun ada banyak sekali bahasa pemrograman di luar sana, akan tetapi saya merekomendasikan Anda untuk belajar Python. Tentu juga ada beberapa kelebihan yang perlu Anda ketahui. Jika dibandingkan dengan bahasa pemrograman lain, berikut kelebihan bahasa pemrograman Python:

Python memiliki sintaksis yang sederhana dan lebih mirip dengan Bahasa Inggris.

Python dapat berjalan di berbagai macam sistem operasi.

Python berjalan di dalam sistem interpreter, artinya bahasa baris kode bahasa pemrograman ini akan segera dieksekusi setelah ditulis.

Python dapat diperlakukan dengan cara prosedural, cara berorientasi objek atau cara fungsional.

Python memiliki sintaks yang memungkinkan pengembang untuk menulis program dengan ringkas daripada bahasa pemrograman lain.

<br><b>Cara Membuat Program Python</center></b><br>

Sesudah Anda memastikan Python sudah terinstall dengan baik di perangkat. Langkah selanjutnya adalah melakukan percobaan beberapa eksekusi program Python. Namun sebelum itu akan lebih baik jika mengetahui terlebih dahulu apa saja komponen yang terdapat di dalam Python.
<br>
<b>(1). Sintaks</b><br>

<center>Python sintaks dapat dieksekusi langsung dengan mengetikkannya di Command Line. Selain itu, Anda dapat membuat file Python di dalam server menggunakan ekstensi .py dan menjalankannya menggunakan Command Line.

>>> print(“Hello, World!”)Hello, World!

Atau jika langsung menggunakan Terminal atau CMD:

$ python filePython.py<br></center>

<b>(2). Komentar</b><br>

<center>Sama seperti bahasa pemrograman lainnya, Python juga memiliki kode untuk menjadikan baris program menjadi komentar. Anda dapat menggunakan tanda pagar ‘#’ untuk menjadikan baris kode di Python menjadi komentar.

# Ini adalah baris komentar di Python.print(“Hello, World!”)<br></center>

<b>(3). Python Identitations</b><br>

<center>Berbeda dengan bahasa pemrograman lainnya, jika Anda menulis dalam bahasa Python, indentasi –penempatan kalimat atau baris kode– sangat diperhatikan. Python menggunakan indentasi untuk mengindikasikan baris kode.

if 9 > 2:      print(“Sembilan lebih besar daripada dua!”)

Namun ketika baris kode dituliskan menjadi satu kolom atau dalam tab yang sama, maka program akan menjadi error. Di bawah ini adalah contoh penulisan yang menghasilkan error.

if 9 > 2:print(“Sembilan lebih besar daripada dua!”)<br></center>

<b>(4). Variabel</b><br>

<center>Python juga memiliki Variabel, tidak berbeda dengan bahasa pemrograman lainnya. Variabel ini digunakan untuk proses penyimpanan dan bekerja dengan berbagai tipe data.

Python sendiri punya standar pendeklarasian variabel. Variabel di Python dapat berupa nama singkat (seperti x dan y tadi) atau nama yang lebih mendeskripsikan seperti umur, nama, alamat, dan lain sebagainya. Aturan penamaan variabel di Python seperti:

Variabel tidak bisa diawali dengan angka,

Variabel harus diawali dengan  huruf, atau karakter garis bawah (underscore),

Variabel hanya bisa mengandung karakter alfa-numerik dan karakter garis bawah,

Variabel di Python case-sensitive

Namun berbeda dengan bahasa pemrograman lainnya, Python tidak memerlukan inisiasi variabel untuk mendeklarasikan variabel. Ini berarti sebuah variabel terbuat ketika pertama kali Anda menambahkan nilai ke dalamnya.

Contohnya ketika Anda ingin membuat variabel ‘x’ dan ‘y’, Anda tinggal memasukkan nilainya langsung seperti di bawah ini:

x = 10y = “Budi”
print(x)print(y)

Perintah di atas akan mengisi variabel ‘x’ dengan nilai ‘5’ dan ‘y’ dengan nilai ‘Budi’. Jadi proses penyusunan baris kode lebih ringkas.

Kemudahan lainnya, Anda tidak perlu mendefinisikan tipe variabel. Python secara otomatis akan memberikan tipe variabel sesuai dengan nilai yang diberikan pada variabel tersebut. Misalnya pada contoh di bawah ini:

x = 10 # x bertipe integery = “Budi” # y bertipe string</center>

<b>(5). Booleans</b><br>

<center>Setelah mempelajari variabel bekerja, di bagian ini Anda akan belajar tentang Booleans. Jika Variabel dapat menyimpan bilangan dengan satu tipe data, booleans juga digunakan untuk menyimpan sebuah tipe data, tapi tipe data yang berbeda.

Tipe data di Booleans hanya ‘benar’ atau ‘salah’. Jadi ini mirip dengan saklar lampu, hanya memiliki dua nilai. Anda dapat menggunakan booleans seperti contoh di bawah ini:

a = Trueb = False</center>

<b>(6). Number</b><br>

<center>Ketika Anda belajar Python number, ada tiga tipe numerik variabel di Python, yaitu int, float, dan complex. Anda mungkin tidak akan pernah menuliskan tipe variabel di setiap pendeklarasiannya, karena (seperti yang sudah dijelaskan di atas) Python sudah menginisiasi tipe variabel ketika Anda menambahkan nilai ke dalamnya.

Int, float, dan complex mempunyai range yang berbeda. Int atau bilangan integer adalah bilangan bulat positif atau negatif, tanpa desimal, dengan panjang tak terbatas. Float atau ‘angka floating point’ adalah angka, positif atau negatif, yang mengandung satu atau lebih desimal. Sedangkan complexadalah bilangan kompleks yang ditulis dengan “j” sebagai bagian dari imajiner.

Sebagai contoh, di bawah ini adalah tiga tipe numerik variabel yang berbeda:

x = 1    # inty = 2.8  # floatz = 1j   # complex

Jadi Python akan mengenali dan membedakan tipe setiap variabel pada saat Anda mengisinya dengan sebuah nilai. Sedangkan untuk mengetahui tipe setiap variabel Anda dapat menggunakan fungsi type():

print(type(x))print(type(y))print(type(z))</center>

<b>(7). String</b><br>

<center>Ketika ingin belajar Python string, Anda hanya perlu menambahkan tanda kutip tunggal atau tanda kutip ganda di antara nilai variabel yang ingin ditambahkan. Misalnya saja ketika Anda ingin menambahkan string “Budi” ke dalam variabel x maka yang perlu Anda lakukan adalah mendeklarasikannya seperti di bawah ini:

x = “Budi”# Ataux = ’Budi’
# “Budi” sama artinya dengan ‘Budi’.

Sama seperti bahasa pemrograman lainnya, string dalam Python adalah array byte yang mewakili karakter unicode. Namun, Python tidak memiliki tipe data karakter sehingga satu karakter hanyalah string dengan panjang 1. Ketika Anda ingin mengakses satu karakter di dalam string, yang perlu Anda gunakan adalah menggunakan tanda kurung kotak.

Di bawah ini adalah contoh mengambil karakter kedua pada sebuah string.

a = “Hello, World!”print(a[1])

Contoh baris kode di atas akan menampilkan karakter ‘H’ karena untuk penulisan di dalam bahasa pemrograman, karakter pertama berposisi 0 (yang disini adalah huruf H), sedangkan karakter kedua berposisi 1. Anda dapat mencobanya seperti di bawah ini:
</center>
<b>(8). Operator</b><br>

<p>Bagian terakhir dari pengenalan komponen Python adalah Operator. Selama melakukan proses codingAnda pasti akan membutuhkan operator untuk membuat sebuah alur logika, penghitungan angka, atau yang lainnya.

Operator ini bekerja untuk melakukan operasi pada variabel dan nilai.  Dalam bahasa pemrograman Python, terdapat beberapa grup dari operator, seperti operator aritmatika, penugasan (assignment), pembanding (comparison), logika (logical), identitas (identity), keanggotaan (membership), dan bitwise.

Di antara operator lainnya, operator aritmatika sering digunakan.


      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
