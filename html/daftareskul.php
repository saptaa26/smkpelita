<html>
<head>
<meta charset="UTF-8">
<title>Pendaftaran Ekstrakurikuler</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-11">
<div class="bs-example">
    <h1>Pendaftaran Ekstrakurikuler</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">Nama Lengkap:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Masukan Nama" placeholder="Nama Lengkap Anda">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputPassword">Kelas:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Masukan Kelas" placeholder="Kelas Anda">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Nama">Jurusan:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Jurusan" placeholder="Jurusan Anda">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="telp">No. Telp:</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Tanggal Lahir</label>
            <div class="col-xs-3">
                <select class="form-control">
                	<option>Tanggal</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>

                </select>
            </div>
            <div class="col-xs-3">
                <select class="form-control">
                    <option>Bulan</option>
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                </select>
            </div>
            <div class="col-xs-3">
                <select class="form-control">
                    <option>Tahun</option>
                    <option>2005</option>
                    <option>2004</option>
                    <option>2003</option>
                    <option>2002</option>
                    <option>2001</option>
                    <option>2000</option>
                    <option>1999</option>
                    <option>1998</option>
                    <option>1997</option>
                    <option>1996</option>
                    <option>1995</option>
                </select>
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-xs-3">Ekstrakurikuler</label>
            <div class="col-xs-3">
                <select class="form-control">
                	<option>Pilih Eskul</option>
                	<option>Pasukan Khusus</option>
                	<option>Taekwondo</option>
                	<option>Jamic</option>
                	<option>Bascom</option>
                	<option>Pramuka</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Alamat">Alamat:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" id="Alamat" placeholder="Alamat Lengkap"></textarea>
            </div>
        </div>
          <div class="form-group">
            <label class="control-label col-xs-3" for="Alamat">Motivasi:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" id="Alamat" placeholder="Motivasi Masuk Eskul"></textarea>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-xs-3">Jenis Kelamin:</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="Perempuan"> Perempuan
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="Setuju">  Saya Setuju dengan <a href="kebijakan dan ketentuan.php">Kebijakan dan Ketentuan</a> yang berlaku.
                </label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Kirim">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</body>
<footer>
    <?php include "layout/footer.php" ?>
</footer>
</html> 