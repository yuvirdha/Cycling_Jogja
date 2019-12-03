<form action="/tambahevent/store" method="post">
    {{ csrf_field() }}
    <legend>Form Event</legend>
    <table>
        <tr>
            <td> Gambar</td>
            <td>:</td>
            <td>
            <input type="text" name="gambar_event" required="required">
            </td>
        </tr>
        <tr>
            <td> Nama </td>
            <td>:</td>
            <td>
            <input type="text" name="nama_event" required="required">
            </td>
        </tr>
        <tr>
            <td> Rincian </td>
            <td>:</td>
            <td>
            <textarea type="text" name="rincian_event" required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td> Waktu Pelaksanaan </td>
            <td>:</td>
            <td>
            <input type="date" name="waktu_pelaksanaan" required="required">
            </td>
        </tr>
        <tr>
            <td> Rute </td>
            <td>:</td>
            <td>
            <input type="text" name="rute" required="required">
            </td>
        </tr>        
        <tr>
            <td> Harga </td>
            <td>:</td>
            <td>
            <input type="text" name="harga_tiket" required="required">
            </td>
        </tr>        
    </table>
    </form>
    <input type="submit" value="Simpan Data">
    <a href="/admin">simpan</a>