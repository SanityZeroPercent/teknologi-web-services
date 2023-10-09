class Manusia {
 //deklarasi atribut/properti
 String nama = ''; //atribut nama bertipe string dan nilai awal null
 //pembuatan konstruktor, nama konstruktor adalah nama class
 Manusia(nm) {
 //nm a/ sebuah parameter yg dipergunakan untuk menampung data
 this.nama = nm; //atribut nama memiliki data dari parameter nm
 }
 //deklarasi method/fungsi/behavior bernama makan
 void makan() {
 print('$nama makan nasii'); //tambahkan var nama pada string makan
 }
}
//awal inheritance
class ManusialMilenial extends Manusia {
 String email = '';
 String _password = '';
 ManusialMilenial(String email) : super(email);
 void info() {
 print('namaku: $nama, Email:$email');
 }
} //akhir inheritance
class Programmer extends ManusialMilenial {
 Programmer(String email) : super(email);
 @override
 void info() {
 print('Email: $email pemiliknya adalah $nama');
 }
}
class Dosen extends ManusialMilenial {
 Dosen(String nama) : super(nama);
 @override
 void info() {
 print('$nama, telah memiliki Email= $email');
 }
}