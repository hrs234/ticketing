<?php
class crud
{
    public $konek;

    //menjalankan koneksi
    function __construct()
    {
        // konfigurasi database
        $this->konek = mysqli_connect('localhost', 'root', '', 'ticketing');
        if(!$this->konek)
        {
            echo "Koneksi bermasalah";
            echo "<br><br>ERROR: ".mysqli_error($this->konek);
        }
         date_default_timezone_set("Asia/Jakarta");
    }

    //utk menampilkan sebuaah data non-update
    public function tampil($nama_tb)
    {
        $SQL = "select * from $nama_tb";
        $exe = mysqli_query($this->konek, $SQL);
        return $exe;
    }

    

    public function spesifik_all($nama_tb, $nama_kl, $q)
    {
        $SQL = "select * from $nama_tb where $nama_kl like BINARY '%$q%' ";
        $exe = mysqli_query($this->konek, $SQL);
        
        return $exe;
    }

    public function showcase($nama_tb, $limit)
    {
        $SQL = "select * from $nama_tb limit $limit";
        $exe = mysqli_query($this->konek, $SQL);
        return $exe;
    }

    //utk menghapus data
    public function delete($nama_tb, $kolom, $val_kolom)
    {
        $SQL = "delete from $nama_tb where $kolom='$val_kolom'";
        $exe = mysqli_query($this->konek, $SQL);
        if(!$exe)
        {
            return "ERROR: ".mysqli_error($this->konek);
        }
        else
        {
            return "ok";
        }
    }

    //utk mengisi data baru alias buat baru
    public function insert($nama_tb, $get_data)
    {
        //pemecah data
        $kolom = implode(", ",array_keys($get_data));
        $value = implode("','",$get_data);

        //eksekusi perintah
        $SQL = "insert into $nama_tb ($kolom) values ('$value')";
        $exe = mysqli_query($this->konek, $SQL);
        if(!$exe)
        {
            return "ERROR: $SQL <br><br>".mysqli_error($this->konek);
        }
        else
        {
            return "ok";
        }
    }

    // public function insert_coba($nama_tb, $kolom, $get_kolom, $get_value, $get_koloms, $get_values)
    // {
    //     //pemecah data
    //     $kolom = implode(", ",array_keys($get_kolom));
    //     $value = implode("','",$get_value);

    //     $koloms = implode(", ",array_keys($get_koloms));
    //     $values = implode("','",$get_values);


    //     //eksekusi perintah
    //     $SQL = "insert into $nama_tb ($kolom) values ($get_value)";
    //     $exe = mysqli_query($this->konek, $SQL);

    //     $SQLA = "insert into $nama_tb ($koloms) values ($get_values)";
    //     $exes = mysqli_query($this->konek, $SQLA);
    //     if(!$exe)
    //     {
    //         return "ERROR: ".mysqli_error($this->konek);
    //     }
    //     else
    //     {
    //         return "ok";
    //     }
    // }

    //utk update data
    public function update($nama_tb, $kolom, $get_value, $id)
    {
        $data = implode(", ",$get_value);
        $SQL = "update $nama_tb set $data where $kolom='$id'";
        $exe = mysqli_query($this->konek, $SQL);
        if(!$exe)
        {
            return "ERROR: ".mysqli_error($this->konek);
        }
        else
        {
            return $exe;
        }
    }

    //utk menampilkan data di form ubah
    public function see_update($nama_tb, $kolom, $id)
    {
        $SQL = "select * from $nama_tb where $kolom='$id'";
        $exe = mysqli_query($this->konek, $SQL);
        $hasil = mysqli_fetch_array($exe);
        if(!$exe)
        {
            return "ERROR: ".mysqli_error($this->konek);
        }
        else
        {
            return $hasil;
        }
    }

    public function search($nama_tb, $kolom, $query)
    {
        $sql = "select * from $nama_tb where $kolom like '%$query%'";
        $exe = mysqli_query($this->konek, $sql);
        return $exe;
    }

    // public function login($nama_tb, $kolom_a, $kolom_b ,$user ,$pass)
    // {
    //     $SQL = "select * from $nama_tb where $kolom_a = '$user' and $kolom_b = '$pass'";
    //     // $SQL = "SELECT * FROM nama_pengguna where username='admin' and pass='admin'";
    //     $exe = mysqli_query($this->konek, $SQL);
    //     $hasil = mysqli_fetch_array($exe);
    //     if($hasil != null)
    //     {
    //         return $hasil;

    //     }
    //     else
    //     {
    //         return "no";
    //     }
    // }

    public function page_nosearch($bts, $hlm, $table)
    {
        
        //start paging initialization

        $pos = ($hlm - 1) * $bts;

        //end paging initialization

        $sql = "SELECT * FROM $table limit $pos, $bts";
        $num_pg = $pos + 1;

        $query = mysqli_query($this->konek, $sql);

        return $query;

    }

    public function page_numering_nosearch($bts, $table)
    {
        //num of pagging
        $tmpl2 = mysqli_query($this->konek, "select * from $table");
        $data_jml = mysqli_num_rows($tmpl2);
        $jumlah_hlm = ceil($data_jml / $bts);

        return $jumlah_hlm;
        
    }

    public function page($bts, $hlm, $table, $carian, $kolom)
    {
        $pos = ($hlm - 1) * $bts;

        $sql = "SELECT * FROM $table where $kolom like '%$carian%' limit $pos, $bts";

        $query = mysqli_query($this->konek, $sql);

        return $query;

    }

    public function page_numering($bts, $table, $kolom, $query)
    {
        //num of pagging
        $tmpl2 = mysqli_query($this->konek, "select * from $table where $kolom like '%$query%'");
        $data_jml = mysqli_num_rows($tmpl2);
        $jumlah_hlm = ceil($data_jml / $bts);

        return $jumlah_hlm;
        
    }





    public function page_multiple($bts, $hlm, $table, $carianA, $carianB, $carianC, $carianD, $kolomA, $kolomB, $kolomC, $kolomD)
    {
        $pos = ($hlm - 1) * $bts;

        $sql = "SELECT * FROM $table where $kolomA like '%$carianA%' and $kolomB like '%$carianB%' and $kolomC like '%$carianC%' and $kolomD like '%$carianD%' limit $pos, $bts";
        $query = mysqli_query($this->konek, $sql);

        return $query;

    }

    public function page_numering_multiple($bts, $table, $kolomA, $kolomB, $kolomC, $kolomD, $queryA, $queryB, $queryC, $queryD)
    {
        //num of pagging
        $tmpl2 = mysqli_query($this->konek, "select * from $table where $kolomA like '%$queryA%' and $kolomB like '%$queryB%' and $kolomC like '%$queryC%' and $kolomD like '%$queryD%'");
        $data_jml = mysqli_num_rows($tmpl2);
        $jumlah_hlm = ceil($data_jml / $bts);

        return $jumlah_hlm;
        
    }




    public function login($table, $user_kol, $pass_kol, $user, $pass)
    {
        $SQL = "select * from $table where $user_kol='$user' and $pass_kol='$pass'";
        $jalan = mysqli_query($this->konek, $SQL);
        $hasil = mysqli_fetch_array($jalan);
        if($hasil > 0)
        {
            return $hasil;
        }
        else
        {
            return "no";
        }
    }
    
}
?>