<?php
require "Koneksi.php";
require "Model.php";

if (isset($_POST['submit'])) {
	$data = array(
		"id_peminjaman" => "'" . $_POST['id_peminjaman'] . "'",
		"tgl_pinjam" => "'" . $_POST['tgl_pinjam'] . "'",
		"tgl_kembali" => "'" . $_POST['tgl_kembali'] . "'",
	);
	insert($data, 'Peminjaman');
	header('location:Peminjaman.php');
}

$id = isset($_GET['id_peminjaman']) ? $_GET['id_peminjaman'] : '';
$data = selectdatabyid("peminjaman", $id, "id_peminjaman");
if (isset($_POST['edit'])) {
	$data = array(
		"id_peminjaman" => "'" . $_POST['id_peminjaman'] . "'",
		"tgl_pinjam" => "'" . $_POST['tgl_pinjam'] . "'",
		"tgl_kembali" => "'" . $_POST['tgl_kembali'] . "'",
	);
	update($data, 'peminjaman', $id, "id_peminjaman");
	header("location:Peminjaman.php");
}

if (isset($_POST['kembali'])) {
	header("location:Peminjaman.php");
}

?>

<!doctype html>
<html lang="en">

<head>
	<title>Form Peminjaman</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<?php if (isset($_GET['id_peminjaman'])) : ?>
		<h1 style="text-align: center;" class="mt-2">Edit Peminjaman</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-5 mx-auto">
					<form method="POST">
						<div class="mb-3 mt-3">
							<label class="form-label">ID</label>
							<input type="text" name="id_peminjaman" value="<?php echo $data['id_peminjaman']; ?>" placeholder="masukkan id_peminjaman" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Peminjaman</label>
							<input type="date" name="tgl_pinjam" value="<?php echo $data['tgl_pinjam']; ?>" placeholder="masukkan tgl_pinjam" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Kembali</label>
							<input type="date" name="tgl_kembali" value="<?php echo $data['tgl_kembali']; ?>" placeholder="masukkan tgl_kembali" required class="form-control col-form-label-sm">
						</div>
						<button type="submit" class="btn btn-dark" name="edit" onclick="return confirm('Simpan perubahan?')">Submit</button>
						<button type="submit" value="ignore" formnovalidate class="btn btn-dark" name="kembali">Kembali</button>
					</form>
				</div>
			</div>
		</div>
	<?php
	endif;
	if (!isset($_GET['id_peminjaman'])) : ?>
		<h1 style="text-align: center;" class="mt-2">Tambah Peminjaman</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-5 mx-auto">
					<form method="POST">
						<div class="mb-3 mt-3">
							<label class="form-label">ID</label>
							<input type="text" name="id_peminjaman" placeholder="masukkan id_peminjaman" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Peminjaman</label>
							<input type="date" name="tgl_pinjam" placeholder="masukkan tgl_pinjam" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Kembali</label>
							<input type="date" name="tgl_kembali" placeholder="masukkan tgl_kembali" required class="form-control col-form-label-sm">
						</div>
						<button type="submit" class="btn btn-dark" name="submit" onclick="return confirm('Tambah data?')">Submit</button>
						<button type="submit" value="ignore" formnovalidate class="btn btn-dark" name="kembali">Kembali</button>
					</form>
				</div>
			</div>
		</div>
	<?php endif; ?>
</body>

</html>