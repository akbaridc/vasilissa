$(function () {
	CKEDITOR.replace(".ckeditor");
});

$("#check-all").click(function () {
	// Ketika user men-cek checkbox all
	if ($(this).is(":checked"))
		// Jika checkbox all diceklis
		$(".check-item").prop("checked", true);
	// ceklis semua checkbox siswa dengan class "check-item"
	// Jika checkbox all tidak diceklis
	else $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
	var number_string = angka.replace(/[^,\d]/g, "").toString(),
		split = number_string.split(","),
		sisa = split[0].length % 3,
		rupiah = split[0].substr(0, sisa),
		ribuan = split[0].substr(sisa).match(/\d{3}/gi);

	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if (ribuan) {
		separator = sisa ? "." : "";
		rupiah += separator + ribuan.join(".");
	}

	rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
	return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

/** Fungsi Format Tanggal Indonesia */
function formatTanggal(string) {
	bulanIndo = [
		"",
		"Januari",
		"Februari",
		"Maret",
		"April",
		"Mei",
		"Juni",
		"Juli",
		"Agustus",
		"September",
		"Oktober",
		"November",
		"Desember",
	];

	date = string.split(" ")[0];
	time = string.split(" ")[1];

	tanggal = date.split("-")[2];
	bulan = date.split("-")[1];
	tahun = date.split("-")[0];

	return tanggal + " " + bulanIndo[Math.abs(bulan)] + " " + tahun + " " + time;
}

/************************************* SweetAlert **********************************************************/
$(".delete").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah anda yakin?",
		text: "Data akan dihapus!!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya, Yakin",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});

$(".status").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah anda yakin?",
		text: "Ingin mengganti status data ini !",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya, Yakin",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});

$(".hapus-multi").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah anda yakin?",
		text: "Ingin menghapus data user yang terpilih!!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya, Yakin",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});

$(".is-member").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah anda yakin?",
		text: "anda akan menjadikan user menjadi member",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya, Yakin",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});

/************************************* End SweetAlert ********************************************************/

/************************************* Setting Website ADMIN *********************************************************/

// logo website
$("#namaWebsiteAdd").bind("click", function (e) {
	$("#namaWebsite_form").slideToggle(500);
});

$("#namaWebsiteEdit").bind("click", function (e) {
	$("#EditnamaWebsite_form").slideToggle(500);
});

// logo website
$("#logoWebsiteAdd").bind("click", function (e) {
	$("#form_container").slideToggle(500);
});

// tentang
$("#tentangAdd").bind("click", function (e) {
	$("#tentang_form").slideToggle(500);
});

// sosial media
$("#sosialMediaAdd").bind("click", function (e) {
	$("#sosial_form").slideToggle(500);
});

$("#edit-data-sosial-modal").on("show.bs.modal", function (event) {
	// event.preventDefault();
	var div = $(event.relatedTarget);
	var modal = $(this);

	modal.find("#edit_icon_sosial").val(div.data("icon"));
	modal.find("#edit_link_sosial").val(div.data("link"));
	modal.find("#id_edit").attr("value", div.data("id"));
});

$(".list-add").on("click", function () {
	$("#list-icon").modal("show");
});

// kontak
$("#kontakAdd").bind("click", function (e) {
	$("#kontak_form").slideToggle(500);
});

$("#icons li").each(function () {
	$(this).append('<div class="icon-name">' + $(this).attr("class") + "</div>");
});
$("#icons li").click(function () {
	$(".icon-name").fadeOut();
	$(this).find(".icon-name").fadeIn();
});

$.ajax({
	url: "AdminBiasa/SettingWebsite/json",
	type: "GET",
	dataType: "json",
	success: function (data) {
		// console.log(data);
	},
});

/************************************* End Setting Website ADMIN *********************************************************/

/************************************* Data Produk ADMIN *********************************************************/

