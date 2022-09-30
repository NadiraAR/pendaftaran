<html>
    <head>
</head>
<body>
    <h1>Form pendaftaran</h1>
    <form action="proses-pendaftaran.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" />
                </p>
                <p>
                    <label for="tempat lahir">Tempat Lahir :</label>
                    <input type="text" name="tempat lahir" />
                </p>
                <p>
                    <label for="tanggal lahir">Tanggal lahir :</label>
                    <input type="date" name="tanggal lahir" />
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" rows="5"></textarea>
                </p>
                <p>
                    <label for="jenis kelamin">Jenis Kelamin :</label>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama :</label>
                    <select>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Khatolik">Khatolik</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Buddha">Buddha</option></select></p>
                <p>
                    <input type="submit" value="Submit" name="daftar"/>
                </p>
            </fieldset>
        </form>
</body>
</html>
