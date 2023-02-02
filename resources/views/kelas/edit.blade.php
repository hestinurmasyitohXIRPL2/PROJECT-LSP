@extends('main.layout')
@section('content')
    <center>
        <h2>EDIT DATA KELAS</h2>
        <form action="/kelas/update/{{ $kelas->id }}" method="POST">
            {{-- tulisan form, action dan method harus benar --}}
            @csrf
            <table widht="50%">
                <tr>
                    <td widht="25%">Kelas</td>
                    <td widht="25%"><input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"></td>
                    {{-- kasi valuenya biar datanya keambil --}}
                </tr>
                <tr>
                    <td widht="25%">Jurusan</td>
                    <td widht="25%">
                        <select name="jurusan_id">
                            <option value="">
                                @foreach ($jurusan as $j)
                                @if($kelas->jurusan_id == $j->id)
                                   <option value="{{ $j->id }}" selected>{{ $j->nama_jurusan }}></option>
                                @else
                                <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                                @endif
                                @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" class="button-primary">UBAH</button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
    @endsection