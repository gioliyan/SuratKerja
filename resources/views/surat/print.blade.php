<!DOCTYPE html>
<html>

<head>
    <title>{{ $mails->instansi }}</title>
</head>

<body>
    <img style="float: left; margin:0px" src="logo kabupaten.jpg" width="50" height="60">
    <h3 style="font-size:17px;font-family:Times New Roman;text-align:center;margin:0px"><b>PEMERINTAH KABUPATEN
            MALANG</b></h3>
    <h2 style="font-size:20px;font-family:Times New Roman;text-align:center;margin:0px">DINAS KOMUNIKASI DAN INFORMATIKA
    </h2>
    <p style="font-size:10;text-align:center;margin:0px">Jalan A. Yani Utara No. 384 B Telp./ Fax(0341) 408788</p>
    <p style="font-size:10;text-align:center;margin:0px"><i>Website : <u>http://kominfo.malangkab.go.id</u> Email:
            kominfo@malangkab.go.id</i></p>
    <p style="font-size:10;text-align:center;margin:0px"><u>M A L A N G &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6 5 1
            2 6</u></p>
    <h2 style="font-size:20px;font-family:Times New Roman;text-align:center;margin-top:10px;margin-bottom:0px"><u>SURAT
            &nbsp; TUGAS</u></h2>
    <p style="font-family:Times New Roman;margin-top:0px;text-align:center;">Nomor : 094/
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /35.07.124/2021</p>
    <p style="float:left;margin-left:40px;margin-right:10px;margin-top:5px">Kepada
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
    <table>
        <tr>
            <td>
                <p style="margin-left:40px;margin-top:0px">&nbsp;</p>
            </td>
            <td>
                <p style="margin-left:40px;margin-top:0px">&nbsp;</p>
            </td>
            <td>
                <p
                    style="font-family:Times New Roman;margin-top:2px;text-align:justify;margin-right:60px;margin-left:50px">
                    {{$mails->dasar}}. Dengan ini Plt. Kepala Dinas Komunikasi dan Informatika :</p>
            </td>
        </tr>
    </table>
    <p style="font-size:18px;font-family:Times New Roman;margin-bottom:0px;margin-top:10px;text-align:center;">
        <b>Menugaskan</b></p>
    <p style="float:left;margin-left:40px;margin-right:10px;margin-top:19px;">Kepada
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
    <table>
        <tr>
            <td>
                <p style="margin-left:200px">Nama</p>
            </td>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            </td>
            <td>
                {{$gawais->nama_pg1}}
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin-left:200px;">NIP</p>
            </td>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            </td>
            <td>
                {{$gawais->nip_pg1}}
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin-left:200px">Pangkat / Gol</p>
            </td>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            </td>
            <td>
                {{$gawais->pangkat_pg1}}
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin-left:200px">Jabatan</p>
            </td>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            </td>
            <td>
                {{$gawais->jabatan_pg1}}
            </td>
        </tr>
    </table>
    <p style="font-family:Times New Roman;float:left;margin-left:40px;margin-right:20px;margin-top:19px;">Untuk
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
    <p style="font-family:Times New Roman;margin-top:20px;text-align:justify;margin-right:60px;margin-left:50px">
        {{$mails->untuk}}</p>
    <p style="font-family:Times New Roman;margin-top:20px;text-align:justify;margin-right:60px;margin-left:200px;margin-bottom:0px">Sesuai Prosedur, setelah melaksanakan kegiatan dimaksud</p>
    <p style="font-family:Times New Roman;text-align:justify;margin-right:60px;margin-left:165px;margin-top:0px">agar melaporkan hasilnya kepada pimpinan</p>
    <p style="font-family:Times New Roman;margin-top:20px;text-align:justify;margin-right:60px;margin-left:165px">
        Demikian untuk dilaksanakan dengan penuh tanggungjawab.</p>

    <table
        style="float:right;margin-right:130px;cellpadding=0;cellspacing=0;border-collapse: collapse;">
        <tr>
            <td>
                <p style="font-family:Times New Roman;">Dikeluarkan &nbsp;&nbsp;&nbsp;&nbsp;</p>
            </td>
            <td>
                :
            </td>
            <td>
                di &nbsp;&nbsp;&nbsp;&nbsp; M A L A N G
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-family:Times New Roman;">Pada Tanggal &nbsp;&nbsp;&nbsp;&nbsp;</p>
            </td>
            <td>
                :
            </td>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2021
            </td>
        </tr>
        <tr style="marign-top:-1px">
            <td colspan="3">
                <p style="font-family:Times New Roman;text-align:center"><b>{{$mails->instansi}}</b></p>
            </td>
        </tr>
    </table>
    <br>
    <p style="font-family:Times New Roman;margin-top:230px;margin-bottom:0px;margin-left:320px"><u><b>DRs. M. NUR FUAD FAUZI, M.T</b></u>
    </p>
    <p style="font-family:Times New Roman;margin:0px;margin-left:394px;">Pembina Tk. I</p>
    <p style="font-family:Times New Roman;margin:0px;margin-left:340px;">NIP. 19731222 199201 1 001</p>
</body>

</html>