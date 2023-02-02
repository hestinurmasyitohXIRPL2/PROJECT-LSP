@extends('main.layout')
@section('content')
    <center>
        <h2>TAMBAH DATA KELAS</h2>
        <form action="/kelas/store" method="POST">
            @csrf
            <table widht="50%">
                <tr>
                    <td widht="25%">Kelas</td>
                    <td widht="25%"><input type="text" name="nama_kelas"></td>
                </tr>
                <tr>
                    <td widht="25%">Jurusan</td>
                    <td>
                        <select name="jurusan_id">
                            <option></option>
                            @foreach ($jurusan as $j)
                                <option value="{{ $j->id}}">{{ $j->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" class="button-primary">SIMPAN</button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
    @endsection