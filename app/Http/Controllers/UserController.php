<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use App\Models\Absensi;
use App\Models\ClassModel;
use App\Models\DaftarAbsen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function dashboard(){
        
        return view('user-dashboard');
    } 

    public function user_kelas(){
        
        return view('user-kelas');
    }

    public function user_kelas7(){

        // Daftar kelas untuk kelas 7
        $kelas = ['7A', '7B', '7C', '7D', '7E', '7F', '7G', '7H'];

        // Mengembalikan view dengan daftar kelas
        return view('user-kelas7', compact('kelas'));
    }

    public function user_kelas8(){
        
        // Daftar kelas untuk kelas 8
        $kelas = ['8A', '8B', '8C', '8D', '8E', '8F', '8G', '8H'];

        // Mengembalikan view dengan daftar kelas
        return view('user-kelas8', compact('kelas'));
    }

    public function user_kelas9(){

        // Daftar kelas untuk kelas 9
        $kelas = ['9A', '9B', '9C', '9D', '9E', '9F', '9G', '9H'];

        // Mengembalikan view dengan daftar kelas
        return view('user-kelas9', compact('kelas'));
    }

    public function user_data($class_id)
    {
        // Mengambil data siswa berdasarkan class_id
        $data = Student::where('class_id', $class_id)->latest()->get();

        // Mendapatkan nama kelas berdasarkan class_id
        $class = ClassModel::find($class_id);
        
        // Pastikan bahwa $class tidak bernilai null
        if (!$class) {
            return redirect()->route('user-kelas')->with('error', 'Kelas tidak ditemukan.');
        }

        // Mengembalikan view dengan data yang diambil dan class_id
        return view('user-data-siswa', compact('data', 'class'));
    }

    public function user_all_studentdata()
    {
        // Mengambil semua data siswa tanpa memperdulikan class_id
        $data = Student::latest()->get();

        // Mengembalikan view dengan data yang diambil
        return view('data-siswa', compact('data'));
    }
    
    public function user_absensi($class_id)
    {
         // Mengambil data siswa berdasarkan class_id
        $siswa = Student::where('class_id', $class_id)->get();

        // Mengembalikan view dengan data yang diambil
        return view('user-absen-siswa', compact('siswa'));
    }

    public function user_edit_absensi($class_id)
    {
        // Ambil semua siswa dalam kelas yang sesuai
        $students = Student::where('class_id', $class_id)->get();

        // Pastikan untuk memeriksa apakah ada siswa sebelum me-render tampilan
        if ($students->isEmpty()) {
            return redirect()->route('user-kelas')->with('error', 'Tidak ada siswa dalam kelas ini.');
        }

        // Ambil daftar absensi
        $daftar_absen = DaftarAbsen::all();

        return view('user-edit-absensi', compact('students', 'daftar_absen', 'class_id'));
    } 


    public function user_update_absensi(Request $request)
    {
        $class_id = $request->input('class_id'); // Mendapatkan class_id dari request

        $request->validate([
            // Pastikan keterangan yang dipilih ada di tabel daftar_absen
            'keterangan' => 'required|exists:daftar_absen,id',
        ]);

        // Ambil semua siswa dalam kelas yang sesuai
        $students = Student::where('class_id', $class_id)->get();

        // Iterasi melalui setiap siswa
        foreach ($students as $student) {
            // Simpan data absensi untuk setiap siswa ke dalam tabel absensi
            Absensi::create([
                'tanggal' => now(), // Tanggal saat ini
                'id_student' => $student->id, // ID siswa
                'keterangan' => $request->input('keterangan'), // Keterangan absensi dari input form
            ]);
        }

        return redirect()->route('user-kelas')->with('success', 'Absensi seluruh siswa berhasil diperbarui.');
    }


    public function user_absen_siswa()
    {
        return view('user-absen-siswa');
    }

    // import data siswa
    public function user_showImportForm()
    {
        return view('user-import-data-siswa');
    }

    public function user_import(Request $request)
    {
        $file = $request->file('file');

        // Validasi file yang diunggah di sini jika diperlukan

        // Proses impor data dari file
        // Misalnya, Anda bisa menggunakan library Laravel Excel
        // Contoh: https://laravel-excel.com/docs/3.1/imports/
    }


    public function user_absensikls(){
        
        return view('user-absensikls');
    }
    
    public function user_setting(){
        
        return view('user-setting');
    }
}
