<?php 

class galeriKegiatan_models {
    private $table = 'ptt';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllOrganisasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getOrganisasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataOrganisasi($data)
    {
        $query = "INSERT INTO ptt
                    VALUES
                  (null, :nama_lengkap, :jenis_kelamin, :tempat_lahir, :tanggal, :bulan, :alamat_lengkap, :jarak_sekolah_dengan_rumah, :pendidikan_terakhir, :jurusan_pendidikan_terakhir, :nomer_hp, :status, :status_pernikahan, :masukan, :upload_foto_kegiatan)";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('bulan', $data['bulan']);
        $this->db->bind('alamat_lengkap', $data['alamat_lengkap']);
        $this->db->bind('jarak_sekolah_dengan_rumah', $data['jarak_sekolah_dengan_rumah']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_terakhir']);
        $this->db->bind('jurusan_pendidikan_terakhir', $data['jurusan_pendidikan_terakhir']);
        $this->db->bind('nomer_hp', $data['nomer_hp']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('status_pernikahan', $data['status_pernikahan']);
        $this->db->bind('masukan', $data['masukan']);
        $this->db->bind('upload_foto_kegiatan', $data['upload_foto_kegiatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataOrganisasi($id)
    {
        $query = "DELETE FROM ptt WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataOrganisasi($data)
    {
        $query = "UPDATE ptt SET
                    nama_lengkap = :nama_lengkap,
                    jenis_kelamin = :jenis_kelamin,
                    tempat_lahir = :tempat_lahir,
                    tanggal_lahir = :tanggal_lahir
                    tanggal = :tanggal,
                    bulan = :bulan,
                    alamat_lengkap = :alamat_lengkap,
                    jarak_sekolah_dengan_rumah = :jarak_sekolah_dengan_rumah
                    pendidikan_terakhir = :pendidikan_terakhir,
                    jurusan_pendidikan_terakhir = :jurusan_pendidikan_terakhir,
                    nomer_hp = :nomer_hp,
                    status = :status
                    status_pernikahan = :status_pernikahan,
                    masukan = :masukan,
                    upload_foto_kegiatan = :upload_foto_kegiatan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('bulan', $data['bulan']);
        $this->db->bind('alamat_lengkap', $data['alamat_lengkap']);
        $this->db->bind('jarak_sekolah_dengan_rumah', $data['jarak_sekolah_dengan_rumah']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_terakhir']);
        $this->db->bind('jurusan_pendidikan_terakhir', $data['jurusan_pendidikan_terakhir']);
        $this->db->bind('nomer_hp', $data['nomer_hp']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('status_pernikahan', $data['status_pernikahan']);
        $this->db->bind('masukan', $data['masukan']);
        $this->db->bind('upload_foto_kegiatan', $data['upload_foto_kegiatan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataOrganisasi()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM ptt WHERE nama_lengkap LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}

    private $table = 'cs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllOrganisasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getOrganisasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataOrganisasi($data)
    {
        $query = "INSERT INTO cs
                    VALUES
                  (null, :nama_lengkap, :jenis_kelamin, :tempat_lahir, :tanggal, :bulan, :alamat_lengkap, :jarak_sekolah_dengan_rumah, :pendidikan_terakhir, :jurusan_pendidikan_terakhir, :nomer_hp, :status, :status_pernikahan, :masukan, :upload_foto_kegiatan)";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('bulan', $data['bulan']);
        $this->db->bind('alamat_lengkap', $data['alamat_lengkap']);
        $this->db->bind('jarak_sekolah_dengan_rumah', $data['jarak_sekolah_dengan_rumah']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_terakhir']);
        $this->db->bind('jurusan_pendidikan_terakhir', $data['jurusan_pendidikan_terakhir']);
        $this->db->bind('nomer_hp', $data['nomer_hp']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('status_pernikahan', $data['status_pernikahan']);
        $this->db->bind('masukan', $data['masukan']);
        $this->db->bind('upload_foto_kegiatan', $data['upload_foto_kegiatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataOrganisasi($id)
    {
        $query = "DELETE FROM cs WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataOrganisasi($data)
    {
        $query = "UPDATE cs SET
                    nama_lengkap = :nama_lengkap,
                    jenis_kelamin = :jenis_kelamin,
                    tempat_lahir = :tempat_lahir,
                    tanggal_lahir = :tanggal_lahir
                    tanggal = :tanggal,
                    bulan = :bulan,
                    alamat_lengkap = :alamat_lengkap,
                    jarak_sekolah_dengan_rumah = :jarak_sekolah_dengan_rumah
                    pendidikan_terakhir = :pendidikan_terakhir,
                    jurusan_pendidikan_terakhir = :jurusan_pendidikan_terakhir,
                    nomer_hp = :nomer_hp,
                    status = :status
                    status_pernikahan = :status_pernikahan,
                    masukan = :masukan,
                    upload_foto_kegiatan = :upload_foto_kegiatan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('bulan', $data['bulan']);
        $this->db->bind('alamat_lengkap', $data['alamat_lengkap']);
        $this->db->bind('jarak_sekolah_dengan_rumah', $data['jarak_sekolah_dengan_rumah']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_terakhir']);
        $this->db->bind('jurusan_pendidikan_terakhir', $data['jurusan_pendidikan_terakhir']);
        $this->db->bind('nomer_hp', $data['nomer_hp']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('status_pernikahan', $data['status_pernikahan']);
        $this->db->bind('masukan', $data['masukan']);
        $this->db->bind('upload_foto_kegiatan', $data['upload_foto_kegiatan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataOrganisasi()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM cs WHERE nama_lengkap LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    private $table = 'satpam';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllOrganisasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getOrganisasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataOrganisasi($data)
    {
        $query = "INSERT INTO satpam
                    VALUES
                  (null, :nama_lengkap, :tempat_lahir, :tanggal, :bulan, :alamat_lengkap, :jarak_sekolah_dengan_rumah, :pendidikan_terakhir, :jurusan_pendidikan_terakhir, :nomer_hp, :status, :status_pernikahan, :masukan, :upload_foto_kegiatan)";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('bulan', $data['bulan']);
        $this->db->bind('alamat_lengkap', $data['alamat_lengkap']);
        $this->db->bind('jarak_sekolah_dengan_rumah', $data['jarak_sekolah_dengan_rumah']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_terakhir']);
        $this->db->bind('jurusan_pendidikan_terakhir', $data['jurusan_pendidikan_terakhir']);
        $this->db->bind('nomer_hp', $data['nomer_hp']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('status_pernikahan', $data['status_pernikahan']);
        $this->db->bind('masukan', $data['masukan']);
        $this->db->bind('upload_foto_kegiatan', $data['upload_foto_kegiatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataOrganisasi($id)
    {
        $query = "DELETE FROM satpam WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataOrganisasi($data)
    {
        $query = "UPDATE satpam SET
                    nama_lengkap = :nama_lengkap,
                    tempat_lahir = :tempat_lahir,
                    tanggal_lahir = :tanggal_lahir
                    tanggal = :tanggal,
                    bulan = :bulan,
                    alamat_lengkap = :alamat_lengkap,
                    jarak_sekolah_dengan_rumah = :jarak_sekolah_dengan_rumah
                    pendidikan_terakhir = :pendidikan_terakhir,
                    jurusan_pendidikan_terakhir = :jurusan_pendidikan_terakhir,
                    nomer_hp = :nomer_hp,
                    status = :status
                    status_pernikahan = :status_pernikahan,
                    masukan = :masukan,
                    upload_foto_kegiatan = :upload_foto_kegiatan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('bulan', $data['bulan']);
        $this->db->bind('alamat_lengkap', $data['alamat_lengkap']);
        $this->db->bind('jarak_sekolah_dengan_rumah', $data['jarak_sekolah_dengan_rumah']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_terakhir']);
        $this->db->bind('jurusan_pendidikan_terakhir', $data['jurusan_pendidikan_terakhir']);
        $this->db->bind('nomer_hp', $data['nomer_hp']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('status_pernikahan', $data['status_pernikahan']);
        $this->db->bind('masukan', $data['masukan']);
        $this->db->bind('upload_foto_kegiatan', $data['upload_foto_kegiatan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataOrganisasi()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM satpam WHERE nama_lengkap LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

