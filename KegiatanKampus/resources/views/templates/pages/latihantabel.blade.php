@extends('templates.default')

@section('content')

    <h3>belajar membuat table</h3>
    <div>
        <table border="1">
            {{-- membuat kolom --}}
            <tr>
                {{-- membuat baris --}}
                <td>Baris 1 Sel 1</td>
                <td>Baris 2 Sel 1</td>
            </tr>
            <tr>
                <td>Baris 1 sel 2</td>
                <td>Baris 2 sel 2</td>
            </tr>
        </table>        
    </div>
    
    <div>
        <h2>Daftar Mahasiswa</h2>
        <table border="2" bgcolor="white" align="center">
                <caption align="bottom"> <b> TABEL DAFTAR MAHASISWA </b> </caption>
                <tr bgcolor="yellow"><th>No</th><th>NPM</th><th>Nama</th></tr>
                <tr bgcolor="cyan"><td align="center" width="20">1</td>
                    <td align="left" valign="middle“
	 width="80" height="40">06.100.001</td>
        <td align="left" valign="middle“
	 width="180" height="40">Amin A. Angkasa</td></tr>
        <tr><td bgcolor="blue" width="20">2.</td>
        <td bgcolor="red" align="left" valign="middle" 
	width="80" height="40">06.100.002</td>
        <td bgcolor="green" align="left" valign="middle" 
	width="180" height="40">Beni B. Bernardi</td></tr>
        
        </table>
    </div>

    <div>
        <h2> Belajar membuat tabel</h2>
        <table border=1 bgcolor="green" width=300 height=100>
                <tr height=30>
                    <td>Baris 1 Kolom 1</td>
                    <td>Baris 1 Kolom 2</td>
                </tr>
                <tr height=70>
                    <td>Baris 2 Kolom 1</td>
                    <td background="./images.jpg">
                    Baris 2 Kolom 2 <br><br> Background bagus</td>
                </tr>
                </table>                
    </div>

    <div>
            <table border="1" align="center">
                    <caption align="top">
                    <b> DAFTAR MAHASISWA </b> </caption>
                    <tr><th>No</th><th>NPM</th><th>Nama</th></tr>
                    <tr><td align="center" width="20">1.</td>
                    <td align="center" valign="middle" 
                     width="80" height="50">06.100.001</td>
                    <td align="right" valign="top" 
                     width="180" height="50">Amin A. Angkasa</td></tr>
                    <tr><td width="20">2.</td>
                    <td align="left" valign="top" 
                     width="80" height="70">06.100.002</td>
                    <td align="left" valign="bottom" 
                     width="180" height="70">Beni B. Bernardi</td></tr>
                 </table>

    
    </div>
    <div>
            <table border="1" bgcolor="white" align="center">
                    <caption align="top"> 
                    <b> Tabel Daftar Nilai Mahasiswa </b> </caption>
                    <tr bgcolor="gray"><th rowspan="2">No</th>
                    <th rowspan="2">NPM</th> <th rowspan="2">Nama</th> <th colspan="2">Nilai</th>
                    </tr>
                    <tr bgcolor="gray"><th>UTS</th> <th>UAS</th> </tr>
                    <tr><td align="center" width="20">1.</td>
                    <td align="left" valign="middle" width="80" height="40">06.100.001</td>
                    <td align="left" valign="middle" width="180" height="40">Amin A. Angkasa</td>
                    <td align="center" valign="middle">70</td> <td align="center" valign="middle">80</td>
                    </tr>
                    <tr><td width="20">2.</td>
                    <td align="left" valign="middle" width="80" height="40">06.100.002</td>
                    <td align="left" valign="middle" width="180" height="40">Beni B. Bernardi</td>
                    <td align="center" valign="middle">70</td> <td align="center" valign="middle">80</td>
                    </tr>
                 </table>
                 
    </div>
    <div>
            <table border="1" bgcolor="white" align="center“ cellpadding="10" cellspacing="12">
                    <caption align="top"> 
                    <b> Tabel Daftar Nilai Mahasiswa </b> </caption>
                    <tr bgcolor="gray"><th rowspan="2">No</th>
                    <th rowspan="2">NPM</th> <th rowspan="2">Nama</th> <th colspan="2">Nilai</th>
                    </tr>
                    <tr bgcolor="gray"><th>UTS</th> <th>UAS</th> </tr>
                    <tr><td align="center" width="20">1.</td>
                    <td align="left" valign="middle" width="80" height="40">06.100.001</td>
                    <td align="left" valign="middle" width="180" height="40">Amin A. Angkasa</td>
                    <td align="center" valign="middle">70</td> <td align="center" valign="middle">80</td>
                    </tr>
                    <tr><td width="20">2.</td>
                    <td align="left" valign="middle" width="80" height="40">06.100.002</td>
                    <td align="left" valign="middle" width="180" height="40">Beni B. Bernardi</td>
                    <td align="center" valign="middle">70</td> <td align="center" valign="middle">80</td>
                    </tr>
                 </table>
    </div>
@endsection