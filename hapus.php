<!--
+====================================================================================================+
+  _ _ _ _ _     __     __    _ _ _ _ _     __ _ _ _ __    _ _ _ _      __    __ _ _ _    __         +
+ |_ _    _ _|  |  |   |  |  |_ _    _ _|  /     _     \  |   __   \   |  |  /   __   \  |  |        +
+     |  |      |  |   |  |      |  |      |   /   \   |  |  |_ |  |   |  |  |  |__|  |  |  |        +
+     |  |      |  |   |  |      |  |      |   |   |   |  |   _   _/   |  |  |   __   |  |  |        +
+     |  |      |  \_ _/  |      |  |      |   \ _ /   |  |  | \  \    |  |  |  |  |  |  |  |_ _ __  +
+     |__|      \__ _ _ _ /      |__|      \_ _ _ _ _ _/  |__|  \__\   |__|  |__|  |__|  |_ _ _ _ _| +  
+   __    __    _ _ _ _ _ _    _ _ _ _     __    _ _ _     __    _ _ _ _ _                           +
+  |  | /   /  /     _     \  |   __  \   |  |  |     \   |  |  /   _ _ __\                          +
+  |  |/   /   |   /   \   |  |  /  \  |  |  |  |  |\  \  |  |  |  /  _ __                           +
+  |      /    |   |   |   |  |  |  |  |  |  |  |  | \  \ |  |  |  | |_   \                          +
+  |  |\  \    |   \ _ /   |  |  \ _/  |  |  |  |  |  \  \|  |  |  |__ |  |                          +
+  |__| \__\   \_ _ _ _ _ _/  |_ _ _ _/   |__|  |__|   \_ _ _|  \ _ _ _ _ /                          +
+====================================================================================================+
!-->

<?php include "koneksi.php";
$nis=$_GET['nis'];
$sqlhapus=mysql_query("delete from siswa where nis='".$nis."'");
echo "<center>Data siswa berhasil dihapus</center>";
echo "<meta http-equiv='refresh' content=3;url='./'>";
?>