$(".modalDetail").on("click", function () {
	const id = $(this).attr("data-id");
	$.ajax({
		type: "post",
		url: base_url + "admin/jsonData",
		data: "id=" + id,
		dataType: "json",
		success: function (data) {
			// console.log(data);
			$("#modalDetail").modal("show");
			$("#kode").html(data.kode_pd);
			$("#nama").html(data.nama_pd);
			if (data.jenis == 1) {
				$("#jenis").html("<div class='badge badge-warning'>Produk Paket</div>");
			} else {
				$("#jenis").html("<div class='badge badge-dark'>Produk Item</div>");
			}
			$("#harga").html("Rp. " + formatRupiah(data.harga));
			$("#stok").html(data.stok);
			$("#diskon").html(data.diskon + " %");
			$("#deskripsi").html(data.deskripsi);
		},
	});
	// var div = $(event.relatedTarget);
	// var modal = $(this);
	// modal.find("#nama").html(div.data("nama"));
	// modal.find("#kode").html(div.data("kode"));
	// modal.find("#harga").html(div.data("harga"));
	// modal.find("#diskon").html(div.data("diskon"));
	// modal.find("#deskripsi").html(div.data("deskripsi"));
	// modal.find("#jenis").html(div.data("jenis"));
	// modal.find("#stok").html(div.data("stok"));
});
/************************************* End Data Produk ADMIN *********************************************************/

/************************************* Data User ADMIN *********************************************************/

$(".userModalDetail").on("click", function () {
	const id = $(this).attr("data-id");
	// console.log(id);
	$.ajax({
		type: "post",
		url: base_url + "admin/user/jsonData",
		data: "id=" + id,
		dataType: "json",
		success: function (data) {
			console.log(data);
			$("#userModalDetail").modal("show");
			$(".title-name").html("Data " + data.nama);
			$("#name").html(data.nama);
			$("#email").html(data.email);
			$("#telp").html(data.no_telp);
			data.alamat != null
				? $("#alamat").html(data.alamat)
				: $("#alamat").html("-");
			data.date != null ? $("#date").html(data.date) : $("#date").html("-");
			data.is_member == 0
				? $("#status").html(
						"<div class='badge badge-danger'>Masih menunggu approve admin</div>"
				  )
				: $("#status").html(
						"<div class='badge badge-primary'>Sudah menjadi Member</div>"
				  );
			$("#foto").html(
				`<img alt="image" src="../assets/vasilissa/admin/user/` +
					data.foto +
					`" width="80" class="rounded-circle m-2">`
			);
		},
	});
});
/************************************* End Data User ADMIN *********************************************************/

/************************************* Data Produk Paket MEMBER ****************************************************/
$("#paket_tambah").change(function () {
	// console.log("berhasil");
	var id = $(this).val();
	$.ajax({
		url: base_url + "member/get_produk_paket",
		method: "POST",
		data: {
			id: id,
		},
		async: true,
		dataType: "json",
		success: function (data) {
			console.log(data);
			const diskon = data.diskon == 0 ? "" : "Diskon " + data.diskon + " %";
			const hrgdskn = (data.diskon * data.harga) / 100;
			const harga = data.harga - hrgdskn;
			$(".diskon-paket").html(diskon);
			$("#harga_paket").val(harga);
			$("#deskripsi_paket").html(data.deskripsi);
			data.diskon == 0
				? $("#total_harga_paket").val(data.harga)
				: $("#total_harga_paket").val(harga);
		},
	});
	return false;
});

$("#qty_paket").keyup(function () {
	// console.log("berhasil");
	var id = $("#paket_tambah").val();
	$.ajax({
		url: base_url + "member/get_produk_paket",
		method: "POST",
		data: {
			id: id,
		},
		async: true,
		dataType: "json",
		success: function (data) {
			console.log(data);
			const hrgdskn = (data.diskon * data.harga) / 100;
			const harga = data.harga - hrgdskn;
			const qty = $("#qty_paket").val() * harga;
			console.log(qty);
			data.diskon == 0
				? $("#total_harga_paket").val($("#qty_paket").val() * data.harga)
				: $("#total_harga_paket").val(qty);
		},
	});
	return false;
});

