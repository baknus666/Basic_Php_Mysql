<?php
    define ('DB_HOST', 'localhost');
    define ('DB_USER', 'root');
    define ('DB_PASS', '');
    define ('DB_NAME', 'pplg_1_notes');
    $koneksi=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Gagal terhubung dengan Database: " . mysqli_error($dbconnect));
    
    function tampildata($tablename)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"select * from $tablename");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;

    }

    function show_catatan()
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"SELECT notes.id, notes.note,notes.created_at, user.username from notes INNER JOIN user ON NOTES.id_user = user.id_user;");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;

    }

    function show_catatan_user($id_user)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"SELECT * FROM notes WHERE id_user='$id_user';");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    function inputdata($inputdata)
    {
        global $koneksi;
        $sql=mysqli_query($koneksi,$inputdata);
        return $sql;
    }

    function Editdata($tablename,$id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"select * from $tablename where id='$id'");
        return $hasil;
    }

    function update($table, $data, $id)
    {
        global $koneksi;
        $sql = "UPDATE $table SET note = '$data' WHERE id = '$id'";
        $hasil=mysqli_query($koneksi,$sql);
        return $hasil;
    }

   function Delete($tablename,$id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"delete from $tablename where id='$id'");
        return $hasil;
    }

    function cek_login($username,$password){
		global $koneksi; 
		$uname = $username;
		$upass = $password;		
		$hasil = mysqli_query($koneksi,"select * from user where username='$uname' and password=md5('$upass')");
		$cek = mysqli_num_rows($hasil);
		if($cek > 0 ){
            $query = mysqli_fetch_array($hasil);
            $_SESSION['id_user'] = $query['id_user'];
            $_SESSION['username'] = $query['username'];
            $_SESSION['role'] = $query['role'];
			return true;		
        }
		else {
			return false;
		}	
	}
?>