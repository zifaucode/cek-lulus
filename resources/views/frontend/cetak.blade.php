@if($student->status == 1)
<style>
    @media print {

        .printme,
        .printme * {
            visibility: visible;
        }

        html,
        body {
            height: auto;
            font-size: 10pt;
            /* changing to 10pt has no impact */
        }

        @page {

            margin: 20px;

        }

        @media screen {
            div.divFooter {
                display: none;
            }
        }

        @media print {
            div.divFooter {
                position: fixed;
                bottom: 0;
            }
        }
    }
</style>

<table border="0" width="100%">
    <tr>
        <td align="center">
            <img src="/files/logo/{{ $school->kop_logo_dinas}}" alt="logo2" width="70">
        </td>
        <td align="center">
            <b style="font-size:21px; text-transform: uppercase;">{{ $school->kop_nama_disdik }} </b> <br>
            <b style="font-size:28px; text-transform: uppercase;">{{ $school->kop_nama_sekolah }}</b> <br>
            <b style="font-size:19px; text-transform: uppercase;">TAHUN PELAJARAN {{ $school->kop_th_pelajaran }}</b>
        </td>
        <td align="center">
            <img src="/files/logo/{{ $web->logo }}" alt="logo2" width="70">
        </td>
    </tr>
    <tr>
        <td colspan="3" align="center" style="font-size:15px;">
            Alamat : {{ $school->kop_alamat }} &nbsp;<img src="/files/logo/telephone.png" width="15px" alt="telp." style="margin-bottom:-5px;margin-right:-5px;"> &nbsp;{{ $school->kop_telepon }}
            <img src="/files/logo/mailbox.png" width="15px" alt="Kode Pos." style="margin-bottom:-3px;margin-right:-5px;"> &nbsp;{{ $school->kop_pos }}
            <br>
            Website : {{ $school->kop_website }} e-mail : {{ $school->kop_email }}
        </td>
    </tr>
    <tr>
        <td colspan="3" align="center">
            <hr size="0" color="black" style="margin:0px;margin-bottom:1px;">
            <hr size="2" color="black" style="margin:0px;">
        </td>
    </tr>
</table>
<br>

<body onload="window.print();">
    <h4 align="center" style="margin-top:0px;"><u>{{ $school->nama_surat }}</u>
        <p>Nomor: {{ $school->no_surat }}</p>
    </h4>


    <br>
    <p>{{ $school->pembuka_surat }}</p>
    <br>

    <table width="100%" border="0">

        <tr>
            <td>NAMA LENGKAP</td>
            <td>:</td>
            <td>{{ $student->name }}</td>
        </tr>
        <tr>
            <td>NAMA ORANGTUA</td>
            <td>:</td>
            <td>{{ $student->nama_ortu }}</td>
        </tr>
        <tr>
            <td>TEMPAT, TANGGAL LAHIR</td>
            <td>:</td>
            <td>{{ $student->tempat_tgl_lahir }}</td>
        </tr>


        <tr>
            <td width="200">NISN</td>
            <td width="1">:</td>
            <td>{{ $student->no_exam }}</td>
        </tr>
        <tr>
            <td width="200">NO. UJIAN</td>
            <td width="1">:</td>
            <td>{{ $student->no_exam }}</td>
        </tr>



    </table>
    <br>
    <br>
    Yang Bersangkutan dinyatakan :
    <center>
        <table style="border: 1px solid black;">

            <td>
                <p><i><b> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;LULUS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</b></i></p>
            </td>

        </table>
    </center>
    <br>
    <p>{{ $school->penutup_surat }}</p>
    <br>
    <br>
    <br>
    <br>

    <div style="float:right;">
        {{ $school->tempat }}, {{ $school->tanggal }} <br>
        {{ $school->jabatan_penandatangan }}, <br>
        <img src="/files/ttd/{{ $school->tanda_tangan}}" alt="" width="100"><br>
        <br>

        <b><u>{{ $school->nama_penandatangan }}</u></b><br>
        NIP. {{ $school->nip_penandatangan }}
    </div>
    <br><br><br><br><br><br><br><br><br><br>



</body>
@else
ANDA TIDAK BISA CETAK KARTU
@endif