$(".paketModalDetail").on("click", function () {
	const id = $(this).attr("data-id");
	// console.log(id);
	$.ajax({
		type: "post",
		url: base_url + "member/json_paket",
		data: "id=" + id,
		dataType: "json",
		success: function (data) {
			console.log(data);
			$("#paketModalDetail").modal("show");
			$("#kode_produk").html(data.kode_produk);
			$("#nama_produk").html(data.nama_produk);
			$("#qty").html(data.qty);
			$("#harga").html("Rp. " + formatRupiah(data.harga));
			$("#tanggal_beli").html(formatTanggal(data.tanggal_beli));
			if (data.tanggal_konfirmasi == null) {
				$("#tanggal_konfirmasi").html(
					"<div class='badge badge-danger'>Pembelian anda masih dalam proses verifikasi</div>"
				);
			} else {
				$("#tanggal_konfirmasi").html(formatTanggal(data.tanggal_konfirmasi));
			}

			if (data.foto_tf == null) {
				$("#bukti").html(
					"<div class='badge badge-danger'>Silahkan upload bukti pembayaran terlebih dahulu</div>"
				);
			} else {
				$("#bukti").html(
					`<img alt="image" src="../assets/vasilissa/member/bukti-tf/` +
						data.foto_tf +
						`" width="200" height="200" class="m-2">`
				);
			}

			data.status == 0
				? $("#status").html(
						"<div class='badge badge-info'>Menunggu Konfirmasi Admin</div>"
				  )
				: data.status == 1
				? $("#status").html(
						"<div class='badge badge-warning'>Pembelian anda pending</div>"
				  )
				: $("#status").html(
						"<div class='badge badge-success'>Pembelian Produk telah diverifikasi</div>"
				  );
			$("#deskripsi").html(data.deskripsi_produk);
		},
	});
});

$("#buktiPembayaranPaket").on("show.bs.modal", function (event) {
	var div = $(event.relatedTarget);
	var modal = $(this);

	modal.find("#id").attr("value", div.data("id"));
	modal.find("#kode_produk").html(div.data("kode_produk"));
	modal.find("#nama_produk").html(div.data("nama_produk"));
	modal.find("#qty").html(div.data("qty"));
	modal.find("#harga").html(div.data("harga"));
});
/************************************* End Data Produk Paket MEMBER ************************************************/

/************************************* Data Produk Item MEMBER ****************************************************/
$("#item_tambah").change(function () {
	// console.log("berhasil");
	var id = $(this).val();
	$.ajax({
		url: base_url + "member/get_produk_item",
		method: "POST",
		data: {
			id: id,
		},
		async: true,
		dataType: "json",
		success: function (data) {
			console.log(data);
			const diskon = data.diskon == 0 ? "" : "Diskon " + data.diskon + " %";
			const hrgdskn = (data.diskon * data.harga) / 100;
			const harga = data.harga - hrgdskn;
			$(".diskon-item").html(diskon);
			$("#harga_item").val(harga);
			$("#deskripsi_item").html(data.deskripsi);
			data.diskon == 0
				? $("#total_harga_item").val(data.harga)
				: $("#total_harga_item").val(harga);
		},
	});
	return false;
});

$("#qty_item").keyup(function () {
	// console.log("berhasil");
	var id = $("#item_tambah").val();
	$.ajax({
		url: base_url + "member/get_produk_item",
		method: "POST",
		data: {
			id: id,
		},
		async: true,
		dataType: "json",
		success: function (data) {
			console.log(data);
			const hrgdskn = (data.diskon * data.harga) / 100;
			const harga = data.harga - hrgdskn;
			const qty = $("#qty_item").val() * harga;
			// console.log(qty);
			data.diskon == 0
				? $("#total_harga_item").val($("#qty_item").val() * data.harga)
				: $("#total_harga_item").val(qty);
		},
	});
	return false;
});

