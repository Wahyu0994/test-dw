<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "streaming");



function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	$title =htmlspecialchars($data["title"]);
	$category =htmlspecialchars($data["category"]);
	$attache =htmlspecialchars($data["attache"]);
	$thumbnail =htmlspecialchars($data["thumbnail"]);

	//query insert data
	$query = "INSERT INTO video
	        VALUES
	        ('', '$title', '$category', '$attache', '$thumbnail')";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);


}

function tambah2($data){
	global $conn;
	$name =htmlspecialchars($data["name"]);
	//query insert data
	$query = "INSERT INTO category
	        VALUES
	        ('', '$name')";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);


}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM video WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function hapus2($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM category WHERE id = $id");

	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
	$id = ($data["id"]);
	$title =htmlspecialchars($data["title"]);
	$category =htmlspecialchars($data["category"]);
	$attache =htmlspecialchars($data["attache"]);
	$thumbnail =htmlspecialchars($data["thumbnail"]);

	//query insert data
	$query = "UPDATE video SET
	title = '$title',
	category = '$category',
	attache = '$attache',
	thumbnail = '$thumbnail'

	WHERE id = $id
	";


    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);


}


function ubah2($data){
	global $conn;
	$id = ($data["id"]);
	$name =htmlspecialchars($data["name"]);

	//query insert data
	$query = "UPDATE category SET
	name = '$name'

	WHERE id = $id
	";


    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);


}
 

 ?>

 <?php 

  ?>
