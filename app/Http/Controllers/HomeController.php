<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use App\Models\Absensi;
use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;


class HomeController extends Controller
{

    public function dashboard(){
        
        return view('dashboard');
    } 

    public function bln_absensi(){
        
        return view('bln-absensi');
    } 

    public function kelas(){
        
        return view('kelas');
    }

    public function kelas7(){

        // Daftar kelas untuk kelas 7
        $kelas = ['7A', '7B', '7C', '7D', '7E', '7F', '7G', '7H'];

        // Mengembalikan view dengan daftar kelas
        return view('kelas7', compact('kelas'));
    }

    public function kelas8(){
        
        // Daftar kelas untuk kelas 8
        $kelas = ['8A', '8B', '8C', '8D', '8E', '8F', '8G', '8H'];

        // Mengembalikan view dengan daftar kelas
        return view('kelas8', compact('kelas'));
    }

    public function kelas9(){

        // Daftar kelas untuk kelas 9
        $kelas = ['9A', '9B', '9C', '9D', '9E', '9F', '9G', '9H'];

        // Mengembalikan view dengan daftar kelas
        return view('kelas9', compact('kelas'));
    }

    public function data($class_id)
    {
        // Mengambil data siswa berdasarkan class_id dengan urutan ID terbaru di bagian bawah
        $data = Student::where('class_id', $class_id)->orderBy('id', 'asc')->get();
        
        // Mengambil data siswa dengan urutan ID terbaru di bagian bawah
        $students = Student::orderBy('id', 'desc')->get();
        
        $class = ClassModel::findOrFail($class_id); // Mendapatkan nama kelas berdasarkan class_id
    
        if (!$class) { // memastikan bahwa $class tidak bernilai null
            return redirect()->route('kelas')->with('error', 'Kelas tidak ditemukan.');
        }

        // Mengembalikan view dengan data yang diambil dan class_id
        return view('data-siswa', compact('data','students', 'class'));
    }

    public function all_studentdata(){
        // Mengambil semua data siswa tanpa memperdulikan class_id
        $data = Student::latest()->get();
        // $data = Student::orderBy('id', 'asc')->get();
        // Mengembalikan view dengan data yang diambil
        return view('data-siswa', compact('data'));
    }
    
    public function absensi(){
    //     $tahun = 2024; // Ganti dengan tahun yang sesuai
    //     $bulan = 3; // Ganti dengan bulan yang sesuai
    //     for ($i = 1; $i <= 31; $i++) {
    //         $tanggal = strtotime(date('Y-m', strtotime($tahun . '-' . $bulan)) . '-' . $i);
    //         $nama_hari = date('l', $tanggal);
    //         echo "Tanggal: $i, Hari: $nama_hari <br>";
    // }
        return view('absen-siswa');
    }

    public function showImportForm(){

        return view('import-data-siswa');
    }

    public function import_proses(){

        return view('import-proses');
    }
    
    public function create_data(){

        $class = ClassModel::all();
        return view('create-data-siswa', compact('class'));
    }
    
    public function store_data(Request $request){
        $validator = FacadesValidator::make($request->all(),[
            'nama'      => 'required',
            'nis'      => 'required',
            'nisn'      => 'required',
            'class_id' => 'required',
            'jenis_kelamin'  => 'required',
            'status'      => 'required',
            'class_id'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        // jika ada yang kurang dalam validasi maka -> balik kehalaman sebelumnya -> data yang di input -> pesan error

        // Menyimpan data siswa
        $data = [
            'nama' => $request->nama,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'class_id' => $request->class_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status,
        ];

        Student::create($data);

        return redirect()->route('data', ['class_id' => $request->class_id])->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function edit_data($id) {
        $data = Student::findOrFail($id);
        $class = ClassModel::all();

        return view('edit-data-siswa', compact('data', 'class'));
    }    

    public function update_data(Request $request, $id) {
        $validator = FacadesValidator::make($request->all(), [
            'nama' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'class_id' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    
        $data = [
            'nama' => $request->nama,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'class_id' => $request->class_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status,
        ];
        
        Student::whereId($id)->update($data); 
        return redirect()->route('data', ['class_id' => $request->class_id])->with('success', 'Data siswa berhasil diupdate!');return redirect()->route('data')->with('success', 'Data siswa berhasil diupdate!');
    }
    
    public function delete_data(Request $request, $id) {
        $data = Student::find($id);  // Temukan data siswa berdasarkan ID
        if ($data) { // Periksa apakah data ditemukan
            // Simpan class_id sebelum menghapus data
            $class_id = $data->class_id;
            $data->delete(); // Hapus data siswa
    
            // Arahkan kembali pengguna ke halaman data siswa dengan class_id yang sesuai
            return redirect()->route('data', ['class_id' => $class_id])->with('success', 'Data siswa berhasil dihapus!');
        }
    
        // Jika data tidak ditemukan, kembalikan dengan pesan error
        return redirect()->route('data')->with('error', 'Data siswa tidak ditemukan.');
    }

    public function absensikls(){
        
        return view('absensikls');
    }

    public function showStudentData($id) // $id merupakan id siswa yang ingin ditampilkan datanya
    {
        $data = Student::findOrFail($id); // Ambil data siswa berdasarkan id
        $absensi = Absensi::where('student_id', $id)->get(); // Ambil data absensi siswa berdasarkan id siswa

        return view('student.show', compact('student', 'absensi')); // Kirim data siswa dan absensi ke tampilan Blade
    }
     
    public function setting(){
        
        return view('setting');
    }
}