$(".itemModalDetail").on("click", function () {
	const id = $(this).attr("data-id");
	$.ajax({
		type: "post",
		url: base_url + "member/json_item",
		data: "id=" + id,
		dataType: "json",
		success: function (data) {
			// console.log(data);
			$("#itemModalDetail").modal("show");
			$("#kode_produk").html(data.kode_produk);
			$("#nama_produk").html(data.nama_produk);
			$("#qty").html(data.qty);
			$("#harga").html("Rp. " + formatRupiah(data.harga));
			$("#tanggal_beli").html(formatTanggal(data.tanggal_beli));
			if (data.tanggal_konfirmasi == null) {
				$("#tanggal_konfirmasi").html(
					"<div class='badge badge-danger'>Pembelian anda masih dalam proses verifikasi</div>"
				);
			} else {
				$("#tanggal_konfirmasi").html(formatTanggal(data.tanggal_konfirmasi));
			}

			if (data.foto_tf == null) {
				$("#bukti").html(
					"<div class='badge badge-danger'>Silahkan upload bukti pembayaran terlebih dahulu</div>"
				);
			} else {
				$("#bukti").html(
					`<img alt="image" src="../assets/vasilissa/member/bukti-tf/` +
						data.foto_tf +
						`" width="200" height="200" class="m-2">`
				);
			}

			data.status == 0
				? $("#status").html(
						"<div class='badge badge-info'>Menunggu Konfirmasi Admin</div>"
				  )
				: data.status == 1
				? $("#status").html(
						"<div class='badge badge-warning'>Pembelian anda pending</div>"
				  )
				: $("#status").html(
						"<div class='badge badge-success'>Pembelian Produk telah diverifikasi</div>"
				  );
			$("#deskripsi").html(data.deskripsi_produk);
		},
	});
});

$("#buktiPembayaranItem").on("show.bs.modal", function (event) {
	var div = $(event.relatedTarget);
	var modal = $(this);

	modal.find("#id").attr("value", div.data("id"));
	modal.find("#kode_produk").html(div.data("kode_produk"));
	modal.find("#nama_produk").html(div.data("nama_produk"));
	modal.find("#qty").html(div.data("qty"));
	modal.find("#harga").html(div.data("harga"));
});
/************************************* End Data Produk Item MEMBER ************************************************/

/************************************* Data Reward ****************************************************************/
$(".rewardModalDetail").on("click", function () {
	const id = $(this).attr("data-id");
	$.ajax({
		type: "post",
		url: base_url + "admin/json_reward",
		data: "id=" + id,
		dataType: "json",
		success: function (data) {
			console.log(data);
			$("#rewardModalDetail").modal("show");
			$("#level_reward").html(data.level);
			$("#reward_level").html(data.reward);
			$("#point_reward").html(data.point + " Point");
		},
	});
});
/************************************* END Data Reward ****************************************************************/

/************************************* Data Produk Master Admin ****************************************************************/
$(".modalFotoDetail").on("click", function () {
	const id = $(this).attr("data-id");
	$.ajax({
		type: "post",
		url: base_url + "master-admin/json_produk",
		data: "id=" + id,
		dataType: "json",
		success: function (data) {
			$("#modalFotoDetail").modal("show");
			$(".foto-produkk").empty();
			// let jenis = new Array();
			$.each(data, function (index, value) {
				// console.log(value);
				$(
					`<div class="col-md-6">
						<img width="200" height="200" class="img-fluid m-2" src="../assets/vasilissa/admin/produk/` +
						value.foto +
						`">
					</div>`
				).appendTo(".foto-produkk");
			});
		},
	});
});
/************************************* END Data Produk Master Admin ****************************************************************/
