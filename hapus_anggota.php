<?php
include "koneksi.php";

$id	= $_GET['id'];


$query = mysql_query("delete from anggota where id_anggota='$id'");
if ($query) {
echo "<script>alert('data berhasil dihapus');
document.location.href='anggota.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='anggota.php'</script>\n";
}
?>