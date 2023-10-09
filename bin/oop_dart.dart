import 'package:oop_dart/class.dart'; //import library class.dart
//awal program utama
void main() {
 //Instansiasi/instance object adalah proses pembuatan object dari sebuah class
 var programmer = new Programmer('Fauko Misalam');
 programmer.email = 'fauko@bsi.ac.id';
 programmer.info();
 programmer.makan();
 print('\n'); //pindah baris
 var dosen = new Dosen('Intan');
 dosen.email = 'intan@bsi.ac.id';
 dosen.info();
 dosen.makan();
}